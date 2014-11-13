<?php
/**
 * This is the controller for attractions that are classified under
 * restaurant category.
 *
 * @author Team SouthKorea
 */
class Food extends CI_Controller {
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
    
    // Displays the first attraction in this category to the details view.
    public function top() {
        $data = array('a' => $this->Attraction->by_category('food'));
        $this->_loadheader($data['a'][0]['name']);
        $this->parser->parse('detail_food', $data['a'][0]);
        $this->_loadfooter();
    }
    
    // Display all the attractions in this category to the allattractions view.
    public function all() {
        $this->_loadheader('Korea Tourism - Restaurants');
        $data = array('attractions' => $this->Attraction->by_category('food'));
        $this->parser->parse('allattractions', $data);
        $this->_loadfooter();
    }
    
    // Display a specific attraction by its ID on the detail_accom view.
    public function get($id) {
        $data = $this->Attraction->get($id);
        $this->_loadheader($data['name']);      
        $this->parser->parse('detail_food', $data);
        $this->_loadfooter();
    }
}
