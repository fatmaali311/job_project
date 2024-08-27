<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //
  public function index(){
    return view('index');
  }
  public function about(){
    return view('about');
  }

  public function jobList(){
    return view('job-list');
  }
  public function jobDetail(){
    return view('job-detail');
  }
  public function category(){
    return view('category');
  }
  public function testimonial(){
    return view('testimonial');
  }
  public function error404(){
    return view('404');
  }
  public function contact(){
    return view('contact');
  }





}
