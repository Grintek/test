<form action="/NewUser" method="POST">

    <table>
        <tr>
            <td>Логин<font color="red">*</font>:</td>
            <td><input type="text" size="20" name="login"></td>
        </tr>
        <tr>
            <td>Пароль<font color="red">*</font>:</td>
            <td><input type="password" size="20" maxlength="20" name="password"></td>
        </tr>
        <tr>
            <td>Подтверждения пароля<font color="red">*</font>:</td>
            <td><input type="password" size="20" maxlength="20" name="password2"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><input type="submit" value="Зарегистроваться" name="submit">
            </td>
        </tr>
    </table>
</form>

<br>Поля со значком <font color="red">*</font> обязательны для заполнения