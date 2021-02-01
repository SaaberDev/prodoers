<?php

namespace App\Http\Livewire\Guest\Newsletter;

use App\Mail\NewsletterWelcomeMail;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class NewsletterComponent extends Component
{
    public $newsletter;
    public $subscription_status = 1;

    protected $rules = [
        'newsletter' => 'required|email|unique:subscribers,email'
    ];

    protected $messages = [
        'newsletter.required' => 'Email field is required',
        'newsletter.email' => 'Please provide a valid email address',
        'newsletter.unique' => 'This email address has already been taken',
    ];

    public function update()
    {
        $this->validate();
    }

    public function store()
    {
        $this->validate();
        DB::transaction(function (){
            Subscriber::create([
                'email' => $this->newsletter,
                'subscription_status' => $this->subscription_status
            ]);
        });
        Mail::to($this->newsletter)->send(new NewsletterWelcomeMail());
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.guest.newsletter.newsletter-component');
    }
}
