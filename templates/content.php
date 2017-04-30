<div class="collapse bg-inverse" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">This application was created to teach you in a practical way to manipulate data with PHP and database through the MySQLi extension</p>
            </div>
            <div class="col-sm-4 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Follow on Twitter</a></li>
                    <li><a href="#" class="text-white">Like on Facebook</a></li>
                    <li><a href="#" class="text-white">Email me</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-inverse bg-inverse">
    <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand">My Tasks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>

<?php

if (isset($_GET['action']) && $_GET['action'] != "" )
{
    include $_GET['action'].".php";
}
else
{
    include "list.php";
}

?>