   @include('header')         
            
            <form method="POST" action="{{url('/usuarios/'.$usuario->id)}}" enctype="multipart/form-data">
              @csrf<!-- llave de seguridad con csrf -->
              {{method_field('PATCH')}}
                    <div class="col md-8">
                      <div class="form-group col-md-6">
                        <label for="nombre">{{'Nombre'}}</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$usuario->nombre}}" required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="apellido">{{'Apellido'}}</label>
                        <input type="text" class="form-control" name="apellido" placeholder="apellido" value="{{$usuario->apellido}}"  required>
                      </div>
                      <div class="form-group col-md-10">
                      <label for="email">{{'Email'}}</label>
                        <input type="email" class="form-control" name="email" placeholder="email" value="{{$usuario->email}}" >
                      </div>
                      <div class="form-group col-md-10">
                        <label for="direccion">{{'Direccion'}}</label>
                          <input type="text" class="form-control" name="direccion" placeholder="direccion" value="{{$usuario->direccion}}" required>
                      </div>
                      <div class="form-group col-md-10">
                        <label for="telefono">{{'Telefono'}}</label>
                          <input type="number" class="form-control" name="telefono" placeholder="telefono" value="{{$usuario->telefono}}"  required>
                      </div>
                      <div class="form-group col-md-10">
                        <label for="dni">{{'Dni'}}</label>
                          <input type="number" class="form-control" name="dni" placeholder="dni" value="{{$usuario->dni}}"  required>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="Fecha de Nacimiento">{{'Fecha'}}</label>
                          <input type="date" class="form-control" name="fechanacimiento" placeholder="Fecha de Nacimiento" value="{{$usuario->fecha}}"  required>
                      </div>
                      <input type="submit" class=" col-md-6 btn btn-primary" value="Actualizar">
                    </div>
                    
                  </form>
                