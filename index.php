<?php
require_once __DIR__.'/classi/Sala.php';
require_once __DIR__.'/classi/Sala4D.php';
require_once __DIR__.'/classi/Spettacolo.php';
require_once __DIR__.'/classi/Film.php';

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$sale = [
    new Sala("Sala Verde", "120", "Surround Dolby Atmos", 250),
    new Sala("Sala Gialla", "110", "Surround Dolby Atmos", 200),
    new Sala("Sala Rossa", "100", "Surround", 150),
    new Sala("Sala Blu", "100", "Surround", 150),
    new Sala4D("Sala SensiFilm", "120", "Surround Dolby Atmos", 100),
    new Sala4D("Sala SensiFilm", "120", "Surround Dolby Atmos", 100)
];

$spettacoli = [
    new Spettacolo("Sala SensiFilm", "10 marzo 2022", "14:00", "Il Signore degli Anelli - La Compagnia dell'Anello"),
    new Spettacolo("Sala Verde", "10 marzo 2022", "16:00", "Sin City"),
    new Spettacolo("Sala Gialla", "10 marzo 2022", "18:00", "La corazzata Potëmkin"),
    new Spettacolo("Sala Rossa", "10 marzo 2022", "20:00", "Lo chiamavano Jeeg Robot"),
    new Spettacolo("Sala Blu", "10 marzo 2022", "22:00", "Sin City"),
    new Spettacolo("Sala Verde", "11 marzo 2022", "14:00", "Amici miei - Atto I"),
    new Spettacolo("Sala Gialla", "11 marzo 2022", "16:00", "El Camino - Il film di Breaking Bad"),
    new Spettacolo("Sala Rossa", "11 marzo 2022", "18:00", "Amici miei - Atto II"),
    new Spettacolo("Sala SensiFilm", "11 marzo 2022", "20:00", "La corazzata Potëmkin"),
    new Spettacolo("Sala Blu", "11 marzo 2022", "22:00", "Il Signore degli Anelli - Le due torri")
];

$film = [
    new Film("Il Signore degli Anelli - La Compagnia dell'Anello", "Peter Jackson", "Fantasy", "Elijah Wood, Ian McKellen, Liv Tyler, Viggo Mortensen, Sean Astin,Cate Blanchett, John Rhys-Davies, Billy Boyd, Dominic Monaghan, Orlando Bloom, Christopher Lee, Hugo Weaving, Sean Bean, Ian Holm, Andy Serkis"),
    new Film("Il Signore degli Anelli - Le due torri", "Peter Jackson", "Fantasy", "Elijah Wood, Ian McKellen, Liv Tyler, Viggo Mortensen, Sean Astin,Cate Blanchett, John Rhys-Davies, Billy Boyd, Dominic Monaghan, Orlando Bloom, Christopher Lee, Hugo Weaving, Sean Bean, Ian Holm, Andy Serkis"),
    new Film("Il Signore degli Anelli - Il ritorno del re", "Peter Jackson", "Fantasy", "Elijah Wood, Ian McKellen, Liv Tyler, Viggo Mortensen, Sean Astin,Cate Blanchett, John Rhys-Davies, Billy Boyd, Dominic Monaghan, Orlando Bloom, Christopher Lee, Hugo Weaving, Sean Bean, Ian Holm, Andy Serkis"),
    new Film("Sin City", "Robert Rodriguez, Frank Miller, Quentin Tarantino", "Thriller, Noir, Azione, Giallo, Grottesco, Orrore", "Jessica Alba, Rosario Dawson, Elijah Wood, Bruce Willis, Benicio Del Toro, Michael Clarke Duncan, Carla Gugino, Josh Hartnett, Michael Madsen, Jaime King, Brittany Murphy, Clive Owen, Mickey Rourke, Nick Stahl, Marley Shelton, Arie Verveen, Makenzie Vega, Chris Warner, Rick Gomez, Tommy Nix, Frank Miller, Rutger Hauer, Ethan Maniquis, Jude Ciccolella, Alexis Bledel, Devon Aoki, Natalie Hess, Sherrell Murphy-Ramos, Jason Douglas, Chelsea Bulte, Penny Drake, Greg Ingram, Jason McDonald, Jeff Schwan, Scott Teeters, Ken Thomas, Katherine Willis"),
    new Film("Amici miei - Atto I", "Mario Monicelli", "Commedia", "Ugo Tognazzi, Gastone Moschin, Philippe Noiret, Duilio Del Prete, Adolfo Celi, Olga Karlatos, Bernard Blier, Silvia Dionisio, Milena Vukotic, Franca Tamantini, Angela Goodwin, Marisa Traversi, Mauro Vestri, Mario Scarpetta, Maurizio Scattorin, Edda Ferronao"),
    new Film("Amici miei - Atto II", "Mario Monicelli", "Commedia", "Ugo Tognazzi, Gastone Moschin, Philippe Noiret, Duilio Del Prete, Adolfo Celi, Olga Karlatos, Bernard Blier, Silvia Dionisio, Milena Vukotic, Franca Tamantini, Angela Goodwin, Marisa Traversi, Mauro Vestri, Mario Scarpetta, Maurizio Scattorin, Edda Ferronao"),
    new Film("Amici miei - Atto III", "Mario Monicelli", "Commedia", "Ugo Tognazzi, Gastone Moschin, Philippe Noiret, Duilio Del Prete, Adolfo Celi, Olga Karlatos, Bernard Blier, Silvia Dionisio, Milena Vukotic, Franca Tamantini, Angela Goodwin, Marisa Traversi, Mauro Vestri, Mario Scarpetta, Maurizio Scattorin, Edda Ferronao"),
    new Film("La corazzata Potëmkin", "Sergej Michajlovič Ėjzenštejn", "Storico, Drammatico", "Alexandre Antonov, Vladimir Barskij, Grigori Aleksandrov, Levchenko Repnikova, Alexandre Levshin, Andrei Fajt, Ivan Bobrov, Marusov, Michail Gomarov"),
    new Film("El Camino - Il film di Breaking Bad", "Vince Gilligan", "Drammatico, Thriller, Azione", "Aaron Paul, Matt Jones, Charles Baker, Jesse Plemons, Krysten Ritter, Scott Shepherd, Scott MacArthur, Tom Bower, Kevin Rankin, Larry Hankin, Tess Harper, Michael Bofshever, Marla Gibbs"),
    new Film("Smetto quando voglio", "Sydney Sibilia", "Commedia, Azione", "Edoardo Leo, Valeria Solarino, Valerio Aprea, Paolo Calabresi, Libero De Rienzo, Pietro Sermonti, Lorenzo Lavia, Neri Marcorè, Stefano Fresi, Guglielmo Poggi"),
    new Film("Smetto quando voglio - Masterclass", "Sydney Sibilia", "Commedia, Azione", "Edoardo Leo, Valeria Solarino, Valerio Aprea, Paolo Calabresi, Libero De Rienzo, Pietro Sermonti, Lorenzo Lavia, Neri Marcorè, Stefano Fresi, Guglielmo Poggi"),
    new Film("Smetto quando voglio - Ad honorem", "Sydney Sibilia", "Commedia, Azione", "Edoardo Leo, Valeria Solarino, Valerio Aprea, Paolo Calabresi, Libero De Rienzo, Pietro Sermonti, Lorenzo Lavia, Neri Marcorè, Stefano Fresi, Guglielmo Poggi"),
    new Film("Lo chiamavano Jeeg Robot", "Gabriele Mainetti", "Thriller, Fantastico, Noir", "Claudio Santamaria, Luca Marinelli, Ilenia Pastorelli, Francesco Formichetti, Salvatore Esposito, Antonia Truppo, Stefano Ambrogi, Maurizio Tesei, Gianluca Di Gennaro, Daniele Trombetti")
];

