<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    
    

    <title>Biblioteca</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a href="index.php"><img src="http://4.bp.blogspot.com/-NovaHH4qRkk/V3H6cXyPyeI/AAAAAAAAFIE/zxEt1sRcz8A3U6YZBtoDb3qfefdODGuJACK4B/s1600/Partido%2BJusticialista%2Bvector%2Blogo.png" alt="" width="55px" height="50px"></a>
        <a class="navbar-brand" href="index.php">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Libros
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('/libros')}}">Todos</a>
                <a class="dropdown-item" href="{{url('/prestados')}}">Prestados</a>
                <a class="dropdown-item" href="{{url('/actuales')}}">Actuales</a>
                <a class="dropdown-item" href="{{url('/actuales')}}">Agregar Libro</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/login')}}" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
            </li>
          </ul>
        </div>
    </nav>