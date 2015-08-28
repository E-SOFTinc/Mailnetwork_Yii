<?php

/**
 * This is the model class for table "commande".
 *
 * The followings are the available columns in table 'commande':
 * @property string $comkey
 * @property string $bilkey
 * @property string $comstatus
 * @property string $comgoodcitykey
 * @property string $comfrequency
 * @property double $comsetup
 * @property double $comdeposit
 * @property string $comperiod
 * @property string $comdebut
 * @property string $comfin
 * @property string $comgroup
 * @property string $commfgp
 * @property string $comnodesuite
 * @property string $tdest_first
 * @property string $tdest_last
 * @property string $tdest_company
 * @property string $tdest_address1
 * @property string $tdest_address2
 * @property string $tdest_city
 * @property string $tdest_state
 * @property string $tdest_zip
 * @property string $tdest_country
 * @property string $comnote
 * @property string $tdest_mailco
 * @property string $tdest_mailname1
 * @property string $tdest_idtype11
 * @property string $tdest_idnumber11
 * @property string $tdest_idpicture11
 * @property string $tdest_idtype12
 * @property string $tdest_idnumber12
 * @property string $tdest_idpicture12
 * @property string $tdest_idpsform1
 * @property string $tdest_mailname2
 * @property string $tdest_idtype21
 * @property string $tdest_idnumber21
 * @property string $tdest_idpicture21
 * @property string $tdest_idtype22
 * @property string $tdest_idnumber22
 * @property string $tdest_idpicture22
 * @property string $tdest_idpsform2
 * @property string $tdest_mailname3
 * @property string $tdest_idtype31
 * @property string $tdest_idnumber31
 * @property string $tdest_idpicture31
 * @property string $tdest_idtype32
 * @property string $tdest_idnumber32
 * @property string $tdest_idpicture32
 * @property string $tdest_idpsform3
 *
 * The followings are the available model relations:
 * @property Customer $bilkey0
 */
class Commande extends CActiveRecord
{
    public $box2;

    // Temporary attributes for validating form uploads
    public $tdest_idpicture11;
    public $tdest_idpicture12;
    public $tdest_idpsform1;
    public $tdest_idpicture21;
    public $tdest_idpicture22;
    public $tdest_idpsform2;
    public $tdest_idpicture31;
    public $tdest_idpicture32;
    public $tdest_idpsform3;

    // ID Proof Types
    const TYPE_ID_00 = "National Passport or US Passport";
    const TYPE_ID_01 = "Driver's License";
    const TYPE_ID_02 = "Aircraft Pilot's License";
    const TYPE_ID_03 = "Alien Registration card";
    const TYPE_ID_04 = "Business or industrial I.D. Card";
    const TYPE_ID_05 = "Certificate of Naturalization";
    const TYPE_ID_06 = "Corporate ID";
    const TYPE_ID_07 = "Dept of Social & Health Service";
    const TYPE_ID_08 = "Government employee ID Card";
    const TYPE_ID_09 = "Home or Vehicule Insurance Policy";
    const TYPE_ID_10 = "Military / Armed Forces ID Card";
    const TYPE_ID_11 = "State issued ID Card";
    const TYPE_ID_12 = "University ID Card";
    const TYPE_ID_13 = "Vehicle Registration Card";
    const TYPE_ID_14 = "Voter Registration Card";

    // Rental Periods
    const TYPE_RENTALPERIOD_1  = '1';
    const TYPE_RENTALPERIOD_6  = '6';
    const TYPE_RENTALPERIOD_12 = '12';

    // TODO: Can I remove this?
    // Mail Deposit Prices
    const TYPE_DEPOSIT_500 = "500";
    const TYPE_DEPOSIT_300 = "300";
    const TYPE_DEPOSIT_250 = "250";
    const TYPE_DEPOSIT_200 = "200";
    const TYPE_DEPOSIT_150 = "150";
    const TYPE_DEPOSIT_125 = "125";
    const TYPE_DEPOSIT_100 = "100";

    // Mail Forwarding Frequency
    const TYPE_FREQUENCY_TYPE_1 = "Express service on reception";
    const TYPE_FREQUENCY_TYPE_2 = "Express service weekly";
    const TYPE_FREQUENCY_TYPE_3 = "Express service bi-monthly";
    const TYPE_FREQUENCY_TYPE_4 = "Express service monthly";
    const TYPE_FREQUENCY_TYPE_5 = "Air-mail weekly service";
    const TYPE_FREQUENCY_TYPE_6 = "Air-mail service twice a month";
    const TYPE_FREQUENCY_TYPE_7 = "Air-mail service monthly";
    const TYPE_FREQUENCY_TYPE_8 = "One-time use";

    const TYPE_NEW='New';
    const TYPE_ACTIVE='Active';
    const TYPE_ARCHIVE='Archives';


