<?php

/**
 * The main homepage.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends CI_Controller {
    /*
     * Constructor that loads the attraction model as well as library and helper 
     * files required.
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Attraction');
        $this->load->library('parser');
        $this->load->helper('url');
    }

    // Loads the header view with the specified title string.
    function _loadheader($title) {
        $this->parser->parse('_header', array('title' =>$title) );
    }
    
    // Loads the footer.
    function _loadfooter() {
        $this->load->view('_footer');
    }
    
    //-------------------------------------------------------------
    // Displaying the main page view.
    // Shows 3 newest attractions added at the top first,
    // then the main page content, which is currently filler text.
    //-------------------------------------------------------------

    public function index() {
        $this->_loadheader('Korea Tourism - Home');
        $data = array('attractions' => $this->Attraction->newest());
        $this->parser->parse('latest3', $data);
        $this->load->view('welcome');
        $this->_loadfooter();
    }
}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */