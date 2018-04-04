<?php

include_once "env.php";

$pdo = new PDO(
  'mysql:host='.HOST.';dbname='.DBNAME.','.USERNAME.', '.PASSWORD.''
);

  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // is the given value a email?
  $name = filter_input(INPUT_POST, 'name');

  //if (!$email || $name == ' ')
  //{
      //header('Location: ?success=no');
  //} else {
      //future INSERT into bookings table
      $statement = $pdo->prepare('INSERT INTO bookings (Name, Email) VALUES (?, ?)');
      $result = $statement->execute([$name, $email]);
      //update the Seats table


  //header('Location: ?success=yes');
  //}
//
//$success = filter_input(INPUT_GET, 'success');
//if ($success == 'no') echo '<p style="color: red">fail</p>';
//if ($success == 'yes') echo '<p style="color: green">success</p>';
?>




<form method="post">

    <!-- <div class="form-group col-md-6">
      <label for="inputId">ID</label>
      <input type="text" name="id" class="form-control" id="inputId" placeholder="ID">
    </div> -->
<div class="form-group col-md-6">
    <label for="inputName">Name</label>
    <input type="text" name="name" class="form-control" id="inputName" placeholder="First and last name">
</div>

  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>