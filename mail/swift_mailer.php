<?php
const HOST = "localhost";
const PORT = 1025;
const SENDER = "rasolonjatovohery0011@gmail.com";
const FROM = "rasolonjatovohery0011@gmail.com";
const PASSWORD = "hery0011";
try {

    require_once './vendor/autoload.php';
} catch (Exception $exception) {
    require_once '../vendor/autoload.php';
}
// Create the Transport
try {

    $transport = (new Swift_SmtpTransport(HOST, PORT))
//    ->setUsername(SENDER)
//    ->setPassword(PASSWORD)
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

} catch (Exception $exception) {
    echo "An error occured";die;
}
