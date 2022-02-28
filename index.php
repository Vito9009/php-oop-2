<?php
require_once __DIR__.'/classi/Sala.php';
require_once __DIR__.'/classi/Sala4D.php';
require_once __DIR__.'/classi/Spettacolo.php';
require_once __DIR__.'/classi/Film.php';

$sale = [
    new Sala("Sala Verde", "120", "Surround Dolby Atmos", 250),
    new Sala("Sala Gialla", "110", "Surround Dolby Atmos", 200),
    new Sala("Sala Rossa", "100", "Surround", 150),
    new Sala("Sala Blu", "100", "Surround", 150),
    new Sala4D("Sala SensiFilm", "120", "Surround Dolby Atmos", 100, "Poltrone mobili, Acqua, Luci laser, Odori"),
    new Sala4D("Sala SensiFilm", "120", "Surround Dolby Atmos", 100, "Poltrone mobili, Luci laser")
];

$spettacoli = [
    new Spettacolo("Sala SensiFilm", "10 marzo 2022", "14:00", "Il Signore degli Anelli - La Compagnia dell'Anello"),
    new Spettacolo("Sala Verde", "10 marzo 2022", "16:00", "Sin City"),
    new Spettacolo("Sala Gialla", "10 marzo 2022", "18:00", "La corazzata Potëmkin"),
    new Spettacolo("Sala Rossa", "10 marzo 2022", "20:00", "Lo chiamavano Jeeg Robot"),
    new Spettacolo("Sala Blu", "10 marzo 2022", "22:00", "Smetto quando voglio"),
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


<!--
    Oggi pomeriggio provate ad immaginare quali possano essere le classi necessarie per la gestione di un cinema multisala.

    Dovrete essere in grado di gestire le sale, gli spettacoli e le specifiche del film con relativi attori.

    Attenzione, esistono due tipi di sala, quella normale e quella con poltrone immersive, con l’unica 
    aggiunta di dover tener traccia degli effetti speciali utilizzabili durante la proiezione 
    (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione).
-->
</body>
</html>