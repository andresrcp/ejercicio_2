<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Ejercicio | @yield('title')</title>
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acerca-de">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
        <!-- content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 bg-secondary" style="height: 90vh">
                    <div class="list-group border-secondary">
                        <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                            The current button
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">A second item</button>
                        <button type="button" class="list-group-item list-group-item-action">A third button item</button>
                        <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
                        <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
                    </div>
                </div>
                <div class="col-md-9" style="height: 90vh">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="bg-secondary fixed-bottom">
            <div class="container-fluid text-light">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit recusandae mollitia rerum quam provident est?
            </div>
        </footer>
        <!-- end footer -->
    </body>
</html>