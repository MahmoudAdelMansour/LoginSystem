<?php require "header.php"; ?>
<main>
  <div class="main-div">
    <p>     <?php
          $name = $_POST['userin'];
          echo "Welcome Mr:".$name;
        ?> </p>
    <p> You'r Not User </p>
  </div>
</main>
<?php require "footer.php"; ?>
