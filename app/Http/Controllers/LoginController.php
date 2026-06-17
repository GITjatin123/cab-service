<?php

namespace App\Http\Controllers;

use App\component\Helper;
use App\Models\LoginDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class LoginController extends Controller
{
    public function Getotp(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns,spoof|lowercase'
        ]);

        if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
        }
        $loginDetails = User::query()->where('email', $request->input('email'))->first();
        if ($loginDetails) {
            if ($loginDetails->email == $request->input('email')) {
                $loginDetails->otp = Helper::generateOtp();
            }
        }else{
            $loginDetails = new User();
            $loginDetails->email = $request->input('email');
            $loginDetails->otp = Helper::generateOtp();
            $loginDetails->email_verified_at = null;
        }

        if ($loginDetails->save()) {
           $this->emailotp($request->email,$loginDetails->otp);
            return redirect()->back()->with('email', $loginDetails->email);;
        }
        return redirect()->back()->with('error', 'Please enter correct Email');

    }

    public function VerifyOtp(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'otp' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput()->with('email', $request->email);
        }
        $logInDetails = User::where('email', $request->email)->first();

        if ($logInDetails) {
            if ($logInDetails->otp == $request->otp) {
                Auth::login($logInDetails);
                $logInDetails->otp=Helper::generateOtp();
                $logInDetails->email_verified_at = date('Y-m-d');

                $logInDetails->save();
                return redirect()->route('home')->with('success', 'You are login successfully');
            } else {
                return redirect()->back()->with('email', $request->email)->with('error', 'Please Enter Correct OTP')->withInput();
            }

        } else {
            return redirect()->back()->withErrors('error', 'Something went wrong');

        }


    }
    public function emailotp($email,$otp){
            $details = [
                'email' => $email,
                'otp' => $otp,
            ];
            try {
                Mail::to($email)->send(new ContactMail($details));
            } catch (\Exception $e) {
                print_r($e->getMessage());
                print_r($e->getTraceAsString());die;
            }

    }
}
