<?php

namespace App\Http\Livewire\Guest\Search;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class SearchResultPageComponent extends Component
{
    use WithPagination;

    public $search;
    public $recordPerPage = 9;
    public $page = 1;

    // Shows search query in URL
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function mount()
    {
        $this->search = session('search');
        session()->forget('search');
        $this->fill(request()->only('search', 'page'));
    }

    public function updatingQuery()
    {
        $this->gotoPage(1);
    }

    public function loadMore()
    {
        $this->recordPerPage = $this->recordPerPage + 9;
    }

    public function render()
    {
        $services = Service::with('media')->latest('id')->getAllPublished()->search($this->search)->paginate($this->recordPerPage);
        return view('livewire.guest.search.search-result-page-component', compact('services'));
    }
}
