<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserCase;

class Payment extends Component
{
    public $uuid;

    public function mount($uuid)
    {
        $this->uuid = $uuid;
    }

    public function submit()
    {
        $case = UserCase::where('uuid', $this->uuid)->firstOrFail();
        $case->update(['payment_status' => 'done']);

        session()->flash('success', 'Payment successful!');
//        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.payment')->layout('layouts.app');
    }
}
