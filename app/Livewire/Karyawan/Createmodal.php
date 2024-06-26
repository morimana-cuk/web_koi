<?php

namespace App\Livewire\Karyawan;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Createmodal extends Component
{
    public $name;

    public $email;

    public $address;

    public $password;

    public function render()
    {
        return view('livewire.karyawan.createmodal');
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|max:255',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'password' => Hash::make($validated['password']),
        ]);

        session()->flash('success', 'Data karyawan berhasil ditambahkan.');

        // Reset input setelah penyimpanan berhasil
        $this->reset();

        // Redirect ke halaman /karyawan setelah save berhasil
        return redirect('/karyawan');
    }
}