    // TODO: Why are there two status fields: comstatus and bilstatus?
    // TODO: Don't forget dest_mailco.  Previously onlyh one name / business was
    //       assignable to the account.  The company name was dest_mailco.  See orderone.cgi

    /**
     * Returns the static model of the specified AR class.
     * @return Commande the static model class
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
        return 'commande';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            // TODO: We want dest_idpicture11 validated
//			array('bilkey, dest_mailname1, dest_idnumber11, dest_idpicture11, dest_first, dest_last, dest_address1, dest_city, dest_state, dest_country', 'required'),
            array('bilkey, dest_mailname1, dest_idnumber11, dest_first, dest_last, dest_address1, dest_city, dest_state, dest_country, dest_zip', 'required', 'on'=>'user_create'),
            array('dest_first, dest_last, dest_address1, dest_city, dest_state, dest_country, comfrequency','required', 'on'=>'user_edit'),
            array('comsetup, comdeposit', 'numerical'),
            array('bilkey', 'length', 'max'=>11),
            array('comstatus, comgoodcitykey, comperiod, dest_first, dest_last, dest_idtype11, dest_idnumber11, dest_idtype12, dest_idnumber12, dest_idtype21, dest_idnumber21, dest_idtype22, dest_idnumber22, dest_idtype31, dest_idnumber31, dest_idtype32, dest_idnumber32', 'length', 'max'=>50),
            array('comfrequency, dest_company, dest_address1, dest_address2, dest_city, dest_state, dest_zip, dest_country, dest_mailco, dest_mailname1, dest_mailname2, dest_mailname3', 'length', 'max'=>100),
            array('comgroup', 'length', 'max'=>10),
            array('commfgp, comnodesuite', 'length', 'max'=>20),
            array('dest_idpicture11, dest_idpicture12, dest_idpsform1, dest_idpicture21, dest_idpicture22, dest_idpsform2, dest_idpicture31, dest_idpicture32, dest_idpsform3', 'length', 'max'=>255),
            array('tdest_idpicture11, tdest_idpicture12, tdest_idpsform1, tdest_idpicture21, tdest_idpicture22, tdest_idpsform2, tdest_idpicture31, tdest_idpicture32, tdest_idpsform3', 'file', 'maxSize'=>5000000, 'allowEmpty'=>true),
            array('comdebut, comfin, comnote', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('comkey, bilkey, comstatus, comgoodcitykey, comfrequency, comsetup, comdeposit, comperiod, comdebut, comfin, comgroup, commfgp, comnodesuite, dest_first, dest_last, dest_company, dest_address1, dest_address2, dest_city, dest_state, dest_zip, dest_country, comnote, dest_mailco, dest_mailname1, dest_idtype11, dest_idnumber11, dest_idpicture11, dest_idtype12, dest_idnumber12, dest_idpicture12, dest_idpsform1, dest_mailname2, dest_idtype21, dest_idnumber21, dest_idpicture21, dest_idtype22, dest_idnumber22, dest_idpicture22, dest_idpsform2, dest_mailname3, dest_idtype31, dest_idnumber31, dest_idpicture31, dest_idtype32, dest_idnumber32, dest_idpicture32, dest_idpsform3, box2', 'safe', 'on'=>'search'),
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
            'customer' => array(self::BELONGS_TO, 'Customer', 'bilkey'),
            'box' => array(self::BELONGS_TO, 'Goodcity', 'comgoodcitykey'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'comkey' => 'Comkey',
            'bilkey' => 'Bilkey',
            'comstatus' => 'Comstatus',
            'comgoodcitykey' => 'Comgoodcitykey',
            'comfrequency' => 'Comfrequency',
            'comsetup' => 'Comsetup',
            'comdeposit' => 'ComFREQUENCY',
            'comperiod' => 'Comperiod',
            'comdebut' => 'Comdebut',
            'comfin' => 'Comfin',
            'comgroup' => 'Comgroup',
            'commfgp' => 'Commfgp',
            'comnodesuite' => 'Comnodesuite',
            'dest_first' => 'Dest First',
            'dest_last' => 'Dest Last',
            'dest_company' => 'Dest Company',
            'dest_address1' => 'Dest Address1',
            'dest_address2' => 'Dest Address2',
            'dest_city' => 'Dest City',
            'dest_state' => 'Dest State',
            'dest_zip' => 'Dest Zip',
            'dest_country' => 'Dest Country',
            'comnote' => 'Comnote',
            'dest_mailco' => 'Dest Mailco',
            'dest_mailname1' => 'First Mailing Name',
            'dest_idtype11' => 'First ID *',
            'dest_idnumber11' => 'No',
            'dest_idpicture11' => 'Dest Idpicture11',
            'dest_idtype12' => 'Second ID',
            'dest_idnumber12' => 'No',
            'dest_idpicture12' => 'Dest Idpicture12',
            'dest_idpsform1' => 'Dest Idpsform1',
            'dest_mailname2' => '2',
            'dest_idtype21' => 'First ID *',
            'dest_idnumber21' => 'No',
            'dest_idpicture21' => 'Dest Idpicture21',
            'dest_idtype22' => 'Second ID',
            'dest_idnumber22' => 'No',
            'dest_idpicture22' => 'Dest Idpicture22',
            'dest_idpsform2' => 'Dest Idpsform2',
            'dest_mailname3' => '3',
            'dest_idtype31' => 'First ID *',
            'dest_idnumber31' => 'No',
            'dest_idpicture31' => 'Dest Idpicture31',
            'dest_idtype32' => 'Second ID',
            'dest_idnumber32' => 'No',
            'dest_idpicture32' => 'Dest Idpicture32',
            'dest_idpsform3' => 'Dest Idpsform3',
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

        $criteria->compare('comfin',$this->comfin,true);
//		$criteria->compare('box.goodcity',$this->box,true);
        $criteria->with[]='box';
        $criteria->addSearchCondition("goodcity",$this->box2);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
            // Set the pagination size
            'pagination'=>array('pageSize'=>'100'),
            'sort'=>array(
                'defaultOrder'=>'comfin DESC',
            )
        ));


//		$criteria->compare('comkey',$this->comkey,true);
//		$criteria->compare('bilkey',$this->bilkey,true);
//		$criteria->compare('comstatus',$this->comstatus,true);
//		$criteria->compare('comgoodcitykey',$this->comgoodcitykey,true);
//		$criteria->compare('comfrequency',$this->comfrequency,true);
//		$criteria->compare('comsetup',$this->comsetup);
//		$criteria->compare('comdeposit',$this->comdeposit);
//		$criteria->compare('comperiod',$this->comperiod,true);
//		$criteria->compare('comdebut',$this->comdebut,true);
//		$criteria->compare('comfin',$this->comfin,true);
//		$criteria->compare('comgroup',$this->comgroup,true);
//		$criteria->compare('commfgp',$this->commfgp,true);
//		$criteria->compare('comnodesuite',$this->comnodesuite,true);
//		$criteria->compare('dest_first',$this->dest_first,true);
//		$criteria->compare('dest_last',$this->dest_last,true);
//		$criteria->compare('dest_company',$this->dest_company,true);
//		$criteria->compare('dest_address1',$this->dest_address1,true);
//		$criteria->compare('dest_address2',$this->dest_address2,true);
//		$criteria->compare('dest_city',$this->dest_city,true);
//		$criteria->compare('dest_state',$this->dest_state,true);
//		$criteria->compare('dest_zip',$this->dest_zip,true);
//		$criteria->compare('dest_country',$this->dest_country,true);
//		$criteria->compare('comnote',$this->comnote,true);
//		$criteria->compare('dest_mailco',$this->dest_mailco,true);
//		$criteria->compare('dest_mailname1',$this->dest_mailname1,true);
//		$criteria->compare('dest_idtype11',$this->dest_idtype11,true);
//		$criteria->compare('dest_idnumber11',$this->dest_idnumber11,true);
//		$criteria->compare('dest_idpicture11',$this->dest_idpicture11,true);
//		$criteria->compare('dest_idtype12',$this->dest_idtype12,true);
//		$criteria->compare('dest_idnumber12',$this->dest_idnumber12,true);
//		$criteria->compare('dest_idpicture12',$this->dest_idpicture12,true);
//		$criteria->compare('dest_idpsform1',$this->dest_idpsform1,true);
//		$criteria->compare('dest_mailname2',$this->dest_mailname2,true);
//		$criteria->compare('dest_idtype21',$this->dest_idtype21,true);
//		$criteria->compare('dest_idnumber21',$this->dest_idnumber21,true);
//		$criteria->compare('dest_idpicture21',$this->dest_idpicture21,true);
//		$criteria->compare('dest_idtype22',$this->dest_idtype22,true);
//		$criteria->compare('dest_idnumber22',$this->dest_idnumber22,true);
//		$criteria->compare('dest_idpicture22',$this->dest_idpicture22,true);
//		$criteria->compare('dest_idpsform2',$this->dest_idpsform2,true);
//		$criteria->compare('dest_mailname3',$this->dest_mailname3,true);
//		$criteria->compare('dest_idtype31',$this->dest_idtype31,true);
//		$criteria->compare('dest_idnumber31',$this->dest_idnumber31,true);
//		$criteria->compare('dest_idpicture31',$this->dest_idpicture31,true);
//		$criteria->compare('dest_idtype32',$this->dest_idtype32,true);
//		$criteria->compare('dest_idnumber32',$this->dest_idnumber32,true);
//		$criteria->compare('dest_idpicture32',$this->dest_idpicture32,true);
//		$criteria->compare('dest_idpsform3',$this->dest_idpsform3,true);
//
//		return new CActiveDataProvider(get_class($this), array(
//			'criteria'=>$criteria,
//		));
    }

    public function getFrequencyOptions($with_prices = TRUE)
    {
        if ($with_prices)
        {
            return array(
                self::TYPE_FREQUENCY_TYPE_1=>"Express service - On reception - Deposit: $500",
                self::TYPE_FREQUENCY_TYPE_2=>"Express service - Weekly - Deposit: $300",
                self::TYPE_FREQUENCY_TYPE_3=>"Express service - Twice a month - Deposit: $250",
                self::TYPE_FREQUENCY_TYPE_4=>"Express service - Monthly - Deposit: $200",
                self::TYPE_FREQUENCY_TYPE_5=>"Postal-mail service - Weekly - Deposit: $150",
                self::TYPE_FREQUENCY_TYPE_6=>"Postal-mail service - Twice a month - Deposit: $125 USD",
                self::TYPE_FREQUENCY_TYPE_7=>"Postal-mail service - Monthly - Deposit: $100",
            );
        }
        // TODO: Fix this hack.
        else
        {
            return array(
                self::TYPE_FREQUENCY_TYPE_1=>"Express service - On reception",
                self::TYPE_FREQUENCY_TYPE_2=>"Express service - Weekly",
                self::TYPE_FREQUENCY_TYPE_3=>"Express service - Twice a month",
                self::TYPE_FREQUENCY_TYPE_4=>"Express service - Monthly",
                self::TYPE_FREQUENCY_TYPE_5=>"Postal-mail service - Weekly",
                self::TYPE_FREQUENCY_TYPE_6=>"Postal-mail service - Twice a month",
                self::TYPE_FREQUENCY_TYPE_7=>"Postal-mail service - Monthly",
                self::TYPE_FREQUENCY_TYPE_8=>self::TYPE_FREQUENCY_TYPE_8,
            );
        }
    }

    public function getRentalPeriodOptions()
    {
        return array(
            self::TYPE_RENTALPERIOD_6=>'6 months',
            self::TYPE_RENTALPERIOD_12=>'12 months',
        );
    }

    public function getRentalPeriodOptionsAdmin()
    {
        return array(
            self::TYPE_RENTALPERIOD_1=>'1 month',
            self::TYPE_RENTALPERIOD_6=>'6 months',
            self::TYPE_RENTALPERIOD_12=>'12 months',
        );
    }

    public function getIdTypeOptions()
    {
        return array(
            self::TYPE_ID_00=>"National Passport or US Passport",
            self::TYPE_ID_01=>"Driver's License",
            self::TYPE_ID_02=>"Aircraft Pilot's License",
            self::TYPE_ID_03=>"Alien Registration card",
            self::TYPE_ID_04=>"Business or industrial I.D. Card",
            self::TYPE_ID_05=>"Certificate of Naturalization",
            self::TYPE_ID_06=>"Corporate ID",
            self::TYPE_ID_07=>"Dept of Social & Health Service",
            self::TYPE_ID_08=>"Government employee ID Card",
            self::TYPE_ID_09=>"Home or Vehicule Insurance Policy",
            self::TYPE_ID_10=>"Military / Armed Forces ID Card",
            self::TYPE_ID_11=>"State issued ID Card",
            self::TYPE_ID_12=>"University ID Card",
            self::TYPE_ID_13=>"Vehicle Registration Card",
            self::TYPE_ID_14=>"Voter Registration Card",
        );
    }

    /**
     * Return ALL of the ID Types, including legacy types
     */
    public function getIdTypeOptionsAll()
    {
        // TODO: Implement this!
        return array();
    }

    public function getDepositOptions()
    {
        $frequencyOptionsArray = array();
//		$frequencyOptionsArray = CHtml::listData($this->customer, 'id', 'bilkey');
        return $frequencyOptionsArray;
    }

    public function getComStatusOptions()
    {
        return array(
            self::TYPE_NEW=>'New',
            self::TYPE_ACTIVE=>'Active',
            self::TYPE_ARCHIVE=>'Archives',
        );
    }

    public function getMailingAddress($data) {

        $address = "";

        if (isset($data->customer)) {
//	        return $data->customer->biladdress1;

            if ($data->box->goodcountry == "USA")
                $address .= $data->box->goodcity." ".$data->box->goodstate." USA - ".$data->comnodesuite."<br />";

            else
                $address .= $data->box->goodcity." ".$data->box->goodcountry." - ".$data->comnodesuite."<br />";

        }
        return $address;
    }

    public function getBalance($data) {

        if (isset($data->customer))
            return $data->customer->bilbalance;
    }

}
