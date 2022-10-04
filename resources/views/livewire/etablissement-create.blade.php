<div>
    <title>Cretion d'un etablissement</title>

    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">banabam-test</a></li>
                <li class="breadcrumb-item active" aria-current="page">etablissement-create</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">ajouter un etabissement</h1>

            </div>
            <div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <form wire:submit.prevent="store" action="#" method="POST">
                            <div class="mb-4">
                                <label for="etablissement_noms">noms de l'etablissement</label>
                                <input type="text" class="form-control"  wire:model="state.etablissement_noms"id="etablissement_noms" aria-describedby="etablissement_noms"placeholder="ecrire" required>
                                <small id="etablissement_noms" class="form-text text-muted"></small>
                                @error('etablissement_noms') <span class="text-danger">{{ $message }}</span> @enderror
                              </div>
                              <div class="mb-4">
                                <label for="etablissement_noms">adresse de l'etablissement</label>
                                <input type="text" class="form-control"  wire:model="state.etablissement_adresse"id="etablissement_adresse" aria-describedby="etablissement_noms"placeholder="ecrire" required>
                                <small id="etablissement_adresse" class="form-text text-muted"></small>
                                @error('etablissement_adresse') <span class="text-danger">{{ $message }}</span> @enderror
                              </div>
                              <div class="mb-4">
                                <label for="etablissement_contact">contact de l'etablissement</label>
                                <input type="text" class="form-control"  wire:model="state.etablissement_contact"id="etablissement_contact" aria-describedby="etablissement_contact"placeholder="ecrire" required>
                                <small id="etablissement_contact" class="form-text text-muted"></small>
                                @error('etablissement_contact') <span class="text-danger">{{ $message }}</span> @enderror
                              </div>



                            <div class="mb-3">
                                <a href="{{ route('categorie-create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                                    <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    Ajouter</a> <label class="my-1 me-2" for="categorie_id">Categories</label>
                                <select class="form-select" wire:model="state.categorie_id" id="categorie_id" aria-label="Default select example">
                                    <option selected>selectionez ici</option>
                                 @foreach ($cat as $value)
                                    <option value="{{$value->id}}">{{$value->categorie_noms}}</option>
                                  @endforeach
                                </select>
                                @error('categorie_id') <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="card-body">
                                    <div class="custom-file mt-3">
                                        <input type="file" wire:model='image_id' class="custom-file-input" id="customFile">
                                    </div>
                                    {{-- @if ($image)
                                    <img src="{{$image->temporaryUrl()}}" alt="Image placeholder" class="avatar rounded-circle">
                                    @endif --}}
                                </div>
                        </div>
                    </div>

                    <div class="row mb-5 mb-lg-5"style="float:rigth">
                        <div class="col-lg-3 col-md-6">

                            </div>
                            <!-- Checkboxes -->
                        </form>

                        <div class="col-md-6 mb-3"><button class="btn btn-primary" type="submit"value="Ok"  wire:click.prevent="store">envoyer</button>

                        <!-- End of Form -->
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
