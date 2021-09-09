<?php

namespace App\Http\Livewire\Guest\Newsletter;

use App\Events\Newsletter\NewsletterEvent;
use App\Models\Subscriber;
use Livewire\Component;
use Throwable;

class NewsletterComponent extends Component
{
    public $subscriber_mail;
    public $subscriber_status = 1;

    public function mount()
    {
        $this->subscriber_mail = '';
    }

    protected $rules = [
        'subscriber_mail' => 'required|unique:subscribers,email'
    ];

    protected $messages = [
        'subscriber_mail.required' => 'Email field is required',
        'subscriber_mail.email' => 'Please provide a valid email address',
        'subscriber_mail.unique' => 'This email address has already been taken',
    ];

    /**
     * @throws Throwable
     */
    public function store()
    {
        $this->validate();
        \DB::beginTransaction();
        try {
            $explodeEmail = explode('@', $this->subscriber_mail);
            $getName = head($explodeEmail);
            $subscriber = Subscriber::create([
                'email' => $this->subscriber_mail,
                'name' => $getName,
                'subscriber_status' => $this->subscriber_status
            ]);

            // Fire Event
            event(new NewsletterEvent($subscriber));
            $this->subscriber_mail = '';

            // Toast Alert
            $this->dispatchBrowserEvent('success_toast', [
                'title' => 'Thank you for subscribing to our newsletter !',
            ]);

            \DB::commit();
        } catch (\Exception $exception){
            \DB::rollBack();
            report($exception->getMessage());
            $this->dispatchBrowserEvent('warning_toast', [
                'title' => 'Oops, Looks like something went wrong !',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.guest.newsletter.newsletter-component');
    }
}
