<?php

namespace App\Http\Livewire\Guest\Newsletter;

use App\Jobs\NewsletterJob;
use App\Mail\NewsletterWelcomeMail;
use App\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class NewsletterComponent extends Component
{
    public $newsletter;
    public $subscription_status = 1;

    public function mount()
    {
        $this->newsletter = '';
    }

    protected $rules = [
        'newsletter' => 'required|email:rfc,dns|unique:subscribers,email'
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
        NewsletterJob::dispatch($this->newsletter)->delay(Carbon::now()->addSeconds(5));
        $this->dispatchBrowserEvent('success_toast', [
            'title' => 'Thank you for subscribing to our newsletter !',
        ]);
        $this->newsletter = '';
    }

    public function render()
    {
        return view('livewire.guest.newsletter.newsletter-component');
    }
}
