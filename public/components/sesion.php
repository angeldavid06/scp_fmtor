<?php
    if (!isset($_SESSION['rol']) && !isset($_SESSION['usuario'])) {
        header("Location: http://192.168.0.43/scp_fmtor/");
    } else {
    }
?>