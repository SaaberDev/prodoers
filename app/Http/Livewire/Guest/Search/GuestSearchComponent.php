<?php

namespace App\Http\Livewire\Guest\Search;

use App\Models\Service;
use App\Traits\Searchable;
use Livewire\Component;

class GuestSearchComponent extends Component
{
    public $query = '';

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
        $services = Service::latest('id')->getAllPublished()->search($this->query)->limit(100)->get(['title', 'slug', 'id']);
        return view('livewire.guest.search.guest-search-component', compact('services'));
    }
}
