<?php

/**
 * controllers/about.php
 * The simple controller that displays the about view.
 * ------------------------------------------------------------------------
 */
class About extends CI_Controller {
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
        $this->parser->parse('_header', array('title' => $title) );
    }
    // Loads the footer.    
    function _loadfooter() {
        $this->load->view('_footer');
    }

    //-------------------------------------------------------------
    //  Display the about view.
    //-------------------------------------------------------------

    function index() {
        $this->_loadheader('Korea Tourism - About');
        $this->load->view('about');
        $this->_loadfooter();
    }

}

/* End of file about.php */
/* Location: application/controllers/about.php */