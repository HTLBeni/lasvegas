<?php

$template = <<<TEMPLATE
<html>
<head>
<title> Las Vegas</title>
</head>

<body>
    <h1>###HOTEL1###</h1>
    <img src="###Image1###" height="400px" width="600px">
    <p>###Description1###</p>
     <br>
     
     <h1>###HOTEL2###</h1>
    <img src='###Image2###'>
    <p>###Description2###</p>
    <br>
    
     <h1>###HOTEL3###</h1>
    <img src='###Image3###'>
    <p>###Description3###</p>
   
</body>
</html>
TEMPLATE;


$hotel1 = 'Caesars Palace';
$image1 = 'https://image.geo.de/30376454/t/Wn/v3/w1440/r0/-/caesars-palace-red-s-463886915-jpg--90282-.jpg';
$description1 = 'Dieses berühmte Casino-Hotel befindet sich in einem weitläufigen Gebäudekomplex im römischen Stil am lebhaften Las Vegas Strip.
                 Es ist 1 Meile (1,6 km) von der Interstate 15 und 14 Meilen (22,5 km) vom Rio Secco Golf Club entfernt. Die elegant eingerichteten
                 und auf 5 Turmgebäude verteilten Zimmer bieten WLAN, einen Flachbildfernseher und eine Minibar. Die Suiten haben außerdem einen
                 Wohnbereich und eine Whirlpool-Badewanne. In den Suiten mit gehobener Ausstattung gibt es einen Billardtisch und/oder eine Tanzfläche.
                 Zimmerservice wird rund um die Uhr angeboten. Im Hotel gibt es 11 Restaurants, darunter ein gehobenes japanisches Restaurant und ein
                 zwangloses Grillrestaurant. Das Casino bietet klassische Spieltische, Poker und Spielautomaten. Zum weiteren Angebot gehören ein saisonal
                 geöffneter Außenpool, ein Fitnessstudio und ein Spa sowie ein Nachtclub und Liveunterhaltung.

                 Check-in: 16:00
                 Check-out: 11:00';

$hotel2 = 'The Mirage';
$image2 = 'https://media-cdn.tripadvisor.com/media/photo-s/22/0a/52/ae/the-mirage.jpg';
$description2='Dieses legendäre Casino-Hotel mit Blick auf den berühmten "ausbrechenden Vulkan" befindet sich am Las Vegas Strip neben dem Hotel Caesars Palace und gegenüber
               von Madame Tussauds Las Vegas.Die schicken Zimmer sind mit einem Flachbildfernseher, kostenlosem WLAN, einer iPod-Dockingstation und einer Minibar ausgestattet.
               Die Suiten verfügen außerdem über ein separates Wohnzimmer, einen Essbereich und Panoramafenster mit Blick auf den Las Vegas Strip. Die Apartments bieten einen
               privaten Pool und Butlerservice. Zimmerservice steht zur Verfügung. Zum Angebot gehören ein Delfinbecken, ein Außenpool, ein Salzwasseraquarium im Innenbereich
               sowie mehrere Bars und Lounges. Außerdem hat das Hotel ein Kongresszentrum, ein Spa und Einkaufsmöglichkeiten sowie 14 Restaurants, ein beliebtes Casino und Liveunterhaltung.

               Check-in: 15:00
               Check-out: 11:00';

$hotel3 = 'Aria Resort & Casino';
$image3 = 'https://www.britishairways.com/badp/static/external/US-LAS-5907377/11_US-LAS-5907377-HTLARI-H1907.jpeg';
$description3='Dieses noble Casino-Resort befindet sich in einem schicken Gebäudekomplex am Las Vegas Strip. Es ist 2
               Meilen (3,2 km) vom Flughafen McCarran International und 15 Meilen (24,1 km) vom Shadow Creek Golf Course entfernt.
               Die eleganten Zimmer, teilweise mit Blick auf den Las Vegas Strip, verfügen über bodentiefe Fenster, kostenloses WLAN und
               einen Flachbildfernseher. Die Suiten bieten außerdem ein Wohnzimmer und Zugang zu einer privaten Lounge, die Suiten mit gehobener
               Ausstattung einen kostenlosen Flughafenshuttle. Zimmerservice steht ebenfalls zur Verfügung. Das gastronomische Angebot umfasst ein
               gehobenes Steakhouse, ein thailändisches Restaurant und eine Pizzeria. Das Casino verfügt über Spielautomaten, Spieltische und Poker.
               Ein Spa, 3 von Palmen gesäumte Außenpools, ein luxuriöses Einkaufszentrum und Liveunterhaltung sind ebenfalls verfügbar.

               Check-in: 15:00
               Check-out: 11:00';


$template = str_replace('###HOTEL1###',$hotel1,$template);
$template = str_replace('###Image1###',$image1,$template);
$template = str_replace('###Description1###',$description1,$template);

$template = str_replace('###HOTEL2###',$hotel2,$template);
$template = str_replace('###Image2###',$image2,$template);
$template = str_replace('###Description2###',$description2,$template);


$template = str_replace('###HOTEL3###',$hotel3,$template);
$template = str_replace('###Image3###',$image3,$template);
$template = str_replace('###Description3###',$description3,$template);

echo $template;


