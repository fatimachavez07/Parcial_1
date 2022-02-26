<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registro</title>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg"style="background-color:#000000">
        
        <div class="container-fluid">
            <a class="nav-link disabled" href="#FFFFFF" tabindex="-1" aria-label="true">PARCIAL1</a>
            <a class="nav-link disabled" href="#FFFFFF" tabindex="-1" aria-label="true">CLIENTES</a>
          </li>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <br>
      
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-6 p-5 bg-white shadow-lg rounded">
                  <form method="POST" action="recibe_clientes.php">
                    <label><h2>Nuevo Cliente</h2></label>
                    <hr>
                    <div class="form-group">
                        <label for="Codigo">Codigo:</label>
                        <input id="Codigo" class="form-control" type="text" name="Codigo">
                    </div>

                    <div class="form-group">
                        <label for="Nombres">Nombres:</label>
                        <input id="Nombres" class="form-control" type="text" name="Nombres">
                    </div>

                    <div class="form-group">
                        <label for="Apellidos">Apellidos:</label>
                        <input id="Apellidos" class="form-control" type="text" name="Apellidos">
                    </div>

                    <div class="form-group">
                        <label for="Dui">DUI:</label>
                        <input id="Dui" class="form-control" type="nchar" name="dui">
                    </div>

                    <div class="form-group">
                        <label for="Direccion">Direccion:</label>
                        <input id="Direccion" class="form-control" type="text" name="direccion">
                    </div>
                    <div class="form-group">
                        <label for="Telefono">Telefono:</label>
                        <input id="Telefono" class="form-control" type="nchar" name="telefono">
                    </div>

                    <br>

                    <button class="btn btn-primary" type="button">Enviar</button>
                  </form>
              </div>
          </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
  </head>
  <body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>