{include file="header.html.php"}
<div class="container">

    <h1>Great Job! - You did it!</h1>
    <p class="lead">This page you can edit in <small> View/templates/index.html.php</small> </p> <br>
    
    <br>
    <h3>Router</h3>
    {$router->makeurl('page/index')} index page<br>
    {$router->makeurl('error/404')} page 404 <br>
</div> <!-- /container -->
{include file="footer.html.php"}