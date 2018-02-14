<script >
    document.onkeypress=function(e){
        var esIE=(document.all);
        var esNS=(document.layers);
        tecla=(esIE) ? event.keyCode : e.which;
        var element = document.getElementById("codigo");
        // Si es enter y el foco esta en el codigo se debe pasar a la descripcion.
        // Esto es debido a que el lector de codigos de barras simula el enter al
        // ingresar un producto
        if(tecla==13 && document.activeElement == element){
            e.preventDefault();
            console.log(document.activeElement);
            document.getElementById("descripcion").focus();
        }
    }
</script>
