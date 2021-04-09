<?php

namespace App\Http\Livewire\Guest\Search;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class SearchResultPageComponent extends Component
{
    use WithPagination;

    public $query;
    public $recordPerPage = 9;
    public $page = 1;

    // Shows search query in URL
    protected $queryString = [
        'query' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function mount()
    {
        $this->query = session('query');
        session()->forget('query');
        $this->fill(request()->only('query', 'page'));
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
        $services = Service::latest('id')
            ->getAllPublished()
            ->wordSearchBy('title', $this->query)
            ->paginate($this->recordPerPage);
        return view('livewire.guest.search.search-result-page-component', compact('services'));
    }
}
