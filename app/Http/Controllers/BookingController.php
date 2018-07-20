<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Quiz\Akil;

class BookingController extends Controller
{
    public function index()
    {
    	return view('marlin', ['hasil' => Akil::perulangan(65)]);
    }
}
