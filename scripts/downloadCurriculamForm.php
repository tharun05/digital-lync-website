<?php
    if (isset($_POST['submit'])) {
        $sname = $_POST['sname'];
        $mobile_form = $_POST['mobile'];
        $email_form = $_POST['email'];     
        $mobile = preg_match("/^[0-9\-]|[\+0-9]|[0-9\s]|[0-9()]*$/", $mobile_form)?$mobile_form:"invalid Mobile";
        $email = preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_form)?$email_form:"invalid email";

        $to = "haripoornakumar@gmail.com";

        $subject = "Mail from Website contact Form";

        $str = $sname . "  has contacted us on contact page of our website  whose mobile number is". $mobile . "   and email address is  " . $email;
        $txt = "Name of lead :  ". $sname."\r\n".
                " Email of lead is : ". $email."\r\n".
                 "Mobile number of lead is : ".$mobile;
            @mail($to,$subject,$str,$txt);
            header('location:http:url=../views/curriculum.html"');
            /*header( "refresh:2;url=../views/curriculum.html" );*/
            /*echo "<h1>Thank you...! we contact you soon</h1>";*/
            }
            else{
                echo "ERROR!";
            }
?>