@extends('app-layout')
@section('title')
    Home
@endsection
@section('content')


<div class="header">

    <div class="navigation">

        <div class="navigation-top">
            <a href="#">Iniciar Sesión</a>

        </div>
        <hr>

        <div class="navigation-flex">

            <div class="nav-1">
                <a href="/"> <span>B</span>ienes <span>R</span>aices</a>
                <p>Elegí tu hogar</p>
            </div>

            <div class="nav-2">
                <ul>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Galería</a></li>
                    <li><a href="#">Propiedades</a></li>
                </ul>

            </div>

        </div>

    </div>

</div>


<div class="banner-home">

    <video loop autoplay src="{{asset('frontend/assets/videos/banner.mp4')}}"></video>

    <div class="banner-home-absolute">
        <h3>Las mejores propiedades de <span>Buenos Aires</span></h3>    
        <p>Atención 24/7 - <span> <a href="#">Tel: +54 0 9 1123232321</a> </span></p>

        <div class="btn">
            <a href="#">Ver propieadades</a>
        </div>
    </div>


</div>


<div class="properties-featured contenedor">
    <h2>Propiedades Destacadas</h2>

    <div class="properties-featured__child">

        <div class="property-box property-1">
            <div class="property-box__img">
                <img src="{{asset('frontend/assets/img/casa1/1.jpg')}}" alt="property">
                <h3 class="image-title">Departamento en CABA</h3>
            </div>
            <p class="attributtes">20<sup>2</sup>| 2 dorm | 4 baños</p>
            <p class="price">u$d 100.000</p>
        </div>

        <div class="property-box property-2">
            <div class="property-box__img">
                <img src="{{asset('frontend/assets/img/casa2/2.jpg')}}" alt="property">
                <h3 class="image-title">Departamento en Palermo</h3>
            </div>
            <p class="attributtes">20<sup>2</sup>| 2 dorm | 4 baños</p>
            <p class="price">u$d 100.000</p>
        </div>

    </div>

    <div class="div-btn">
        <a href="#">Ver propiedades</a>
    </div>
    
 </div>


 <div class="join-the-team">

    <div class="join-the-team__child contenedor">
        <h2>Vos tambien podes ser parte de nuestro equipo</h2>

        <div class="div-btn">
            <a href="#" class="btn btn-sumate">Sumate</a>
        </div>
        
    </div>

 </div>



@endsection