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
  <link rel="stylesheet" href="ex1.css">



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
            <circle cx="12" cy="13" r="4" /></svg>
          <strong>CINESA FP</strong>
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
            
                $peliculas = [
                    [
                        'nom_pelicula' => "Oppenheimer",
                        'imagen' => "peli1.jpg",
                        'director' => "Christopher Nolan",
                        'duracio' => "3 horas",
                        'repartiment' => ["Cillian Murphy","Florence Pugh","Robert Downey Jr"],
                        'valoracio' => "4/5",
                        'horari' => ["12:30","17:30","22:00"]
                    ],
                    [
                        'nom_pelicula' => "Bullet Train",
                        'imagen' => "peli2.jpg",
                        'director' => "David Leitch",
                        'duracio' => "2 horas y 6 minutos",
                        'repartiment' => ["Brad Pitt","Bad Bunny","Joey King"],
                        'valoracio' => "3/5",
                        'horari' => ["10:00","14:30","22:00"]
                    ],
                    [
                        'nom_pelicula' => "Tenet",
                        'imagen' => "peli3.jpg",
                        'director' => "Christopher Nolan",
                        'duracio' => "2 horas y 30 minutos",
                        'repartiment' => ["Elizabeth Debicki","John David Washington","Robert Pattinson"],
                        'valoracio' => "3,5/5",
                        'horari' => ["11:00","16:30","21:00"]
                    ]
                ];
                echo '<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
                    foreach ($peliculas as $pelicula){
                            echo '<div class="col">';
                                echo '<div class="card shadow-sm">';
                                    echo '<div class="card-body">';
                                    echo "<h1>{$pelicula['nom_pelicula']}</h1>";
                                    echo "<p>{$pelicula['duracio']}</p>";
                                    echo '<img src="'. $pelicula['imagen'] . '">';
                                    echo '<br>';
                                    echo "<h2>Director: {$pelicula['director']}</h2>";
                                    echo '<br>';
                                    echo '<a href="fitxa.php?nom=' . $pelicula['nom_pelicula'] . '">Més informació</a>';
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