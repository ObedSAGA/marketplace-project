@extends('layouts.app')
@section('content')

@if ($announcement)
<div id="cards_landscape_wrap-2">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Anuncio # {{$announcement->id}} Titulo: {{$announcement->title}}</h3>
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3">
                <div class=" mt-5 mb-5 d-flex justify-content-center align-items-center">
                    <div class="card2">
                        <div class="inner-card2">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($announcement->images as $image)
                                    <div class="carousel-item @if($loop->first)active @endif">
                                        <img src="{{$image->getUrl(300,150)}}" class="d-block w-100 img-fluid rounded" alt="...">
                                    </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                                <h4 class="text-dark">{{$announcement->title}}</h4> <span class="heart2"><i class="fa fa-heart"></i></span>
                            </div>
                            <div>
                                <strong class="px-2">Publicado por: {{$announcement->user->name}}</strong>
                            </div>
                            <div class="mt-2 px-2"> <small>{{$announcement->body}}</small> </div>
                            <div class="px-2 pt-2">
                                <h3 class="text-dark">{{$announcement->price}}€</h3>
                            </div>
                            <div class="px-2 mt-3">
                                <a class="btn bg-accent px-3 text-white" href="{{route('announcement.show', ['id'=>$announcement->id])}}">Ver más</a>
                            </div>
                            <div class="d-flex justify-content-between pt-3">
                                <div>
                                    <strong class="small text"><a href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">Categoria: {{$announcement->category->name}}</a></strong>
                                </div>
                                <div>
                                    <i class="small text">{{$announcement->created_at->format('d/m/Y')}}</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center pb-4 mt-3">
                    <div class="offset-col-lg-3 col-lg-6 col-md-6 col-6 ">
                        <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Rechazar</button>
                        </form>
                    </div>
                    <div class="offset-col-lg-3 col-lg-6 col-md-6 col-6 ">
                        <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                            @csrf
                            <button type="submit" class="btn bg-accent text-white">Aceptar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h3 class="text-center">Clasificación de imágenes</h3>
    @foreach ($announcement->images as $image)
    <div class="row justify-content-center">
        <div class="offset-col-lg-3 col-lg-3 col-md-6 col-sm-12">
            <hr>
            <img src="{{$image->getUrl(300,150)}}" alt="">
        </div>
        <div class="offset-col-lg-3 col-lg-3 col-md-6 col-sm-12">
            <hr>
            <div class="row">
                <div class="col">
                    <b>Adult:</b> {{$image->adult}}<br>
                    <b>Spoof:</b> {{$image->spoof}}<br>
                    <b>Medical:</b> {{$image->medical}}<br>
                    <b>Violence:</b> {{$image->violence}}<br>
                    <b>Racy:</b> {{$image->racy}}<br>
                    <b>Image id:</b> {{$image->id}}<br>
                </div>
                <div class="col">
                    <b>Labels</b><br>
                    <ul>
                        @if ($image->labels)
                        @foreach ($image->labels as $label)
                        <li>{{ $label }}</li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@else
<h3 class="text-center py-5"> No hay anuncios para revisar </h3>
<div style="height: 300px;"></div>
@endif


@endsection