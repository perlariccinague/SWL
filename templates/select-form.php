<?php
$tarif = htmlspecialchars($_GET["tarif"]);
?>

<?php if($tarif === 'LEINEquelle'): ?>
  {{insert_form::12}}
<?php endif; ?>
