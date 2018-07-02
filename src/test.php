<?php

use app\book;
use app\textbook;
use app\model;

require_once __DIR__. "/vendor/autoload.php";
//require __DIR__."/classes/move.php";
//require __DIR__."/library/lib.php";

$errorHandler = new \Whoops\Run;
$errorHandler->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$errorHandler->register();

//"swiftmailer/swiftmailer" : "^6.0"

//phpinfo();

new book();
echo "<br />";

new lib();
echo "<br />";

new textbook();
echo "<br />";

new move();
echo "<br />";

new model();
echo "<br />";

connect();

/*use Carbon\Carbon;

$credentials = require __DIR__."/config/mail.php";

$today = carbon::now()->toDayDateTimeString();

//$smtp_host_ip = gethostbyname('smtp.gmail.com');

$mail_transport = (new Swift_SmtpTransport(

//$smtp_host_ip,$credentials['port'],$credentials['secured']
//))->setUsername($credentials['username'])->setPassword($credentials['password']);

$credentials['host'],$credentials['port'],$credentials['secured']
))->setUsername($credentials['username'])->setPassword($credentials['password']);

$mailer= new Swift_Mailer($mail_transport);


$message = (new Swift_Message('Testing SwiftMailer'))
->setfrom(['lllLeoricKlll@gamil.com'=>"Parn"])
->setTo(['lllLeoricKlll@gmail.com'=>'Name'])
->setBody('I am using swiftmailer','text/html');

echo $mailer->send($message) ? $result="Message sent successful": $result="Sending failed";*/

?>