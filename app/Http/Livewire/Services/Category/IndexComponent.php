<?php

namespace App\Http\Livewire\Services\Category;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    public $search = '';
    public $recordPerPage = 15;
    public $filterByStatus = null;
    public $page = 1;

    // Shows search query in URL
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function mount()
    {
        $this->fill(request()->only('search', 'page'));
    }

    public function resetSearch()
    {
        $this->reset('search');
    }

    public function updatingSearch()
    {
        $this->gotoPage(1);
    }

    public function render()
    {
        $search = $this->search;
        $service_categories = ServiceCategory::orderByIdDesc()
            ->filterByStatus($this->filterByStatus)
            ->SearchByTitle($search)
            ->paginate($this->recordPerPage);

        return view('livewire.services.category.index-component', compact('service_categories'));
    }
}
