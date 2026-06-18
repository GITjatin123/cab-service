<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Mail\ContactNotification;
use App\Mail\NewsletterNotification;
use Illuminate\Support\Facades\Mail;

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

    public function ContactStore(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($request->all());

        // Send email to admin
        Mail::to('deepcabs@ludhianataxiservices.in')->send(new ContactNotification($contact->toArray()));

        return response('Success! Your message has been sent.', 200);
    }

    public function NewsletterStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $newsletter = Newsletter::create($request->all());

        // Send email to admin
        Mail::to('deepcabs@ludhianataxiservices.in')->send(new NewsletterNotification($newsletter->toArray()));

        return response('Success! You have subscribed to our newsletter.', 200);
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
