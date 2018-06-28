<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faq extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->page_data = array();

        if (!$this->session->has_userdata("login_data")) {
            redirect("access/login", "refresh");
        }

        $this->load->model("Faq_model");
        $this->load->model("Faq_category_model");
    }

    public function index()
    {

        $faq = $this->Faq_model->get_all();

        $this->page_data["faq"] = $faq;

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Faq/all");
        $this->load->view("admin/footer");
    }

    public function add()
    {

        if ($_POST) {
            $input = $this->input->post();

            $error = false;

            if (!$error) {

                $data = array(
                    'title' => $input['title'],
                    'faq_category_id' => $input['faq_category_id'],
                    'content' => $input['content']
                );

                $this->Faq_model->insert($data);

                redirect("faq", "refresh");
            }
        }

        $this->page_data["faq_category"] = $this->Faq_category_model->get_all();

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Faq/add");
        $this->load->view("admin/footer");
    }

function details($faq_id)
    {

        $where = array(
            "faq_id" => $faq_id
        );

        $faq = $this->Faq_model->get_where($where);

        $this->show_404_if_empty($faq);

        $this->page_data["faq"] = $faq[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Faq/details");
        $this->load->view("admin/footer");
    }

    function edit($faq_id)
    {

        if ($_POST) {
            $input = $this->input->post();

            $error = false;

            if (!$error) {
                $where = array(
                    'faq_id' => $faq_id
                );

                $data = array(
                    'title' => $input['title'],
                    'faq_category_id' => $input['faq_category_id'],
                    'content' => $input['content']
                );

                $this->Faq_model->update_where($where, $data);

                redirect('faq/details/' . $faq_id, "refresh");
            }
        }

        $where = array(
            "faq_id" => $faq_id
        );

        $faq = $this->Faq_model->get_where($where);

        $this->show_404_if_empty($faq);

        $this->page_data["faq"] = $faq[0];
        $this->page_data["faq_category"] = $this->Faq_category_model->get_all();


        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/Faq/edit");
        $this->load->view("admin/footer");
    }

    function delete($faq_id)
    {
        $this->Faq_model->soft_delete($faq_id);

        redirect("faq", "refresh");
    }

}
