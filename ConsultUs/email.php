<?php include('../Db_Connection/indexDB.php');?>
<?php

/*
Basic PHP script to handle Instamojo RAP webhook.
*/

$data = $_POST;
$payment_id = $data['payment_id'];            //data of user
$payment_request_id = $data['payment_request_id'];
$status = $data['status'] ;
$email = $data['buyer'];
$phone = $data['buyer_phone'];
$purpose= $data['purpose'];
$date_purchase = date('Y-m-d H:i:s');
$end_date = date("Y-m-d", strtotime("+1 month"));

//email
$to = $email;
$from = "yashasvipundeer@gmail.com";
$subject= $purpose;
$message = [
  "msg: This mail is regarding invoice of item you have purchased",
"payment id : $payment_id",
"status  : $status",
"email : $email",
"phone : $phone",
"date  : $date_purchase",
];
$sms= implode("\r\n",$message);
$header=[
  "MIME-Version: 1.0",
  "Content-type: text/plain; charset=utf-8",
  "From : $from"
];
$headers= implode("\r\n",$header);

$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}
// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without <>
$mac_calculated = hash_hmac("sha1", implode("|", $data), "3ddf402ebcb446d889e9ef2a5edbc820");
if($mac_provided == $mac_calculated){
    if($data['status'] == "Credit"){
        $sql ="INSERT INTO `webhook`( `imojo`, `payment_id`, `status`,`email`,`phone`,`purpose`,`date_of_purchase`) VALUES ('$payment_id','$payment_request_id','$status','$email','$phone','$purpose','$date_purchase')";
        $sql2 = "UPDATE `appointment` SET `status`='active' WHERE `email`='$email'";
   $res2= mysqli_query($conn,$sql2);     
   $res = mysqli_query($conn,$sql);

        if($res){
            echo "data entry sucessfull";
            if(mail($to,$subject,$sms,$headers)){

              echo" msg send";}
              
              else{
                echo "failed to send";
              }
        }

        // Payment was successful, mark it as successful in your database.
        // You can acess payment_request_id, purpose etc here. 
    }
    else{
        // Payment was unsuccessful, mark it as failed in your database.
        // You can acess payment_request_id, purpose etc here.
    }
}
else{
    echo "MAC mismatch";
}

?>