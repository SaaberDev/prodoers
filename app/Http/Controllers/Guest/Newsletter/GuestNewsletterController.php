<?php

namespace App\Http\Controllers\Guest\Newsletter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\Subscriber\NewsletterRequest;
use App\Models\Subscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class GuestNewsletterController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param NewsletterRequest $request
     * @return RedirectResponse
     * @throws \Throwable
     */
//    public function store(NewsletterRequest $request)
//    {
//        DB::transaction(function () use ($request){
//            Subscriber::create([
//                'email' => $request->input('newsletter'),
//                'subscription_status' => 1
//            ]);
//        });
//        Mail::to($request->input('newsletter'))->send(new \App\Mail\WelcomeMail());
//        return redirect()->back();
//    }
}
