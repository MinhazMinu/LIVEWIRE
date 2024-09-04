<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Clicker extends Component {

    #[Computed()]
    public $count = 0;

    public $users = [];

    public function mount() {
        $this->users = User::all();
    }

    public function increment() {
        $this->count++;
    }

    public function createUser() {

        User::create([
            'name' => 'test',
            'email' => 'test@email.com' . Count($this->users),
            'password' => Hash::make('12345678'),
        ]);
    }


    public function render() {
        return view('livewire.clicker');
    }
}
