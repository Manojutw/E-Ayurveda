<?php
    session_start();
    echo $_SESSION['Amount']=$_POST['amount'];
    require_once('vendor/autoload.php');

    $API_KEY = "test_957629c7aed39407d95583ad671";
    $AUTH_TOKEN = "test_cb666d0341d8880bf220727d162";
    $URL = "https://test.instamojo.com/api/1.1/";

    $api = new Instamojo\Instamojo($API_KEY, $AUTH_TOKEN, $URL);
    echo $amt=$_POST['amount'];
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "Ayurveda Online Booking",
            "amount" => $amt,
            "buyer_name" => $_POST["name"],
            "send_email" => true,
            "email" => $_POST["email"],
            "phone" => $_POST["phone"],
            "redirect_url" => "http://localhost:8081/MyProject/Frontend/payment-success.php"
            ));
            
            header('Location: ' . $response['longurl']);
            exit();
    }catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }

?>