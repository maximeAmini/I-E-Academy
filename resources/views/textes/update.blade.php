@extends('layouts.base',['titre'=>'modifer un texte'])

@section('content')

<h2>
    <i class="fa fa-edit mb-4 "></i> Modifier un Texte :
</h2>

<form action="{{ route('textes.update',$texte) }}" method="post" class="row col-sm-10 offset-sm-1">

    @csrf
    @method('put')

    <div class="form-group col-sm-12 ">
        <label for="titre">Titre:</label>
        <input type="text" name="titre" id="titre" class="form-control {{ $errors->has('titre') ? 'is-invalid' : ''}}" placeholder="Titre" value="{{ old('titre') ?? $texte['titre'] }}">
    </div>

    <div class="form-group col-sm-12">
        <textarea name="contenu" id="txtEditor">{{ old('contenu') ?? $texte['contenu'] }}</textarea>
    </div>

    <div class="form-group col-sm-12 ">
        <input type="submit" class="btn btn-primary float-right " value="Modifier">
    </div>

</form>

<script>
    $(document).ready(function() {
        $('#txtEditor').summernote({
            height: 300,   //set editable area's height
            lang: 'fr-FR',
        });
    });
</script>

@endsection
