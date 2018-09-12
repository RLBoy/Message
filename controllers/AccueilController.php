<?php 

        require 'TwiTwi/Twilio/autoload.php';
        use Twilio\Rest\Client;
class AccueilController{
	
	public function __construct() {

	}
			
	public function run(){	
        
        
        $notification = '';
        

        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = 'AC613928773dad56b0d9e2b979109fa81d';
        $auth_token = '7334385bf3537814482a6f7f7f53f9e8';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

        // A Twilio number you own with SMS capabilities
        $twilio_number = "+32460207717";

        $client = new Client($account_sid, $auth_token);
        
    if(!empty($_POST['send'])){
            if(!empty($_POST['message'])){
                $message = $_POST['message'];
               $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+32496391088',
            array(
                'from' => $twilio_number,
                'body' => $message
            )
        ); 
                $notification = 'ok';
            }else{
               $notification = 'pas de message'; 
            }
        
    }   
        
		
		# Un contrôleur se termine en écrivant une vue
		require_once(CHEMIN_VUES . 'accueil.php');
	}
	
}
?>