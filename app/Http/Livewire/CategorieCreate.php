<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Validator;
use App\Models\Categorie;
use Livewire\Component;

class CategorieCreate extends Component
{
    public $state = [];
    public function store()
    {
        $validator = Validator::make($this->state, [
            'categorie_noms' => 'required|max:100',
        ])->validate();
        $var=Categorie::create($this->state);
        redirect()->intended('/categorie-index')->with('message', 'Categorie creer avec succès.');
        }

    public function render()
    {
        return view('livewire.categorie-create');
    }
}
