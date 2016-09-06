
<div class="box-titulo">
    <span> Listado Persona</span>
</div>

<div class="body-list">
  <div class="listPaginate">
    <table class="table table-bordered">
        <tr>
          <th style="width: 10px">#</th>
          <th>Cédula</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th style="width: 20px">Opción</th>
        </tr>

        <tbody class="registros">      
        </tbody>
        
    </table>
    {{ $personas->render() }}
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
