<?php

class UserController extends Controller
{
    public $layout='admin';

    public function filters()
    {
        return array(
	        'https +signup +info', // Force https, but only on login page
        );
    }

    private function getUploadPath($picture)
    {
        $base_path = Yii::app()->basePath . '/uploads/';

        // To prevent too many uploaded files from being stored in a single
        //  directory, we split them up by the current timestamp mod 1000.
        //  This has the effect of distributing the uploads amongst 1000 bins.

        $id      = time();
        $mod     = $id % 1000;
        $path    = $base_path . $mod;
              
        // Make sure path exists
        if (!is_dir($path))
            mkdir($path);

        // Add the picture to the path and return
        return $path . '/' . $id . '-' . $picture;
    }

    public function actionIndex()
    {        
        $this->render('index');
    }

    /**
     * Displays the currently logged in user's account information
     */
    public function actionInfo()
    {        
        // Get id of logged in user
        $user_id = Yii::app()->user->getId();

        $customer=Customer::model()->findByPk($user_id);
        $commande=Commande::model()->findAllByAttributes(array('bilkey'=>$user_id));
        $service_details = Customer::model()->getCustomerServiceDetails($user_id);
        $shipment_details = Customer::model()->getShipmentsByCustomerBilkey($user_id);

        if(isset($_POST['Customer']))
        {
            $customer->setScenario('user_edit');

            // Populate our new models from the input arrays
            $customer->attributes=$_POST['Customer'];

            // If a model saves, we know it's valid
            if($customer->validate())
            {
                // Send email to info@mailnetwork and client
                $customer->save();
                $this->actionEmailChanges('customer', $customer, $customer);
            }
        }

        $shipment_model=new Shipment('search');
        $shipment_model->unsetAttributes();  // clear any default values
        $shipment_model->bilkey = $user_id;
        if(isset($_GET['Shipment']))
            $shipment_model->attributes=$_GET['Shipment'];

        $this->render('//shared/user-info',
                      array('customer_model'=>$customer,
                            'customer'=>$customer,
                            'commande'=>$commande,
                            'service_details'=>$service_details,
                            'shipment_details'=>$shipment_details,
                            'shipment_model'=>$shipment_model,
                      ));
    }


    public function actionEditService($id)
    {
        // Get id of logged in user
        $user_id = Yii::app()->user->getId();
        $customer = Customer::model()->findByPk($user_id);

        // Verify service number belongs to logged in customer
        $commande = Commande::model()->findByPk($id);
        if ($commande->bilkey != $user_id) {
            // TODO: Prolly '404 here.
            echo "You do not have permission to access this record."; die;
        }

        if(isset($_POST['Commande']))
        {
            // Set the scenario to limit the attributes we suck in from
            //  the POST array.  This protects us against injection attacks.
            $commande->setScenario('user_edit');

            // Populate our new models from the input arrays
            $commande->attributes=$_POST['Commande'];

            // We selectively save the attributes on the model to
            //  prevent against injection attacks
            if($commande->save())
            {
                // Send email to info@mailnetwork and client
                $this->actionEmailChanges('commande', $commande, $customer);
                $this->redirect(array('user/info'));
            }
        }

        $this->render('//shared/modify-service', array('customer_model'=>$customer,
                                                       'commande_model'=>$commande));
    }

    /**
     * Sends an email of the user's account information changes
     */
    public function actionEmailChanges($type, $model, $customer)
    {
        // TODO: Make sure these are correct
        $message = new YiiMailMessage;
        $message->view = 'template';

        //userModel is passed to the view
        $message->setBody(array('include'=>'service-update.php', 'type'=>$type, 'model'=>$model, 'customer'=>$customer), 'text/html');

        $message->addTo(Yii::app()->params['adminEmail']);
        $message->addBcc("psam@saipeople.com");
        $message->addFrom(Yii::app()->params['adminEmail']);
        $message->setSubject("User Account Info Change: #".$customer->bilkey);
        Yii::app()->mail->send($message);
    }

