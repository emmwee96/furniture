<?php

class Email_model extends Base_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function send_email($email, $title, $email_body)
    {
        $this->load->library('email');

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'noreply.furniture@gmail.com',
            'smtp_pass' => 'swfrtwvfketzmeez',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'newline' => "\r\n"
        );

        $this->email->initialize($config);

        $this->email->clear();

        $this->email->from('noreply.furniture@gmail.com', "Furniture");
        $this->email->to($email);
        $this->email->reply_to('noreply.furniture@gmail.com', "Furniture");

        $this->email->subject($title);

        $this->email->message($email_body);

        if ($this->email->send()) {
            
        } else {
            echo $this->email->print_debugger();
        }
    }

}
