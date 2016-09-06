<div class="box-titulo">
    <span> Listado Usuarios</span>
</div>

<div class="body-list">
  <div class="listPaginateU">
    <table class="table table-bordered">
        <tr>
          <th style="width: 10px">#</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th style="width: 20px">Opción</th>
        </tr>

        <tbody class="registrosU">      
        </tbody>
        
    </table>
    
    {{ $usuarios->render() }}

  </div>

 
    {{-- <div class="box-footer clearfix">
      <ul class="pagination pagination-sm no-margin pull-right">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </div> --}}



</div>