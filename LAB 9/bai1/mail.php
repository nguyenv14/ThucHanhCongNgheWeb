<?php

use PHPMailer\PHPMailer\PHPMailer;

    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/Exception.php";
    require "PHPMailer-master/src/SMTP.php";
    $mail = new PHPMailer(true);

    try{
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
		$nguoigui = 'nguyennvv.21it@vku.udn.vn';
		$matkhau = 'pflcqxxqoyhsearh';
        $tennguoigui = 'Vĩnh Nguyên';
        $mail->Username = $nguoigui; // SMTP username
        $mail->Password = $matkhau;   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom($nguoigui, $tennguoigui ); 
        $to = "nguyenvy1470@gmail.com";
        $to_name = "Nguyễn Văn Vĩnh Nguyên";
        
        $mail->addAddress($to, $to_name); //mail và tên người nhận
       // $mail->addAddress("nlquan@vku.udn.vn","lequan");
        /* $recipients = "test1@test.com,test2@test.com,test3@test.com,test1@test.com";
$email_array = explode(",",$recipients);*/
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Gửi thư từ php';      
        $noidungthu = "<b>Chào bạn!</b><br>Chúc an lành!" ;
        $mail->Body = $noidungthu;
        // $mail->AddAttachment("4.jpg","picture");
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 'Đã gửi mail xong';
        
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }


?>