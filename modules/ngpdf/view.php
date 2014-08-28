<?php
$Module = $Params['Module'];
$nodeID = (int) $Params['node_id'];

$tpl = eZTemplate::factory();

$Result = array();
$Result['content'] = $tpl->fetch('design:ngpdf/view.tpl');
$Result['path'] = array( array( 'url' => 'ngpdf/view','text' => 'Ng pdf view' ) );
?>