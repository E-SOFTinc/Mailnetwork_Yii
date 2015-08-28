<?php

/**
 * This is the model class for table "customer".
 *
 * The followings are the available columns in table 'customer':
 * @property string $bilkey
 * @property string $bilstatus
 * @property string $billogin
 * @property string $bilpass
 * @property string $bilbuztype
 * @property string $bilnom
 * @property string $bilprenom
 * @property string $bilcompany
 * @property string $biladdress1
 * @property string $biladdress2
 * @property string $bilcity
 * @property string $bilstate
 * @property string $bilzip
 * @property string $bilcountry
 * @property string $bilphone1
 * @property string $bilphone2
 * @property string $bilphone3
 * @property string $bilphone1opt
 * @property string $bilphone2opt
 * @property string $bilphone3opt
 * @property string $bilfax
 * @property string $bilemail
 * @property string $bilemail2
 * @property string $bilurl
 * @property string $biloldid
 * @property string $bilhow
 * @property string $bilnote
 * @property double $bilbalance
 */
class Customer extends CActiveRecord
{
    const TYPE_NEW='New';
    const TYPE_ACTIVE='Active';
    const TYPE_ARCHIVE='Archives';

    const TYPE_PHONE_HOME='Home';
    const TYPE_PHONE_WORK='Work';
    const TYPE_PHONE_CELL='Cell';

    public $metasearch;

