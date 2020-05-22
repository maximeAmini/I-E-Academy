@extends('layouts.base')

@section('content')

<h2>
    <i class="fas fa-paragraph mb-4 "></i> Texte #{{$texte['id']}} :
</h2>
<div class="text-center col-sm-4 offset-sm-4">
    <h4 style="color : #dc3545;">
        <i class="fas fa-crown" style="font-size:2em; color:#36b9cc;"></i>
        <br>
        {{$texte['titre']}}
    </h4>
    <p style="border:4px solid #dc3545; padding:15px;">{!! $texte['contenu'] !!}</p>
</div>

@endsection
