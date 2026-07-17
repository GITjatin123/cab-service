@extends('layouts.frontend')
@section('content')
    <div id="searchbox-overlay"></div>

    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href="{{route('home')}}"><img src="assets/img/logo-dark.png" alt="logo" /></a>
            </div>
            <p>Everything your taxi business needs is already here! Deep Cabs, a theme
                made for taxi service companies.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span>9517815169</li>
                <li>
                    <span>You can find us at:</span>Shop no 23 , jai singh complex model town link road near children traffic park Ludhiana, punjab
                </li>
                <li><span>Email now:</span><a href="#" class="__cf_demail__">deepcabs007@gmail.com</a></li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>
    <section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Get Your Cab!</h4>
                <h2>Book Your <span>Ride</span></h2>
                <p>Everything your taxi business <br>needs is already here! </p>
            </div>
        </div>
    </section>
    <!--/.page-header-->

    <div class="taxi-booking bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <form action="{{ route('book-ride') }}" id="book-taxi-ride" method="POST">
                        @csrf
                        <div class="taxi-booking-form">
                            <div class="form-field">
                                <i class="las la-user-tie"></i>
                                <input type="text" id="full-name" name="full-name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-envelope-open"></i>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            {{--<div class="form-field">
                                <i class="las la-tags"></i>
                                <select name="package-type" id="package-type" class="niceSelect">
                                    <option value="standard">Standard</option>
                                    <option value="business">Business</option>
                                    <option value="economy">Economy</option>
                                    <option value="vip-spacial">VIP Spacial</option>
                                    <option value="comfort">Comfort</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <i class="las la-user-friends"></i>
                                <select name="passengers" id="passengers" class="niceSelect">
                                    <option value="1">1 Person</option>
                                    <option value="2">2 Person</option>
                                    <option value="3">3 Person</option>
                                    <option value="4">4 Person</option>
                                    <option value="5">5 Person</option>
                                </select>
                            </div>--}}
                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="start-dest" name="start-dest" class="form-control" placeholder="Start Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="end-dest" name="end-dest" class="form-control" placeholder="End Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-calendar"></i>
                                <input type="text" id="ride-date" name="ride-date" class="form-control date-picker" placeholder="Select Date" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-clock"></i>
                                <input type="text" id="ride-time" name="ride-time" class="form-control time-picker" placeholder="Select Time" required>
                            </div>
                            <div class="form-field">
                                <button id="submit" class="default-btn" type="submit">Book Your Taxi</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form><!-- Booking Form -->
                </div>
            </div>
        </div>
    </div>
    <!--/.booking-form-->
@endsection
