<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Validator;
use App\Models\Etablissement;
use App\Models\Categorie;
use App\Models\image;
use Livewire\Component;

class EtablissementCreate extends Component
{
    public $state = [];
    public $image;
    public function store()
    {
        $validator = Validator::make($this->state, [
            'etablissement_noms' => 'required|max:100',
            'etablissement_adresse' => 'required|max:100',
            'etablissement_contact'=> 'required|max:100',
            'adresse-id' => 'required|max:100',
            'image_id' => 'required|max:100',

        ])->validate();
        $var=Etablissement::create($this->state);

        // $filename = "";
        // if ($this->image) {
        //     $filename = $this->image->store('posts', 'public');
        // } else{
        //     $filename = Null;
        // }

        // $images->images = $filename;

        // $result = $images->save();
        // $users=Etablissement::where('email',$this->user->email)->update(['image_id'=>$images->id]);
        // // redirect()->intended('/courrier-index')->with('message', 'le courrier a été ajouté avec succès.');
        }

    public function render()
    {
        $cat = Categorie::all();
        $img = image::all();
        return view('livewire.etablissement-create',compact('cat','img'));
    }
}
