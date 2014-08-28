{def $module_parameters = module_params()}
{def $node_id = $module_parameters.parameters.node_id}
{def $node = fetch('content', 'node', hash( 'node_id', $node_id ) ) }

<h1>Location: {$node.name}</h1>

<form action={concat('ngpdf/download/', $node_id)|ezurl()}>
    <input type="submit" value="Download as PDF">
</form>

<h2>
Available credits: {symfony_render(
    symfony_controller(
        'NetgenHybridApproachBundle:Default:getCredits'
    )
)}
</h2>