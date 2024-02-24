@extends('layouts.nav')
@section('contenido')
        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach ($bajos as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-8 mt-3 ">
                        <div class="card ">
                            <div class="card-body">
                                <p class="d-flex justify-content-end">{{$item->categoria}}</p>
                                <div class=" d-flex justify-content-center">
                                    <img class="imgProducto" src="{{ asset('storage/' . $item->foto) }}"
                                        alt="{{ $item->nombre }}">
                                </div>
                                <div class=" d-flex justify-content-center">
                                    <h2>{{ $item->nombre }}</h2>
                                </div>
                                <div class=" d-flex justify-content-center">
                                    <p>{{ $item->descripcion }}</p>
                                </div>
                                <div class=" d-flex justify-content-center">
                                    <p>Precio: ${{ $item->precio }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
