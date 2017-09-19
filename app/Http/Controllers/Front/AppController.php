<?php

namespace App\Http\Controllers\Front;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends FrontController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->data('newsData',News::paginate(3));
        return view($this->page.'.welcome',$this->data);
    }
    public function politics()
    {
        $this->data('newsData',News::paginate(3));
        return view($this->page.'.politics',$this->data);
    }
    public function sports()
    {
        $this->data('newsData',News::paginate(3));
        return view($this->page.'.sports',$this->data);
    }
    public function entertainment()
    {
        $this->data('newsData',News::paginate(3));
        return view($this->page.'.entertainment',$this->data);
    }


}
