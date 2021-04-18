<?php

namespace App\Http\Livewire\Guest\Search;

use App\Models\Service;
use Livewire\Component;

class GuestSearchComponent extends Component
{
    public $query = '';
    public $services;

    // Shows search query in URL
    protected $queryString = [
        'query' => ['except' => '']
    ];

    public function mount()
    {
        $this->query = '';
    }

    protected $rules = [
        'query' => 'required',
    ];

    protected $messages = [
        'query.required' => 'Type something to explore our great services.',
    ];

    public function search()
    {
        $this->validate();
        session()->put(['query' => $this->query]);
        return redirect()->route('guest.search.index', $this->query);
    }

    public function updatingQuery()
    {
        session()->forget('query');
        $this->resetErrorBag();
    }


    public function render()
    {
        $this->services = Service::latest('id')->getAllPublished()->wordSearchBy('title', $this->query)->limit(100)->get(['title', 'slug', 'id']);
        return view('livewire.guest.search.guest-search-component');
    }
}
