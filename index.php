<?php

if(isset($_POST['password'])){
$char ="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$^%&*@#_";
$pwd=substr(str_shuffle($char),0,$_POST['password']);
}
else{
    $char ="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$^%&*@#_";
    $pwd=substr(str_shuffle($char),0,0);
    
}

?>

<h2 align=center>Random Password Generator="<?php echo $pwd; ?>"</h2>
<h3 align=center>"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$^%&*@#_"</h3>

<form method="POST" action="" enctype="multipart/form-data">
<label for="password"><b>Password Char:</b></label><br>
<input type="text" name="password" value="">

<br><br>
<button type="submit">Submit</button>
<br><br>
</form>

