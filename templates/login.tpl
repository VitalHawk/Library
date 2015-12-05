<div>
    <form action="/Login" method="POST">
        <input type="hidden" name="uri" value="{$smarty.server.REQUEST_URI}"/>
        {if $smarty.session.user}
            Привет, {$smarty.session.user->name} {$smarty.session.user->surname}
            <input type="submit" value="Sign out..."/>
            <a href="/Login/RegisterForm/login/{$smarty.session.user->login}">Update</a>
        {else}
            Login: <input type="text" name="login"/>
            Password: <input type="password" name="password"/>
            <input type="submit" value="Sign in!"/>
            <a href="/Login/RegisterForm">Register</a>
        {/if}
    </form>
</div>
