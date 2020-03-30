<div class="modal fade" id="addLibro">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Agregar Libro</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('libro.crear') }}">
              @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="codigo">Codigo ISBN</label>
                        <input type="number" class="form-control" name="id" placeholder="Codigo">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="anio">Año</label>
                        <input type="number" class="form-control" name="anio" placeholder="Año">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <select id="autor" class="form-control">
                        @foreach($autores as $item)  
                          <option selected>{{$item->nombre}}</option>
                        @endforeach()
                        </select>

                        
                    </div>

                      <input type="submit" class="btn btn-primary" value="Nuevo Autor">

                    </div>
                    <input type="submit" class="btn btn-primary" value="Agregar">
                  </form>
            
        </div>
    </div>
</div>