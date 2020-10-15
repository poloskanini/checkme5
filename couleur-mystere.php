<?php
    if(isset($_GET["color"])) {
        $color = $_GET["color"];
        echo "<style>body { background: #" . $color . "; }</style>";
    }
    else {
        echo "Aucune couleur mystère";
    }
