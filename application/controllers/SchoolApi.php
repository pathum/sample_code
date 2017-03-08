<?php

require(APPPATH.'libraries/REST_Controller.php');

class SchoolApi extends REST_Controller {

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
     * add student to school
     */
    function student_put()
    {
        $data = array(
            'student_name' => $this->put('name'),
            'class_id' => $this->put('classID'),
            'description' => $this->put('description'),
            'age' => $this->put('age'),
            'gender' => $this->put('gender'),
            'contact_no' => $this->put('contactNo'),
        );

        $id = $this->StudentModel->addStudent($data);
        if($id){
            $data = array('returned: '. $id);
        }else{
            $data = array(array('error' => 'Student update fail'), 500);
        }

        $this->response($data);
    }

    /*
     *
     * get grade list
     */

    function grade_get()
    {

        $gradeList = $this->GradeModel->getGrade();
        $this->response($gradeList, 200);
    }

    /*
     *
     * get class list
     */
    function classes_get()
    {
        $gradeList = $this->SchoolClassModel->getSchoolClass();
        $this->response($gradeList, 200);
    }

    /*
     *
     * get student list from class
     */
    function student_get()
    {
        $classId = $this->get('class');
        if(!$classId)
        {
            $this->response(NULL, 400);
        }
        if($classId)
        {
            $gradeList = $this->StudentModel->getStudentByClass($classId);
            $this->response($gradeList, 200);
        }
        else
        {
            $this->response(NULL, 404);
        }

    }

    /*
     *
     * delete class
     * it will delete related student too
     */
    function class_delete()
    {
        $classId = $this->delete('class');
        
        if(!$classId)
        {
            $this->response(NULL, 400);
        }
        if($classId)
        {
            $classId = $this->SchoolClassModel->deleteClass($classId);
            $this->response($classId, 200);
        }
        else
        {
            $this->response(NULL, 404);
        }

    }
}
