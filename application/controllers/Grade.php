<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grade extends CI_Controller {
    /*
     * load required model
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GradeModel');
        $this->load->model('SchoolClassModel');
        $this->load->helper('url_helper');
    }

    /*
     * list grade and show classes on grade base
     *
     */
    public function index()
    {
        $data['title'] = 'Grade';
        $data['grades'] = $this->GradeModel->getGrade();
        $classList = array();
        foreach ($data['grades'] as $grade){
            $classes = $this->SchoolClassModel->getClassByGrade($grade['grade_id']);
            $classList[] = array(
                'gradeName' => $grade['grade_name'],
                'classList' => $classes
            );
        }
        
        $data['classList'] = $classList;
        $this->load->view('layout/header',$data);
        $this->load->view('grade/gradeList',$data);
        $this->load->view('layout/footer');
    }

    /*
     * add create grade form
     *
     */
    public function add()
    {
        $this->load->helper('url_helper');
        $data['title'] = 'Add Grade';
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout/header',$data);
            $this->load->view('grade/add',$data);
            $this->load->view('layout/footer');
        }
        else
        {
            $this->GradeModel->addGrade();
            redirect( base_url() . 'index.php/grade');
        }

    }

    /*
     *
     * save form data
     */
    public function save()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->GradeModel->addGrade();
        redirect( base_url() . 'index.php/grade');

    }

    /*
     *
     * delete grade
     */
    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->GradeModel->deleteGrade($id);
        redirect( base_url() . 'index.php/grade/');
    }

}