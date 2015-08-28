<?php

class CityController extends Controller
{
    public $layout='blank';

    public function actionIndex($hi)
    {
        $this->render('index');
    }

    public function actionLoad($name)
    {

        // TODO: Look-up city name in database
        //   If city name exists:
        //     Get goodcitypic and state/country
        //     Format location string and display page

        //   If not: 404

        // We convert spaces to underscores in the links...
        //  convert them back.
        $name = str_replace("_", " ", $name);

        // Laval needs to be hardcoded (sigh)
        if ($name == "montreal") $name = "laval";

        // Check if the user has picked a city
        if(isset($_POST['one_time']))
        {
            Yii::app()->user->setState('onetime', true);
            $goodcitykey = $_POST['city_selection'];
            $this->redirect(array("user/signup/city/$goodcitykey"));
        }

        if(isset($_POST['city_selection']))
        {            
            // Handle the case if the user backs out of a
            //  one-time sign-up...
            Yii::app()->user->clearStates();
            $goodcitykey = $_POST['city_selection'];            
            $this->redirect(array("user/signup/city/$goodcitykey"));
        }

        // TODO: Make this distinct!
        $criteria = new CDbCriteria;
//		$criteria->distinct  = true;
//		$criteria->group     = 'goodcity';	     // Need this to prevent dups
        $criteria->order     = 'goodcity ASC';
        $criteria->params    = array(':location' => '%'.$name.'%');
        $criteria->condition = "goodcity LIKE :location AND goodcategory != 'X'";

        $model = Goodcity::model()->findAll($criteria);
        
        if(empty($model)){
            $this->redirect(array('site/index', 'city' => $name));
        }else{
        
        $this->render('city', array('location'=>$name, 'model'=>$model));
        }
    }
}
