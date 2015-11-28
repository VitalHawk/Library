<form action="/Book/Insert" method="POST" >
    {html_options name="catId" options=$cats selected=$catId}
    {html_options name="pubId" options=$pubs selected=$pubId}
    <input type="text" name="name" value="" />
    <input type="text" name="surname" value="" />
    <input type="submit" value="Добавить" />
</form>