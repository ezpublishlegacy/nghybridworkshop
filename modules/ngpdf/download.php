<?php
$Module = $Params['Module'];
$nodeID = (int) $Params['node_id'];

$container = ezpKernel::instance()->getServiceContainer();
$htmlpdfapi = $container->get( 'netgen_html_pdf_api' );
$ezcontent = $container->get( 'ez_content' );

$html = $ezcontent->viewLocation($nodeID, 'full')->getContent();

$params = array('html' => $html);

/** @var \Guzzle\Http\Message\Response $pdfFile */
$pdfFile = $htmlpdfapi->generateFromHTML($params);

header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename='.$nodeID.'.pdf');
echo $pdfFile->getBody(true);

eZExecution::cleanExit();

?>