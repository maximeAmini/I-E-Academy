@extends('layouts.base')

@section('content')

<h2>
    <i class="fas fa-paragraph mb-4 "></i> Liste des Textes :
    <a class="btn btn-outline-primary float-right mb-4" href="{{route('textes.create')}}">Ajouter un Texte</a>
</h2>

<table class="table table-striped table-inverse" style="border-radius:20em;">
    <tr>
        <th>Titre</th>
        <th>Contenu</th>
    </tr>
    @foreach ($textes as $texte)
    <tr>
        <td>
            {{$texte['titre']}}
            <div style="font-size:13px; ">
                <a href="{{route('textes.edit', $texte ) }}" title="Modifier"><i
                        class="fas fa-edit mr-2"> </i></a>
                <form action="{{route('textes.destroy', $texte)}}" method="post" style="display: inline;" >
                    @csrf
                    @method('delete')
                    <button type="submit" class="SuppForm" title="Supprimer"><i class="fas fa-trash mr-2"></i></button>
                </form>
                <a href="{{route('textes.show', $texte ) }}" title="Voir"><i class="fas fa-eye"></i></a>
            </div>
        </td>
        <td>{!! $texte['contenu'] !!}</td>
    </tr>
    @endforeach
</table>

@endsection
