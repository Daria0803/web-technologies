---------------------------------------------------
<?php
// Check if the user hit the submit button
if(isset($_POST["submit"]))
{
    echo "Your name is {$_POST["name"]} and you are {$_POST["age"]} years old.";
}else{
    echo "We don't know your name, please enter your name. <a href='index.html'>Go back</a>";
}
?>
---------------------------------------------------
