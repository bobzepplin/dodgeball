<?php 
defined('C5_EXECUTE') or die("Access Denied.");

$form = Loader::helper('form');
?>

<h1>Page score sexy</h1>

<?php echo $color."xxxx<br>";
echo "Databse : ".$test;
echo "<br>Match :".$Match;
?>

<form method="post" action="<?php echo $this->action('addScore')?>">

<?php
print $form->text('firstName', array('style' => 'width: 30%', 'tabindex' => 2));
print $form->submit('submit','OK');
print $form->select('favoriteFruit', array('p' => 'Pears', 'a' => 'Apples', 'o' => 'Oranges'), 'a');

print $id." id in url";

 ?>


