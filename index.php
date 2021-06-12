<?php
function generatePassword() 
{
        $len=$_POST['password']??10;
        
        $small = 'abcdefghijklmnopqrstuvwxyz';            
        $caps  = strtoupper($small);               
        $numerics   = '1234567890';                  
        $specialChars = '!@#$%^&*_';   

    $allchar = $small.$caps.$numerics.$specialChars; 
    $password = '';         

    for($i = 0; $i < $len; $i++) {                                 
        $rand = rand(0, strlen($allchar) - 1);   //The rand() function generates a random integer and The strlen() function returns the length of a string.               
        $password .= substr($allchar, $rand, 1); //The strlen() function returns the length of a string.substr(string,start,length)               
    }
    return $password;       
}
?>
<h2 align=center>Random Password Generator="<?php echo generatePassword(); ?>"</h2>
<h3 align=center>"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$^%&*@#_"</h3>

<form method="POST" action="" enctype="multipart/form-data">
<label for="password"><b>Password Char:</b></label><br>
<input type="text" name="password" value="">

<br><br>
<button type="submit">Submit</button>
<br><br>
</form>