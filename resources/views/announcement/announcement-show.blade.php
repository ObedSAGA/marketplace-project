@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card-footer d-flex justify-content-between">
        <strong>Categoria: <a href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{$announcement->category->name}}</a></strong>
        <i>Fecha de publicación: {{$announcement->created_at->format('d/m/Y')}}</i>
    </div>
    <!-- Portfolio Item Heading -->
    <h1 class="my-2">{{$announcement->title}}</h1>
    <strong class="fs-3">Precio: {{$announcement->price}}€</strong>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($announcement->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{$image->getUrl(300,150)}}" class="d-block w-100" alt="...">
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

        </div>
        <div class="col-md-6">
            <h3>Descripción del producto</h3>
            <p>{{$announcement->body}}</p>
            <h3>Contacta con el vendedor</h3>
            <div class="d-flex align-items-baseline">
                <i class="fas fa-user fa-2x m-4 navIcon"></i>
                <p>Publicado por: {{$announcement->user->name}}</p>
            </div>
            <div class="d-flex align-items-baseline">
                <i class="fas fa-map-marker-alt fa-2x m-4 navIcon"></i>
                <p>Bilbao</p>
            </div>
            <div class="d-flex align-items-baseline">
                <i class="fas fa-phone fa-2x m-4 navIcon"></i>
                <p>987654321 / Whatsapp : 612345678</p>
            </div>
            <div class="d-flex align-items-baseline">
                <i class="fas fa-at fa-2x m-4 navIcon"></i>
                <p>{{$announcement->user->email}}</p>
            </div>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <!-- <h3 class="my-4">Productos relacionacionados</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

  </div> -->
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection