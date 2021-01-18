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

//    protected $listeners = [
//        'load-more' => 'loadMore'
//    ];

    public function mount()
    {
        $this->fill(request()->only('query', 'page'));
    }

    public function resetSearch()
    {
        $this->reset('query');
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
        $services = Service::getAllPublished()->SearchByTitle($this->query)->with('serviceImages')->paginate($this->recordPerPage);
        return view('livewire.guest.search.search-result-page-component', compact('services'));
    }
}
