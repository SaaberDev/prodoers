<?php

namespace App\Http\Livewire\Admin\SiteCms\SocialLink;

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
        $social_links = SocialLinks::searchBy('social_title', $search)
            ->orderByDesc('id')
            ->paginate($this->recordPerPage);
        return view('livewire.admin.site-cms.social-link.index-component', compact('social_links'));
    }
}
