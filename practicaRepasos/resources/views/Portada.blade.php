@extends('layouts.plantilla')
@section('titulo', 'Biopic Poderosa')
@section('contenido')
    <div class="d-flex justify-content-center align-items-center vh-100 container">
        <div class="card spacer" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Practica de Repaso Biografica</h5>
                <p class="card-text">Guapo, poderoso, asombroso,
                    muy hermoso, soy precioso, armonioso,
                    un buen socio, misterioso, buena gente,
                    detergente, muy majete, inteligente,
                    nada ojete, irreverente, un exponente.
                    Muy perfecto es lo que soy.</p>
            </div>
            <ul class="list-group list-group-flush text-center">
            <li class="list-group-item">Rogelio Ernesto Arteaga Velazco</li>
            <li class="list-group-item">Ivan Isay Guerra Lopez</li>
            <li class="list-group-item">Programacion Web</li>
            <li class="list-group-item">18 Octubre 2024</li>
            <li class="list-group-item">S195-7</li>
            </ul>
            <div class="card-body text-center">
                
                <!-- Botón REPASO 1 -->
            <a href="{{route('Conversiones')}}" class="btn btn-primary">Conversiones</a>
            </div>
        </div>
        <img src="{{asset('img\logo.svg')}}" class="img-thumbnail rounded-circle p-2" alt="Aqui deberia de ir el logo de la UPQ pero 
        no funciono el codigo :()">
    </div>
@endsection
