<?php

namespace App\Http\Livewire\Admin\Services\Service;

use Livewire\Component;

class FeatureList extends Component
{
    public $service;

    protected $listeners = ['$refresh'];

    public function render()
    {
        return view('livewire.admin.services.service.feature-list');
    }
}
