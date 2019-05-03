<?php

if(isset($_GET['name']) && isset($_GET['email']))
{
  echo 'Adding a new user<br>';
  echo 'name = ' . $_GET['name'] . '<br>';
  echo 'email = ' . $_GET['email'] . '<br>';
}
?>

<?php
$users = [
  'prueva1' => 'email1',
  'prueva2' => 'email2',
  'prueva3' => 'email3'
];



if(isset($_GET['name']) && isset($_GET['email']))
{

  $name = $_GET['name'];
$email = $_GET['email'];
  $users[$name] = $email;
}

?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>DOM manipulation</title>

    <link rel="stylesheet" href="style.css">

  </head>

  <body>

    <header>

      <h1>DOM manipulation</h1>

    </header>



    <section class="container">

      <form id="my-form" action="index.php">

        <h1>Add User</h1>

        <div class="msg"></div>

        <div>

          <label for="name">Name:</label>

          <input type="text" id="name" name="name">

        </div>

        <div>

          <label for="email">Email:</label>

          <input type="text" id="email" name="email">

        </div>

        <input class="btn" type="submit" value="Submit">

      </form>



      <ul id="users">
      
      <?php
        foreach($users as $name => $email){
          echo '<li>' . $name . ', ' . $email . '</li>';
        }
      
      ?>
      
      </ul>



      <!-- <ul class="items">

        <li class="item">Item 1</li>

        <li class="item">Item 2</li>

        <li class="item">Item 3</li>

      </ul> -->

    </section>

    



    <script src="main.js"></script>

  </body>

</html>