    /**
     * Handles the first page of the application form
     * @param string $city
     */
    public function actionSignup($city)
    {          
        $customer_model = new Customer;
        $commande_model = new Commande;
        $goodcity = Goodcity::model()->findByPk($city);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        // Set the scenario to limit the attributes we suck in from
        //  the POST array.  This protects us against injection attacks.
        $commande_model->setScenario('user_create');
        $customer_model->setScenario('user_create');

        if(isset($_POST['Customer']))
        {
            // Populate our new models from the input arrays
            $customer_model->attributes=$_POST['Customer'];
            $commande_model->attributes=$_POST['Commande'];

            // If a model saves, we know it's valid
            if($customer_model->validate())
            {
                // Save the uploaded files
                $arr_uploads = array('dest_idpicture11', 'dest_idpicture12', 'dest_idpsform1',
                                     'dest_idpicture21', 'dest_idpicture22', 'dest_idpsform2',
                                     'dest_idpicture31', 'dest_idpicture32', 'dest_idpsform3');

                foreach($arr_uploads as $upload)
                {
                    $commande_model->{'t'.$upload} = CUploadedFile::getInstance($commande_model,$upload);
                }

                // We have to insert a dummy id here to run validate()
                $commande_model->bilkey = 0;
                if($commande_model->validate())
                {
                    // Save the uploaded files
                    $arr_uploads = array('dest_idpicture11', 'dest_idpicture12', 'dest_idpsform1',
                                         'dest_idpicture21', 'dest_idpicture22', 'dest_idpsform2',
                                         'dest_idpicture31', 'dest_idpicture32', 'dest_idpsform3');

                    foreach($arr_uploads as $upload)
                    {
                        $commande_model->{$upload} = CUploadedFile::getInstance($commande_model,$upload);

                        if ($commande_model->{$upload} != null)
                        {
                            $path = $this->getUploadPath($commande_model->{$upload});
                            $commande_model->{$upload}->saveAs($path);
                            $_POST['Commande'][$upload] = $path;
                        }
                    }

                    // We don't actually want to do the save just yet,
                    //  so store *everything* in the session.  (This is hack-y)
                    Yii::app()->user->setState('Customer', $_POST['Customer']);
                    Yii::app()->user->setState('Commande', $_POST['Commande']);
                    Yii::app()->user->setState('payment_type', $_POST['payment']);                    
                    //var_dump($this->emailValidation($customer_model));die();
                    if ($this->passwordUsernameVerification($customer_model) == false){                        
                        $this->render('application/1-signup', array(
                        'goodcity'=>$goodcity,
                        'customer_model'=>$customer_model,
                        'commande_model'=>$commande_model,
                        'onetime'=>false,
                        'username_used'=>true,
                    ));
                       die();
                    }
                    elseif($this->emailValidation($customer_model) == false){
                        $this->render('application/1-signup', array(
                        'goodcity'=>$goodcity,
                        'customer_model'=>$customer_model,
                        'commande_model'=>$commande_model,
                        'onetime'=>false,
                        'email_used'=>true,
                    ));
                       die();
                    }
                    

                    $this->redirect(array('order'));
                }
            }
            // Even if customer doesn't validate, we need to
            //  validate commande
            else
            {
                // We have to insert a dummy id here to run validate()
                $commande_model->bilkey = 0;
                $commande_model->validate();
            }
        }
        elseif (isset(Yii::app()->user->Customer)) {
            $customer_model->attributes = Yii::app()->user->Customer;
            $commande_model->attributes = Yii::app()->user->Commande;
//    		$payment_type               = Yii::app()->user->payment_type;
        }

        // Hack for one-time setup option
        $onetime = false;
        if(isset(Yii::app()->user->onetime))
            $onetime = true;
        else
            $onetime = false;

        $this->render('application/1-signup', array(
            'customer_model'=>$customer_model,
            'commande_model'=>$commande_model,
            'goodcity'=>$goodcity,
            'onetime'=>$onetime,
        ));
    }

