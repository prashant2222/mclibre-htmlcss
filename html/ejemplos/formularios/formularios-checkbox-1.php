<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>checkbox (1). Formularios. HTML. Páginas web HTML y hojas de estilo CSS. Bartolomé Sintes Marco. www.mclibre.org</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php
function recoge($var)
{
    if (!isset($_REQUEST[$var])) {
        $tmp = "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

$casilla = recoge("casilla");

if ($casilla == "") {
    print "  <p>No se ha recibido nada.</p>\n";
} else {
    print "  <p>El dato recibido es <strong>$casilla</strong>.</p>\n";
}
print "\n";

print "  <p><a href=\"formularios-checkbox-1.html\">Volver al formulario.</a></p>\n";
?>
<body>
</html>
