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
                <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="codigo">Codigo ISBN</label>
                        <input type="text" class="form-control" name="idIsbn" placeholder="Codigo">
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

                      <input type="submit" class="btn btn-primary" value="Nevo Autor">

                    </div>
                    
                  </form>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Agregar">
            </div>
        </div>
    </div>
</div>