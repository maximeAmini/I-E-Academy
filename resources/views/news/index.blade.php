@extends('layouts.base')

@section('content')

<h2 class="mb-4">
    <i class="fas fa-newspaper"></i> Liste des News :
    <a class="btn btn-outline-primary float-right" href="{{route('news.create')}}">Ajouter une News</a>
</h2>


<table class="table table-striped table-inverse">
    <tr>
        <th>cotenu</th>
        <th>statut</th>
    </tr>
    @foreach ($news as $new)
    <tr>
        <td>
            {{$new['contenu']}}
            <div style="font-size:13px; ">
                <a href="#" title="Modifier"><i class="fas fa-edit mr-2"> </i></a>
                <a href="#" style="color:#dc3545;" title="Supprimer"><i class="fas fa-trash mr-2" style="color:red"> </i></a>
                <a href="#" title="Voir"><i class="fas fa-eye"></i></a>
            </div>
        </td>
        <td style="color: {{ $new['statut']=='primary' ? '#36b9cc' : '#f6c23e'}}">{{$new['statut']}}</td>
    </tr>
    @endforeach
</table>

@endsection
