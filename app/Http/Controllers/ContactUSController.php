<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;
use Illuminate\Support\Facades\Mail;
class ContactUSController extends Controller
{
    public function contactUS()
    {
    return view('index.contact.index');
    }
    public function contactUS1()
    {
    return view('contactUS');
    }
       /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
       public function contactUSPost(Request $request)
       {
        $product = new ContactUS();
        $product->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('content'),
        ]);
        Mail::send('mail',
           array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
           ), function($message)
       {
           $message->from('ducgets@gmail.com');
           $message->to('ducgets@gmail.com', 'Admin')->subject('Đỗ Quang Đức');
       });

        return back()->with('success', 'Thanks for contacting us!');
       }

}
