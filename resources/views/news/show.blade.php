@extends('layouts.base')

@section('content')

<h2>
    <i class="fas fa-newspaper mb-4 "></i> News :
</h2>

<div class="alert {{ $new['statut']=='Primary' ? 'alert-success' : 'alert-warning'}}" role="alert">
    {{$new['contenu']}}
</div>

<a class="float-right" href="{{route('news.index')}}" ><i class="fas fa-angle-double-left"></i> retour</a>


@endsection
