@extends('layouts.base')

@section('content')

<h2 class="mb-4">Tableau de bord : </h2>
<!-- les bulles -->
<div class="row mb-4">
    <!-- News-->
    <div class="col-md-3">
        <div class="card-body shadow" style="border-left : 3px solid #36b9cc;">
            <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">News</div>
                    <div class="h5 mb-0 font-weight-bold">20 News</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-newspaper fa-2x " style="color:#dddfeb; font-size: 5em;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Textes -->
    <div class="col-md-3">
        <div class="card-body shadow" style="border-left : 3px solid #f6c23e;">
            <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Textes</div>
                    <div class="h5 mb-0 font-weight-bold">20 Textes</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-paragraph fa-2x" style="color:#dddfeb; font-size: 5em;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- video -->
    <div class="col-md-3">
        <div class="card-body shadow" style="border-left : 3px solid #e74a3b;">
            <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Videos</div>
                    <div class="h5 mb-0 font-weight-bold">20 Videos</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-video fa-2x" style="color:#dddfeb; font-size: 5em;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- carro -->
    <div class="col-md-3">
        <div class="card-body shadow" style="border-left : 3px solid blue;">
            <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">News</div>
                    <div class="h5 mb-0 font-weight-bold">20 News</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-newspaper fa-2x" style="color:#dddfeb; font-size: 5em;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- activités -->
<div class="row ml-2" >

    <ul class="list-group col-sm-8 mb-4 ml-auto">
        <li class="list-group-item font-weight-bold" style="background-color: #f8f9fc; color:#4e73df; font-size:20px;">
            Activites :
        </li>
        <li class="list-group-item">Item</li>
    </ul>

    <ul class="list-group col-sm-4 mb-4 ml-auto">
        <li class="list-group-item font-weight-bold" style="background-color: #f8f9fc; color:#4e73df; font-size:20px;">
            Racourci :
        </li>
        <li class="list-group-item">Item</li>
    </ul>
</div>

@endsection
