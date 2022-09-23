<div class="row p-2">            
    <nav aria-label="breadcrumb" style="padding-left:4rem">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin" style="color:#c99616">Clientes</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$nombre_cliente}}</li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ucfirst(substr($_SERVER['REQUEST_URI'],1,strpos($_SERVER['REQUEST_URI'], '?')-1))}}
        </li>
      </ol>
    </nav>
</div>
