<?php
$tarif = htmlspecialchars($_GET["tarif"]);
?>

<?php if($tarif === 'LEINEquelle'): ?>
  {{insert_form::12}}
<?php elseif($tarif === 'Grund- und Ersatzversorgung'): ?>
  {{insert_form::17}}
<?php endif; ?>
