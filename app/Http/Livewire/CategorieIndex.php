<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
class CategorieIndex extends Component
{
    public $categorie;
    public function mount()
    {
        $this->categorie = Categorie::all();
    }


    public function render()
    {
        $cat=Categorie::all();
        return view('livewire.categorie-index',compact('cat'));
    }
}
