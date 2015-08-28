<?php

/**
 * This is the model class for table "goodcity".
 *
 * The followings are the available columns in table 'goodcity':
 * @property string $goodcitykey
 * @property string $goodaddress
 * @property string $goodcenter
 * @property string $goodcity
 * @property string $goodstate
 * @property string $goodcountry
 * @property string $goodzip
 * @property string $goodcategory
 * @property string $goodname
 * @property string $goodphone
 * @property string $goodfax
 * @property string $goodemail
 * @property string $goodcitypic
 * @property string $goodsix
 * @property string $gooddouze
 * @property string $goodnote
 */
class Goodcity extends CActiveRecord
{
    public $metasearch;

    /**
     * Returns the static model of the specified AR class.
     * @return Goodcity the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'goodcity';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('goodaddress, goodcity, goodstate, goodcountry, goodzip, goodcategory, goodname, goodphone, goodfax, goodemail, goodsix, gooddouze', 'required', 'on'=>'admin_create'),
            array('goodaddress, goodcity, goodstate, goodcountry, goodzip, goodcategory, goodname, goodphone, goodfax, goodemail, goodsix, gooddouze', 'length', 'max'=>50),
            array('goodcenter', 'length', 'max'=>63),
            array('goodcitypic', 'length', 'max'=>255),
            array('goodnote', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('goodcitykey, goodaddress, goodcenter, goodcity, goodstate, goodcountry, goodzip, goodcategory, goodname, goodphone, goodfax, goodemail, goodcitypic, goodsix, gooddouze, goodnote', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'goodcitykey' => 'City Id.',
            'goodaddress' => 'Address',
            'goodcenter' => 'Center',
            'goodcity' => 'City',
            'goodstate' => 'State',
            'goodcountry' => 'Country',
            'goodzip' => 'Zip',
            'goodcategory' => 'Category',
            'goodname' => 'Contact',
            'goodphone' => 'Phone',
            'goodfax' => 'Fax',
            'goodemail' => 'Email',
            'goodcitypic' => 'City Picture',
            'goodsix' => 'Goodsix',
            'gooddouze' => 'Gooddouze',
            'goodnote' => 'Note',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria=new CDbCriteria;

        if(trim($this->metasearch) != "") {
            $criteria->compare('goodcitykey',$this->metasearch,true,'OR');
            $criteria->compare('goodcountry',$this->metasearch,true,'OR');
            $criteria->compare('goodstate',$this->metasearch,true,'OR');
            $criteria->compare('goodcity',$this->metasearch,true,'OR');
            $criteria->compare('goodname',$this->metasearch,true,'OR');
            $criteria->compare('goodphone',$this->metasearch,true,'OR');
            $criteria->compare('goodfax',$this->metasearch,true,'OR');
            $criteria->compare('goodcategory',$this->metasearch,true,'OR');
        }
        else {
            $criteria->compare('goodcitykey',$this->goodcitykey,true);
            $criteria->compare('goodcountry',$this->goodcountry,true);
            $criteria->compare('goodstate',$this->goodstate,true);
            $criteria->compare('goodcity',$this->goodcity,true);
            $criteria->compare('goodname',$this->goodname,true);
            $criteria->compare('goodphone',$this->goodphone,true);
            $criteria->compare('goodfax',$this->goodfax,true);
            $criteria->compare('goodcategory',$this->goodcategory,true);
        }

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
            // Set the pagination size
            'pagination'=>array('pageSize'=>'100'),
            'sort'=>array(
                'defaultOrder'=>'goodcountry ASC',
            )
        ));
    }
}
