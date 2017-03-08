<?php

class GradeModel extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getGrade()
    {
        $query = $this->db->get('grade');
        return $query->result_array();
    }

    /*
     * 
     * get grade from id
     */
    public function getGradeById($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('grade');
            return $query->result_array();
        }

        $query = $this->db->get_where('grade', array('grade_id' => $id));
        return $query->row_array();
    }

    /*
     *
     * add new grade
     */
    public function addGrade()
    {
        $this->load->helper('url');

        $name = $this->input->post('name');
        $data = array(
            'grade_name' => $name
        );
        return $this->db->insert('grade', $data);
    }

    /*
     *
     * delete grade
     */
    public function deleteGrade($id)
    {
        $this->db->where('grade_id', $id);
        return $this->db->delete('grade');
    }

}