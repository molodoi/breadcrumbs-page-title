<?php
Breadcrumbs::register('home', function ($breadcrumbs) {
     $breadcrumbs->push('Home', route('home'));
});

/**
 * Nous enregistrons un continent fil d'Ariane et passons un closure. 
 * La fermeture accepte un nouveau paramètre, le $continent(qui sera fourni par la vue appelante en temps réel). 
 * Ensuite, le homefil d'Ariane est assigné comme parent et enfin, le nom et l'URL du fil d' $continentAriane sont poussés.
 * Pour afficher le fil d'Ariane dans le code de la vue continent, nous écrivons cet extrait:
 */
Breadcrumbs::register('continent', function ($breadcrumbs, $continent) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($continent->name, route('continent', ['name' => $continent->name]));
});

Breadcrumbs::register('country', function ($breadcrumbs, $continent, $country) {
    $breadcrumbs->parent('continent', $continent);
    $breadcrumbs->push($country->name, route('country', ['name' => $country->name]));
});

Breadcrumbs::register('city', function ($breadcrumbs, $continent, $country, $city) {
    $breadcrumbs->parent('country', $continent, $country);
    $breadcrumbs->push($city->name, route('city', ['name' => $city->name]));
});