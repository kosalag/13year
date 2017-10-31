<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Kosala.
 * email: kosala4@gmail.com
 * Date: 6/11/17
 * Time: 1:53 PM
 */

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Report_data_model'); //load database model.
    }

    public $response = array("result"=>"none", "data"=>"none");

    public function index()
    {
        $this->check_sess();
        $this->load->view('head');
        $this->load->view('report/sidebar');

        $this->response['schools'] = $this->Report_data_model->getSchools();
        $this->load->view('report/dashboard', $this->response);
        $this->load->view('footer');
    }

    public function check_sess()
    {
        if ($this->session->user_logged != "in") {
            $this->logout(); //Redirect to login page if session not initiated.
        } elseif ($this->session->user_role != '5'){
            $this->logout(); //Redirect to login page if user not authored.
        }
    }

    //Logout function
    function logout()
    {
        $this->session->sess_destroy();
        redirect('/login/index');
    }

    public function getSchoolData()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $school_id = $this->input->post('school_id');
        $this->response['teachers'] = $this->Report_data_model->getSchoolTeachers($school_id, 'count');
        $this->response['classes'] = $this->Report_data_model->getSchoolClasses($school_id, 'count');
        $this->response['students'] = $this->Report_data_model->getSchoolStudents($school_id, 'count');
        echo json_encode($this->response);
    }
    
    public function getSelectedInfo()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $school_id = $this->input->post('school_id');
        $select = $this->input->post('select');

        switch ($select) {
            case 'teachers':
                $res = $this->Report_data_model->getSchoolTeachers($school_id, 'list');
                break;

            case 'classes':
                $res = $this->Report_data_model->getSchoolClasses($school_id, 'list');
                break;
                
            case 'students':
                $res = $this->Report_data_model->getSchoolStudents($school_id, 'list');
                break;
            
            default:
            $res = '';
                break;
        }
        echo json_encode($res);
    }
}