    /**
     * Handles the second step of the application form.
     */
    public function actionOrder($transactionError = null)
    {
        // Unpickle our models
        $customer_model = new Customer;
        $commande_model = new Commande;

        $customer_model->attributes = Yii::app()->user->Customer;
        $commande_model->attributes = Yii::app()->user->Commande;
        $payment_type               = Yii::app()->user->payment_type;
        $city = Goodcity::model()->findByPk($commande_model->comgoodcitykey);

        // Calculate the order totals, and save them for the sign-up email
        $order_totals = $this->getInvoiceTotals($customer_model, $commande_model);
        Yii::app()->user->setState('OrderTotals', $order_totals);            
        
        if($transactionError == null)
        $this->render('application/2-orderform', array(
            'goodcity'=>$city,
            'payment_type'=>$payment_type,
            'order_totals'=>$order_totals,
            'customer_model'=>$customer_model,
            'commande_model'=>$commande_model,
        ));
        else
            $this->render('application/2-orderform', array(
            'goodcity'=>$city,
            'payment_type'=>$payment_type,
            'order_totals'=>$order_totals,
            'customer_model'=>$customer_model,
            'commande_model'=>$commande_model,
            'transaction_failed'=>true,
        ));
    }

    public function actionProcess()
    {
        // TODO: Refactor this.
        function getUploadPath($picture)
        {
            $base_path = Yii::app()->basePath . '/uploads/';

            // To prevent too many uploaded files from being stored in a single
            //  directory, we split them up by the current timestamp mod 1000.
            //  This has the effect of distributing the uploads amongst 1000 bins.

            $id      = time();
            $mod     = $id % 1000;
            $path    = $base_path . $mod;

            // Make sure path exists
            if (!is_dir($path))
                mkdir($path);

            // Add the picture to the path and return
            return $path . '/' . $id . '-' . $picture;
        }

        function pathToUrl($path)
        {
            $url_split  = explode('/', $path);
            $url_count  = count($url_split);
            $url_ending = array_splice($url_split, $url_count-3);
            $new_url    = "http://www.mailnetwork.com/".implode('/', $url_ending);

            return $new_url;
        }

        function sendSignupEmails($customer_model, $commande_model)
        {
            global $payment_method;

            // Email Yii::app()->params['adminEmail'] with new user signup
            $message = new YiiMailMessage;
            $message->view = 'template';

            $order_totals = Yii::app()->user->OrderTotals;

            // Pass the credit card info if needed
            if (isset($_POST['cc'])) {

                Yii::app()->user->setState('cc', $_POST['cc']);

                $cc_images = array();
                foreach(array('cc_sideone', 'cc_sidetwo') as $cc_image)
                {
                    // Save credit card images
                    $cc_side = CUploadedFile::getInstanceByName($cc_image);
                    if ($cc_side != null)
                    {
                        $path = getUploadPath($cc_side);
                        $cc_side->saveAs($path);

                        // Massage the path names so they're clickable URLs
                        $path  = pathToUrl($path);
                        $cc_images[$cc_image] = $path;
                    }
                }

                $message->setBody(array('include'=>'new-signup.php', 'customer'=>$customer_model, 'commande'=>$commande_model, 'order_totals'=>$order_totals, 'cc'=>$_POST['cc'], 'cc_images'=>$cc_images), 'text/html');
            }
            else
                $message->setBody(array('include'=>'new-signup.php', 'customer'=>$customer_model, 'commande'=>$commande_model, 'order_totals'=>$order_totals), 'text/html');

            // TODO: VERY IMPORTANT TO REMOVE THIS BCC ONCE YOU HIT PRODUCTION!
			$message->addTo(Yii::app()->params['adminEmail']);
            $message->addBcc("psam@saipeople.com");
            $message->addBcc("imfnmail@yahoo.com");
            $message->addBcc("mailnetwork@globalia.ca");            
            $message->addFrom(Yii::app()->params['adminEmail']);
            $message->setSubject("New User Signup");
            Yii::app()->mail->send($message);

            // Email user welcome message
            $message = new YiiMailMessage;
            $message->view = 'template';

            //userModel is passed to the view
            $message->setBody(array('include'=>'welcome.php',
                                    'customer'=>$customer_model,
                                    'payment_method'=>$payment_method),
                                    'text/html');

            $message->addTo($customer_model->bilemail);
            $message->addBcc("psam@saipeople.com");
            $message->addBcc("mailnetwork@globalia.ca");
            $message->addFrom(Yii::app()->params['adminEmail']);
            $message->setSubject("Welcome to Mailnetwork!");
            Yii::app()->mail->send($message);
        }

        $payment_method = "";
        if(isset($_POST['email_x']))
            $payment_method = "email";
        elseif(isset($_POST['fax_x']))
            $payment_method = "fax";
        elseif(isset($_POST['mail_x']))
            $payment_method = "mail";

        // Finally save our models to the database
        $customer_model=new Customer;
        $commande_model=new Commande;

        $customer_model->attributes = Yii::app()->user->Customer;
        $commande_model->attributes = Yii::app()->user->Commande;
        $payment_type               = Yii::app()->user->payment_type;
        $city = Goodcity::model()->findByPk($commande_model->comgoodcitykey);

        // Make sure customer is only saved once
        if (!isset(Yii::app()->user->bilkey))
        {
            $customer_model->bilstatus = "New";
            $commande_model->comstatus = "New";

            // Set sign-up date as account start date
            $commande_model->comdebut = date("Y-m-d");

            if(isset(Yii::app()->user->onetime)) {

                $commande_model->comperiod = Commande::TYPE_RENTALPERIOD_1;
                $commande_model->comfrequency = Commande::TYPE_FREQUENCY_TYPE_8;
            }

            // Save the signup ip address and payment method
            $customer_model->bilsignupip = CHttpRequest::getUserHostAddress();
            $customer_model->bilsignupmethod = ucfirst($payment_method);

            // Save the initial payment type
            $commande_model->cominitpaytype = ucwords(str_replace("_", " ", $payment_type));

            $customer_model->save();
            $commande_model->bilkey = $customer_model->bilkey;
            $commande_model->save();           
            

            // Set flag to prevent resaves
            Yii::app()->user->setState('bilkey', $customer_model->bilkey);
            Yii::app()->user->setState('comkey', $commande_model->comkey);
        }
        sendSignupEmails($customer_model, $commande_model);
        if($payment_method == "email")
            $this->redirect(array('/user/thanks/method/email'));
        elseif($payment_method == "fax")
            $this->redirect(array('/user/thanks/method/fax'));
        elseif($payment_method == "mail")
            $this->redirect(array('/user/thanks/method/mail'));
    }

