<?php

namespace App\Http\Livewire\Guest\Search;

use App\Models\Service;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SearchResultPageComponent extends Component
{
    public $search = '';
    public $services;
//    public $service_categories;
//    public $highlightIndex;

    // Shows search query in URL
    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function mount()
    {
//        $this->search = '';
//        dd(Session::get('search'));
//        $this->search = session('search');
        $this->services = Service::getAllPublished()->SearchByTitle($this->search)->orderBy('title', 'desc')->get();
//        $this->fill(request()->only('search'));
    }

    public function resetSearch()
    {
        $this->reset('search');
    }

//    public function searchResults()
//    {
//        $search = $this->search;
//        $services = Service::getAllPublished()->SearchByTitle($search)->orderBy('title', 'desc')->get();
//        return redirect()->route('guest.search.index', 'q='. str_replace(' ', '-', $search), compact('services'));
//    }

//    public function updatedSearch()
//    {
//        $search = $this->search;
//        $this->services = Service::getAllPublished()->SearchByTitle($search)->orderBy('title', 'desc')->get();
//    }

    public function render()
    {
//        $search = $this->search;
//        $services = Service::getAllPublished()->SearchByTitle($search)->orderBy('title', 'desc')->get();
        return view('livewire.guest.search.search-result-page-component');
    }
}
