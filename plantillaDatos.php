<?php $texto = '<div class="abcedf">
    <input type="hidden" name="IDV2" id="IDV2" value="123" />
    <h5><input type="checkbox" name="check2" id="check2"  >&nbsp;Nombre de la empresa</h5>

    <ul class="list6"><li>Calle de la seguridad&nbsp;251</li>
        <li>CP-2365&nbsp;Metropolis</li>
        <li>Tél +3265845122 </li>
        <li>Fax +32658544554</li>
        <li><a href="mailto:info@misitioweb.com">info@misitioweb.com</a></li>
        <li><a href="http://www.misitioweb.com" target="new">http://www.misitioweb.com</a></li></ul>

</div>';
?>


<?php

function extraccion($texto, $inicio, $fin) {
    //acamos la posicion de inicio, para desde alli copiar lo que deseamos extraer hasta [fin]
    $pinicio = strpos($texto, $inicio);
    $pfin = strpos($texto, $fin);
    $ldato = $pfin - $pinicio; 
    

    
    for ($i = $pinicio+ strlen($inicio); $i < $pfin; $i++) {
        echo "<code>". $texto[$i] . "</code>";
    }
    
    echo "<p>posicion de inicio: " . $pinicio . "</p>";
    echo "<p>posicion de fin: " . $pfin . "</p>";
    echo "<p>latgo del dato: " . $ldato . "</p>";
    echo "<p>latgo del texto: " . strlen($texto) . "</p>";
    
    echo "<p>datos" . $dato . "</p>";
    echo "<p>datos" . var_dump($dato) . "</p>";
    
    
    //return implode("", $dato);
}

$inicio = "<li>Tél "; 
$fin = "</li>"; 

    //echo "a) El sitioweb es: " . extraccion($texto, '<li><a href="', '" target="new">');
    echo "c) calle: " . extraccion($texto, '<ul class="list6"><li>', '</li>');


?>
