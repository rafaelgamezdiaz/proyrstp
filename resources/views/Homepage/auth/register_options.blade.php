@extends('Homepage.layouts.app')
@section('title','Registro')
@section('content')
    <div class="body">
        @include('Homepage.partials.header')
        <div role="main" class="main">
            <section class="section bottom-xxmin section-no-border" id="start-now">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 center top-md">
                            <a href="{{ url('/') }}">
                                <img  src="{{ asset('img/logo/logoRS360_transparente.png') }}" width="180" alt="Logo" />
                            </a>
                            <h3 class="heading-dark mb-none top-md">ELIGE UN PERFIL PARA  <strong>REGISTRARTE</strong></h3>
                        </div> 
                    </div>

                    <div class="row mt-xl">
                        <div class="col-md-6">
                            <div class="testimonial testimonial-style-4 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                                <h4 class="heading-primary mb-xs text-center"><strong>PARA PROPIETARIOS</strong></h4>
                                <hr class="hr-deep-blue">
                                <blockquote class="text-md text-center text-spacing-md">
                                    Ponemos a tu disposición numerosas herramientas profesionales para la gestión
                                            comercial de <span class="alternative-font">inmuebles</span>.
                                </blockquote>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="{{ url('/registro/profesionales') }}" class="btn btn-primary btn-card btn-block btn-lg"><strong>AGENCIAS Y <br>PROFESIONALES</strong></a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="{{ url('/registro/propietarios') }}" class="btn btn-warning btn-card btn-block btn-lg"><strong>PROPIETARIOS <br>PARTICULARES</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="testimonial testimonial-style-4 appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="0">
                                <h4 class="heading-primary mb-xs text-center"><strong>PARA DEMANDA</strong></h4>
                                <hr class="hr-deep-blue">
                                <blockquote class="text-md text-center text-spacing-md">
                                    De forma fácil, ponemos a tu disposición las mejores
                                            <span class="alternative-font">ofertas de inmuebles</span>&nbsp;&nbsp;acordes a tus preferencias.
                                </blockquote>
                                <a href="{{ url('/registro/demanda') }}" class="btn btn-info btn-card  btn-block btn-lg"><strong>DEMANDA Y BÚSQUEDA <br> DE INMUEBLES</strong></a>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <a href="{{ url('/') }}">
                            ¿Volder a la página de Inicio?
                        </a>
                    </div>
                </div>
            </section>
        </div>
        @include('Homepage.partials.footer')
    </div>
@endsection
