@include('header')
  <body>
    <style>
        .container{
          margin-top: 40px;
        }

        .btn{
          margin-bottom: 10px;
        }
        a{
          display: inline-block;
        }
      
      </style>
 
  <div class="container col-md-10">
    <table id="table_id" class="display">
      <thead>
        <tr>
          <th scope="col">Nro</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nombre</th>
          <th scope="col">Dni</th>
          <th scope="col">telefono</th>
          <th scope="col">Accion</th>
        </tr>
      </thead>
      <tbody>
      @foreach($usuarios as $item)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$item->apellido}}</td>
          <td>{{$item->nombre}}</td>
          <td>{{$item->dni}}</td>
          <td>{{$item->telefono}}</td>
          <td> 
            <a class="btn btn-success" href="{{url('/usuarios/'.$item->id.'/edit')}}"><i class="fa fa-edit"></i></a>
            <form method="post" action="{{url('/usuarios/'.$item->id)}}">
            @csrf
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea Borrar?');"><i class="fa fa-close"></i></button>
            </form>
          </td>
        </tr>
        @endforeach()
      </tbody>
    </table>
    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#addUser" >Agregar </button>  
    @include('addUser')
  
  </div>    
@extends('footer')