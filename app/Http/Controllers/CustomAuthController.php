<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client as TwilioClient;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('login.login');
    }

    public function customLogin(Request $request)
    {

        // dd($request);
        $validator =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home')
                ->withSuccess('Signed in');
        }

        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect("login")->withErrors($validator);
    }





    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect()->route('home');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
        ]);
    }



    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect()->route('home');
    }

    public function otpmassage()
    {
        $otp = rand(100000, 999999);

        $basic  = new \Vonage\Client\Credentials\Basic("1248baf9", "E28G26lMKyMZw45r");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("962780144284", 'pawfect', $otp)
        );

        $message = $response->current();

        // if ($message->getStatus() == 0) {
        //     echo "The message was sent successfully\n";
        // } else {
        //     echo "The message failed with status: " . $message->getStatus() . "\n";
        // }
        return response()->json('sms has ben devliverd', 200);
    }
}


 // $twilioSid = env('TWILIO_SID');
        // $twilioToken = env('TWILIO_TOKEN');
        // $twilioNumber = '+962781074027';

        // $to = '962780144284';
        // $messagebody = 'Your OTP is 1234';
        // ///

        // $client = new TwilioClient($twilioSid, $twilioToken);
        // $client->messages->create($to, [
        //     'from' => $twilioNumber,
        //     'body' => $messagebody
        // ]);
