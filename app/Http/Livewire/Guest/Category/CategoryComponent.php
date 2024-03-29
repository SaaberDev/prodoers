<?php

namespace App\Http\Livewire\Guest\Category;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;

    public $category;
    public $recordPerPage = 9;
    public $page = 1;

    // Shows search query in URL
    protected $queryString = [
        'page' => ['except' => 1],
    ];

    public function mount()
    {
        $this->fill(request()->only('page'));
    }

    public function loadMore()
    {
        $this->recordPerPage = $this->recordPerPage + 9;
    }

    public function render()
    {
        $services = Service::whereCategories($this->category->id)->getAllPublished()->orderByDesc('id')->paginate($this->recordPerPage);
        return view('livewire.guest.category.category-component', compact('services'));
    }
}
