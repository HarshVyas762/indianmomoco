<?php
    if(!empty($_POST['cs_email'])){
        
        //Array ( [] => yes [] => yes [] => yes [] => yes [cs_msg] => Msg [submitfrm] => ) Oops!, Somethings went worng.
        
        //print_r($_POST);
        
        require_once 'PHPMailer-master/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        
        $mail->Host='smtp-relay.sendinblue.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        
        //$mail->SMTPDebug  = 2;
        
        $mail->Username='indianmomoco.business@gmail.com';
        $mail->Password='AJ8BpvIZm4hPRQ0q';
        
        $mail->setFrom("webmaster@indianmomoco.com", 'The Indian Momoco');
        $mail->addAddress('Sachin.pradhan@vmrestaurantconsultants.com');
        $mail->addAddress('Vsfoodiecorner@vmrestauratconsultants.com');
        $mail->addAddress('Dharmeshsuryavanshi@gmail.com');
        $mail->addAddress('franchise@vmrestaurantconsultants.com');
        $subject = "New enquiry - ".$_POST['cs_subject'];
        
        $formcontent = "<b>Contact Information</b><br>Name: ".$_POST['cs_name']."<br>Email Id: ".$_POST['cs_email']."<br>Mobile No.: ".$_POST['cs_phone']."<br>Current Occupation: ".$_POST['cs_co']."<br>City: ".$_POST['cs_city']."<br>Country: ".$_POST['cs_country']."<br><br><b>Company Details</b><br>Company: ".$_POST['cs_company']."<br>Industry: ".$_POST['cs_industry']."<br>Year Estabishment: ".$_POST['cs_estab']."<br>Telephone number: ".$_POST['cs_tel']."<br>Website: ".$_POST['cs_web']."<br>City: ".$_POST['cs_city2']."<br>Country: ".$_POST['cs_country2']."<br>Have you ever been involved in Franchising? : ".$_POST['cs_fr']."<br>Do you have any prior Food & Beverage Industry Experience? : ".$_POST['cs_exp']."<br>What is your allocated investment for the proposed franchise venture(s)?: ".$_POST['cs_pr']."<br>What type of Franchise Venture are you interested in? : ".$_POST['cs_frin']."<br><br>".$_POST['contactmsg'];
        
        $mail->Subject = $subject;
        $mail->Body    = $formcontent;
        
        if($mail->Send()){
            echo"Enquiry has been successfully sent.";
        }else{
            echo"Oops!, Somethings went worng.";
        }
    }
    if(!empty($_POST['cn_ename'])){
        //Array ( [cn_fname] => Vivek [cn_lname] => Raj [cn_ename] => vivekrajraja@gmail.com [cn_pname] => +917240052638 [contactmsg] => Hi [submitcontact] => )
        
        require_once 'PHPMailer-master/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        
        $mail->Host='smtp-relay.sendinblue.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        
        //$mail->SMTPDebug  = 2;
        
        $mail->Username='indianmomoco.business@gmail.com';
        $mail->Password='AJ8BpvIZm4hPRQ0q';
        
        $mail->setFrom("webmaster@indianmomoco.com", 'The Indian Momoco');
        $mail->addAddress('Sachin.pradhan@vmrestaurantconsultants.com');
        $mail->addAddress('Vsfoodiecorner@vmrestauratconsultants.com');
        $mail->addAddress('Dharmeshsuryavanshi@gmail.com');
        $mail->addAddress('iwebbrella@gmail.com');
        
        $subject = "New enquiry from website";
        
        $formcontent = "Name: ".$_POST['cn_fname']."<br>Email Id: ".$_POST['cn_ename']."<br>Mobile No.: ".$_POST['cn_pname']."<br><br>New inquiry received from indianmomoco.com website.<br><br>".$_POST['contactmsg'];
        
        $mail->Subject = $subject;
        $mail->Body    = $formcontent;
        
        if($mail->Send()){
            echo"Enquiry has been successfully sent.";
        }else{
            echo"Oops!, Somethings went worng.";
        }
    }
?>
