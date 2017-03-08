<?php

class SchoolClassModel extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getSchoolClass()
    {
        $this->db->select('class.*,grade.grade_name,student.student_name');
        $this->db->join('grade','class.grade_id=grade.grade_id','left');
        $this->db->join('student','class.monitor_id=student.student_id','left');
        $query=$this->db->get('class');
        return $query->result_array();
    }

    public function getSchoolClassList()
    {
        $query=$this->db->get('class');
        return $query->result_array();
    }

    /*
     *
     * get class by class id
     */
    public function getClassById($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('class');
            return $query->result_array();
        }

        $query = $this->db->get_where('class', array('class_id' => $id));
        return $query->row_array();
    }

    /*
     *
     * get class by grade id
     */
    public function getClassByGrade($gradeId = 0)
    {
        $query = $this->db->get_where('class', array('grade_id' => $gradeId));
        return $query->result_array();
    }

    public function addClass()
    {
        $this->load->helper('url');

        $data = array(
            'class_name' => $this->input->post('name'),
            'grade_id' => $this->input->post('gradeID'),
            'location' => $this->input->post('location'),
            'monitor_id' => $this->input->post('monitor')
        );
        return $this->db->insert('class', $data);
    }

    public function deleteClass($id)
    {
        $this->db->where('class_id', $id);
        return $this->db->delete('class');
    }

}