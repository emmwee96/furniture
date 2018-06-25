<?php

Class Email_preview extends Base_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function quotation(){
        $this->load->view("Email/quotation", "refresh");
    }
}

?>