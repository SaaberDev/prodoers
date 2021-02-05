<?php

namespace App\Http\Livewire\Admin\Client;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class SubscriberIndexComponent extends Component
{
    use WithPagination;

    public $status = 'subscriber_status';

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
        $subscribers = Subscriber::filterBy('subscriber_status', $this->filterByStatus)
            ->searchBy('email', $search)
            ->orderByDesc('id')
            ->paginate($this->recordPerPage);
        return view('livewire.admin.client.subscriber-index-component', compact('subscribers'));
    }
}
