@extends('layouts.nav')
@section('contenido')

    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner ">
            <div class="carousel-item active" >
                <img class="imgcarrusel " src="{{ asset('images/carrusel1.webp') }}" class="d-block w-100" alt="imgCarrusel">
                <div class="texto ">Todo lo que Quieres</div>
                <div class="texto2">Lo que Buscas</div>
                <div class="texto3">Esta Aquí</div>
            </div>
            <div class="carousel-item">
                <img class="imgcarrusel" src="{{ asset('images/carrucel2.webp') }}" class="d-block w-100" alt="imgCarrusel">
                <div class="texto4">Texto encima de la imagen</div>
                <div class="texto5">Texto la imagen</div>
                <div class="texto6">imagen</div>
            </div>
            <div class="carousel-item">
                <img class="imgcarrusel" src="{{ asset('images/carrucel3.webp') }}" class="d-block w-100" alt="imgCarrusel">
                <div class="texto7">Texto encima de la imagen</div>
                <div class="texto8">Texto la imagen</div>
                <div class="texto9">imagen</div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container d-flex justify-content-center ">
        <h2 class="mt-5">
            Destacado
        </h2>
    </div>
@endsection
