<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends Base_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model("Wardrobe_model");
        $this->load->model("Category_model");
        $this->load->model("Custom_Product_model");
        $this->load->model("Custom_product_options_model");
        $this->load->model("Custom_product_add_ons_model");
        $this->load->model("Custom_product_fields_model");

        if (!$this->session->has_userdata("login_data")) {
            redirect("access/login", "refresh");
        }

        if (!$this->session->has_userdata("cart")) {
            $this->session->set_userdata("cart", array());
        }

        $this->page_data = array();
    }
    public function index()
    {
        $products = $this->Custom_Product_model->get_all();

        $this->page_data = array(
            "products" => $products
        );
        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/product/all");
        $this->load->view("admin/footer");
    }

    public function details($product_id)
    {

        $where = array(
            'custom_product_id' => $product_id
        );

        $product = $this->Custom_Product_model->get_where($where);

        $this->page_data['products'] = $product[0];
        $where = array(
            'custom_product_id' => $product_id,
            "recommended" => 0
        );
        $this->page_data['images'] = $this->Custom_Product_model->get_images_where($where);
        $where = array(
            'custom_product_id' => $product_id,
            "recommended" => 1
        );
        $this->page_data['recommended_images'] = $this->Custom_Product_model->get_images_where($where);

        $this->page_data["selection_labels"] = $this->Custom_Product_model->get_labels($product_id);

        $this->page_data["add_ons"] = $this->Custom_Product_model->get_add_ons($product_id);

        // $this->debug($this->page_data["add_ons"]);

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/product/details');
        $this->load->view('admin/footer');
    }

    public function edit_details($custom_product_id)
    {
        $where = array(
            'custom_product_id' => $custom_product_id
        );

        $product = $this->Custom_Product_model->get_where($where);

        $this->page_data['product'] = $product[0];

        if ($_POST) {
            $input = $this->input->post();

            if (!empty($_FILES['banner']['name'])) {
                $config = array(
                    "allowed_types" => "gif|png|jpg|jpeg",
                    "upload_path" => "./images/product/custom/",
                    "path" => "/images/product/custom/"
                );

                $this->load->library("upload", $config);
                if ($this->upload->do_upload("banner")) {
                    $thumbnail = $config['path'] . $this->upload->data()['file_name'];
                } else {
                    die(json_encode(array(
                        "status" => false,
                        "message" => $this->upload->display_errors()
                    )));
                }
            } else {
                $thumbnail = $product[0]['banner'];
            }

            $input['banner'] = $thumbnail;

            $this->Custom_Product_model->update($custom_product_id, $input);

            die(json_encode(array(
                "status" => true
            )));
        }

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/product/edit_details');
        $this->load->view('admin/footer');
    }

    public function edit_images($custom_product_id)
    {
        $where = array(
            'custom_product_id' => $custom_product_id,
            "recommended" => 0
        );

        $this->page_data['images'] = $this->Custom_Product_model->get_images_where($where);

        $this->page_data['custom_product_id'] = $custom_product_id;

        if ($_FILES) {

            if (!empty($_FILES['images']['error'][0] != 4)) {
                if (!empty($_FILES['images']['name'])) {
                    $files_count = count($_FILES["images"]['name']);

                    for ($i = 0; $i < $files_count; $i++) {
                        $_FILES['image']['name'] = $_FILES['images']['name'][$i];
                        $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                        $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                        $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                        $_FILES['image']['size'] = $_FILES['images']['size'][$i];

                        $config = array(
                            "allowed_types" => "gif|png|jpg|jpeg",
                            "upload_path" => "./images/product/custom/",
                            "path" => "/images/product/custom/"
                        );

                        $this->load->library("upload", $config);

                        if ($this->upload->do_upload('image')) {
                            $url = $config['path'] . $this->upload->data()['file_name'];

                            $this->Custom_Product_model->add_image($url, $custom_product_id);
                        } else {
                            die(json_encode(array(
                                "status" => false,
                                "message" => $this->upload->display_errors()
                            )));
                        }
                    }
                }
            }


            die(json_encode(array(
                "status" => true
            )));
        }

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/product/edit_images');
        $this->load->view('admin/footer');
    }

    public function edit_recommended_images($custom_product_id)
    {
        $where = array(
            'custom_product_id' => $custom_product_id,
            "recommended" => 1
        );

        $this->page_data['images'] = $this->Custom_Product_model->get_images_where($where);

        $this->page_data['custom_product_id'] = $custom_product_id;

        if ($_FILES) {

            if (!empty($_FILES['images']['error'][0] != 4)) {
                if (!empty($_FILES['images']['name'])) {
                    $files_count = count($_FILES["images"]['name']);

                    for ($i = 0; $i < $files_count; $i++) {
                        $_FILES['image']['name'] = $_FILES['images']['name'][$i];
                        $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                        $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                        $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                        $_FILES['image']['size'] = $_FILES['images']['size'][$i];

                        $config = array(
                            "allowed_types" => "gif|png|jpg|jpeg",
                            "upload_path" => "./images/product/custom/",
                            "path" => "/images/product/custom/"
                        );

                        $this->load->library("upload", $config);

                        if ($this->upload->do_upload('image')) {
                            $url = $config['path'] . $this->upload->data()['file_name'];

                            $this->Custom_Product_model->add_image($url, $custom_product_id, true);
                        } else {
                            die(json_encode(array(
                                "status" => false,
                                "message" => $this->upload->display_errors()
                            )));
                        }
                    }
                }
            }


            die(json_encode(array(
                "status" => true
            )));
        }

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/product/edit_recommended_images');
        $this->load->view('admin/footer');
    }

    public function delete_image($custom_product_image_id)
    {

        $where = array(
            "custom_product_image_id" => $custom_product_image_id
        );


        $image = $this->Custom_Product_model->get_images_where($where);

        $custom_product_id = $image[0]['custom_product_id'];

        $this->Custom_Product_model->delete_image($where);

        redirect('product/edit_images/' . $custom_product_id, 'refresh');
    }

    public function delete_recommended_images($custom_product_image_id)
    {

        $where = array(
            "custom_product_image_id" => $custom_product_image_id
        );


        $image = $this->Custom_Product_model->get_images_where($where);

        $custom_product_id = $image[0]['custom_product_id'];

        $this->Custom_Product_model->delete_image($where);

        redirect('product/edit_recommended_images/' . $custom_product_id, 'refresh');
    }

    function edit_prices($product_id)
    {

        $where = array(
            'custom_product_id' => $product_id
        );

        $product = $this->Custom_Product_model->get_where($where);

        $this->page_data['product'] = $product[0];
        $where = array(
            'custom_product_id' => $product_id,
            "recommended" => 0
        );
        $this->page_data['images'] = $this->Custom_Product_model->get_images_where($where);
        $where = array(
            'custom_product_id' => $product_id,
            "recommended" => 1
        );
        $this->page_data['recommended_images'] = $this->Custom_Product_model->get_images_where($where);

        $this->page_data["selection_labels"] = $this->Custom_Product_model->get_labels($product_id);

        $this->page_data["add_ons"] = $this->Custom_Product_model->get_add_ons($product_id);

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/product/edit_prices');
        $this->load->view('admin/footer');
    }

    function edit_option($custom_product_field_id)
    {
        if ($_POST) {
            $input = $this->input->post();

            $where = array(
                "custom_product_fields_id" => $custom_product_field_id
            );

            $options = $this->Custom_product_options_model->get_where($where);

            foreach ($options as $row) {
                $where = array(
                    "custom_product_options_id" => $row['custom_product_options_id']
                );

                $data = array(
                    "standard_white_pvc" => $input["standard_white_pvc_" . $row['custom_product_options_id']],
                    "standard_color_pvc" => $input["standard_color_pvc_" . $row['custom_product_options_id']],
                    "full_white_pvc" => $input["full_white_pvc_" . $row['custom_product_options_id']],
                    "full_color_pvc" => $input["full_color_pvc_" . $row['custom_product_options_id']],
                );

                $this->Custom_product_options_model->update_where($where, $data);
            }

            $where = array(
                "custom_product_field_id" => $custom_product_field_id
            );

            $custom_product_field = $this->Custom_product_fields_model->get_where($where);

            redirect("product/details/" . $custom_product_field[0]["custom_product_id"], "refresh");

        } else {
            show_404();
        }
    }

    function edit_add_on($custom_product_add_ons_id)
    {
        if ($_POST) {
            $input = $this->input->post();

            $where = array(
                "custom_product_add_ons_id" => $custom_product_add_ons_id
            );

            $data = array(
                "value" => $input["value"]
            );

            $this->Custom_product_add_ons_model->update_where($where, $data);

            $add_on = $this->Custom_product_add_ons_model->get_where($where);

            redirect("product/details/" . $add_on[0]["custom_product_id"], "refresh");
        } else {
            show_404();
        }
    }

    function delete_add_on($custom_product_id, $custom_product_add_ons_id)
    {

        $this->Custom_product_add_ons_model->hard_delete($custom_product_add_ons_id);

        redirect("product/details/" . $custom_product_id, "refresh");
    }

    function delete_option($custom_product_id, $custom_product_fields_id)
    {
        $where = array(
            "custom_product_field_id" => $custom_product_fields_id
        );

        $this->Custom_product_fields_model->hard_delete_where($where);

        $where = array(
            "custom_product_fields_id" => $custom_product_fields_id
        );

        $this->Custom_product_options_model->hard_delete_where($where);

        redirect("product/details/" . $custom_product_id, "refresh");
    }

    function add_add_on($custom_product_id)
    {
        if ($_POST) {
            $input = $this->input->post();

            $label_string_array = explode(" ", strtolower($input["label"]));

            $label_id = "c";
            foreach ($label_string_array as $row) {
                $label_id .= "_" . $row;
            }

            $data = array(
                "label" => $input["label"],
                "label_id" => $label_id,
                "value" => $input["value"],
                "custom_product_id" => $custom_product_id
            );

            $this->Custom_product_add_ons_model->insert($data);

            redirect("product/details/" . $custom_product_id, "refresh");
        }
    }

    function add_option($custom_product_id)
    {
        if ($_POST) {
            $input = $this->input->post();

            $label_string_array = explode(" ", strtolower($input["label"]));

            $label_id = "c";
            foreach ($label_string_array as $row) {
                $label_id .= "_" . $row;
            }

            $data = array(
                "label" => $input["label"],
                "label_id" => $label_id,
                "custom_product_id" => $custom_product_id
            );

            $custom_product_field_id = $this->Custom_product_fields_model->insert($data);

            for ($i = 0; $i < count($input["option_label"]); $i++) {
                $data = array(
                    "label" => $input["option_label"][$i],
                    "standard_white_pvc" => $input["standard_white_pvc"][$i],
                    "standard_color_pvc" => $input["standard_color_pvc"][$i],
                    "full_white_pvc" => $input["full_white_pvc"][$i],
                    "full_color_pvc" => $input["full_color_pvc"][$i],
                    "value" => 0,
                    "custom_product_fields_id" => $custom_product_field_id
                );

                $this->Custom_product_options_model->insert($data);
            }

            redirect("product/details/" . $custom_product_id, "refresh");

        } else {
            show_404();
        }
    }
}
