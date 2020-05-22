@extends('layouts.base',['titre'=>'Créer un texte'])

@section('content')

<h2>
    <i class="fa fa-plus-circle mb-4 "></i> Ajouter un Texte :
</h2>

<form action="{{ route('textes.store') }}" method="post" class="row col-sm-10 offset-sm-1">

    @csrf

    <div class="form-group col-sm-12 ">
        <label for="titre">Titre:</label>
        <input type="text" name="titre" id="titre" class="form-control {{ $errors->has('titre') ? 'is-invalid' : ''}}" placeholder="Titre" value="{{ old('titre')?? '' }}">
    </div>

    <div class="form-group col-sm-12">
        <textarea class="{{ $errors->has('contenu') ? 'is-invalid' : ''}}" name="contenu" id="txtEditor">{{ old('contenu')?? '' }}</textarea>
    </div>

    <div class="form-group col-sm-12 ">
        <input type="submit" class="btn btn-primary float-right " value="Ajouter">
    </div>

</form>

<script>
    $(document).ready(function() {
        $('textarea').summernote({
            height: 300,   //set editable area's height
            lang: 'fr-FR',
        });
    });
</script>

@endsection
