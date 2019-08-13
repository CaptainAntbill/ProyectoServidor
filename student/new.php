<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?><br><br>

<div class="hero is-fullheight">
<div class="columns">
  <div class="column"></div>
  <div class="column is-three-quarters">
    <form action="../src/student_controler/create.php" method="post">
      <strong>New Student</strong><br>
  <div class="control">
  <input name="fullname" class="input" type="text" placeholder="Full Name">
  </div><br>
  <div class="control">
  <input name="birthdate" class="input" type="date" placeholder="Birthdate">
</div><br>
  <button class="button is-dark">Send</button>
    </form>
  </div>
  <div class="column"></div>
</div>

<?php require_once('../templates/footer.php'); ?>
</div>
