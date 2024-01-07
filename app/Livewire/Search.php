<?php

namespace App\Livewire;

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
    public $programmes;
 
    public function render()
    {
        // $this->programmes = Programme::where('title','like', '%'.$this->search.'%')->get();

        if($this->search)
            $this->programmes = Major::where('diploma','like', '%'.$this->search.'%')->get();
        else 
            $this->programmes = [];
        return view('livewire.search');
    }
}
