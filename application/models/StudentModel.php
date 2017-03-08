<?php

class StudentModel extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getStudent()
    {
        $this->db->select('*,student.student_id as std_id');
        $this->db->join('class','student.class_id=class.class_id','left');
        $this->db->join('grade','class.grade_id=grade.grade_id','left');
        $query=$this->db->get('student');
        return $query->result_array();
    }

    public function getStudentById($id = 0)
    {
        $query = $this->db->get_where('student', array('student_id' => $id));
        return $query->row_array();
    }

    public function getStudentByClass($classId = 0)
    {
        $query = $this->db->get_where('class', array('class_id' => $classId));
        return $query->row_array();
    }

    public function addStudent($data)
    {
        $this->load->helper('url');
        return $this->db->insert('student', $data);
    }

    public function deleteStudent($id)
    {
        $this->db->where('student_id', $id);
        return $this->db->delete('student');
    }
}

