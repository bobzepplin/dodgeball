<?php 
defined('C5_EXECUTE') or die("Access Denied.");

$form = Loader::helper('form');
?>
<h1>Ajouter une équipe</h1>
<?php echo $color;?>
<form method="post" action="<?php echo $this->action('addTeam')?>">

	<table>
		<tr>
			<td>Nom de l'équipe: </td><td><?php print $form->text('name', array('style' => 'width: 30%', 'tabindex' => 2));?></td>
			<td>Power: </td><td><?php print $form->text('power', array('style' => 'width: 30%', 'tabindex' => 2));?></td>
			<td><?php print $form->submit('submit','OK');?></td>
		</tr>
	</table>
</form>