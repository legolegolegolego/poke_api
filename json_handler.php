<?php
function loadEventsFromJson()
{
    $file = 'usuarios.json';
    if (file_exists($file)) {
        $content = file_get_contents($file);
        return json_decode($content, true) ?? []; // Decodificar JSON o devolver un array vacío
    }
    return []; // Si el archivo no existe, devolver un array vacío
}

function saveEventsToJson($events)
{
    // Nombre del archivo JSON
    $file = 'usuarios.json';
    file_put_contents($file, json_encode($events, JSON_PRETTY_PRINT));
}
?>