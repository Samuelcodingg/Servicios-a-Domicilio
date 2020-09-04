<?php 
    function contador(){
        $archivo = "txt/contador.txt";
        $f = fopen($archivo,"r");
        if($f){
            $contador = fread($f,filesize($archivo));
            $contador++;
            fclose($f);
        }

        $f = fopen($archivo,"w");
        if($f){
            fwrite($f,$contador);
            fclose($f);
        }

        return $contador;
    }

    $cantidadVisitas = contador();
    echo '<h2 class="contenedor-contador">Número de visitas: '.$cantidadVisitas.'</h2>';
?>