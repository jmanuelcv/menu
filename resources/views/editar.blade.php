@extends('plantilla')

@section('contenido')

    <div class="container">
        <div class="abs-center">
{{-- Formulario para editar platos  --}}

            <form action="{{ route('update', $plato->id) }}" enctype="multipart/form-data" method="POST" class="border p-3 form">
                @csrf 
              
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" value="{{ $plato->nombre }}"  name="nombre" id="nombre"
                        class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" value="{{ $plato->categoria }}"  name="categoria" id="categoria"
                        class="form-control">
                </div>
                <br>

                <div class="input-group mb-3">
                    <span class="input-group-text">€</span>
                    <span class="input-group-text">0.00</span>
                    <input type="number" value="{{ $plato->precio }}"  name="precio" id="precio"
                        class="form-control">
                </div>
        
                    <div class="form-group" style="max-width: 600px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ $plato->ruta }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <input type="file" value="{{ $plato->ruta }}"  accept="image/png,image/jpeg"  name="imagen" id="imagen" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>



                <br>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-secondary" href="{{ route('menu') }}">Volver al menu</a>
            </form>
        </div>
    </div>
@endsection