    /**
     * Returns the static model of the specified AR class.
     * @return Customer the static model class
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
        return 'customer';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('bilprenom, bilnom, biladdress1, bilcity, bilstate, bilcountry, bilphone1, bilemail, billogin, bilpass, bilzip', 'required', 'on'=>'user_create'),
            array('bilphone1, bilemail, bilpass', 'required', 'on'=>'user_edit'),
            array('bilbalance, bilkey', 'numerical'),
            array('bilstatus, bilnom, bilprenom, bilphone1, bilphone2, bilphone3, bilphone1opt, bilphone2opt, bilphone3opt, bilfax, bilemail, bilemail2, bilurl', 'length', 'max'=>50),
            array('billogin, bilpass, biloldid', 'length', 'max'=>20),
            array('bilbuztype, bilcompany, biladdress1, biladdress2, bilcity, bilstate, bilzip, bilcountry, bilhow', 'length', 'max'=>100),
            array('bilnote', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('bilkey, bilstatus, billogin, bilpass, bilbuztype, bilnom, bilprenom, bilcompany, biladdress1, biladdress2, bilcity, bilstate, bilzip, bilcountry, bilphone1, bilphone2, bilphone3, bilphone1opt, bilphone2opt, bilphone3opt, bilfax, bilemail, bilemail2, bilurl, biloldid, bilhow, bilnote, bilbalance', 'safe', 'on'=>'search'),
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
            'services' => array(self::HAS_MANY, 'commande', 'bilkey', 'together'=>true),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'bilkey' => 'Cust. Id',
            'bilstatus' => 'Status',
            'billogin' => 'Login',
            'bilpass' => 'Password',
            'bilbuztype' => 'Type of Business',
            'bilnom' => 'First Name',
            'bilprenom' => 'Last Name',
            'bilcompany' => 'Company',
            'biladdress1' => 'Address',
            'biladdress2' => 'Address 2',
            'bilcity' => 'City',
            'bilstate' => 'State/Prov',
            'bilzip' => 'Zip/Postal Code',
            'bilcountry' => 'Country',
            'bilphone1' => 'Phone 1',
            'bilphone2' => 'Phone 2',
            'bilphone3' => 'Phone 3',
            'bilphone1opt' => '',
            'bilphone2opt' => '',
            'bilphone3opt' => '',
            'bilfax' => 'Fax',
            'bilemail' => 'E-mail 1',
            'bilemail2' => 'E-mail 2',
            'bilurl' => 'URL',
            'biloldid' => 'Biloldid',
            'bilhow' => 'How Did They Hear About Mailnetwork',
            'bilnote' => 'Note',
            'bilbalance' => 'Balance',

            'mailingcities' => 'Mailing City',
            'serviceendingdates' => 'Ending Date',
            'balances' => 'Balance',
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
            $criteria->compare('bilkey',$this->metasearch,true,'OR');
            $criteria->compare('bilstatus',$this->metasearch,true,'OR');
            $criteria->compare('bilnom',$this->metasearch,true,'OR');
            $criteria->compare('bilprenom',$this->metasearch,true,'OR');
            $criteria->compare('bilcompany',$this->metasearch,true,'OR');
            $criteria->compare('bilbalance',$this->metasearch,true,'OR');
            $criteria->compare('billogin',$this->metasearch,true,'OR');
            $criteria->compare('bilemail',$this->metasearch,true,'OR');
            
        }
        else {
            $criteria->compare('bilkey',$this->bilkey,true);
            $criteria->compare('bilstatus',$this->metasearch,true);
            $criteria->compare('bilnom',$this->bilnom,true);
            $criteria->compare('bilprenom',$this->bilprenom,true);
            $criteria->compare('bilcompany',$this->bilcompany,true);
            $criteria->compare('bilbalance',$this->bilbalance);
            $criteria->compare('billogin',$this->billogin,true);
            $criteria->compare('bilemail',$this->bilemail,true);
                        
        }

//		$criteria->compare('biladdress1',$this->biladdress1,true);
//		$criteria->compare('biladdress2',$this->biladdress2,true);
//		$criteria->compare('bilcity',$this->bilcity,true);
//		$criteria->compare('bilstate',$this->bilstate,true);
//		$criteria->compare('bilzip',$this->bilzip,true);
//		$criteria->compare('bilcountry',$this->bilcountry,true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
            // Set the pagination size
            'pagination'=>array('pageSize'=>'100'),
            'sort'=>array(
                'defaultOrder'=>'bilnom ASC',
            )
        ));
    }

    public function getBilStatusOptions()
    {
        return array(
            self::TYPE_NEW=>'New',
            self::TYPE_ACTIVE=>'Active',
            self::TYPE_ARCHIVE=>'Archives',
        );
    }

    public function getPhoneOptions()
    {
        return array(
            self::TYPE_PHONE_HOME=>'Home',
            self::TYPE_PHONE_WORK=>'Work',
            self::TYPE_PHONE_CELL=>'Cell',
        );
    }

    public static function getStateOptions()
    {
        return array(
            ""=>'Please select...',

        // Canadian Provinces
            "AB"=>'Alberta',
            "BC"=>'British Columbia',
            "MB"=>'Manitoba',
            "NB"=>'New Brunswick',
            "NF"=>'Newfoundland',
            "NT"=>'Northwest Territories',
            "NS"=>'Nova Scotia',
            "ON"=>'Ontario',
            "PE"=>'Prince Edward Island',
            "QC"=>'Quebec',
            "SK"=>'Saskatchewan',
            "YT"=>'Yukon',
        // U.S. States
            "AL"=>'Alabama',
            "AK"=>'Alaska',
            "AZ"=>'Arizona',
            "AR"=>'Arkansas',
            "CA"=>'California',
            "CO"=>'Colorado',
            "CT"=>'Connecticut',
            "DE"=>'Delaware',
            "FL"=>'Florida',
            "GA"=>'Georgia',
            "HI"=>'Hawaii',
            "ID"=>'Idaho',
            "IL"=>'Illinois',
            "IN"=>'Indiana',
            "IA"=>'Iowa',
            "KS"=>'Kansas',
            "KY"=>'Kentucky',
            "LA"=>'Louisiana',
            "ME"=>'Maine',
            "MD"=>'Maryland',
            "MA"=>'Massachusetts',
            "MI"=>'Michigan',
            "MN"=>'Minnesota',
            "MS"=>'Mississippi',
            "MO"=>'Missouri',
            "MT"=>'Montana',
            "NE"=>'Nebraska',
            "NV"=>'Nevada',
            "NH"=>'New Hampshire',
            "NJ"=>'New Jersey',
            "NM"=>'New Mexico',
            "NY"=>'New York',
            "NC"=>'North Carolina',
            "ND"=>'North Dakota',
            "OH"=>'Ohio',
            "OK"=>'Oklahoma',
            "OR"=>'Oregon',
            "PA"=>'Pennsylvania',
            "PR"=>'Puerto Rico',
            "RI"=>'Rhode Island',
            "SC"=>'South Carolina',
            "SD"=>'South Dakota',
            "TN"=>'Tennessee',
            "TX"=>'Texas',
            "UT"=>'Utah',
            "VT"=>'Vermont',
            "VA"=>'Virginia',
            "WA"=>'Washington',
            "DC"=>'Washington D.C.',
            "WV"=>'West Virginia',
            "WI"=>'Wisconsin',
            "WY"=>'Wyoming',
        // For the rest...
            "."=>'Other',
        );
    }

    public function getTrue($bilkey, $biladdy)
    {
        if (is_null($biladdy)) return $biladdy;

        $address = $this->getMailingCities($bilkey);
        echo "BOO!!!";
        echo $biladdy; die;
        return strpos(strtolower($biladdy), strtolower($address));
    }

    public function getMailingCities($bilkey)
    {
        $records = Commande::model()->with('box')->findAllByAttributes(array('bilkey'=>$bilkey));

        $address = "";
        if ($records)
        {
            foreach($records as $record)
            {
                if (isset($record->box))
                {
                    // TODO: For some reason not all boxes are showing ups
                    if ($record->box->goodcountry == "USA")
                        $address .= $record->box->goodcity." ".$record->box->goodstate." USA - ".$record->comnodesuite."<br />";

                    else
                        $address .= $record->box->goodcity." ".$record->box->goodcountry." - ".$record->comnodesuite."<br />";
                }
            }

        }

        return $address;
    }

    public function getServiceEndingDates($bilkey)
    {
        $records = Commande::model()->findAllByAttributes(array('bilkey'=>$bilkey));

        $dates = "";
        if ($records)
        {
            foreach($records as $record)
            {
                $dates .= $record->comfin."<br />";
            }

        }
        return $dates;
    }

    // TODO: This can prolly be deprecated
    public function getCustomerServiceDetails($bilkey)
    {
        $connection = Yii::app()->db;
        $queryString = ' select * from commande, goodcity
                         where comgoodcitykey = goodcitykey
                         and bilkey ='.$bilkey.'
                         ORDER BY comdebut';
        $command = $connection->createCommand($queryString);
        return $command->queryAll();
    }

    public function getShipmentsByCustomerBilkey($bilkey)
    {
        $connection = Yii::app()->db;
        $queryString = ' select * from shipment
                         where bilkey ='.$bilkey.'
                         ORDER BY shipdate DESC';
        $command = $connection->createCommand($queryString);
        return $command->queryAll();

//		 where bilkey='.$bilkey.' ORDER BY shipdate DESC
//		$shipments = Shipment::model()->find('bilkey=?', array($bilkey));
    }

    // TODO: Refactor this
    public function getShipmentsByCustomerBilkeyClient($bilkey)
    {
        $connection = Yii::app()->db;
        $queryString = ' select * from shipment
                         where bilkey ='.$bilkey.' and
                         shipdetail not like "%center deposit%"
                         ORDER BY shipdate DESC';
        $command = $connection->createCommand($queryString);
        return $command->queryAll();

//		 where bilkey='.$bilkey.' ORDER BY shipdate DESC
//		$shipments = Shipment::model()->find('bilkey=?', array($bilkey));
    }
}
