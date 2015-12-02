<?php

/*
 *
 */

namespace com\amcnetworks\test\includes;

class retrieve{

    private $schedule_url;

    private function init($network){
        $this->schedule_url = sprintf('http://tribune.services.amcnets.com/%s/OnAir/JSON?tz=ET&bc=east&view=week&monthOffset=0&day=0', $network);
    }

    private function get_schedule_data($url){
        // execute for schedule data
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

		$response = curl_exec($ch);

		// check for failure executing cURL
		if(curl_exec($ch) === false){
			// record error and close cURL
			$curl_error = curl_error($ch);
			curl_close($ch);

			throw new Exception("cURL failure: $curl_error");
		}

		curl_close($ch);

        return $response;
    }


    private function get_schedule_url(){
        return $this->schedule_url;
    }

    public function set_network($network){
        $this->init($network);
    }

    public function get_raw_data(){
        return $this->get_schedule_data($this->get_schedule_url());
    }
}
