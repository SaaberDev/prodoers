<?php

namespace App\Http\Livewire\Guest\Search;

use App\Models\Service;
use App\Traits\Searchable;
use Livewire\Component;

class GuestSearchComponent extends Component
{
    public $search = '';

    // Shows search query in URL
    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function mount()
    {
        $this->search = '';
    }

    protected $rules = [
        'search' => 'required',
    ];

    protected $messages = [
        'search.required' => 'Type something to explore our great services.',
    ];

    public function search()
    {
        $this->validate();
        session()->put(['search' => $this->search]);
        return redirect()->route('guest.search.index', $this->search);
    }

    public function updatingQuery()
    {
        session()->forget('search');
        $this->resetErrorBag();
    }


    public function render()
    {
        $services = Service::latest('id')->getAllPublished()->search($this->search)->limit(100)->get(['title', 'slug', 'id']);
        return view('livewire.guest.search.guest-search-component', compact('services'));
    }
}
