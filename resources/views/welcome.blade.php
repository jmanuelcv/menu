@extends('plantilla')


@section('contenido')


<div></div>
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://i.postimg.cc/CMGCSDq7/afa.png" alt="">
        <h1 class="mb-5 display-2">AFA Steaks</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-justify">Bienvenidos a AFA Steaks, un restaurante concebido para cuidar al máximo el
                trato a nuestros clientes, ofreciendo la máxima calidad de producto y de servicio.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <p>

                    {{-- Muestra sección de contacto --}}
                    <a class="btn btn-primary btn-lg px-4 gap-3" data-bs-toggle="collapse" href="#collapseExample"
                        role="button" aria-expanded="false" aria-controls="collapseExample">
                        Contacto
                    </a>

                </p>

            </div>
        </div>
    </div>
    {{-- Sección de contacto, por defecto oculta --}}
    <div class="collapse" id="collapseExample">
        <div class="card">
            <section class="container" id="contenido"
                style="background-image: url(https://i.postimg.cc/jq9xP6RQ/descarga.png)">

                <div class="container col-xxl-8 px-4 py-5" style="font-weight: 500;">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                      <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input  required type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Telefono:</label>
                                    <input required  type="phone" class="form-control" id="exampleInputPassword1"
                                        placeholder="Telefono">
                                </div>
                                <div class="form-group">
                                    <label for="motivo">Motivo:</label>
                                    <input  required type="text" class="form-control" id="motivo" placeholder="Motivo">
                                </div>
                                <div class="form-check">
                                    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Politica de privaciad</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>  
                            
                            
                        </div>
                        <div class="col-lg-6">
                            <p class="l">Calle del Gral. Elorza, 68
                            <p class="">, 33001 Oviedo, Asturias</p>
                            <p class="">Tel. 985 55 55 55</p>
                            <p class="">info@AFA-Steak.es</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>





    <section class="position-relative overflow-hidden">

        <div class="container py-7 py-lg-10 position-relative z-index-1 ">
            <div class="row justify-content-around align-items-center g-5 py-5">
                <div class="col-lg-6 col-xl-4 order-1 order-lg-last position-relative mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="100">
                    <h1 class="mb-5 display-5">UNA COCINA
                        QUE EMOCIONA</h1>
                    <p class="lead">
                        La combinación de productos de proximidad, la tradición gastronómica asturiana y las nuevas
                        técnicas de cocina dan como resultado una cocina natural que emociona.
                    </p>
                </div>
                <div class="col md-lg-6 col-xl-4 order-last order-lg-1" data-aos="fade-up" data-aos-delay="50">
                    <div class="position-relative">
                        <img src="https://images.pexels.com/photos/255501/pexels-photo-255501.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="" class="img-fluid bg-white">
                    </div>
                </div>
            </div>
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img class="img-fluid bg-white"
                            src="https://images.pexels.com/photos/2102934/pexels-photo-2102934.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt="">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-5 display-5">El pep</h3>
                        <p class="lead">Nuestro chef, El pep dio sus primeros pasos en la cocina a los 15 años
                            en el restaurante familiar junto a su madre y abuela. Al poco tiempo montó sus propios
                            negocios, mientras continuaba formándose en cursos con grandes cocineros y aprendiendo las
                            distintas técnicas de cocina.
                            Representante de la cocina asturiana en diferentes jornadas gastronómicas nacionales e
                            internacionales, reconocido y galardonado, El pep y su equipo son la mirada al futuro de la
                            cocina asturiana, personal y creativa.</p>
                    </div>
                </div>
            </div>
            {{-- Albun de platos generado dinamicamente --}}
            <div class="album py-5 ">
                <div class="container">
                    <h2 class="display-3">RECOMENDACIONES</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                        @foreach ($restaurante as $item)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" style="height: 268px " src="{{ $item->ruta }}" alt="">
                                    <div class="card-body shadow">
                                        <h3 class="card-text display-4">{{ $item->nombre }}</h3>
                                        <div class="   d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                            </div>
                                            <small class="text-muted">{{ $item->created_at }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                  

                    </div>
                </div>
            </div>


            {{-- MAPA --}}
            <div class="row pb-2 ">
                <iframe class="col-12"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2900.472421991554!2d-5.850765384511505!3d43.36714507913213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd368cfa35319441%3A0x177752b8201eec2e!2sAFA%20Formacion%20Continua.%20Centro%20de%20Formaci%C3%B3n%20Asturias.!5e0!3m2!1ses!2ses!4v1644922112440!5m2!1ses!2ses"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>



    </section>
@endsection