$sale[4]->effetti4D = "<li><b>Effetti 4D disponibili:</b> Poltrone mobili, Acqua, Luci laser, Odori</li>";
$sale[5]->effetti4D = "<li><b>Effetti 4D disponibili:</b> Poltrone mobili, Luci laser</li>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-2</title>
</head>
<body>
    <h2>1 - Informazioni sale disponibili</h2>

    <ul>
        <?php
            foreach($sale as $info){
                echo "<h3>Informazioni {$info->nome}:</h3>";
                echo $info->getInfo();
                echo $info->effetti4D;
            }
        ?>
    </ul>

    <h2>2 - Numero posti complessivi del cinema</h2>

    <?php
    $numeroPosti = 0;

        foreach($sale as $num){
            $numeroPosti += $num->getNumeroPosti();
        }
        echo "<p><b>Numero posti:</b> {$numeroPosti}</p>";
    ?>

    <h2>3 - Numero proiezioni giornaliere</h2>

    <?php
    $numeroProiezioni = 0;
    $filmSelezionato = $film[3]->getTitolo();
    $dataSelezionata = "10 marzo 2022";

        foreach($spettacoli as $proiezione){
            if($proiezione->getData() == $dataSelezionata && $proiezione->getFilm() == $filmSelezionato){
                $numeroProiezioni++;
            }
        }
        echo "<b>Numero proiezioni per '{$filmSelezionato}' il giorno {$dataSelezionata}:</b> $numeroProiezioni";

        //var_dump($proiezione->getFilm());
        //var_dump($film[0]);
        //var_dump($numeroProiezioni);
    ?>    

<!--
    Oggi pomeriggio provate ad immaginare quali possano essere le classi necessarie per la gestione di un cinema multisala.

    Dovrete essere in grado di gestire le sale, gli spettacoli e le specifiche del film con relativi attori.

    Attenzione, esistono due tipi di sala, quella normale e quella con poltrone immersive, con l’unica 
    aggiunta di dover tener traccia degli effetti speciali utilizzabili durante la proiezione 
    (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione).


    oggi continuerete a lavorare sulla repo di ieri (php-oop-2),
    aggiungendo quanto necessario per soddisfare quanto segue:

    1) Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione alle 
    informazioni aggiuntive per le sale immersive.
    2) Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
    3) Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.
    4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.
    BONUS
    5) gestire con logica un’eccezione try/catch in un punto qualsiasi del vostro codice.
    6) Stabilito un film, una sala, un’ora di inizio e un numero di proiezioni, calcolare automaticamente 
    gli orari degli spettacoli, considerando che tra uno spettacolo e l’altro devono passare 15 min.
    7) Stabilito un giorno, recuperare l’elenco dei film in proiezione con relativi attori, 
    i quali dovranno essere stampati con iniziale del nome e cognome “N. Cognome”.
-->
</body>
</html>