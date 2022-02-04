<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactMessageRequest;

use Mail;
use App\Mail\ContactMail;

use App\Models\ContactMessage;

class ContactController extends Controller
{
    
    public function save(ContactMessageRequest $request)
    {
        $input = $request->all();
        //dd($input);
        $contact = new ContactMessage;
        $contact->name = $input['name'];
        $contact->message = $input['message'];
        if(isset($input['email'])) $contact->email = $input['email'];
        $contact->save();
        try{
            Mail::to('contact@uniqseedil.com')->send(new ContactMail($contact));
        } catch(\Exception $e) {
            //echo 'error';
        }
        return redirect()->back()->with('success', 'Message submitted successfully');
        // Mail::send('email', [
        //     'name' => $request->get('name'),
        //     'email' => $request->get('email'),
        //     'comment' => $request->get('comment') ],
        //     function ($message) {
        //             $message->from('youremail@your_domain');
        //             $message->to('youremail@your_domain', 'Your Name')
        //             ->subject('Your Website Contact Form');
        // });
    }
}
