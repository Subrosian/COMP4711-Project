<?php

/**
 * This is the model that holds the data for each and every single possible attraction.
 *
 * @author Team SouthKorea
 */
class Attraction extends CI_Model {
    // Hardcoded attraction data before a database is implemented.
    // Data is implemented as an array of strings.
    var $data = array (
        array('id' => '0', 'category' => 'accom', 'date' => '2014 Sept 30',
            'name' => 'Hyatt Hotel', 'location' => 'Seoul', 'price' => '$1000 per night.',
            'contact' => 'phone', 'desc' => 'A hotel located in Seoul.',
            'pic' => 'ph.png'),
        array('id' => '1', 'category' => 'food', 'date' => '2014 Sept 29',
            'name' => 'Restaurant Seoul', 'location' => 'Seoul', 'price' => '$22 for a course pack.',
            'contact' => 'phone', 'desc' => 'A restaurant located in Seoul.',
            'pic' => 'ph.png'),
        array('id' => '2', 'category' => 'accom', 'date' => '2014 Sept 28',
            'name' => 'Bongcheon Inn', 'location' => 'Daegu', 'price' => '$50 per night.',
            'contact' => 'phone', 'desc' => 'A cheap inn located in Daegu.',
            'pic' => 'ph.png'),
        array('id' => '3', 'category' => 'fun', 'date' => '2014 Sept 28',
            'name' => 'Everland', 'location' => 'Seoul', 'price' => '$35 entrance fee.',
            'contact' => 'phone', 'desc' => 'A theme park located in the outskirts of Seoul.',
            'pic' => 'ph.png')
    );
    
    // Constructor
    // NOTE : Add database loading here once database is set up
    public function __construct() {
        parent::__construct();
    }
    
    // Get a single attraction based on id.
    public function get($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record) {
            if ($record['id'] == $which) {
                return $record;
            }
        }
        return null;
    }
    
    // Get the newest added attraction from the db.
    // Currently returns the first three entries in the array regardless of date.
    // CHANGE THIS WHEN A DATABASE IS IMPLEMENTED
    public function newest() {
        $by_date[] = $this->data[0];
        $by_date[] = $this->data[1];
        $by_date[] = $this->data[2];
        return $by_date;
    }
    
    // Returns an array of attractions of one specific category.
    public function by_category($category) {
        foreach ($this->data as $record) {
            if ($record['category'] == $category) {
                $by_cat[] = $record;
            }
        }
        return $by_cat;
    }
        
    // Retrieve all of the attractions.
    public function get_all() {
        return $this->data;
    }

    // Retrieve the first attraction on db.
    public function first() {
        return $this->data[0];
    }

    // Retrieve the last attraction on db.
    public function last() {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }
}
