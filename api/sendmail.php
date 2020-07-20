<?php
  /**
   * Sets error header and json error message response.
   *
   * @param  String $messsage error message of response
   * @return void
   */
    function errorResponse ($messsage) {
        header('HTTP/1.1 500 Internal Server Error');
        die(json_encode(array('message' => $messsage)));
    }

  /**
   * Pulls posted values for all fields in $fields_req array.
   * If a required field does not have a value, an error response is given.
   */
    function constructMessageBody () {
        $fields_req =  array("pichkaari_contact_name" => true,"pichkaari_contact_email" => true,"pichkaari_contact_phone" => true,"pichkaari_contact_message" => true,);
        $message_body = "";
        foreach ($fields_req as $name => $required) {
            $postedValue = $_POST[$name];
            if ($required && empty($postedValue)) {
                errorResponse("$name is empty.");
            } else {
                $message_body .= "<div style='border-bottom:1px solid black; background-color: #cccccc;padding:8px 5px;font-size: 15px;font-weight: bold; width:20%;display:inline-block;vertical-align:top;'>".ucfirst($name) .":</div><div style='margin:8px;display:inline-block;width:69%;vertical-align:top;'>" . $postedValue . "</div><br>";
            }
        } 
        return $message_body;
    }

    header('Content-type: application/json');

    //attempt to send email
    $messageBody = constructMessageBody();
    require './vender/php_mailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();


    //From email address and name
    $mail->From = "hello@pichkaari.com";
    $mail->FromName = "Web form";

    //To address and name
    $mail->addAddress("surendra@pichkaari.com", "Pichkaari");


    //Address to which recipient will reply
    $mail->addReplyTo($_POST['Email'], "Reply");

    //CC and BCC
    $mail->addCC("");
    $mail->addBCC("");

    //Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = "Website contact request | " .$_POST['Name']. "";
    $mail->Body  = $messageBody;


    //try to send the message
    if($mail->send()) {
        echo json_encode(array('message' => 'We received your email. We will contact you shortly.'));
    } else {
        errorResponse('An expected error occured while attempting to send the email: ' . $mail->ErrorInfo);
        alert($mail->ErrorInfo);
    }
?>
