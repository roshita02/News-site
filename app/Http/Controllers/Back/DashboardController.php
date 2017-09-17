<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends BackController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view($this->page.'dashboard',$this->data);
    }
}
