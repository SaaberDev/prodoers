<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    public $status = 'order_status';

    public $order_status = [
        'pending' => 'Not Assigned',
        'ongoing' => 'Ongoing',
        'delivered' => 'Delivered',
        'in_revision' => 'In Revision',
        'cancelled' => 'Cancelled',
        'completed' => 'Completed',
    ];

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
        $orders = Order::filterBy('order_status', $this->filterByStatus)
            ->searchBy('order_number', $search)
            ->with('payments')
            ->orderByDesc('id')
            ->paginate($this->recordPerPage);
//        dd($orders);
        return view('livewire.admin.orders.index-component', compact('orders'));
    }
}
