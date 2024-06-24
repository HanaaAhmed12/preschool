<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
  public function index(){

    $title = 'Index Page' ;

    return view('index', compact('title'));
  }

  public function about(){

    $title = 'About Page' ;

    return view('about', compact('title'));
  }

  public function classes(){

    $title = 'Classes Page' ;

    return view('classes', compact('title'));
  }

  public function contact(){

    $title = 'Contact Us Page' ;

    return view('contact', compact('title'));
  }

  public function facility(){

    $title = 'School Facility  Page' ;

    return view('facility', compact('title'));
  }

  public function team(){

    $title = 'Popular Teacher Page' ;

    return view('team', compact('title'));
  }

  public function callToAction(){

    $title = 'Call-To-Action Page' ;

    return view('callToAction', compact('title'));
  }

  public function appointment(){

    $title = 'Appointment Page' ;

    return view('appointment', compact('title'));
  }

  public function testimonial(){

    $title = 'Testimonial Page' ;

    return view('testimonial', compact('title'));
  }

  public function Error(){

    $title = 'Error Page' ;

    return view('error', compact('title'));
  }

}