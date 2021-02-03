<?php

namespace App\Http\Livewire\Admin\Services\Tag;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    public $search = '';
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

    public function hydrate()
    {
        $this->emit('postAdded');
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
        $tags = Tag::orderByIdDesc()
            ->searchBy('title', $search)
            ->paginate($this->recordPerPage);

        return view('livewire.admin.services.tag.index-component', compact('tags'));
    }
}
