<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('email.contactus');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'subject' => 'required',
            'messages' => 'required'
        ]);

        Mail::send('email.contact',[
            'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'subject' => $request->get('subject'),
        'messages' => $request->get('messages'),
        ],
            function ($displaymessage)
            {
//                $displaymessage->from('smalljutt420@gmail.com', 'Solace Rehab')
                $displaymessage->to('smalljutt420@gmail.com', 'Solace Rehab Appointment')
                    ->subject('Patient Contact Info');
            });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

    }
}




//        $contactName = $request->get('name');
//        $contactEmail = $request->get('email');
//        $contactPhone = $request->get('phone');
//        $contactSubject = $request->get('subject');
//        $contactMessage = $request->get('messages');
//
//
//        $contactData = array(
//            'name'=> $contactName,
//            'email'=> $contactEmail,
//            'phone'=> $contactPhone,
//            'subject'=> $contactSubject,
//            'messages'=> $contactMessage
//        );
////        dd($contactData);
//
//        Mail::send('email.contact',$contactData,
//            function ($displaymessage)
////            use ($contactEmail, $contactName)
//            {
//
////                $displaymessage->from($this->email,$this->name);
////                $displaymessage->from($contactEmail, $contactName);
//                $displaymessage->to('smalljutt420@gmail.com', 'Solace Rehab')
//                    ->subject('Patient Contact Info');
//            });
