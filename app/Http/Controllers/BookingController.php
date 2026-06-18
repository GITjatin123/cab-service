<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Booking;
use App\Mail\BookingNotification;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function bookRide(Request $request)
    {
        $request->validate([
            'full-name' => 'required|string',
            'email' => 'required|email',
            'start-dest' => 'required|string',
            'end-dest' => 'required|string',
            'ride-date' => 'required|string',
            'ride-time' => 'required|string',
        ]);

        $booking = Booking::create([
            'full_name' => $request->input('full-name'),
            'email' => $request->input('email'),
            'start_dest' => $request->input('start-dest'),
            'end_dest' => $request->input('end-dest'),
            'ride_date' => $request->input('ride-date'),
            'ride_time' => $request->input('ride-time'),
        ]);

        // Send email to admin
        Mail::to('deepcabs@ludhianataxiservices.in')->send(new BookingNotification($booking->toArray()));

        return response('Booking Confirmed! We have received your booking request. Our team will get in touch with you shortly.', 200);
    }
}
