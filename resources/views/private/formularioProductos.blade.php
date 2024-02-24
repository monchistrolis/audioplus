@extends('layouts.nav')
@section('contenido')
    <div class="container mt-5 col-lg-8 ">
        <div class="row">
            <form action="{{url('/productos')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="">Categoria</label>
                    <select class="form-select" aria-label="Default select example" id="categoria" name="categoria">
                        <option selected>Selecciona la categoría</option>
                        <option value="Guitarras">Guitarras</option>
                        <option value="Bajos">Bajo</option>
                        <option value="Baterías y percusión">Baterías y percusión</option>
                        <option value="Teclados y pianos">Teclados y pianos</option>
                        <option value="Instrumentos de viento">Instrumentos de viento</option>
                        <option value="Instrumentos de cuerda">Instrumentos de cuerda</option>
                        <option value="Accesorios para instrumentos">Accesorios para instrumentos</option>
                        <option value="Equipo de grabación">Equipo de grabación</option>
                        <option value="Equipo de sonido y PA">Equipo de sonido y PA</option>
                        <option value="Equipo de iluminación">Equipo de iluminación</option>
                        <option value="Partituras y libros">Partituras y libros</option>
                        <option value="Accesorios">Accesorios</option>
                        <option value="Repuestos">Repuestos</option>
                        <option value="Destacado">Destacado</option>

                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="nombre">Precio:</label>
                        <input type="text" class="form-control" id="precio" name="precio" required>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="nombre">Cantidad:</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="archivo">foto:</label>
                    <input type="file" class="form-control" id="foto" name="foto" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Descripcion:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                </div>
                <div class="btnCargar d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Subir Producto</button>
                </div>
            </form>
        </div>
    </div>
@endsection
