<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Letters extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Letter_model');
    }

    public function index()
    {
        // $data['letters'] = $this->Letter_model->get_letters();
        $data['page_name'] = "Incomplete";
        $data['letters'] = $this->Letter_model->get_incomplete_letters();
        $data['task_status'] = $this->Letter_model->get_task_status();

        $this->load->view('letters/index', $data);
    }

    public function all_task()
    {
        $data['page_name'] = "All";
        $data['letters'] = $this->Letter_model->get_letters();
        $data['task_status'] = $this->Letter_model->get_task_status();

        $this->load->view('letters/index', $data);
    }

    public function completed_task()
    {
        $data['page_name'] = "completed";
        $data['letters'] = $this->Letter_model->get_complete_letters();
        $data['task_status'] = $this->Letter_model->get_task_status();

        $this->load->view('letters/index', $data);
    }

    public function create()
    {
        $this->load->view('layout/header');
        $this->load->view('letters/create');
        $this->load->view('layout/footer');
    }

    public function store()
    {
        $this->Letter_model->insert_letter();

        redirect('letters');
    }

    public function edit($id)
    {
        $data['letter'] = $this->Letter_model->get_selected_letter($id);
        $data['task_status'] = $this->Letter_model->get_task_status();
        $this->load->view('letters/edit', $data);
    }

    public function update()
    {
        $this->Letter_model->update_letter();

        redirect('letters');
    }

    public function delete($id)
    {
        $this->Letter_model->delete_letter($id);

        redirect('letters');
    }
}
