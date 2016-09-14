<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuanController extends Controller
{

    public function aboutMe()
    {
        $a = 'framgia vietnam';
        $data['a'] = $a;
        return view('quan.about_me', $data);
    }
}
