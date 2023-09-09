<?php

namespace App\Livewire\Berita;

use App\Models\Berita;
use App\Models\Kategori;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.berita.index');
    }
}
