@extends('layouts.base')

@section('content')

<h2>
    <i class="fa fa-edit mb-4 "></i> Modifier une News :
</h2>

<form action="{{ route('news.update',$new) }}" method="post" class="row col-sm-8 offset-sm-2">

    @csrf
    @method('put')

    <div class="form-group col-sm-12">
        <label for="contenu">Contenu : </label>
        <textarea name="contenu" id="contenu" class="form-control {{ $errors->has('contenu') ? 'is-invalid' : ''}}"rows="5">{{ old('contenu') ?? $new['contenu'] }}</textarea>
    </div>

    <div class="form-group col-sm-3">
        <label for="statut">Staut : </label>
        <select class="form-control {{ $errors->has('statut') ? 'is-invalid' : ''}}" name="statut" id="statut">
            <option value="Primary">Primary</option>
            <option value="Secondary">Secondary</option>
        </select>
    </div>

    <div class="form-group col-sm-12 ">
        <input type="submit" class="btn btn-primary float-right " value="Modifier">
    </div>

</form>
@endsection
