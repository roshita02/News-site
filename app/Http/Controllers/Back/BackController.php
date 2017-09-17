<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    protected $appType='Back/';
    public $page;
    public function __construct()
    {
        $this->data('title',$this->title('admin'));
        $this->page=$this->appType.'Pages.';
    }
}
