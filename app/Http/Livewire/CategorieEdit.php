<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\Categorie;
class CategorieEdit extends Component
{

    public $state = [];
    public function update()
    {

        $validator = Validator::make($this->state, [
            'categorie_noms' => 'required|max:100',
        ])->validate();
        if ($this->state['categorie_id']) {
            $categorie = Categorie::find($this->state['categorie_id']);
            $categorie->update([
                'categorie_noms' => $this->state['categorie_noms'],
             ]);
            $this->updateMode = false;
            $this->reset('state');
            $this->categories = Categorie::all();
            redirect()->intended('/categorie-index')->with('message', 'Categorie modifié avec succès.');
        }
    }
    public function mount($id)
    {
        $this->updateMode = true;
        $categorie = Categorie::find($id);
        $this->state = [
            'categorie_id' => $categorie->id,
            'categorie_noms' => $categorie->categorie_noms,

        ];
     }


    public function render()
    {
        return view('livewire.categorie-edit');
    }
}
