<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public $status;
    public $roles;

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user_model', TRUE);
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
    }

    public function index()
    {
        redirect(site_url() . '/main/register/');
        // if(empty($this->session->userdata['email'])){
        //   //  var_dump(site_url());
        //    // die();
        //     redirect(site_url().'/main/register/');
        //   //  redirect('main/login/');

        // }            
        // /*front page*/
        // $data = $this->session->userdata; 
        // $this->load->view('header');            
        // $this->load->view('index', $data);
        // $this->load->view('footer');
    }

    public function median($a)
    {
        sort($a);
        $c = count($a);
        $m = floor(($c - 1) / 2);
        return ($c % 2) ? $a[$m] : (($a[$m] + $a[$m + 1]) / 2);
    }
    function array_mode($arr) {
        $count = array();
        foreach ((array)$arr as $val) {
          if (!isset($count[$val])) { $count[$val] = 0; }
          $count[$val]++;
        }
        arsort($count);
        return key($count);
      }
    public function register()
    {

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('Government', 'Government', 'required|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('register');
            $this->load->view('footer');
        } else {
            $Government = $this->input->post('Government');
            $Mathematics = $this->input->post('Mathematics');
            $Physics = $this->input->post('Physics');
            $Chemistry = $this->input->post('Chemistry');
            $English = $this->input->post('English');
            $myArr = [intval($Government), intval($Mathematics), intval($Physics), intval($Chemistry), intval($English)];
            //var_dump($myArr);
            $median = $this->median($myArr);
           $mode=$this-> array_mode($myArr);
           

            $total = intval($Government) + intval($Mathematics) + intval($Physics) + intval($Chemistry) + intval($English);
            $mean = $total / 5;
            $upd_data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'Government' => $this->input->post('Government'),
                'Mathematics' => $this->input->post('Mathematics'),
                'Physics' => $this->input->post('Physics'),
                'Chemistry' => $this->input->post('Chemistry'),
                 'mode' => $mode,
                'date_added' => date('Y-m-d H:i:s'),
                'mean'   => $mean,
                'median'   => $median,
                'English' => $this->input->post('English')
            );
            $id = $this->user_model->insertUser($upd_data);
            redirect(site_url() . 'main/report');
        }
    }


   
    public function report()
    {

        $query = $this->db->get('student');

        $workflow_history['workflow_history'] = $query->result();
        //var_dump($workflow_history);
        // die();
        $this->load->view('header');
        $this->load->view('report', $workflow_history);
        $this->load->view('footer');
    }
   
}
