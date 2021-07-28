@extends('layouts.app')
@section('content')
@if($announcements)
<div id="cards_landscape_wrap-2">
    <div class="container">
        <h1 class="text-center">Resultados de Busqueda: {{$q}}</h1>
        <div class="row my-4">
            @foreach($announcements as $announcement)
            @include('layouts._announcement')
            @endforeach
        </div>
    </div>
</div>
<div class="row my-3 justify-content-center">
    <div class="col-12 col-md-8 offset-md-2">
        {{ $announcements->links() }}
    </div>
</div>
@else
<h3 class="text-center py-5"> No hay resultados que coincidan con esta busqueda</h3>
<div style="height: 300px;"></div>
@endif
@endsection