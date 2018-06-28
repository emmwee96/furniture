<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faq_category extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->page_data = array();

        if (!$this->session->has_userdata("login_data")) {
            redirect("access/login", "refresh");
        }

        $this->load->model("Faq_category_model");
    }

    public function index()
    {

        $faq_category = $this->Faq_category_model->get_all();

        $this->page_data["faq_category"] = $faq_category;

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Faq_category/all");
        $this->load->view("admin/footer");
    }

    public function add()
    {

        if ($_POST) {
            $input = $this->input->post();

            $error = false;

            if (!$error) {

                $data = array(
                    'faq_category' => $input['faq_category']
                );

                $this->Faq_category_model->insert($data);

                redirect("faq_category", "refresh");
            }
        }

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Faq_category/add");
        $this->load->view("admin/footer");
    }

    function details($faq_category_id)
    {

        $where = array(
            "faq_category_id" => $faq_category_id
        );

        $faq_category = $this->Faq_category_model->get_where($where);

        $this->show_404_if_empty($faq_category);

        $this->page_data["faq_category"] = $faq_category[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Faq_category/details");
        $this->load->view("admin/footer");
    }

    function edit($faq_category_id)
    {

        if ($_POST) {
            $input = $this->input->post();

            $error = false;

            if (!$error) {
                $where = array(
                    'faq_category_id' => $faq_category_id
                );

                $data = array(
                    'faq_category' => $input['faq_category'],
                );

                $this->Faq_category_model->update_where($where, $data);

                redirect('faq_category/details/' . $faq_category_id, "refresh");
            }
        }

        $where = array(
            "faq_category_id" => $faq_category_id
        );

        $faq_category = $this->Faq_category_model->get_where($where);

        $this->show_404_if_empty($faq_category);

        $this->page_data["faq_category"] = $faq_category[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Faq_category/edit");
        $this->load->view("admin/footer");
    }

    function delete($faq_category_id)
    {
        $this->Faq_category_model->soft_delete($faq_category_id);

        redirect("faq_category", "refresh");
    }

}
