
<?php 
// time for 60 days in future
 $cookie_value = time() + 60*60*60*24;
 setcookie('lastvisit' , date("G:i , m/d/y") , $cookie_value , )
?>
<?php
    if(isset($_COOKIE['lastvisit']))
    {
        echo "Your last visit time and date are :  " . $_COOKIE['lastvisit'] . "<br>";
        setcookie('lastvisit',"",time()-3600);
    }
    else{
        echo "This is your first visit <br>";
    }
?>
