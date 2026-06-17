<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function bookRide(Request $request)
    {
        // For now, just log the request and return a success message
        Log::info('New Ride Booking:', $request->all());

        // You might want to save this to a database or send an email later
        
        return response('Success! Your booking has been received.', 200);
    }
}
