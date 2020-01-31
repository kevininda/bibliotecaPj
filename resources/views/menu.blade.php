@include('header')
<div class="contenedor">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenidos</h1>
            <p class="lead">A la Biblioteca del Partido Justicialista de la ciudad de Concordia</p>
            <hr class="my-4">
            <p>En esta pagina podras encontrar todos los libros disponibles en nuestra Biblioteca, asi como tambien solicitar prestamos de los mismos</p>
        <a class="btn btn-primary btn-lg" href="{{url('/libros')}}" role="button">Comenzar</a>
          </div>
</div>
@extends('footer')