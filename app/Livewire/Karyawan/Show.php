<?php

namespace App\Livewire\Karyawan;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class Show extends Component
{
    use WithPagination;

    protected $listeners = ['karyawanAdded' => '$refresh'];

    public $name;
    public $email;
    public $address;
    public $password;
    public $updatename;
    public $updateemail;
    public $updateaddress;
    public $selectedUser;

    public function render()
    {
        return view('livewire.karyawan.show', [
            'users' => User::paginate(10),
        ]);
    }

    public function deleteKaryawan(User $user)
    {
        $user->delete();
        session()->flash('success', 'Data karyawan berhasil dihapus.');
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
        $this->reset();
    }

    public function edit(User $user)
    {
        $this->selectedUser = $user;
        $this->updatename = $user->name;
        $this->updateemail = $user->email;
        $this->updateaddress = $user->address;
    }

    public function update()
    {
        $validated = $this->validate([
            'updatename' => 'required|max:255',
            'updateemail' => 'required|email|max:255',
            'updateaddress' => 'required|max:255',
        ]);

        $this->selectedUser->update([
            'name' => $validated['updatename'],
            'email' => $validated['updateemail'],
            'address' => $validated['updateaddress'],
        ]);

        session()->flash('success', 'Data karyawan berhasil diperbarui.');
        $this->reset();
    }
}
