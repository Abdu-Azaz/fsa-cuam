<?php

namespace App\Livewire;

use App\Models\Announce;
use App\Models\Major;
use App\Models\Professor;
use App\Models\Programme;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public $search = '';
    public $announces;

    public function render()
    {

        if ($this->search)
            $this->announces = Announce::where('body', 'like', '%' . $this->search . '%')
                ->orWhere('body', 'like', '%' . $this->search . '%')->get();
        else
            $this->announces = [];
        return view('livewire.search');
    }
}
