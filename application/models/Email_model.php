<?php

class Email_model extends CI_Model {

    public function __construct() {
        parent::__construct();

        define("USER", "cyyang9448@gmail.com");
        define("PASS","wofzpeacrlheqckq");
    }

    function sendGmail($target,$subject,$message){
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = USER;
        $config['smtp_pass']    = PASS;
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      
        $this->load->library("Email");
        $this->email->initialize($config);

        $this->email->from('noreply@dev1.commonextract.com', 'Furniture');
        $this->email->to($target); 

        $this->email->subject($subject);
        $this->email->message($message);  

        $this->email->send();
        return $this->email->print_debugger();

    }



    public function sendMail($target, $subject, $message, $attachment = null) {
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
    <title>' . html_escape($subject) . '</title>
    <style type="text/css">
        html {
        width : 100%;
        }
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
            width : 100%;
        }
        
        #footer_img{
            width : 100%;
            height : auto;
        }
    </style>
</head>
<body>
' . $message . '
    
<img src="'.site_url().'/images/footer.png" id="footer_img" />
</body>
</html>';

        $this->load->library("email");
        $mail = new PHPMailer();

        $auth = true;

        if ($auth) {
            $mail->SMTPDebug = 0;
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->Username = USER;
            $mail->Password = PASS;
        }

        $mail->AddAddress($target);
        $mail->SetFrom(USER, "Liang Court");
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        try {
            if($mail->Send()){
                return true;
            }
            return $mail->ErrorInfo;
        } catch (Exception $e) {
            //echo $mail->ErrorInfo;
            return $mail->ErrorInfo;
        }
        return "sent";
    }

}
