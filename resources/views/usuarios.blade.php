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
    <button type="submit" class="btn btn-success">Agregar libro</button>  
    <table id="table_id" class="display">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Dni</th>
          <th scope="col">Direccion</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
      @foreach($usuarios as $item)
        <tr>
          <th scope="row">{{$item->nombre}}</th>
          <td>{{$item->apellido}}</td>
          <td>{{$item->dni}}</td>
          <td>{{$item->direccion}}</td>
          <td>{{$item->email}}</td>
        </tr>
        @endforeach()
        </tr>
      </tbody>
    </table>
  </div>    
@extends('footer')