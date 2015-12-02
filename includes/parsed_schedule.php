<?php

/*
 *
 */

namespace com\amcnetworks\test\includes;

class parsed_schedule{

    private $parsed_data;

    function __construct($schedule){
        $this->parse($schedule);
    }

    private function parse($schedule){
        $parsed_items = array();

        // parse the json data
        $decoded_schedule = json_decode($schedule);

        // confirm that schedule items exist
        if(property_exists($decoded_schedule, 'ScheduleItem')){

            // loop through items
            foreach($decoded_schedule->ScheduleItem as $schedule_item){
                // check for presense of video element, and store
                if(property_exists($schedule_item, 'Video')){
                    $parsed_items[] = $schedule_item->Video;
                }
            }

            // save parsed data
            $this->parsed_data = $parsed_items;
        }
    }

    // public getter for schedule data 
    public function get_schedule(){
        return $this->parsed_data;
    }
}
