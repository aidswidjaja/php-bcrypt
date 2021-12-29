Just a PHP bcrypt password hash verifier.

<br><br>

<form action="/verify_hash.php?">
  <label for="pwd">Password:</label><br>
  <input type="text" id="pwd" name="pwd"><br><br>
  <label for="hash">Hash:</label><br>
  <input type="text" id="hash" name="hash"><br><br>
  <input type="submit" value="Submit">
</form> 

<br><br>
<b>Output:</b>
<br>

<pre>
<?php



if (isset($_GET['pwd']) && isset($_GET['hash'])) {

  $pass = $_GET['pwd'];
  $hash = $_GET['hash'];

  if(password_verify($pass, $hash)) {
          echo "yay right password!!";
  } else {
          echo "wrong password you baka";
  }
}

?>
</pre>

<br><br>
<hr>
<em>2021 &copy aidswidjaja</em>