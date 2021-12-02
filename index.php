<?php
require_once "class/Movie.php";

$movies = [
    // ()=> Expected 6 arguments
    new Movie("Blade Runner", "./img/blade-runner.jpg", "Ridley Scott", "Fantascienza", "14/10/1982", "Rick Deckard è un ex poliziotto del Los Angeles Police Department richiamato in servizio quando un gruppo di sofisticati androidi Nexus 6 fugge dalle colonie Extra-Mondo e torna clandestinamente sulla Terra."),
    new Movie("Pulp Fiction", "./img/pulp-fiction.jpg", "Quentin Tarantino", "Thriller, Crime", "28/10/1994", "Le vite di due gangster, di un pugile e della moglie di un potente boss della malavita finiscono per intrecciarsi in una paradossale storia di violenza, vendetta e redenzione."),
    new Movie("Fight Club", "./img/fight-club.jpg", "David Fincher", "Dramma", "29/10/1999", "Tyler Durden ed un nuovo amico sfogano la loro aggressività creando un club di combattimento, che assume rapidamente connotati rivoluzionari."),
    new Movie("Arancia Meccanica", "./img/arancia-meccanica.jpg", "Stanley Kubrick", "Fantascienza, Dramma", "07/09/1972", "In cerca di emozioni forti, Alex quotidianamente compie azioni criminali. Viene arrestato e sottoposto ad un trattamento che lo condiziona alla non violenza. Ma l'esperimento non va come previsto."),
    new Movie("Tokyo Gore Police", "", "Yoshihiro Nishimura", "Horror, Azione, Fantascienza", "03/10/2008", "In una Tokyo del futuro flagellata da mutanti chiamati Engineer, viene formata una speciale squadra d'assalto capitanata dalla bella Eihi Shiina. Purtroppo la polizia privatizzata e indipendente, non ci va leggera e a farne le spese sono gli innocenti cittadini."),
];
// var_dump($movies)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>My Movies</title>
</head>

<body>
    <div class="container">
        <h1>5 Movies you must watch before you die</h1>
    </div>
    <div class="container p-0">
        <div class="row row-cols-5 g-4">
            <?php foreach ($movies as $movie) { ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $movie->getSrc() ?>" class="card-img-top" alt="<?php echo $movie->title ?>" />
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $movie->title ?></h4>
                            <p class="card-text"><?php echo $movie->director ?></p>
                            <p class="card-text"><?php echo $movie->genre ?></p>
                            <p class="card-text"><?php echo $movie->release_date ?></p>
                            <p class="card-text"><?php echo $movie->plot ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>