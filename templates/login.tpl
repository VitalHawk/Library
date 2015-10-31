<div>
    {if $smarty.session.user}
        <p>Привет, {$smarty.session.user}</p>
    {else}
        <form action="/Login" method="POST">
            Please sign in: <br/>
            Login: <input type="text" name="login"/>
            Password: <input type="password" name="pswd"/>
            <input type="submit" value="Enter!"/>
        </form>
    {/if}
</div>
