Just a PHP bcrypt password hash creator.

<br><br>

<form action="/create_hash.php?">
  <label for="pwd">Password:</label><br>
  <input type="text" id="pwd" name="pwd"><br><br>
  <input type="submit" value="Submit">
</form> 

<br><br>
<b>Output:</b>
<br>

<pre>
<?php

if(isset($_GET['pwd'])) {
        $generated_hash = password_hash($_GET['pwd'], PASSWORD_BCRYPT);
        echo "$generated_hash";
} else {
        echo "yo enter something for me to hash";
}

?>
</pre>

<br><br>
<hr>
<em>2021 &copy aidswidjaja</em>