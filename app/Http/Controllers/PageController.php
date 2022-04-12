<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }
    public function products()
    {
        return view('products');
    }

    public function faqs()
    {
        return view('faqs');
    }


    public function contacts_us()
    {
        return view('contact-us');
    }
    public function about_us()
    {
        return view('about-us');
    }

    public function solutions()
    {
        return view('solutions');
    }

    public function software_solutions()
    {
        return view('solutions.software-solutions');
    }

    public function hardware_solutions()
    {

        return view('solutions.hardware-solutions');

    }
    public function it_solutions()
    {

        return view('solutions.it-solutions');

    }
    public function mobile_solutions()
    {

        return view('solutions.mobile-solutions');

    }


}
