@include('header')
  <body>
    <style>
        .container{
          margin-top: 40px;
        }

        .btn{
          margin-bottom: 10px;
        }
      
      </style>
    
  <div class="container">
    
    <table id="table_id" class="display">
      <thead>
        <tr>
          <th scope="col">ISBN</th>
          <th scope="col">Nombre</th>
          <th scope="col">Autor</th>
          <th scope="col">Año</th>
          <th scope="col">Estado</th>
        </tr>
      </thead>
      <tbody>
      @foreach($libros as $item)
        <tr>
          <th scope="row">{{$item->idIsbn}}</th>
          <td>{{$item->nombre}}</td>

          @foreach ($autores as $item2)
            
            @if ($item->idAutor == $item2->id)
                <td>{{$item2->nombre}} {{$item2->apellido}}</td>
            @endif
            
          @endforeach

          <td>{{$item->anio}}</td>
          @if ($item->estado == 1)
          <td>Disponible</td>
          @else
          <td>Prestado</td> 
          @endif

        </tr>
        @endforeach()
        </tr>
      </tbody>
    </table>
    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#addLibro" >Agregar libro</button>  
    @include('addLibro')
  </div>    
@extends('footer')