<ul>
    <li><a href="/Book/Index" >Поиск книг</a></li>
    {if $smarty.session.user->isAdmin}
    <li><a href="/Book/Add" >Добавление книг</a></li>
    {/if}
</ul>