<?php
/**
 * Atro Trading — site-wide settings.
 * Bedrijfsgegevens op één plek, zodat elke pagina dezelfde data toont.
 */

$site = [
    'name'        => 'Atro Trading',
    'tagline'     => "Auto's, caravans & paardentrailers uit Groningen",
    'phone'       => '+31 6 48 56 75 32',
    'phone_raw'   => '+31648567532',
    'email'       => 'info@atrotrading.nl',
    'address'     => 'Duinkerkenstraat 32, 9723 BS Groningen',
    'kvk'         => '01128445',
    'iban'        => 'NL29 ABNA 0425 3494 03',
    'btw'         => 'NL002330990B32',
    'year'        => date('Y'),
];

// Huidige pagina, gebruikt door de nav om de actieve link te markeren.
$current = basename($_SERVER['SCRIPT_NAME']);

$nav = [
    'index.php'      => 'Home',
    'assortiment.php' => 'Assortiment',
    'wij-kopen.php'  => 'Wij kopen',
    'export.php'     => 'Export',
    'over-ons.php'   => 'Over ons',
    'contact.php'    => 'Contact',
];
