@extends('layouts.app')
@section('content')
<div class="container mt-5 py-5">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
            <div class="card card-signin my-4">
                <div class="card-body">
                    <h3 class="text-center">Nuevo Anuncio</h3>
                    <span class="d-none">(Secret: {{$uniqueSecret}})</span>
                    <form method="POST" action='{{route("announcement.store")}}' class="form-signin mt-4">
                        @csrf
                        <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                        <div class="form-label-group">
                            <input type="text" id="inputUsername" class="form-control" name="title" placeholder="Username" required autofocus value="{{old('title')}}">
                            <label for="inputUsername">Titulo</label>
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="number" step="0.01" class="form-control" id="announcementPrice" aria-describedby="priceHelp" name="price" value="{{old('price')}}">
                            <label for="announcementPrice">Precio</label>
                            @error('price')
                            <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="announcementBody">Anuncio</label>
                            <textarea class="form-control" name="body" id="announcementBody" cols="30" rows="10">{{old("body")}}</textarea>
                            @error('body')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <label for="category">Categoría</label>
                        <div>
                            <select class="form-select" name="category" id="category">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="announcementImages" class="form-label">Imagenes</label>
                            <div class="dropzone" id="drophere"></div>
                            @error('images')
                            <small class="alert alert-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <hr>

                        <button type="submit" class="btn text-white my-2 bg-accent">Crear anuncio</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection