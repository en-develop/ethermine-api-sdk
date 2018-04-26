<?php
spl_autoload_register(
    function ($pClassName) {
        spl_autoload(strtolower(str_replace("\\", "/", $pClassName)));
    }
);
?>
