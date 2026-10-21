<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testFunction(): String {
        return 'Hello sveticu';
    }
}
