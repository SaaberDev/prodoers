<?php

namespace App\Http\Livewire\Admin\Services\Category;

use Livewire\Component;

class FaqList extends Component
{
    public $service_category;

    // TODO -- List doesn't auto updating
    protected $listeners = ['$refresh'];

    public function render()
    {
        return view('livewire.admin.services.category.faq-list');
    }
}
