<?php

/**
 * This is the model class for table "shipment".
 *
 * The followings are the available columns in table 'shipment':
 * @property integer $shipkey
 * @property integer $comkey
 * @property integer $bilkey
 * @property string $shipdate
 * @property string $shipdetail
 * @property double $shipdebit
 * @property double $shipcredit
 */
class Shipment extends CActiveRecord
{
    const TYPE_ACTIVITY_1="Shipment by Air-Mail";
    const TYPE_ACTIVITY_2="Shipment by FedEx";
    const TYPE_ACTIVITY_3="Forwarding fee";
    const TYPE_ACTIVITY_4="Packaging & labor fee";
    const TYPE_ACTIVITY_5="Center deposit";
    const TYPE_ACTIVITY_6="Customer deposit";
    const TYPE_ACTIVITY_7="Shipment by UPS";
    const TYPE_ACTIVITY_8="Shipment by DHL";
    const TYPE_ACTIVITY_9="Startup or renewal";
    const TYPE_ACTIVITY_10="Change of forwarding address";

    /**
     * Returns the static model of the specified AR class.
     * @return Shipment the static model class
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
        return 'shipment';
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
            array('shipdebit, shipcredit', 'numerical', 'allowEmpty'=>true),
            array('shipdetail', 'length', 'max'=>100),
            array('shipdate', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('shipkey, comkey, bilkey, shipdate, shipdetail, shipdebit, shipcredit', 'safe', 'on'=>'search'),
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
            'shipkey' => 'Shipkey',
            'comkey' => 'Comkey',
            'bilkey' => 'Bilkey',
            'shipdate' => 'Date',
            'shipdetail' => 'Description',
            'shipdebit' => 'Debit',
            'shipcredit' => 'Credit',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search($bilkey)
    {
        $criteria=new CDbCriteria;

        $criteria->compare('bilkey',$bilkey);
        $criteria->compare('shipdate',$this->shipdate,true);
        $criteria->compare('shipdetail',$this->shipdetail,true);
        $criteria->compare('shipdebit',$this->shipdebit);
        $criteria->compare('shipcredit',$this->shipcredit);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
            'pagination'=>array('pageSize'=>'20'),
            'sort'=>array(
                'defaultOrder'=>'shipdate DESC, shipdetail DESC',
            )
        ));
    }

    public function searchClient($bilkey)
    {
        $criteria=new CDbCriteria;

        $criteria->compare('bilkey',$bilkey);
        $criteria->compare('shipdate',$this->shipdate,true);
        $criteria->compare('shipdetail',$this->shipdetail,true);
        $criteria->compare('shipdebit',$this->shipdebit);
        $criteria->compare('shipcredit',$this->shipcredit);
        $criteria->addCondition('shipdetail not like "%center deposit%"');

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
            'pagination'=>array('pageSize'=>'20'),
            'sort'=>array(
                'defaultOrder'=>'shipdate DESC, shipdetail DESC',
            )
        ));
    }

    public static function getDescriptionOptions()
    {
        return array(
            ''=>"Please select...",
            self::TYPE_ACTIVITY_1=>"Shipment by Air-Mail",
            self::TYPE_ACTIVITY_2=>"Shipment by FedEx",
            self::TYPE_ACTIVITY_7=>"Shipment by UPS",
            self::TYPE_ACTIVITY_8=>"Shipment by DHL",
            self::TYPE_ACTIVITY_9=>"Startup or renewal",
            self::TYPE_ACTIVITY_3=>"Forwarding fee",
            self::TYPE_ACTIVITY_4=>"Packaging & labor fee",
            self::TYPE_ACTIVITY_5=>"Center deposit",
            self::TYPE_ACTIVITY_6=>"Customer deposit",
            self::TYPE_ACTIVITY_10=>"Change of forwarding address",
        );
    }
}
