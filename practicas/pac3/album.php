<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album idolos - Alejandro Ramudo</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
  <link rel="stylesheet" href="album.css">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
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
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
            viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" /></svg>
          <strong>Album</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

    <div class="album py-5 bg-light">
      <div class="container">
            <?php
            
                $lista_idolos = [
                    [
                        'imagen' => "imagen1.jpg",
                        'nombre_apellidos' => "Salomon",
                        'descripcion' => "cantante"
                    ],
                    [
                        'imagen' => "imagen2.jpg",
                        'nombre_apellidos' => "Alexander Puño de Hierro",
                        'descripcion' => "guerrero"
                    ],
                    [
                        'imagen' => "imagen3.jpg",
                        'nombre_apellidos' => "Cillian Murphy",
                        'descripcion' => "actor"
                    ],
                    [
                        'imagen' => "imagen4.jpg",
                        'nombre_apellidos' => "Kratos",
                        'descripcion' => "semidios"
                    ],
                    [
                        'imagen' => "imagen5.jpg",
                        'nombre_apellidos' => "Solair",
                        'descripcion' => "caballero"
                    ],
                    [
                        'imagen' => "imagen6.jpg",
                        'nombre_apellidos' => "Bnet",
                        'descripcion' => "rapero"
                    ]
                ];
                echo '<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
                    foreach ($lista_idolos as $idolo){
                            echo '<div class="col">';
                                echo '<div class="card shadow-sm">';
                                    echo '<div class="card-body">';
                                    echo '<img src="'. $idolo['imagen'] . '">';
                                    echo '<br>';
                                    echo $idolo['nombre_apellidos'];
                                    echo '<br>';
                                    echo $idolo['descripcion'];
                                    echo '</div>';       
                                echo '</div>';
                            echo '</div>';   
                    }
                echo '</div>'; 
            ?>
        </div>
    </div>

  </main>

</body>

</html>