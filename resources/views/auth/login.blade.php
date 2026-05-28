<?php
$email="";
$error="";
$email = session('email');
$error = session('error');
?>
@extends('layouts.auth')
@section('content')
    <style>
        .booking-car{
            width: 680px !important;
        }
        .booking-form-2 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }
        .input-width{
            width: 50% !important;
        }
        .booking-car-wrap{
            width: 31% !important;
        }
    </style>


    <section class="w-100">
        <div class="container">
            <div class="row booking-form-2 g-0">
                <div class="col-md-4 d-none d-lg-block">
                    <div class="booking-car-wrap">
                        <div class="booking-car wow fade-in-left" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fade-in-left;"></div>
                    </div>
                </div>
                <div class="col-lg-8" >
                    <div class="section-heading mb-30">
                        <h4><span></span>Online Booking</h4>
                        <h2 class="white">Login for Booking</h2>
                    </div>


                    <form action="{{ empty($email) ? route('getotp') : route('verifyotp') }}" method="post" id="email-form">
                        @csrf
                        <div class="mb-3">
                            @if(empty($email))
                                <label for="exampleInputEmail1" class="form-label">Enter Your Email address</label>
                            @else
                                <label for="exampleInputEmail1" class="form-label">Enter Your OTP</label>
                            @endif
                                <input
                                    type="{{ empty($email) ? 'email' : 'text' }}"
                                    name="{{ empty($email) ? 'email' : 'otp' }}"
                                    value="{{ empty($email) ? old('email') : old('otp') }}"
                                    class="form-control input-width"
                                    aria-describedby="emailHelp">
                                @if(!empty($email))
                                    <input type="hidden" value="{{$email}}" name="email">
                                    <span style="color:red;">{{ $error }}</span>
                                    @error('otp')
                                    <span style="color:red;">{{ $message }}</span>
                                    @enderror
                                @endif

                                @error('email')
                            <span style="color:red;">{{ $message }}</span>
                            @enderror
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="slider-btn">
                            <button type="submit" class="default-btn" id="form-submit" data-animation="fade-in-bottom" data-delay="0.9s" style="animation-delay: 0.9s;">Submit</button>
                        </div>
                    </form>
                    <div id="form-messages" class="alert" role="alert"></div>

                </div>
            </div>
        </div>
    </section>
    <script>
        // document.addEventListener("DOMContentLoaded", function () {
        //
        //     let LoginBtn = document.getElementById('form-submit');
        //     let emailForm = document.getElementById('email-form');
        //     let OtpForm = document.getElementById('otp-form');
        //
        //     LoginBtn.addEventListener('click', function (e) {
        //         e.preventDefault();
        //         emailForm.classList.add('d-none');
        //         OtpForm.classList.remove('d-none');
        //     });
        //
        // });
    </script>
@endsection
