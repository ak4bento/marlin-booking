<?php
namespace App\Helpers\Quiz;
 
class Akil {
    public static function perulangan($nilai) {
    	$hasil = array();
    	for ($i=1; $i <= $nilai; $i++) { 
    		if ($i <= 30) {
	    		if ($i%3 == 0 && $i%5 == 0) {
	    			$hasil[$i] = "<div class='b'>Marlin Booking</div>";
	    		} else if ($i%3 == 0) {
	    			$hasil[$i] = "<div class='b'>Marlin</div>";
	    		} else if ($i%5 == 0) {
	    			$hasil[$i] = "<div class='b'>Booking</div>";
	    		}
    		} else if ($i <= 40) {
	    		if ($i%3 == 0 && $i%5 == 0) {
	    			$hasil[$i] = "<div class='m'>Marlin Booking</div>";
	    		} else if ($i%3 == 0) {
	    			$hasil[$i] = "<div class='m'>Booking</div>";
	    		} else if ($i%5 == 0) {
	    			$hasil[$i] = "<div class='m'>Marlin</div>";
	    		}
    		} else {
	    		if ($i%5 == 0) {
	    			$hasil[$i] = "<div class='h'>Marlin Booking</div>";
	    		} else if ($i%3 == 0) {
	    			$hasil[$i] = "<div class='h'>Booking</div>";
	    		}
    		}

    		if ($i%5 != 0 && $i%3 != 0) {
    			$hasil[$i] = $i;
    		}
    	}
        return $hasil;
    }
}