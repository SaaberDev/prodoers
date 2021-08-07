<?php

namespace App\Http\Livewire\Admin\Services\Service;

use App\Models\Service;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    protected $listeners = ['$refresh'];

    public $status = 'published_status';

    public $search = '';
    public $filterByStatus = null;
    public $recordPerPage = 15;
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
        $services = Service::with('serviceCategories')
            ->filterBy('published_status', $this->filterByStatus)
            ->search($search)
            ->orderByDesc('id')
            ->paginate($this->recordPerPage);

        return view('livewire.admin.services.service.index-component', compact('services'));
    }
}