    /**
     * Display the final details regarding the application process.
     */
    public function actionThanks($method)
    {     
        $customer_model=new Customer;
        $commande_model=new Commande;

        $customer_model->attributes = Yii::app()->user->getState('Customer');
        $commande_model->attributes = Yii::app()->user->getState('Commande');
        $payment_type               = Yii::app()->user->payment_type;

        $customer_model->bilkey = Yii::app()->user->bilkey;
        $commande_model->comkey = Yii::app()->user->comkey;

        $city = Goodcity::model()->findByPk($commande_model->comgoodcitykey);
        $order_totals = $this->getInvoiceTotals($customer_model, $commande_model);

        $cc = Yii::app()->user->getState('cc');

        $this->render('application/2-orderform', array(
            'cc'=>$cc,
            'goodcity'=>$city,
            'thanks'=>true,
            'payment_type'=>$payment_type,
            'payment_method'=>$method,
            'order_totals'=>$order_totals,
            'customer_model'=>$customer_model,
            'commande_model'=>$commande_model,
        ));

        $this->sendEmailConfirmationNotCredit($customer_model, $city, $commande_model, $order_totals, $payment_type, $method);        
    }

    public function actionForgot()
    {
        $message = "";

        // TODO: Sanitize input!!!
        if (isset($_POST['email']))
        {
            $email = $_POST['email'];

            // TODO: See if user's email address exists in database
            $customer = Customer::model()->findByAttributes(array('bilemail'=>$email));

            if ($customer != null)
            {
                // Send user's password to client
                $message = new YiiMailMessage;
                $message->view = 'template';
                $message->setBody(array('include'=>'forgot-password.php',
                                        'customer'=>$customer), 'text/html');

                $message->addTo($customer->bilemail);
                $message->addBcc("psam@saipeople.com");
                $message->addFrom(Yii::app()->params['adminEmail']);
                $message->setSubject("Password Request");
                Yii::app()->mail->send($message);

                $message = "Email sent.";
            }
            else
            {
                $message = "Email address not found.";
            }
        }

        $this->render('forgotpassword', array('message'=>$message));
    }


