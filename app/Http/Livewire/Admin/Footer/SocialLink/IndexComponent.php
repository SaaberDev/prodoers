<?php

namespace App\Http\Livewire\Admin\Footer\SocialLink;

use App\Models\SocialLinks;
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
        $social_links = SocialLinks::orderByIdDesc()
            ->searchBy('social_title', $search)
            ->paginate($this->recordPerPage);
        return view('livewire.admin.footer.social-link.index-component', compact('social_links'));
    }
}
