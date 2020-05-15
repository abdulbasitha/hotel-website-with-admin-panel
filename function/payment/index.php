

<?php
function payment($name,$phno,$amount,$mail,$purpose)
{




$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com//api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:1f80fa0d044c524528cc9161c46d5d95",
                  "X-Auth-Token:4915a86de2dd815bf4b33a2349c519d3"));
$payload = Array(
    'purpose' => $purpose,
    'amount' => $amount,
    'phone' => $phno,
    'buyer_name' => $name,
     'redirect_url' => 'http://localhost/resort/function/payment/s.php',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => true,
    'email' => $mail,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$result = json_decode($response  ,true);
if($url=$result['payment_request']['longurl'])
header('location:'.$url);
else
{
    session_destroy();
    session_start();
    $_SESSION['notification']="Oops!!! Something Went Wrong Please Try Again";
    $_SESSION['notification_type']="alert alert-danger alert-dismissible fade in";
    header('location:../contact-us.php');
}

}

?>