    /**
     * Get an array of totals for the services selected by the user.
     */
    private function getInvoiceTotals($customer, $commande)
    {
        // Determine the rental city
        $city = Goodcity::model()->findByPk($commande->comgoodcitykey);

        // Determine mailing city category
        $rental_period = $commande->comperiod;
        $cat = strtolower(trim($city->goodcategory));
        $cat_lookup = 'cat_'.$cat.'_'.$rental_period;

        // Get rental rate
        $tarif = Tarif::model()->findByPk(1);

        $onetime = false;
        if(isset(Yii::app()->user->onetime)) {
            $onetime = true;
            $commande->comfrequency = Commande::TYPE_FREQUENCY_TYPE_8;
        }
        else
            $onetime = false;

        if($onetime == true)
            $rental_rate = 50;
        else
            $rental_rate = $tarif->{$cat_lookup};

        // Add in the setup charge - SETUP FEE WAIVED AS PER CLIENT'S REQUEST
//		$sub_total = $rental_rate + $tarif->reg_setup_us;
        $sub_total = $rental_rate;
        $total = $rental_rate;
        $administrative_cost = $total * 0.05;

        // Determine Canadian taxes
        // TODO: Why isn't the TVH tax used?
        if ($customer->bilcountry == "Canada")
        {

            switch($customer->bilstate)
            {
                // NOTE: For reference, I've included the old tax calculation perl code
                //       Filename: orderthree.cgi
                //
                // 	if ($a_state =~ /QC/) {
                //		$tps_tax = ($sub_total * $taxtps);
                //		$sub_tax = ($sub_total + $tps_tax);
                //		$tvq_tax  = ($sub_tax * $taxtvq);
                //		 $total =  ($tps_tax + $tvq_tax + $sub_total);
                //		}
                //
                //	elsif ($a_state  =~ /(AB''BC''MB''NB''NF''NT''NS''ON''PE''SK''YT)/) {
                //		$tps_tax  = ($sub_total * $taxtps);
                //		$total =  ($tps_tax + $sub_total);
                //		$include_tps = 1;
                //		}
                //
                //	elsif ($a_state  !~ /(AB''BC''MB''NB''NF''NT''NS''ON''PE''SK''YT''QC )/) {
                //		$total =  $sub_total;
                //		}

                case 'QC':
                    // GST: General tax for all of Canada
                    $tps_tax = ($sub_total * $tarif->taxtps);
                    // PST: Is the provincial tax for Quebec...
                    $sub_tax = ($sub_total + $tps_tax);
                    //      ...it is added on top of the GST
                    $tvq_tax = ($sub_tax * $tarif->taxtvq);
                    $total = ($tps_tax + $tvq_tax + $sub_total);
                    break;

                case 'AB':
                case 'BC':
                case 'MB':
                case 'NB':
                case 'NF':
                case 'NT':
                case 'NS':
                case 'ON':
                case 'PE':
                case 'SK':
                case 'YT':
                    // GST: General tax for all of Canada
                    $tps_tax  = ($sub_total * $tarif->taxtps);
                    $tvq_tax = 0;
                    $total =  ($tps_tax + $sub_total);
                    break;

                default:
                    // TODO: Don't take matters so lightly
                    die;
            }
        }
        else {
            $tps_tax = 0;
            $tvq_tax = 0;
        }


        $deposit = null;
        // Determine mail forwarding deposit
        switch($commande->comfrequency)
        {
            case Commande::TYPE_FREQUENCY_TYPE_1:
                $deposit = $tarif->reg_depositexp_now;
                break;
            case Commande::TYPE_FREQUENCY_TYPE_2:
                $deposit = $tarif->reg_depositexp_week;
                break;
            case Commande::TYPE_FREQUENCY_TYPE_3:
                $deposit = $tarif->reg_depositexp_bimonth;
                break;
            case Commande::TYPE_FREQUENCY_TYPE_4:
                $deposit = $tarif->reg_depositexp_month;
                break;
            case Commande::TYPE_FREQUENCY_TYPE_5:
                $deposit = $tarif->reg_depositair_week;
                break;
            case Commande::TYPE_FREQUENCY_TYPE_6:
                $deposit = $tarif->reg_depositair_month;
                break;
            case Commande::TYPE_FREQUENCY_TYPE_7:
                $deposit = $tarif->reg_depositair_bimonth;
                break;
            case Commande::TYPE_FREQUENCY_TYPE_8:
                $deposit = 0;
                break;
            default:
                // TODO: Replace this with an email to the system administrator
                die;
        }

        $total = $total + $deposit;
        $total = $total + $administrative_cost;

        // Format numbers before sending them back
        setlocale(LC_MONETARY, 'en_US');
        $rental_rate = number_format($rental_rate, 2, '.', ',');
        $deposit = number_format($deposit, 2, '.', ',');
        $tps_tax = number_format($tps_tax, 2, '.', ',');
        $tvq_tax = number_format($tvq_tax, 2, '.', ',');
        $administrative_cost = number_format($administrative_cost, 2, '.', ',');
        $total = number_format($total, 2, '.', ',');

        return array('rental_rate'=>$rental_rate,
                     'deposit'=>$deposit,
                     'tax_gst'=>$tps_tax,
                     'tax_pst'=>$tvq_tax,
                     'administrative_cost'=>$administrative_cost,
                     'total'=>$total);
    }
    
