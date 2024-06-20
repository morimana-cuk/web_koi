<?php

namespace App\Livewire\Karyawan;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{

    use WithPagination;

    protected $listeners = ['karyawanAdded' => '$refresh'];

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
}
