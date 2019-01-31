<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class EmailController extends BaseController
{
    public function __construct()
    {

    }

    public function sendEmail(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'product' => 'required',
            'pax' => 'required|numeric'
        ]);

        if($validate->fails()){
            return redirect('/')->withErrors($validate);
        }

        $to_name = 'Admin';
        $to_email = 'Elliot20march@gmail.com';
        $data = array('name' => $request['name'],
            'email' => $request['email'],
            'product' => $request['product'],
            'pax' => $request['pax']);

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email){
            $message->to($to_email, $to_name)
                    ->subject('New Booking Request');
            $message->from('palapabathhouseandspa@gmail.com','Palapa Booking System');
        });

        return redirect('/')->with('success','Your booking has been submitted!');
    }
}
