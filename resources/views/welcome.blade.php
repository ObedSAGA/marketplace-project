@extends('layouts.app')
@section('content')
<!-- HEADER -->
<div class="container col-xxl-8 px-4 py-5 mt-4">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-12 col-sm-6 col-lg-6">
            <img src="./images/ropa-segunda-mano.jpg" class="d-block mx-lg-auto img-fluid rounded-3" alt="Ropa de Segunda Mano" width="700" height="500" loading="lazy" />
        </div>
        <div class="col-12 col-sm-6 col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">
                {{__('Dale una segunda vida a tus cosas')}}
            </h1>
            <p class="lead">
                {{__(' Encuentra todo lo que necesitas al mejor precio y vende aquello que
                ya no utilices.')}}
               
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a class="btn btn-lg px-4 me-md-2 text-white bg-accent" href="{{route('announcement.create')}}">
                    {{__('Publica un anuncio')}}
                </a>
            </div>
        </div>
    </div>
</div>

<!--FEATURES-->


<div class="container">
	<div class="row">
		<div class="col-md-12 text-center my-5">
				<h2>¿Por qué elegirnos?</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 mb-4">
			<div class="lc-block text-center rounded shadow text-white bg-main px-4 py-5" style="min-height:50vh">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="4em" height="4em" viewBox="0 0 24 24" lc-helper="svg-icon" fill="currentColor">
					<path d="M17.81,4.47C17.73,4.47 17.65,4.45 17.58,4.41C15.66,3.42 14,3 12,3C10.03,3 8.15,3.47 6.44,4.41C6.2,4.54 5.9,4.45 5.76,4.21C5.63,3.97 5.72,3.66 5.96,3.53C7.82,2.5 9.86,2 12,2C14.14,2 16,2.47 18.04,3.5C18.29,3.65 18.38,3.95 18.25,4.19C18.16,4.37 18,4.47 17.81,4.47M3.5,9.72C3.4,9.72 3.3,9.69 3.21,9.63C3,9.47 2.93,9.16 3.09,8.93C4.08,7.53 5.34,6.43 6.84,5.66C10,4.04 14,4.03 17.15,5.65C18.65,6.42 19.91,7.5 20.9,8.9C21.06,9.12 21,9.44 20.78,9.6C20.55,9.76 20.24,9.71 20.08,9.5C19.18,8.22 18.04,7.23 16.69,6.54C13.82,5.07 10.15,5.07 7.29,6.55C5.93,7.25 4.79,8.25 3.89,9.5C3.81,9.65 3.66,9.72 3.5,9.72M9.75,21.79C9.62,21.79 9.5,21.74 9.4,21.64C8.53,20.77 8.06,20.21 7.39,19C6.7,17.77 6.34,16.27 6.34,14.66C6.34,11.69 8.88,9.27 12,9.27C15.12,9.27 17.66,11.69 17.66,14.66A0.5,0.5 0 0,1 17.16,15.16A0.5,0.5 0 0,1 16.66,14.66C16.66,12.24 14.57,10.27 12,10.27C9.43,10.27 7.34,12.24 7.34,14.66C7.34,16.1 7.66,17.43 8.27,18.5C8.91,19.66 9.35,20.15 10.12,20.93C10.31,21.13 10.31,21.44 10.12,21.64C10,21.74 9.88,21.79 9.75,21.79M16.92,19.94C15.73,19.94 14.68,19.64 13.82,19.05C12.33,18.04 11.44,16.4 11.44,14.66A0.5,0.5 0 0,1 11.94,14.16A0.5,0.5 0 0,1 12.44,14.66C12.44,16.07 13.16,17.4 14.38,18.22C15.09,18.7 15.92,18.93 16.92,18.93C17.16,18.93 17.56,18.9 17.96,18.83C18.23,18.78 18.5,18.96 18.54,19.24C18.59,19.5 18.41,19.77 18.13,19.82C17.56,19.93 17.06,19.94 16.92,19.94M14.91,22C14.87,22 14.82,22 14.78,22C13.19,21.54 12.15,20.95 11.06,19.88C9.66,18.5 8.89,16.64 8.89,14.66C8.89,13.04 10.27,11.72 11.97,11.72C13.67,11.72 15.05,13.04 15.05,14.66C15.05,15.73 16,16.6 17.13,16.6C18.28,16.6 19.21,15.73 19.21,14.66C19.21,10.89 15.96,7.83 11.96,7.83C9.12,7.83 6.5,9.41 5.35,11.86C4.96,12.67 4.76,13.62 4.76,14.66C4.76,15.44 4.83,16.67 5.43,18.27C5.53,18.53 5.4,18.82 5.14,18.91C4.88,19 4.59,18.87 4.5,18.62C4,17.31 3.77,16 3.77,14.66C3.77,13.46 4,12.37 4.45,11.42C5.78,8.63 8.73,6.82 11.96,6.82C16.5,6.82 20.21,10.33 20.21,14.65C20.21,16.27 18.83,17.59 17.13,17.59C15.43,17.59 14.05,16.27 14.05,14.65C14.05,13.58 13.12,12.71 11.97,12.71C10.82,12.71 9.89,13.58 9.89,14.65C9.89,16.36 10.55,17.96 11.76,19.16C12.71,20.1 13.62,20.62 15.03,21C15.3,21.08 15.45,21.36 15.38,21.62C15.33,21.85 15.12,22 14.91,22Z"></path>
				</svg>
				<h4 class="mt-3 mb-4 text-white" >Tecnología Segura</h4>
				<p class="text-white">In feugiat nulla euismod felis ultrices, eu rhoncus massa condimentum. Vivamus nulla eros, vestibulum in egestas ut, dapibus vel risus. Duis lacus diam, blandit rhoncus feugiat in, rhoncus eget orci. Praesent semper, ex et condimentum viverra, nibh magna congue metus, et elementum dui nibh nec est.</p>
			</div>
		</div>
		<div class="col-lg-4 mb-4">
			<div class="lc-block text-center rounded shadow text-white px-4 py-5 bg-accent" style="min-height:50vh">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="4em" height="4em" viewBox="0 0 24 24" lc-helper="svg-icon" fill="currentColor">
					<path d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z"></path>
				</svg>
				<h4 class="mt-3 mb-4 text-white" >+10 Mil Usuarios</h4>
				<p class="text-white">In feugiat nulla euismod felis ultrices, eu rhoncus massa condimentum. Vivamus nulla eros, vestibulum in egestas ut, dapibus vel risus. Duis lacus diam, blandit rhoncus feugiat in, rhoncus eget orci. Praesent semper, ex et condimentum viverra, nibh magna congue metus, et elementum dui nibh nec est.</p>
			</div>
		</div>
		<div class="col-lg-4 mb-4">
			<div class="lc-block text-center rounded shadow text-white bg-main px-4 py-5" style="min-height:50vh">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="4em" height="4em" viewBox="0 0 24 24" lc-helper="svg-icon" fill="currentColor">
					<path d="M20.06,18C20,17.83 19.91,17.54 19.86,17.11C19.19,17.81 18.38,18.16 17.45,18.16C16.62,18.16 15.93,17.92 15.4,17.45C14.87,17 14.6,16.39 14.6,15.66C14.6,14.78 14.93,14.1 15.6,13.61C16.27,13.12 17.21,12.88 18.43,12.88H19.83V12.24C19.83,11.75 19.68,11.36 19.38,11.07C19.08,10.78 18.63,10.64 18.05,10.64C17.53,10.64 17.1,10.76 16.75,11C16.4,11.25 16.23,11.54 16.23,11.89H14.77C14.77,11.46 14.92,11.05 15.22,10.65C15.5,10.25 15.93,9.94 16.44,9.71C16.95,9.5 17.5,9.36 18.13,9.36C19.11,9.36 19.87,9.6 20.42,10.09C20.97,10.58 21.26,11.25 21.28,12.11V16C21.28,16.8 21.38,17.42 21.58,17.88V18H20.06M17.66,16.88C18.11,16.88 18.54,16.77 18.95,16.56C19.35,16.35 19.65,16.07 19.83,15.73V14.16H18.7C16.93,14.16 16.04,14.63 16.04,15.57C16.04,16 16.19,16.3 16.5,16.53C16.8,16.76 17.18,16.88 17.66,16.88M5.46,13.71H9.53L7.5,8.29L5.46,13.71M6.64,6H8.36L13.07,18H11.14L10.17,15.43H4.82L3.86,18H1.93L6.64,6M2,20H13V22H2V20Z"></path>
				</svg>
				<h4 class="mt-3 mb-4 text-white">Cientos Artículos Diarios</h4>
				<p class="text-white">In feugiat nulla euismod felis ultrices, eu rhoncus massa condimentum. Vivamus nulla eros, vestibulum in egestas ut, dapibus vel risus. Duis lacus diam, blandit rhoncus feugiat in, rhoncus eget orci. Praesent semper, ex et condimentum viverra, nibh magna congue metus, et elementum dui nibh nec est.</p>
			</div>
		</div>
	</div>
</div>


<!-- SEARCH -->
<div class="container">
    <br />
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="text-center py-2">{{__('¿Que estás buscando?')}}</h2>
        </div>
        <div class="col-12 col-md-10 col-lg-8">
            <form action="{{route('search')}}" method="GET" class="card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col">
                        <input name="q" class="form-control form-control-lg form-control-borderless" type="search" placeholder="{{__('ui.placeHolder')}}" />
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-lg bg-accent" type="submit">
                            <i class="fas fa-search text-white"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CATEGORIAS -->

<div class="container py-5">
    <div class="row justify-content-evenly">

        <a href="{{route('category.announcements',['name' => 'ropa','id'=> '1'])}}" id="categories" class="col d-flex rounded-3 ropa">{{__('Ropa')}}</a>
        <a href="{{route('category.announcements',['name' => 'accesorios','id'=> '2'])}}" id="categories" class="col d-flex rounded-3 accesorios">{{__('Accesorios')}}</a>
        <a href="{{route('category.announcements',['name' => 'calzado','id'=> '3'])}}" id="categories" class="col d-flex rounded-3 calzado">{{__('Calzado')}}</a>
        <a href="{{route('category.announcements',['name' => 'tecnología','id'=> '4'])}}" id="categories" class="col d-flex rounded-3 tecnologia">{{__('Tecnología')}}</a>
        <a href="{{route('category.announcements',['name' => 'automóviles','id'=> '5'])}}" id="categories" class="col d-flex rounded-3 autos">{{__('Automóviles')}}</a>
        <a href="{{route('category.announcements',['name' => 'hogar','id'=> '6'])}}" id="categories" class="col d-flex rounded-3 hogar">{{__('Hogar')}}</a>
        <a href="{{route('category.announcements',['name' => 'infantil','id'=> '7'])}}" id="categories" class="col d-flex rounded-3 infatil">{{__('Infantil')}}</a>
        <a href="{{route('category.announcements',['name' => 'jardineria','id'=> '8'])}}" id="categories" class="col d-flex rounded-3 jardineria"> {{__('Jardineria')}}</a>

    </div>
</div>
<!-- <a class="categoryLink" href="{{route('category.announcements',['name' => 'calzado','id'=> '3'])}}"> -->
<!-- ÚLTIMOS PUBLICADOS -->

<div id="cards_landscape_wrap-2">
    <div class="container">
        <h2 class="text-center">{{__('Últimos publicados')}}</h2>
        <div class="row my-5">
            @foreach($announcements as $announcement)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 mt-4">
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
                                <strong class="small text"><a class="text-decoration-none" href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">Categoria: {{$announcement->category->name}}</a></strong>
                            </div>
                            <div>
                                <i class="small text">{{$announcement->created_at->format('d/m/Y')}}</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection