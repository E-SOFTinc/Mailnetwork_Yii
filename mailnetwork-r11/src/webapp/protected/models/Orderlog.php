<?php

/**
 * This is the model class for table "orderlog".
 *
 * The followings are the available columns in table 'orderlog':
 * @property string $logkey
 * @property integer $comkey
 * @property integer $bilkey
 * @property string $logperiod
 * @property string $logdebut
 * @property string $logfin
 */
class Orderlog extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return Orderlog the static model class
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
        return 'orderlog';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('comkey, bilkey', 'numerical', 'integerOnly'=>true),
            array('logperiod', 'length', 'max'=>50),
            array('logdebut, logfin', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('logkey, comkey, bilkey, logperiod, logdebut, logfin', 'safe', 'on'=>'search'),
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
            'logkey' => 'Logkey',
            'comkey' => 'Comkey',
            'bilkey' => 'Bilkey',
            'logperiod' => 'Logperiod',
            'logdebut' => 'Logdebut',
            'logfin' => 'Logfin',
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

        $criteria->compare('logkey',$this->logkey,true);
        $criteria->compare('comkey',$this->comkey);
        $criteria->compare('bilkey',$this->bilkey);
        $criteria->compare('logperiod',$this->logperiod,true);
        $criteria->compare('logdebut',$this->logdebut,true);
        $criteria->compare('logfin',$this->logfin,true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
        ));
    }
}
