<?php
   if($_SERVER['REQUEST_METHOD']=='POST'){
extract($_POST);

// echo '<pre>';
// print_r($_POST);
// exit;

$msg2 = "<p><h5>Name : </h5> " . $name . "</p>";
$msg2 .= "<h5>Email : </h5><p>" . $email . "</p>";
$msg2 .= "<h5>Number : </h5><p>" . $phone . "</p>";
$msg2 .= "<h5>Number : </h5><p>" . $subject . "</p>";
$msg2 .= "<h5>Message : </h5><p>" . $message . "</p>";


$to2 = "kumarianupria30@gmail.com";


$subject2 = "Contact Us Request";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <noreply@sredfitness.com>' . "\r\n";


$ismailSent = mail($to2, $subject2, $msg2, $headers);
if($ismailSent){
    echo '<script>
    alert("Message sent successfully ! Thank you");
    window.location.href = "index.php";
    </script>';
}
}
?>