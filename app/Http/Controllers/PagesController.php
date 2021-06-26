<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'Welcome to About Page of Laravel app!';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title'=> 'This is my services',
            'services'=> ['wed dev','mobile app dev','cloud','devops','machine learning']
        );
        return view('pages.services')->with($data);
    }
}
