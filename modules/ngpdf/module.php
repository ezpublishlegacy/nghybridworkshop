<?php

$Module = array( 'name' => 'nhpdf', 'variable_params' => false, 'ui_component_match' => 'module' );
$ViewList = array();
$FunctionList = array();

$ViewList['download']=array(
    'script' => 'download.php',
    'functions' => array( 'download' ),
    'params' => array( 'node_id' )
);

$ViewList['view']=array(
    'script' => 'view.php',
    'functions' => array('view'),
    'params' => array('node_id')
);

$FunctionList['download']=array();
$FunctionList['view']=array();

?>

