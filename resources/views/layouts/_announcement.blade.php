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