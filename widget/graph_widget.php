<?php
defined('EMONCMS_EXEC') or die('Restricted access');

global $session, $mysqli;
require_once "Modules/graph/graph_model.php";
$graph = new Graph($mysqli);
$savedgraphs = $graph->getall($session['userid']);

$savedgraphsnamelist = array();
foreach ($savedgraphs as $savedgraph) {
    $savedgraphsnamelist[] = array($savedgraph->id, $savedgraph->name);
}
?>
<script>var savedgraphsnamelist = <?php echo json_encode($savedgraphsnamelist); ?>;</script>
