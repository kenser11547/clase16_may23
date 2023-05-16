<?php
function dividir(int $numero1, int $numero2 ) : void {
    echo $numero1 / $numero2;
}
try {
    dividir(10,0);
} catch (Exception $excepcion) {
}
// function dividir(int $numero1, int $numero2 ) : float {
//     return $numero1 / $numero2;
// }


echo "<br>";
echo "Todo funcionó correctamente";