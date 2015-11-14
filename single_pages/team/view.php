<?php 
defined('C5_EXECUTE') or die("Access Denied.");

$form = Loader::helper('form');
?>

<h1>Teams</h1>
<?php echo $color;?>
<?php 
foreach($teams as $team){

print_r($team);

}

?>
<ul>
	<li><a href="<?php echo $this->action('add')?>">Ajouter une équipe</a></li>
</ul>