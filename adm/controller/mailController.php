<?php

@session_start();
error_reporting(E_ERROR | E_PARSE);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $info = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', json_encode($_POST)), true);
} else {
    $info = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', json_encode($_GET)), true);
}

$controller = new mailController();
switch ($info[func]) {
    case "send":
        echo $controller->send($info);
        break;
    case "test":
        echo $controller->send($info);
        break;
}

class mailController {

    public function __construct() {
        include '../common/ConnectDB.php';
        include '../common/Utility.php';
        include '../common/Logs.php';
        include '../common/upload.php';
        include '../common/phpmailer.php';
        include '../service/mailService.php';
    }

    public function send($info) {


        if ($this->isValid($info) == 1) {

            $db = new ConnectDB();
            $util = new Utility();
            $mail = new PHPMailer(TRUE);
            $util->CopyTemplatedMail("../email/Email.html", "../email/Email_Temp.html", $info[detail]);
            $body = $mail->getFile('../email/Email_Temp.html');


            $service = new mailService();
            $_data = $service->getListEmail($db);

            if ($info[func] == "send") {
                if ($_data != NULL) {
                    foreach ($_data as $key => $value) {
                        $mail->SMTPSecure = 'tls';
                        $mail->SMTPAuth = true;
                        $mail->Host = "activegelthailand.com";
                        $mail->Hostname = "activegelthailand.com";
                        $mail->Username = "noreply@activegelthailand.com";
                        $mail->Password = "P@ssw0rd1";
                        $mail->Port = 465;
                        $mail->CharSet = 'utf-8';
                        $mail->From = "noreply@activegelthailand.com";
                        $mail->FromName = "ACTIVEGELTHAILAND";
                        $mail->Subject = "$info[subject]";
                        $mail->MsgHTML($body);
                        $mail->AddAddress($_data[$key]['s_email']);
                        $mailcommit = $mail->Send();
                    }
                    array_map('unlink', glob("../email/tmp_img/*.jpg"));
                    array_map('unlink', glob("../email/tmp_img/*.JPG"));
                    array_map('unlink', glob("../email/tmp_img/*.png"));
                    array_map('unlink', glob("../email/tmp_img/*.PNG"));
                    echo $_SESSION['cd_0000'];
                } else {
                    echo $_SESSION['cd_2001'];
                }
            } else {
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->Host = "activegelthailand.com";
                $mail->Hostname = "activegelthailand.com";
                $mail->Username = "noreply@activegelthailand.com";
                $mail->Password = "P@ssw0rd1";
                $mail->Port = 465;
                $mail->CharSet = 'utf-8';
                $mail->From = "noreply@activegelthailand.com";
                $mail->FromName = "ACTIVEGELTHAILAND";
                $mail->Subject = "$info[subject]";
                $mail->MsgHTML($body);
                $mail->AddAddress($util->getEmail());
                $mailcommit = $mail->Send();
                echo $_SESSION['cd_0000'];
            }
        }
    }

    public function isValid($info) {

        $valid = new Utility();
        $intReturn = 0;

        if ($valid->isEmpty($info[subject])) {
            $return2099 = $_SESSION['cd_2099'];
            $return2099 = eregi_replace("field", $_SESSION['lb_setCus_mail_subject'], $return2099);
            echo $return2099;
        } else if ($valid->isEmpty($info[detail])) {
            $return2099 = $_SESSION['cd_2099'];
            $return2099 = eregi_replace("field", $_SESSION['lb_setCus_mail_detail'], $return2099);
            echo $return2099;
        } else {
            $intReturn = 1;
        }
        return $intReturn;
    }

}
