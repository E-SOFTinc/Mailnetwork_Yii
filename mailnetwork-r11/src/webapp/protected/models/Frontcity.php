<?php

/**
 * This is the model class for table "frontcity".
 *
 * The followings are the available columns in table 'frontcity':
 * @property string $goodcitykey
 * @property string $goodorder
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
class Frontcity extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return Frontcity the static model class
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
        return 'frontcity';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('goodcitykey, goodorder', 'required'),
            array('goodcitykey, goodorder', 'length', 'max'=>11),
            array('goodaddress, goodcity, goodstate, goodcountry, goodzip, goodcategory, goodname, goodphone, goodfax, goodemail, goodsix, gooddouze', 'length', 'max'=>50),
            array('goodcenter', 'length', 'max'=>63),
            array('goodcitypic', 'length', 'max'=>255),
            array('goodnote', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('goodcitykey, goodorder, goodaddress, goodcenter, goodcity, goodstate, goodcountry, goodzip, goodcategory, goodname, goodphone, goodfax, goodemail, goodcitypic, goodsix, gooddouze, goodnote', 'safe', 'on'=>'search'),
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
            'goodcitykey' => 'Goodcitykey',
            'goodorder' => 'Goodorder',
            'goodaddress' => 'Goodaddress',
            'goodcenter' => 'Goodcenter',
            'goodcity' => 'Goodcity',
            'goodstate' => 'Goodstate',
            'goodcountry' => 'Goodcountry',
            'goodzip' => 'Goodzip',
            'goodcategory' => 'Goodcategory',
            'goodname' => 'Goodname',
            'goodphone' => 'Goodphone',
            'goodfax' => 'Goodfax',
            'goodemail' => 'Goodemail',
            'goodcitypic' => 'Goodcitypic',
            'goodsix' => 'Goodsix',
            'gooddouze' => 'Gooddouze',
            'goodnote' => 'Goodnote',
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

        $criteria->compare('goodcitykey',$this->goodcitykey,true);
        $criteria->compare('goodorder',$this->goodorder,true);
        $criteria->compare('goodaddress',$this->goodaddress,true);
        $criteria->compare('goodcenter',$this->goodcenter,true);
        $criteria->compare('goodcity',$this->goodcity,true);
        $criteria->compare('goodstate',$this->goodstate,true);
        $criteria->compare('goodcountry',$this->goodcountry,true);
        $criteria->compare('goodzip',$this->goodzip,true);
        $criteria->compare('goodcategory',$this->goodcategory,true);
        $criteria->compare('goodname',$this->goodname,true);
        $criteria->compare('goodphone',$this->goodphone,true);
        $criteria->compare('goodfax',$this->goodfax,true);
        $criteria->compare('goodemail',$this->goodemail,true);
        $criteria->compare('goodcitypic',$this->goodcitypic,true);
        $criteria->compare('goodsix',$this->goodsix,true);
        $criteria->compare('gooddouze',$this->gooddouze,true);
        $criteria->compare('goodnote',$this->goodnote,true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
        ));
    }
}
