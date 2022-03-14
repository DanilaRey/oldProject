<?php
if (isset($_POST['login']))
{
    $Login = $_POST['login']; if ($Login == '') { unset($Login);}
}
if (isset($_POST['pass1']))
{
    $Password=$_POST['pass1']; if ($Password =='') { unset($Password);}
}
if (isset($_POST['pass2']))
{
    $Password2=$_POST['pass2']; if ($Password2 =='') { unset($Password2);}
}

if (empty($Login) or empty($Password)or empty($Password2))
{
    echo '<center>',"Заполни поля!", '<br>
       <a href="index.php">Назад</a>
       </center>';
}
else
{
//Дальше если все правилно занесем в БД

}

?>