    public function actionCreditPayment()
    {
        $customer_model=new Customer;
        $commande_model=new Commande;
        $order_totals;
        $credit_card = new CreditCard($_POST['ccNumber'], $_POST['cvdNumber'], $_POST['ccName'], $_POST['expYear'], $_POST['expMonth']);
        

        $customer_model->attributes = Yii::app()->user->getState('Customer');
        $commande_model->attributes = Yii::app()->user->getState('Commande');
        $order_totals = $this->getInvoiceTotals($customer_model, $commande_model);
        $city = Goodcity::model()->findByPk($commande_model->comgoodcitykey);
       
        if (sizeof($customer_model->search()->getData())==0){
            $customer_model->bilsignupip = CHttpRequest::getUserHostAddress();            
            $customer_model->save();
            $commande_model->bilkey = $customer_model->bilkey;
            $commande_model->comdebut = date("Y-m-d");
            $commande_model->save();
        }
        else{
            $customerTemp = $customer_model->search()->getData();
            $customer_model->bilkey = $customerTemp[0]->attributes['bilkey'];
        }
        
        Yii::import('ext.mail.vendors.*');
        require "mpgClasses.php";
        
        $store_id='monca70830';
        $api_token='bFqjQoK69Li9wve1JkUk';
        
        
        /*$store_id='store5';
        $api_token='yesguy';*/
        $typePurchase='purchase';
        $typeAdd='res_add_cc';
        $cust_id=$customer_model->bilkey;
        $phone=$customer_model['bilphone1'];
        $email=$customer_model['bilemail'];
        $note="Mailbox in $city->goodcity for $commande_model->comperiod";
        $order_id='MailNetwork-'.date("dmy-G:i:s");
        $amount=  str_replace(',', '', $order_totals['total']);
        $pan=$credit_card['cardNumber'];
        $expiry_date=substr($credit_card['expYear'],2) . $credit_card['expMonth'];
        $crypt='7';
        $dynamic_descriptor='MailingNetwork';
        $status_check = 'false';
        
        $txnArray=array('type'=>$typePurchase,
        'order_id'=>$order_id,
        'cust_id'=>$cust_id,
        'amount'=>$amount,        
        'pan'=>$pan,
        'expdate'=>$expiry_date,
        'crypt_type'=>$crypt,
        'dynamic_descriptor'=>$dynamic_descriptor
        );
        
        $cvd_indicator = '1';
        $cvd_value = $credit_card['cardCVD'];
        
        $cvdTemplate = array('cvd_indicator' => $cvd_indicator,
        'cvd_value' => $cvd_value
        );       
        
        $mpgCvdInfo = new mpgCvdInfo($cvdTemplate);
        $mpgAvsInfo = null;
        
        $mpgTxn = new mpgTransaction($txnArray);       
        $mpgTxn->setCvdInfo($mpgCvdInfo);
        $mpgTxn->setAvsInfo($mpgAvsInfo);
        $mpgRequest = new mpgRequest($mpgTxn);
        $mpgHttpPost =new mpgHttpsPost($store_id,$api_token,$mpgRequest);
        $mpgResponse=$mpgHttpPost->getMpgResponse();
        
        if ($mpgResponse->getComplete())
        {
            if ($mpgResponse->getResponseCode()>0 && $mpgResponse->getResponseCode()<= 49)
            {
            
                $auth_code = $mpgResponse->getAuthCode();
                //Add card to vault if first purchase worked
                $txnArray=array('type'=>$typeAdd,
                'order_id'=>$order_id,
                'cust_id'=>$cust_id,
                'amount'=>$amount,
                'phone'=>$phone,
                'email'=>$email,
                'note'=>$note,
                'pan'=>$pan,
                'expdate'=>$expiry_date,
                'crypt_type'=>$crypt,
                'dynamic_descriptor'=>$dynamic_descriptor
                );

                $cvd_indicator = '1';
                $cvd_value = $credit_card['cardCVD'];

                $cvdTemplate = array('cvd_indicator' => $cvd_indicator,
                'cvd_value' => $cvd_value
                );

                $mpgCvdInfo = null;

                $mpgAvsInfo = null;

                $mpgTxn = new mpgTransaction($txnArray);
                $mpgTxn->setCvdInfo($mpgCvdInfo);
                $mpgTxn->setAvsInfo($mpgAvsInfo);
                $mpgRequest = new mpgRequest($mpgTxn);
                $mpgHttpPost =new mpgHttpsPost($store_id,$api_token,$mpgRequest);
                $mpgResponse=$mpgHttpPost->getMpgResponse();                       
                
                
                //Redirect to receipt after adding card
                $city = Goodcity::model()->findByPk($commande_model->comgoodcitykey);
                $this->render('application/2-orderform', array(                
                'goodcity'=>$city,
                'thanks'=>true,
                'payment_type'=>"credit_card",
                'payment_method'=>"email",
                'order_totals'=>$order_totals,
                'customer_model'=>$customer_model,
                'commande_model'=>$commande_model,
                'auth_code'=>$auth_code,
                 ));
                
                $this->sendEmailConfirmation($customer_model, $city, $commande_model, $auth_code, $order_totals);
            }                
            else
            {
                $this->redirect(array('user/order', 
                'transactionError'=>true,
                ));                
            }
        }    
        else
        {
            $this->redirect(array('user/order', 
                'transactionError'=>true,
            ));            
        }  
    }   
    
