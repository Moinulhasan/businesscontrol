<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = Validator::make($request->all(), [
            'full_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:100',
            'message' => 'required|string',
        ]);
        if ($validated->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validated->errors()->first()
            ], 422);
        }

        try {
            // Send email (you'll need to create the Mailable class)
//             Mail::to('info@businesscontrol.com')->send(new ContactFormMail($validated));
            Mail::send('mails.contact-details', [
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone ?? '',
                'company' => $request->company ?? '',
                'message_content' => $request->message,
                'is_one_step' => $request->routeIs('submit-contact-one-step') ? 1 : 0
            ], function ($message) use ($request) {
                $message->to('support@businesscontrol.com')
//                $message->to('moinulhasan.4960@gmail.com')
                    ->subject("New Contact Form Message from  .$request->full_name");
            });
            // For now, just return success response
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We will get back to you soon.'
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again.'
            ], 500);
        }
    }
}
