<?php
localhost:8000;
function lekeres($szoveg) {
    $sorok = ["aaa", "bbbb", "ccccc"];

    return $sorok;
}

if (isset($_GET['kosarTart'])) {
    echo json_encode(lekeres($_GET['kosarTart']));
}