    public function actionPaypalPayment()
    {
        $customer_model=new Customer;
        $commande_model=new Commande;
        $customer_model->attributes = Yii::app()->user->getState('Customer');
        $commande_model->attributes = Yii::app()->user->getState('Commande');
        
        if (sizeof($customer_model->search()->getData())==0){
            $customer_model->bilsignupip = CHttpRequest::getUserHostAddress();            
            $customer_model->save();
            $commande_model->bilkey = $customer_model->bilkey;
            $commande_model->comdebut = date("Y-m-d");
            $commande_model->save();
        }
        else{
            $customerTemp = $customer_model->search()->getData();
            $customer_model->bilkey = $customerTemp[0]->attributes['bilkey'];            
        }
        
        if (isset($_POST['payment_status']))
        {             
            if ($_POST['payment_status'] == "Completed" || $_POST['payment_status'] == "Pending")
            {               
                $city = Goodcity::model()->findByPk($_POST['item_number']);  
                
                $this->sendEmailConfirmation($customer_model, $city, $commande_model, $_POST['txn_id'], $this->getInvoiceTotals($customer_model, $commande_model));
                
                    $this->render('application/2-orderform', array(                
                    'goodcity'=>$city,
                    'thanks'=>true,
                    'payment_type'=>"paypal",
                    'payment_method'=>"email",
                    'order_totals'=>$this->getInvoiceTotals($customer_model, $commande_model),
                    'customer_model'=>$customer_model,
                    'commande_model'=>$commande_model,
                    'auth_code'=>$_POST['txn_id'],
                     ));
                    
                
            }
            else
            {
                $this->redirect(array('user/order', 
                'transactionError'=>true,
                ));
            }
        }
        else
        {
            $city = Goodcity::model()->findByPk($commande_model['comgoodcitykey']);                
                $this->redirect(array('user/signup', 
                'city'=>$commande_model['comgoodcitykey'],
                ));
            
        }
    }
    
