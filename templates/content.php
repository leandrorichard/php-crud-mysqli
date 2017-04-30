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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="/new.php">New Task</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Created on</th>
            <th>Final date</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Planning architeture <span class="badge badge-info">In progress</span></td>
            <td>20/04/2017</td>
            <td>22/04/2017</td>
            <td>
                <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
                <a href="#" class="btn btn-outline-danger btn-sm">Remove</a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Create layers of application <span class="badge badge-default">Not started</span></td>
            <td>20/04/2017</td>
            <td>22/04/2017</td>
            <td>
                <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
                <a href="#" class="btn btn-outline-danger btn-sm">Remove</a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Planning wireframe <span class="badge badge-default">Not started</span></td>
            <td>20/04/2017</td>
            <td>22/04/2017</td>
            <td>
                <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
                <a href="#" class="btn btn-outline-danger btn-sm">Remove</a>
            </td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Coding the wireframe <span class="badge badge-info">In progress</span></td>
            <td>20/04/2017</td>
            <td>22/04/2017</td>
            <td>
                <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
                <a href="#" class="btn btn-outline-danger btn-sm">Remove</a>
            </td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Planning sales <span class="badge badge-success">Done</span></td>
            <td>20/04/2017</td>
            <td>22/04/2017</td>
            <td>
                <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
                <a href="#" class="btn btn-outline-danger btn-sm">Remove</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>