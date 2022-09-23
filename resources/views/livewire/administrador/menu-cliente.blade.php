<div>
    <ul class="nav justify-content-center align-items-center">
        <li class="nav-item mx-2">
          <a class="nav-link" href="/contactos?c={{$id_cliente}}">Contactos</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="/requerimientos?c={{$id_cliente}}">Requerimientos</a>
        </li>
    </ul>
    <script>
        $('.nav-item').each(function(){
            if($(this).find('a').attr('href') == (window.location.pathname + window.location.search)){
                $(this).addClass('activo');
            }
        });
    </script>
</div>
