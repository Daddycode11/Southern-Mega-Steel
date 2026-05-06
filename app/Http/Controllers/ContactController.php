<?php

namespace App\Http\Controllers;

use App\Mail\ContactConfirmation;
use App\Mail\ContactInquiry;
use App\Mail\QuoteConfirmation;
use App\Mail\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:150',
            'company' => 'nullable|string|max:150',
            'email'   => 'required|email|max:200',
            'phone'   => 'required|string|max:30',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:3000',
        ]);

        // Notify the company
        Mail::to('southernmegasteel@gmail.com')->send(new ContactInquiry($data));

        // Send confirmation to the customer
        Mail::to($data['email'])->send(new ContactConfirmation($data));

        return redirect('/#contact')->with('contact_success', true);
    }

    public function quote(Request $request)
    {
        $data = $request->validate([
            'q_name'     => 'required|string|max:150',
            'q_company'  => 'nullable|string|max:150',
            'q_email'    => 'required|email|max:200',
            'q_phone'    => 'required|string|max:30',
            'q_product'  => 'required|string|max:100',
            'q_quantity' => 'nullable|string|max:100',
            'q_location' => 'required|string|max:200',
            'q_details'  => 'nullable|string|max:3000',
            'agree'      => 'required|accepted',
        ]);

        // Notify the company
        Mail::to('southernmegasteel@gmail.com')->send(new QuoteRequest($data));

        // Send confirmation to the customer
        Mail::to($data['q_email'])->send(new QuoteConfirmation($data));

        return redirect('/#inquire')->with('quote_success', true);
    }
}
