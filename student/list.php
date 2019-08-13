<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?><br><br>
<?php require_once('../src/database/connection.php');
$sql = "select * from student";
if($db_con){
  $result= $db_con->query($sql);
}
?>
<div class="container">
  <table class="table is-fullwidth is-hoverable">
  <th class="is-dark">Name</th>
  <?php
    foreach ($result as $value) { ?>
      <tr>
      <td><?php echo "<br>" . $value['fullname']; ?></td>
    <?php } ?>
</table><br><br>
</div>

 <div class="hero is-fullheight">
 <?php require_once('../templates/footer.php'); ?>
</div>
