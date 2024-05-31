<?php

class Letter_model extends CI_Model
{

    public function get_letters()
    {
        $this->db->order_by('issue_date');
        $query = $this->db->get('letters');
        return $query->result();
    }

    public function get_incomplete_letters()
    {
        $this->db->where('task_status <>', 4);
        $this->db->order_by('submission_deadline');
        $query = $this->db->get('letters');
        return $query->result();
    }

    public function get_complete_letters()
    {
        $this->db->where('task_status', 4);
        $query = $this->db->get('letters');
        return $query->result();
    }

    public function get_task_status()
    {
        $task_status = [];

        $query = $this->db->get('task_status');
        $query_result = $query->result_array();

        foreach ($query_result as $row) {
            $task_status[$row['id']] = $row['title'];
        }

        return $task_status;
    }

    public function get_selected_letter($id)
    {
        // echo "hello from get_selected_letter method of letters Letter Model. this id = " . $id;
        $query = $this->db->get_where('letters', array('id' => $id));
        // echo "<pre>";
        // print_r($query->result());
        // die;
        return $query->row();
    }

    public function insert_letter()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'sender' => $this->input->post('sender'),
            'receiver' => $this->input->post('receiver'),
            'issue_date' => $this->input->post('issue_date'),
            'submission_deadline' => $this->input->post('submission_deadline'),
            'assigned_officer' => $this->input->post('assigned_officer'),
        );
        return $this->db->insert('letters', $data);
    }

    public function update_letter()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'sender' => $this->input->post('sender'),
            'receiver' => $this->input->post('receiver'),
            'issue_date' => $this->input->post('issue_date'),
            'submission_deadline' => $this->input->post('submission_deadline'),
            'task_status' => $this->input->post('task_status'),
            'assigned_officer' => $this->input->post('assigned_officer'),
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('letters', $data);
    }

    public function delete_letter($id)
    {
        $this->db->where('id', $id);

        return $this->db->delete('letters');
    }
}
