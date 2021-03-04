<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller {
    
    public function index(){
        return response("Hola CNSI!", 200);
    }
}
