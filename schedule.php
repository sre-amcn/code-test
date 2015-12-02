<?php

/*
 *
 */

namespace com\amcnetworks\test;

require_once('includes/calculate.php');
require_once('includes/parsed_schedule.php');
require_once('includes/retrieve.php');

class schedule{

    private $retrieve, $calculate;

    private $schedule_data;
    private $parsed_data;
    private $count;

    function __construct(){
        // initialize
        $this->retrieve = new includes\retrieve();
        $this->calculate = new includes\calculate();

        $network = 'IFC';
        $show = 'Comedy Bang! Bang!';

        try{
            # execute the schedule count
            
        }
        catch(\Exception $e){
            $error = 'Unable to complete: '.$e->getMessage().PHP_EOL;
            echo $error;
            die();
        }
    }

    # retrieve the schedule data from endpoint, and store in schedule_data property
    private function get_schedule($network){

    }

    # parse the json based schedule, and store in parsed_data property
    private function parse_schedule(){

    }

    # count the number of occurances, and store in count property
    private function count_schedule($showname){

    }

    // output the count
    public function get_count(){
        echo $this->count.PHP_EOL;
    }
}

$schedule = new schedule();
$schedule->get_count();
