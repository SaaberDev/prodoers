<?php

namespace App\Http\Livewire\Guest\Search;

use App\Models\Service;
use Livewire\Component;

class GuestSearchComponent extends Component
{
    public $query;
    public $services;
//    public $service_categories;
//    public $highlightIndex;

    // Shows search query in URL
    protected $queryString = [
        'query' => ['except' => '']
    ];

    public function mount()
    {
        $this->query = '';
//        $this->fill(request()->only('search'));
    }

    public function resetSearch()
    {
        $this->reset('query');
    }

//    public function searchResults($query)
//    {
//        $services = Service::getAllPublished()->SearchByTitle($query)->get();
//        return redirect()->route('guest.search.index', $query, compact('services'));
//    }

    public function updatingQuery(){}


    public function render()
    {
//        \DB::enableQueryLog();
        $this->services = Service::latest('id')->getAllPublished()->SearchBy('title', $this->query)->limit(100)->get(['title', 'slug', 'id']);
//        var_dump(\DB::getQueryLog());
//        dd();
        return view('livewire.guest.search.guest-search-component');
    }
}
