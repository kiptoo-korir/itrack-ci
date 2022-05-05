<?php

namespace App\Controllers;

class About extends BaseController
{
    public function aboutPage()
    {
        echo view('site/about');
    }
}
