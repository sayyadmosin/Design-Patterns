<?php


interface Notification {


	public function send(string $to,string $message):void;
}


class SendSms implements Notification {


	public function send(string $to,string $message):void{



		echo "sending SMS to $to and SMS is $message <br>";
	}


}

class SendEMail implements Notification {


	public function send(string $to,string $message):void{



		echo "sending Email to $to and Email is $message <br>";
	}


}


class NotificationFactory{

public static function initotification($type):Notification{

	switch($type){
		case "SMS":
			return new SendSms();
		case "EMail":
			return new 	SendEMail();

		default:
		throw new Exception("This method is not available");	

	}

}

}

try{
$email=NotificationFactory::initotification("EMail");


$email->send("mosin@gmail.com","this is email");

$sms=NotificationFactory::initotification("SMS");


$sms->send("8600432414","this is sms");

}
catch (Exception $e)
{
	echo $e->getMessage();
}



?>