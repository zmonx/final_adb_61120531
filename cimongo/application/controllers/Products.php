<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
    }
    public function index()
    {
        $search = $this->input->get('search');
        $name = $this->input->get('name');
        $category_id = $this->input->get('category_id');
        $data['name'] = $name;
        $data['search'] = $search;
        $data['category_id'] = $category_id;
        $condition = [];
        if (!empty($search)) {
            if (!empty($name)) {
                $condition['product_name'] = array('$regex' => $name);
                
            }
            if (!empty($category_id)) {
                $condition['category'] = $this->mongo_db->create_document_id($category_id);
                // $condition['category'] = $category_id;
            }
        }
        
        $data['category'] = $this->category_model->findAll();
        $data['products'] = $this->product_model->findAll($condition);
        
        $this->load->view('layout/index');
        //	$this->load->view('layout/left-menu',$data);
        $this->load->view('products/content', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['category'] = $this->category_model->findAll();
        $data['products'] = $this->product_model->findAll();
        $this->load->view('layout/index');
        $this->load->view('products/create/content', $data);
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $product_name = $this->input->post('product_name');
        $Price = $this->input->post('Price');
        $category = $this->input->post('category');

        $data = array(
            "product_name" => $product_name,
            "Price" => $Price,
            "category" => $this->mongo_db->create_document_id($category)
        );
        

        $id = $this->product_model->insert($data);
        if (!empty($id)) {
            $this->session->set_flashdata('success-msg', 'Product Added');
            redirect('Products');
        } else {
            echo "error";
        }
    }
}
