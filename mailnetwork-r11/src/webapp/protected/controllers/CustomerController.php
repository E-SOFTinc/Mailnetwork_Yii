<?php

class CustomerController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='admin2';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(

        array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','view'),
                  'users'=>array('*'),
        ),
        array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update'),
                  'users'=>array('admin','ccplus1'),
        ),
        array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin', 'delete', 'editService', 'sendStatement'),
                  'users'=>array('admin','ccplus1'),
        ),
        array('deny',  // deny all users
                  'users'=>array('*'),
        ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model=new Customer;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Customer']))
        {
            $model->attributes=$_POST['Customer'];
            if($model->save())
            $this->redirect(array('view','id'=>$model->bilkey));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Customer']))
        {
            $model->attributes=$_POST['Customer'];
            $model->save();
            $this->redirect("#info");
            //				$this->redirect(array('view','id'=>$model->bilkey));
        }

        if(isset($_GET['Shipment'])) {
            $shipment_model->attributes=$_GET['Shipment'];
        }

        $service_details  = Customer::model()->getCustomerServiceDetails($id);
        $shipment_details = Customer::model()->getShipmentsByCustomerBilkey($id);

        $customer=Customer::model()->findByPk($id);
        $commande=Commande::model()->findAllByAttributes(array('bilkey'=>$id));

        $shipment_model=new Shipment('search');
        $shipment_model->unsetAttributes();  // clear any default values
        $shipment_model->bilkey = $id;

        // DEBUGGING
        //		print "New total: " + $total_balance . '<br />';
        //		print "Old total: " + $customer->bilbalance;
        //		die;

        // TODO: We really should link the billing activity with the comkey...
        if(isset($_POST['Shipment'])) {
            // Check if it's an update
            if (isset($_POST['update']))
            {
                $shipment = Shipment::model()->findByPk($_POST['update']);
                $shipment->attributes = $_POST['Shipment'];

                // We have to cast these manually.  For some reason this fails on the production server...
                $shipment->shipdebit  = floatval($shipment->shipdebit);
                $shipment->shipcredit = floatval($shipment->shipcredit);

                // If the user leaves these fields blank, let's assume
                //  they meant to input a 0.
                if (empty($shipment->shipdebit) || ($shipment->shipdebit == null))
                    $shipment->shipdebit = 0;
                if (empty($shipment->shipcredit) || ($shipment->shipcredit == null))
                    $shipment->shipcredit = 0;

                // TODO: We should prolly check this
                $shipment->save();
            }
            else
            {
                $shipment = new Shipment();
                $shipment->attributes = $_POST['Shipment'];

                // We have to cast these manually.  For some reason this fails on the production server...
                $shipment->shipdebit  = floatval($shipment->shipdebit);
                $shipment->shipcredit = floatval($shipment->shipcredit);

                // If the user leaves these fields blank, let's assume
                //  they meant to input a 0.
                if (empty($shipment->shipdebit) || ($shipment->shipdebit == null))
                    $shipment->shipdebit = 0;
                if (empty($shipment->shipcredit) || ($shipment->shipcredit == null))
                    $shipment->shipcredit = 0;

                if ($shipment->validate()) {
                    $shipment->comkey = $commande[0]->comkey;
                    $shipment->bilkey = $customer->bilkey;
                    $shipment->save();
                }
            }
//            $this->redirect("customer/update/id/" + $customer->bilkey);
            $this->redirect("#billing");
        }

        $conn = Yii::app()->db;

//        $total_balance = 0;
        // Update individual account balances
        foreach($commande as $c) {

            $command = $conn->createCommand("SELECT SUM(shipcredit) - SUM(shipdebit) as balance FROM shipment WHERE comkey='".$c->comkey."'  GROUP BY comkey");
            $results = $command->queryRow();
            $balance = $results['balance'];

//            $total_balance += $balance;
            $c->dest_bilbalance = $balance;
            $c->save();
        }

        // Fix for Support Request #430
        $command = $conn->createCommand("SELECT SUM(shipcredit) - SUM(shipdebit) as balance FROM shipment WHERE bilkey='".$customer->bilkey."'");
        $results = $command->queryRow();
        $total_balance = $results['balance'];


        // Update overall account balance
        $customer->bilbalance = $total_balance;
        $customer->save();


        $this->render('//shared/user-info', array( 'admin'=>1,
                      'commande'=>$commande,
                      'customer'=>$customer,
                      'customer_model'=>$customer,
                      'service_details'=>$service_details,
                      'shipment_details'=>$shipment_details,
                      'shipment_model'=>$shipment_model,
        ));
    }

    public function actionEditService($id)
    {
        $commande = Commande::model()->findByPk($id);
        $user_id  = $commande->bilkey;
        $customer = Customer::model()->findByPk($user_id);

        if(isset($_POST['Commande']))
        {
            // Populate our new models from the input arrays
            $commande->attributes=$_POST['Commande'];

            // TODO: Older accounts don't have all the fields, so we have
            //       to validate them differently.
            if($commande->validate())
            {
                $commande->save();
            }
        }

        $this->render('//shared/modify-service',
        array('customer_model'=>$customer,
                    'commande_model'=>$commande,
                  'admin'=>1));
    }


    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        //		if(Yii::app()->request->isPostRequest)
        //		{
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if(!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            //		}
            //		else
            //			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
        }

        /**
         * Lists all models.
         */
        public function actionIndex()
        {
            $dataProvider=new CActiveDataProvider('Customer');
            $this->render('index',array(
            'dataProvider'=>$dataProvider,
            ));
        }

        /**
         * Manages all models.
         */
        public function actionAdmin()
        {
            $model=new Customer('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Customer'])) {
                if(isset($_GET['Customer']['metasearch'])) {
                    $model->metasearch = $_GET['Customer']['metasearch'];
                }
                $model->attributes = $_GET['Customer'];
            }

            $this->render('admin',array(
                'model'=>$model,
            ));
        }

        /**
         *
         */
        public function actionSendStatement($id)
        {
            // Look up customer information
            $customer=Customer::model()->findByPk($id);
            $commande=Commande::model()->findAllByAttributes(array('bilkey'=>$id));

            $service_details  = Customer::model()->getCustomerServiceDetails($id);
            $shipment_details = Customer::model()->getShipmentsByCustomerBilkeyClient($id);

            // TODO: Make sure these are correct
            $message = new YiiMailMessage;
            $message->view = 'template';

            //userModel is passed to the view
            $message->setBody(array('include'=>'statement.php',
                                'customer'=>$customer,
                                'commande'=>$commande,
                                'service_details'=>$service_details,
                                'shipment_details'=>$shipment_details), 'text/html');

            $message->addTo($customer->bilemail);
            $message->addFrom(Yii::app()->params['adminEmail']);
            $message->setSubject("Statement of Account");
            Yii::app()->mail->send($message);

            $this->redirect(array('update','id'=>$id));
        }

        /**
         * Returns the data model based on the primary key given in the GET variable.
         * If the data model is not found, an HTTP exception will be raised.
         * @param integer the ID of the model to be loaded
         */
        public function loadModel($id)
        {
            $model=Customer::model()->findByPk((int)$id);
            if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
            return $model;
        }

        /**
         * Performs the AJAX validation.
         * @param CModel the model to be validated
         */
        protected function performAjaxValidation($model)
        {
            if(isset($_POST['ajax']) && $_POST['ajax']==='customer-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
        }

}
