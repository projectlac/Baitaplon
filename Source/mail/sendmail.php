<?php

//thư viện gửi mail
include ('class.smtp.php');
include ("class.phpmailer.php");


$nFrom = "Onmyoji Arena Wiki"; //mail duoc gui tu dau, thuong de ten cong ty ban

// Ở đây dùng gmail vì gmail hỗ trợ smtp => server gửi mail
// Còn nếu em dùng email của ĐH Thuỷ Lợi thì ko đc
$mFrom = 'mailaban198@gmail.com'; //dia chi gmail cua ban
$mPass = '01643132440'; //mat khau gmail cua ban


$nTo = ''; //Ten nguoi nhan
$mTo = $email; //dia chi nhan mail
$mail = new PHPMailer();
$body = 'Chúc mừng bạn đã là thành viên của Onmyoji Arena Wiki <p> Chúng tôi rất vui vì bạn đã tham gia! </p>'; // Noi dung email
$title = 'Chào bạn'; //Tieu de gui mail
$mail->IsSMTP();
$mail->CharSet = "utf-8";
$mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
$mail->Host = "smtp.gmail.com"; // sever gui mail.
$mail->Port = 465; // cong gui mail de nguyen
// xong phan cau hinh bat dau phan gui mail
$mail->Username = $mFrom; // khai bao dia chi email
$mail->Password = $mPass; // khai bao mat khau
$mail->SetFrom($mFrom, $nFrom);
$mail->AddReplyTo('mailaban198@gmail.com', 'Onmyoji Arena Wiki'); //khi nguoi dung phan hoi se duoc gui den email nay
$mail->Subject = $title; // tieu de email
$mail->MsgHTML($body); // noi dung chinh cua mail se nam o day.
$mail->AddAddress($mTo, $nTo);
// thuc thi lenh gui mail
if (!$mail->Send()) {
}
?>