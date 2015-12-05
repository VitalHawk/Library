<form action="/Login/RegisterForm" method="POST">
    <label for="surname">Фамилия</label>
    <input type="text" name="surname" value="{$user->surname}" />
    <br>
    <label for="name">Имя</label>
    <input type="text" name="name" value="{$user->name}" />
    <br>
    <label for="login">Логин</label>
    <input type="text" name="login" value="{$user->login}" />
    <br>
    <label for="password">Пароль</label>
    <input type="password" name="password" />
    <br>
    <input type="submit" value="Сохранить" />
</form>