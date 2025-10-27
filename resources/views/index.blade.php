@extends('layouts.plantilla')

@section('contenido')

    <div id="carouselExampleDark" class="carousel carousel-dark slide mp-10">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                {{-- Imagen que muestra TODAS las promociones --}}
                <a href="{{ route('promociones.index') }}">
                    <img src="{{ asset('promociones/promo1.jpg') }}" class="d-block w-100" alt="Todas las promociones">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>ClinicWeb</h5>
                    <p>Promociones vigentes y actuales</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                {{-- Imagen que muestra solo las promociones de octubre --}}
                <a href="{{ route('promociones.index', ['mes' => 'octubre']) }}">
                    <img src="{{ asset('promociones/promo3.jpg') }}" class="d-block w-100" alt="Promociones de octubre">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cuidate con ClinicWeb</h5>
                    <p>Promociones del mes de octubre</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previo</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    {{-- Tarjetas dinámicas desde PHP --}}
    <div class="row mt-5 justify-content-center">
        @forelse ($promociones as $promo)
            <div class="card card-hover border-success mb-3 mx-3" style="max-width: 18rem;">
                <div class="card-header bg-transparent border-success">
                    {{ $promo['mes'] === 'octubre' ? 'Promoción por mes de octubre' : 'Promoción Vigente' }}
                </div>
                <div class="card-body text-success">
                    <h5 class="card-title">{{ $promo['titulo'] }}</h5>
                    <p class="card-text">{{ $promo['descripcion'] }}</p>
                </div>
                <div class="card-footer bg-transparent border-success">ClinicWeb</div>
            </div>
        @empty
            <p class="text-center mt-4">No hay promociones disponibles.</p>
        @endforelse
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Contáctanos - ClinicWeb</h2>

        <div class="row ">
            <div class="col-md-6">
                <div class="card border-primary mb-3">
                    <div class="card-header bg-primary text-white">Información de Contacto</div>
                    <div class="card-body">
                        <p><strong>Dirección:</strong> Av. Salud 123, Colonia Centro, Ciudad Danli</p>
                        <p><strong>Teléfono:</strong> +504 1234-5678</p>
                        <p><strong>Correo electrónico:</strong> contacto@clinicweb.com</p>
                        <p><strong>Horario de atención:</strong>24/7</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="card border-primary mb-3">
                        <div class="card-header bg-primary text-white">Redes Sociales</div>
                        <div class="card-body">
                            <p><strong>Facebook:</strong> <a href="#">facebook.com/clinicweb</a></p>
                            <p><strong>Instagram:</strong> <a href="#">instagram.com/clinicweb</a></p>
                            <p><strong>Twitter:</strong> <a href="#">twitter.com/clinicweb</a></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection
