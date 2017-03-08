<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Student extends CI_Controller
{
    /*
     * load required model
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StudentModel');
        $this->load->model('SchoolClassModel');
        $this->load->helper('url_helper');
    }

    /*
     *
     * load student list
     */
    public function index()
    {
        $data['students'] = $this->StudentModel->getStudent();
        $this->load->view('layout/header',$data);
        $this->load->view('student/studentList',$data);
        $this->load->view('layout/footer');
    }

    /*
     *
     * load form for adding student
     */
    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['classes'] = $this->SchoolClassModel->getSchoolClassList();
        $data['title'] = 'Create student';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('age', 'age', 'required');
        $this->form_validation->set_rules('contactNo', 'Contact No', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout/header',$data);
            $this->load->view('student/studentAdd',$data);
            $this->load->view('layout/footer');
        }
        else
        {
            $data = array(
                'student_name' => $this->input->post('name'),
                'class_id' => $this->input->post('classID'),
                'description' => $this->input->post('description'),
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'contact_no' => $this->input->post('contactNo'),
            );
            $this->StudentModel->addStudent($data);
            redirect( base_url() . 'index.php/student');
        }

    }

    /*
     *
     * delete student
     */
    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->StudentModel->deleteStudent($id);
        redirect( base_url() . 'index.php/student');
    }

}