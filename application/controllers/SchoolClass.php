<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SchoolClass extends CI_Controller
{
    /*
     * 
     * load required model
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GradeModel');
        $this->load->model('SchoolClassModel');
        $this->load->model('StudentModel');
        $this->load->helper('url_helper');
    }

    /*
     * 
     * list all classes
     */
    public function index()
    {
        $data['classes'] = $this->SchoolClassModel->getSchoolClass();
        $this->load->view('layout/header',$data);
        $this->load->view('class/classlist',$data);
        $this->load->view('layout/footer');
    }

    /*
     *
     * form for add class
     */
    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['grades'] = $this->GradeModel->getGrade();
        $data['students'] = $this->StudentModel->getStudent();
        $data['title'] = 'Create class';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('gradeID', 'Grade', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout/header',$data);
            $this->load->view('class/classAdd',$data);
            $this->load->view('layout/footer');
        }
        else
        {
            $this->SchoolClassModel->addClass();
            redirect( base_url() . 'index.php/schoolclass');
        }

    }

    /*
     *
     * delete class
     */
    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->SchoolClassModel->deleteClass($id);
        redirect( base_url() . 'index.php/schoolclass');
    }

}