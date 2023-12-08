<?php

// require_once 'oeuvres.php';

function getOeuvre($oeuvres, $id)
{
    foreach ($oeuvres as $oeuvre) {
        if ($oeuvre['id'] == $id) {
            return $oeuvre;
        }
    }

    // aucune oeuvre trouvée
    return null;
}
