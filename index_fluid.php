<?php

require_once '../vendor/autoload.php';

use Htlw3r\Lasvegas\Hotel;


$hotels[] =  new Hotel(
    'Caesars Palace',
    '5',
    'https://image.geo.de/30376454/t/Wn/v3/w1440/r0/-/caesars-palace-red-s-463886915-jpg--90282-.jpg',
    'Dieses berühmte Casino-Hotel befindet sich in einem weitläufigen Gebäudekomplex im römischen Stil am lebhaften Las Vegas Strip.
                 Es ist 1 Meile (1,6 km) von der Interstate 15 und 14 Meilen (22,5 km) vom Rio Secco Golf Club entfernt. Die elegant eingerichteten
                 und auf 5 Turmgebäude verteilten Zimmer bieten WLAN, einen Flachbildfernseher und eine Minibar. Die Suiten haben außerdem einen
                 Wohnbereich und eine Whirlpool-Badewanne. In den Suiten mit gehobener Ausstattung gibt es einen Billardtisch und/oder eine Tanzfläche.
                 Zimmerservice wird rund um die Uhr angeboten. Im Hotel gibt es 11 Restaurants, darunter ein gehobenes japanisches Restaurant und ein
                 zwangloses Grillrestaurant. Das Casino bietet klassische Spieltische, Poker und Spielautomaten. Zum weiteren Angebot gehören ein saisonal
                 geöffneter Außenpool, ein Fitnessstudio und ein Spa sowie ein Nachtclub und Liveunterhaltung.'
);
$hotels[] = new Hotel('The Mirage',4,
    'https://media-cdn.tripadvisor.com/media/photo-s/22/0a/52/ae/the-mirage.jpg',
    'Dieses legendäre Casino-Hotel mit Blick auf den berühmten "ausbrechenden Vulkan" befindet sich am Las Vegas Strip neben dem Hotel Caesars Palace und gegenüber
               von Madame Tussauds Las Vegas.Die schicken Zimmer sind mit einem Flachbildfernseher, kostenlosem WLAN, einer iPod-Dockingstation und einer Minibar ausgestattet.
               Die Suiten verfügen außerdem über ein separates Wohnzimmer, einen Essbereich und Panoramafenster mit Blick auf den Las Vegas Strip. Die Apartments bieten einen
               privaten Pool und Butlerservice. Zimmerservice steht zur Verfügung. Zum Angebot gehören ein Delfinbecken, ein Außenpool, ein Salzwasseraquarium im Innenbereich
               sowie mehrere Bars und Lounges. Außerdem hat das Hotel ein Kongresszentrum, ein Spa und Einkaufsmöglichkeiten sowie 14 Restaurants, ein beliebtes Casino und Liveunterhaltung.'
);

$hotels[]= new Hotel('Aria Resort & Casino',4,
    'https://www.britishairways.com/badp/static/external/US-LAS-5907377/11_US-LAS-5907377-HTLARI-H1907.jpeg',
    'Dieses noble Casino-Resort befindet sich in einem schicken Gebäudekomplex am Las Vegas Strip. Es ist 2
               Meilen (3,2 km) vom Flughafen McCarran International und 15 Meilen (24,1 km) vom Shadow Creek Golf Course entfernt.
               Die eleganten Zimmer, teilweise mit Blick auf den Las Vegas Strip, verfügen über bodentiefe Fenster, kostenloses WLAN und
               einen Flachbildfernseher. Die Suiten bieten außerdem ein Wohnzimmer und Zugang zu einer privaten Lounge, die Suiten mit gehobener
               Ausstattung einen kostenlosen Flughafenshuttle. Zimmerservice steht ebenfalls zur Verfügung. Das gastronomische Angebot umfasst ein
               gehobenes Steakhouse, ein thailändisches Restaurant und eine Pizzeria. Das Casino verfügt über Spielautomaten, Spieltische und Poker.
               Ein Spa, 3 von Palmen gesäumte Außenpools, ein luxuriöses Einkaufszentrum und Liveunterhaltung sind ebenfalls verfügbar.'
);
// Initializing the View: rendering in Fluid takes place through a View instance
// which contains a RenderingContext that in turn contains things like definitions
// of template paths, instances of variable containers and similar.
$view = new \TYPO3Fluid\Fluid\View\TemplateView();
// TemplatePaths object: a subclass can be used if custom resolving is wanted.
$paths = $view->getTemplatePaths();
// Assigning the template path and filename to be rendered. Doing this overrides
// resolving normally done by the TemplatePaths and directly renders this file.
$paths->setTemplatePathAndFilename('../template/main_fluid.html');
// In this example we assign all our variables in one array. Alternative is
// to repeatedly call $view->assign('name', 'value').
$view->assignMultiple(
    ['hotels' => $hotels]
);
// Rendering the View: plain old rendering of single file, no bells and whistles.
$output = $view->render();
echo $output;

