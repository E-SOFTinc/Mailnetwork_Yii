<?php

class SiteController extends Controller
{
    public $layout='main';

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
                'actions'=>array('index','view','logout','page'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update'),
                'users'=>array('admin','ccplus1'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin', 'delete', 'editService', 'sendStatement', 'password', 'fronteditor', 'emailwriter'),
                'users'=>array('admin','ccplus1'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page'=>array(
                'class'=>'ViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // DON'T TOUCH THIS
//		$this->layout='frontpage';
        $this->layout='blank';

        function getLoginModel()
        {
            $model=new LoginForm;

            // redirect logged in users to user page
            Yii::app()->user->setReturnUrl(array('user/info'));

            // collect user input data
            if(isset($_POST['LoginForm']))
            {
                $model->attributes=$_POST['LoginForm'];
                // validate user input and redirect to the previous page if valid
                if($model->validate() && $model->login())
                {
                    if (Yii::app()->user->name == 'ccplus1') {
                        Yii::app()->request->redirect('site/admin');
                    }
                    else
                        Yii::app()->request->redirect('user/info');
                }
            }

            return $model;
        }

        function getCitiesDataProvider()
        {
            $model_name = "";
            $criteria=new CDbCriteria;

            // By default, show the city list from the reference pdf...
            //  ... doing this manually is the only way unless we add a field to the city table :/
            if (!isset($_POST['location_search']))
            {
                $model_name = "Frontcity";
                $criteria->order = 'goodorder ASC';
            }
            else
            {
                $model_name = "Goodcity";
                $criteria->distinct  = true;
                $criteria->group     = 'goodcity';		// Need this to prevent dups
                $criteria->order     = 'goodcity ASC';
                $location_search     = '%'.$_POST['location_search'].'%';
                $criteria->params    = array(':location' => $location_search);
                $criteria->condition = "goodcity LIKE :location OR goodstate LIKE :location OR goodcountry LIKE :location AND goodcategory != 'X'";
            }

            $dp = new CActiveDataProvider($model_name, array(
                'criteria'=>$criteria,
                // Set the pagination size
                'pagination'=>array('pageSize'=>'1000'),
            ));

            return $dp;
        }

        // Grab the front-page content
        $meta = Meta::model()->findByAttributes(array('field'=>'frontpage'));

        // The magic starts here!
        $model = getLoginModel();
        $dp = getCitiesDataProvider();

        $this->render('index',array('model'=>$model, 'dataProvider'=>$dp, 'frontpage'=>$meta->value));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    /**
     * Display the administrative pages
     */
    public function actionAdmin()
    {
        $this->layout = 'admin';
        $this->render('adminmenu', array());
    }

    public function actionPassword()
    {
        $this->layout = 'admin';

        if (isset($_POST['submit']))
        {
            $user = Meta::model()->findByAttributes(array('field'=>'adminpass'));
            $currPass       = $_POST['currPass'];
            $primPass       = $_POST['priPass'];
            $primPassRepeat = $_POST['priPassRepeat'];

            // Check if current password is correct
            if ($user->value == $currPass)
            {
                // Make sure new password + repeat match
                if ($primPass == $primPassRepeat)
                {
                    $user->value = $primPass;
                    $user->update();
                    $message = "Password Updated";
                }
            }
            else {
                $message = "Incorrect password, or mistyped password";
            }
        }

        $message = "";
        $this->render('changepassword', array('message'=>$message));
    }

    public function actionFronteditor()
    {
        $this->layout = 'admin';

        $model = Meta::model()->findByAttributes(array('field'=>'frontpage'));

        if (isset($_POST['submit']))
        {
            $model->value = $_POST['value'];
            $model->update();
        }

        $this->render('fronteditor', array('value'=>$model->value));
    }

    public function actionEmailwriter()
    {
        $this->layout = 'admin';

        if (isset($_POST['submit']))
        {
            $value = $_POST['value'];

            // TODO: Send emails
        }

        $this->render('emailwriter', array());
    }
}
