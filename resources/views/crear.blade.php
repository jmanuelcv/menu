@extends('plantilla')

@section('contenido')
    <div class="container">
        <div class="abs-center">
            {{-- Formulario para crear platos --}}
            <form action="{{ route('saveItem') }}" method="POST" enctype="multipart/form-data" class="border p-3 form">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" required name="nombre" id="nombre" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" required name="categoria" id="categoria" class="form-control">
                </div>


                <br>
                <div class="input-group mb-3">
                    <span class="input-group-text">€</span>
                    <span class="input-group-text">0.00</span>
                    <input type="number" required name="precio" id="precio" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" accept="image/png,image/jpeg" required name="imagen" id="imagen" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Agregar plato</button> <a class="btn btn-secondary"
                    href="{{ route('menu') }}">Volver al menu</a>
            </form>
        </div>
    </div>
@endsection
