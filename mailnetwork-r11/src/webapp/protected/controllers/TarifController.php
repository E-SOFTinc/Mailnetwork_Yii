<?php

class TarifController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='admin';

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
            array('allow',
                'actions'=>array(),
                'users'=>array('*'),
            ),
            array('allow',
                'actions'=>array(),
                'users'=>array('@'),
            ),
            array('allow',
                'actions'=>array('admin','delete','save','update','create','view','index'),
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
        $model=new Tarif;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Tarif']))
        {
            $model->attributes=$_POST['Tarif'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->tarifkey));
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

        if(isset($_POST['Tarif']))
        {
            $model->attributes=$_POST['Tarif'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->tarifkey));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    // TODO: Validate the crap out of these inputs!
    public function actionSave()
    {
        $model=$this->loadModel(1);

        // Handle tax update
        if (isset($_POST['tax-submit']))
        {
            if ($_POST['tarif-tax'] == "taxtps")
                $model->taxtps = $_POST['tarif-value'];
            elseif ($_POST['tarif-tax'] == "taxtvq")
                $model->taxtvq = $_POST['tarif-value'];
            elseif ($_POST['tarif-tax'] == "taxtvh")
                $model->taxtvh = $_POST['tarif-value'];

            $model->update();
        }

        // Handle city category fees update
        if (isset($_POST['city-fees']))
        {
            $field = $_POST['category'].$_POST['period'];
            $model->{$field} = $_POST['value'];

            $model->update();
        }

        // Handle regular program update
        if (isset($_POST['reg-program']))
        {
            $model->{$_POST['type']} = $_POST['value'];

            $model->update();
        }


        $this->redirect(array('tarif/admin'));
//		Yii::app()->request->redirect('/mailnetwork-yii/tarif/admin');
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        if(Yii::app()->request->isPostRequest)
        {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if(!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Tarif');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model=$this->loadModel(1);

        $this->render('create',array(
            'tarif_model'=>$model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model=Tarif::model()->findByPk((int)$id);
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
        if(isset($_POST['ajax']) && $_POST['ajax']==='tarif-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
