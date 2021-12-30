<?php

spl_autoload_register(function() {
    require('TopLevel.php');
    require('Child.php');
});

$child = new Child();

echo $child->property1;