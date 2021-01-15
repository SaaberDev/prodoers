<?php

namespace App\Http\Livewire\Guest\Search;

use App\Models\Service;
use Livewire\Component;

class SearchResultPageComponent extends Component
{
    public $query;
    public $services;

    // Shows search query in URL
    protected $queryString = [
        'query' => ['except' => '']
    ];

    public function mount()
    {
        $this->query = request()->input('query');
//        $this->fill(request()->only('search'));
    }

    public function resetSearch()
    {
        $this->reset('query');
    }

    public function updatingQuery(){}

    public function render()
    {
        $this->services = Service::getAllPublished()->SearchByTitle($this->query)->get();
        return view('livewire.guest.search.search-result-page-component');
    }
}
