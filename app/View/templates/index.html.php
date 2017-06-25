{include file="header.html.php"}

Przykładowa strona stworzona na Frameworku Dframe  | <b>Plik:</b> View/templates/index.html.php <br>

<br><br>
Routing: <br>
{$router->makeurl('page/index')} index page<br>
{$router->makeurl('error/404')} page 404 <br>

{$router->domain('https://examplephp.com')->makeurl('error/404')} page 404 <br>

{include file="footer.html.php"}