<?php
class ModelNewUser extends Model{

    public function get_data()
    {
        $link = mysqli_connect('localhost', 'root', '', 'grisha');
        if (isset($_POST['submit'])){
            if(empty($_POST['login']))  {
                echo '<br><font color="red"> Введите логин!</font>';
            }
            elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
                echo '<br><font color="red">В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';
            }
            elseif(empty($_POST['password'])) {
                echo '<br><font color="red">Введите пароль!</font>';
            }
            elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
                echo '<br><font color="red">Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
            }
            elseif(empty($_POST['password2'])) {
                echo '<br><font color="red">Введите подтверждение пароля!</font>';
            }
            elseif($_POST['password'] != $_POST['password2']) {
                echo '<br><font color="red">Введенные пароли не совпадают!</font>';
            }


            else{
                $login = $_POST['login'];
                $password = $_POST['password'];
                $mdPassword = md5($password);
                $password2 = $_POST['password2'];

                $query = ("SELECT id FROM users WHERE login='$login'");
                $sql = mysqli_query($link ,$query) or die(mysqlii_error($link));

                if (mysqli_num_rows($sql) > 0) {
                    echo '<font color="red"><img border="0" src="error.gif" alt="Пользователь с таким логином зарегистрированый!">Пользователь с таким логином зарегистрирован!</font>';
                }
                    else{
                        $query = "INSERT INTO users (login, password)
VALUES ('$login', '$mdPassword')";
                        $result = mysqli_query($link, $query) or die(mysqli_error($link));;
                        echo '<font color="green">Вы успешно зарегистрировались!</font><br><a href="index.php">На главную</a>';
                    }
                }
            }
        }


    }