<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data = array();
    public function __construct() {
        parent::__construct();
        $this->load->model('common_model');
        $this->get_config();
    }

    public function get_config() {
      $this->data['settings']  = $this->common_model->get_settings();
    }

    public function index() {

        $this->data['main_content'] = $this->load->view('home', $this->data, TRUE);
        $this->load->view('index', $this->data);
    }
  public function Admissions()
  {

    $this->data['main_content'] = $this->load->view('Admmision', $this->data, TRUE);
    $this->load->view('index', $this->data);
  }
    public function about() {
      $this->data['main_content'] = $this->load->view('about', $this->data, TRUE);
      $this->load->view('index', $this->data);
    }

    public function contact() {
      $this->data['main_content'] = $this->load->view('contact', $this->data, TRUE);
      $this->load->view('index', $this->data);
    }
  public function Courses()
  {
    $this->data['main_content'] = $this->load->view('courses', $this->data, TRUE);
    $this->load->view('index', $this->data);
  }
  
  public function ACADEMIS()
  {
    $this->data['main_content'] = $this->load->view('courses', $this->data, TRUE);
    $this->load->view('index', $this->data);
  }

  public function DISCLOSURE()
  {
    $this->data['main_content'] = $this->load->view('courses', $this->data, TRUE);
    $this->load->view('index', $this->data);
  }

  public function CAMPUS()
  {
    $this->data['main_content'] = $this->load->view('courses', $this->data, TRUE);
    $this->load->view('index', $this->data);
  }

}