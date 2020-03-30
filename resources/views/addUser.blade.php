<div class="modal fade" id="addUser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Agregar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{url('/usuarios')}}" enctype="multipart/form-data">
              @csrf<!-- llave de seguridad con csrf -->
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nombre">{{'Nombre'}}</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="apellido">{{'Apellido'}}</label>
                        <input type="text" class="form-control" name="apellido" placeholder="apellido" required>
                      </div>
                      <div class="form-group col-md-12">
                      <label for="email">{{'Email'}}</label>
                        <input type="email" class="form-control" name="email" placeholder="email">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="direccion">{{'Direccion'}}</label>
                          <input type="text" class="form-control" name="direccion" placeholder="direccion" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="telefono">{{'Telefono'}}</label>
                          <input type="number" class="form-control" name="telefono" placeholder="telefono" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="dni">{{'Dni'}}</label>
                          <input type="number" class="form-control" name="dni" placeholder="dni" required>
                      </div>
                      <div class="form-group col-md-8">
                        <label for="Fecha de Nacimiento">{{'Fecha'}}</label>
                          <input type="date" class="form-control" name="fechanacimiento" placeholder="Fecha de Nacimiento" required>
                      </div>
                    </div>
                   
              
                    <input type="submit" class="btn btn-primary" value="Agregar">
                  </form>
            
        </div>
    </div>
</div>