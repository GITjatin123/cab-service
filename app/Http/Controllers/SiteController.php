<?php
namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function HomePage()
    {

    return view('site.index');
    }
    public function Contact()
    {
        return view('site.contact');
    }
    public function About()
    {
        return view('site.about-us');
    }
    public function BookTaxi()
    {
        return view('site.book-taxi');
    }
    public function Login()
    {
        return view('auth.login');
    }
}