    public function sendEmailConfirmation($customer_model, $city, $commande_model, $auth_code, $order_totals){     
        
        $to = "$customer_model->bilemail";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: MailNetwork <MailNetwork.com>' . "\r\n";
        $headers .= "BCC: mailnetwork@globalia.ca" . "\r\n";
        $subject = "MailNetwork Confirmation";
        $content = $this->renderPartial('application/2-orderform', array(                
                       'goodcity'=>$city,
                       'thanks'=>true,
                       'payment_type'=>"paypal",
                       'payment_method'=>"email",
                       'order_totals'=>$this->getInvoiceTotals($customer_model, $commande_model),
                       'customer_model'=>$customer_model,
                       'commande_model'=>$commande_model,
                       'auth_code'=>$auth_code,
                        ), true);
        mail($to, $subject, $content, $headers);
          
    }

    public function sendEmailConfirmationNotCredit($customer_model, $city, $commande_model, $order_totals, $payment_type, $payment_method){     
        
        $to = "$customer_model->bilemail";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: MailNetwork <MailNetwork.com>' . "\r\n";
        $headers .= "BCC: mailnetwork@globalia.ca" . "\r\n";
        $subject = "MailNetwork Confirmation";
        $content = $this->renderPartial('application/2-orderform', array(                
                       'goodcity'=>$city,
                       'thanks'=>true,
                       'payment_type'=>$payment_type,
                       'payment_method'=>$payment_method,
                       'order_totals'=>$this->getInvoiceTotals($customer_model, $commande_model),
                       'customer_model'=>$customer_model,
                       'commande_model'=>$commande_model,
                        ), true);
        mail($to, $subject, $content, $headers);
          
    }
    
    public function passwordUsernameVerification($customer){        
        $custTemp = $customer->search()->getData();
        if(empty($custTemp))
            return true;
        if($custTemp[0]->attributes['billogin'] != $customer->attributes['billogin'])
            return true;
        if ($custTemp[0]->attributes['billogin'] == $customer->attributes['billogin'] && $custTemp[0]->attributes['bilpass'] == $customer->attributes['bilpass']){            
            return true;            
        }
        else{            
            return false;
        }
    }
    
    public function emailValidation($customer){
        $custTemp = $customer->search()->getData();
        if(empty($custTemp))
            return true;
        if ($custTemp[0]->attributes['bilemail'] == $customer->attributes['bilemail'] && $custTemp[0]->attributes['billogin'] == $customer->attributes['billogin']){            
            return true;            
        }
        else{            
            return false;
        }
    }
}