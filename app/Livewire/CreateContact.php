<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateContact extends Component
{

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $subject = '';

    #[Validate('required')]
    public $content = '';

    public function save()
    {
        $this->validate();

        // Post::create(
        //     $this->only(['title', 'content'])
        // );
        Session::flash('success', __('messages.thank-you'));
        return back();
    }
    public function render()
    {
        return view('livewire.create-contact');
    }

    public function mount()
    {
        Session::forget('success');
    }
}
