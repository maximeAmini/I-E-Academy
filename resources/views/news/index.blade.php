@extends('layouts.base')

@section('content')

<h2>
    <i class="fas fa-newspaper mb-4 "></i> Liste des News :
    <a class="btn btn-outline-primary float-right mb-4" href="{{route('news.create')}}">Ajouter une News</a>
</h2>


<table class="table table-striped table-inverse" style="border-radius:20em;">
    <tr>
        <th>cotenu</th>
        <th>statut</th>
    </tr>
    @foreach ($news as $new)
    <tr>
        <td>
            {{$new['contenu']}}
            <div style="font-size:13px; ">
                <a href="{{route('news.edit', $new ) }}" title="Modifier"><i
                        class="fas fa-edit mr-2"> </i></a>
                <form action="{{route('news.destroy', $new)}}" method="post" style="display: inline">
                    @csrf
                    @method('delete')
                    <button type="submit" style="color:#dc3545; border:none; background:none;" title="Supprimer"><i class="fas fa-trash mr-2"></i></button>
                </form>
                <a href="{{route('news.show', $new ) }}" title="Voir"><i class="fas fa-eye"></i></a>
            </div>
        </td>
        <td style="color: {{ $new['statut']=='Primary' ? '#36b9cc' : '#f6c23e'}}">{{$new['statut']}}</td>
    </tr>
    @endforeach
</table>

@endsection
