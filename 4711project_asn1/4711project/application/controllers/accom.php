<?php
/**
 * This is the controller for attractions that are classified under
 * accommodation category.
 *
 * @author Team SouthKorea
 */
class Accom extends CI_Controller {
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
    
    // This controller defaults to displaying all attractions in the category.
    public function index() {
        $this->all();
    }
    
    // Display all the attractions in this category to the allattractions view.
    public function all() {
        $this->_loadheader('Korea Tourism - Accommodations');
        $data = array('attractions' => $this->Attraction->by_category('accom'));
        $this->parser->parse('allattractions', $data);
        $this->_loadfooter();
    }
    
    // Display a specific attraction by its ID on the detail_accom view.
    public function get($id) {
        $data = $this->Attraction->get($id);
        $this->_loadheader($data['name']);        
        $this->parser->parse('detail_accom', $data);
        $this->_loadfooter();
    }
}
