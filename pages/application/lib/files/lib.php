<?php
spl_autoload_register(function ($classe) {
    $path = "lib/files/" . $classe . ".php";
    require_once $path;
});

class lib {
    static public function head() {}

    static public function body() {}
}