<!-- structure generale du frontend -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site de Raphael</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
            /* .mouseover{
                background-color:#0d6efd;
                color:white;
            } */
        </style>
    </head>
    <body>
        <!-- menu -->
        <ul class="nav nav-pills p-3">
            <li class="nav-item">
                <a class="nav-link <?php if($id_page==1) { ?> active <?php } ?>" aria-current="page" href="http://localhost:8888">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($id_page==2) { ?> active <?php } ?>" href="http://localhost:8888/minichat">Minichat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($id_page==3) { ?> active <?php } ?>" href="http://localhost:8888/noteNumerique">Note Numérique</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>
        <!-- contenu des pages -->
        <div class="container mt-5 mb-5">
            <section class="section">
                <div class="container">

                    <?= $content ?>

                </div>
            </section>
        </div>
        <script>
            // $("ul li a").on("mouseover", function() {
            //     $(this+":not(active)").toggleClass("mouseover");
            // });
        </script>
    </body>
</html>