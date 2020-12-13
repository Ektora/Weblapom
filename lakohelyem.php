<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="hu">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Lakókörnyezetem</title>
  <script src="javascript/jquery-3.5.1.min.js"></script>
  <script src="javascript/javascript.js" type="text/javascript" charset="utf-8"></script>
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png" />
  <meta name="description" content="A webfejlesztés fortélyainak elsajátítása" />
  <meta name="keywords" content="HTML, CSS, JavaScript" />
  <meta name="author" content="Lucski Zsolt" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="styles/stylelakohely.css" />
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="grid-container">
    <header>
      <h1>Lakóhelyem</h1>
    </header>
    <div class="nav">
      <ul>
        <li><a href="">Főoldal</a></li>
        <li><a href="lakohelyem.html" id="aktivmenu">Lakókörnyezetem</a></li>
        <li><a href="about_me.html">Magamról</a></li>
      </ul>
    </div>
    <div class="sidemenu">
      <div id="tapadomenu">
        <h2>Helyi menü</h2>
        <ul>
          <li><a href="#house">Környezetem</a></li>
          <li><a href="#animals">Állataim</a></li>
          <li><a href="#gardens">Gyümölcsöseim</a></li>
          <li><a href="#forest">Erdőm</a></li>
        </ul>
      </div>
    </div>
    <div class="main">
      <h2 class="valtszin"><span id="house"></span>Házam és környezete</h2>
      <div class="main-div">
        <div>
          <picture class="imgleft">
            <source media="(min-width:800px)" srcset="images/otthonmedium.jpg">
            <img src="images/otthonsmall.jpg" alt="Egy kép a házamról">
          </picture>
          <h4>Mándok</h4>
          <p>
            Mándokon lakok születésem óta, a családi házunkban, amit még a szüleim építettek a nagyszüleimmel. A házhoz
            tartozik egy nagy hátsóudvar és egy hatalmas kert, ahol a meggyesem is van.
          </p>
        </div>

      </div>
      <h2 class="valtszin"><span id="animals"></span>Állataim</h2>
      <div class="main-div">
        <div>
          <picture class="imgright">
            <source media="(min-width:800px)" srcset="images/Mazsolamedium.jpg">
            <img src="images/Mazsolasmall.jpg" alt="Egy kép Mazsoláról">
          </picture>
          <h4 class="animname"></h4>
          <h5 class="animage"></h5>
          <h5>Fajta: Kaukázusi medveölő</h5>
          <p>
            Az udvar legnagyobb és legidősebb háziállata. Kölyökkorában egy nagyon szeleburdi jószág volt, aki mindenkit
            megakart "ölelni" és arcon nyalni. Mostanra már sokkal idősebb és nyugodtabb lett, a napjait leginkább már
            csak az árnyékban heveréssel tölti. Ő a ház igazi őrizője.
          </p>
        </div>
        <div>
          <picture class="imgleft">
            <source media="(min-width:800px)" srcset="images/burkusmedium.jpg">
            <img src="images/burkussmall.jpg" alt="Egy kép Burkusról">
          </picture>
          <h4 class="animname"></h4>
          <h5 class="right animage"></h5>
          <h5 class="right">Fajta: Keverék</h5>
          <p>
            Az unokatestvéremék leptek meg az édesanyjával Pötyivel, akinek Burkus volt az egyetlen kölyke. Játékos
            kutya, aki haragosan őrzi az udvart az idegenektől (és ismerősőktől). Másik híres tulajdonsága, hogy a
            kertben szeret a veteményesen keresztül közlekedni, nem nézve a mások munkáját. :)
          </p>
        </div>
        <div>
          <picture class="imgright">
            <source media="(min-width:800px)" srcset="images/vakarcsmedium.jpg">
            <img src="images/vakarcssmall.jpg" alt="Egy kép Vakarcsról">
          </picture>
          <h4 class="animname"></h4>
          <h5 class="animage"></h5>
          <h5>Fajta: Tacskó</h5>
          <p>
            Vakarcsot nem régiben találtam, vagy mondhatom úgy ő talált rám, miközben kimentem a kis gyümölcsösömbe
            fáért. Valahonnan elkóborolhatott vagy kitehették, és hallva engem odajött hozzám játszani. Azóta nálam van
            és ő a macskák réme, és minden rághatónak az ellensége.
          </p>
        </div>
        <div>
          <picture class="imgleft">
            <source media="(min-width:800px)" srcset="images/mircimedium.jpg">
            <img src="images/mircismall.jpg" alt="Egy kép Mirciről">
          </picture>
          <h4 class="animname"></h4>
          <h5 class="right animage"></h5>
          <p>
            Az előző macskagenerációnk utolsó tagja, testvérei mind elkóboroltak tőlünk. Igazi vadász fajta, mindig az
            egereket lesi a környéken.
          </p>
        </div>
        <div>
          <picture class="imgright">
            <source media="(min-width:800px)" srcset="images/tigrismedium.jpg">
            <img src="images/tigrissmall.jpg" alt="Egy kép Tigrisről">
          </picture>
          <h4 class="animname"></h4>
          <h5 class="animage"></h5>
          <p>
            A macskáim legnagyobb és legdominánsabb tagja, aki mostanában a környéket rójja, és egyre kevesebbet tér
            haza. Ő az a morcos macska amelyik nem szereti ha simogatják és zavarják az ejtőzésében.
          </p>
        </div>
        <div>
          <picture class="imgleft">
            <source media="(min-width:800px)" srcset="images/bolyhosmedium.jpg">
            <img src="images/bolyhossmall.jpg" alt="Egy kép Bolyhosról">
          </picture>
          <h4 class="animname"></h4>
          <h5 class="right animage"></h5>
          <p>
            Tigrissel egy évben került hozzánk, de 2-3 hónappal később. A fő vadász az udvaron ő, a kertből mindig
            egy-egy egérrel tér vissza, amit általában a kisebbek elvesznek tőle, amit beletőrődve vesz tudomásul.
          </p>
        </div>
        <div>
          <picture class="imgright">
            <source media="(min-width:800px)" srcset="images/falankmedium.jpg">
            <img src="images/falanksmall.jpg" alt="Egy kép Falánkról">
          </picture>
          <h4 class="animname"></h4>
          <h5 class="animage"></h5>
          <p>
            Zéró testvére és Tigris unokaöccse, Vakarcs legfőbb "játszópajtása", amit nagyon rossz néven vesz.
            Testvérével mindig azt keresi, mikor esik le neki pár jó falat és mit tud a kutyák elől elcsenni.
          </p>
        </div>
        <div>
          <picture class="imgleft">
            <source media="(min-width:800px)" srcset="images/zeromedium.jpg">
            <img src="images/zerosmall.jpg" alt="Egy kép Zéróról">
          </picture>
          <h4 class="animname"></h4>
          <h5 class="right animage"></h5>
          <p>
            Falánk testvére és Tigris unokaöccse, aki nem ápol túl jó kapcsolatot a kutyákkal. Testvérétől különbözve
            nem szereti az emberi simogatást, csak akkor jön közel, ha már tényleg nagyon éhes, de akkor is azt keresi,
            hogyan menekülhet.
          </p>
        </div>
      </div>
      <h2 class="valtszin"><span id="gardens"></span>Kertem és gyümölcsöseim</h2>
      <div class="main-div">
        <div>
          <picture class="imgright">
            <source media="(min-width:800px)" srcset="images/ujfehertoimedium.jpg">
            <img src="images/ujfehertoismall.jpg" alt="Egy kép a meggyesemről">
          </picture>
          <h4>Újfehértói fürtös</h4>
          <p>
            A kertemben található meggyes, amely fákon megtanultam a metszést és megszerettem. A fákat még a nagyszüleim
            ültették és én vettem át őket gondozásra. Minden tavasszal csodálatos látvány, amikor az összes meggyfa
            egyszerre virágzik és körbe zengi a fákat a méhek zúgása.
          </p>
        </div>
        <div>
          <picture class="imgleft">
            <source media="(min-width:800px)" srcset="images/idaredmedium.jpg">
            <img src="images/idaredsmall.jpg" alt="Egy kép az Idared almásomról">
          </picture>
          <h4>Idared</h4>
          <p>
            Édesapám által telepített gyümölcsös, amelyet középiskolás korom óta művelek. Régebben ketten permeteltük,
            édesapám hajtotta a traktort, én pedig pisztolyoztam. Az elmúlt 3 évben áttértünk az öko gazdaságra, úgyhogy
            mostmár bio almásnak nevezhető. Minden évben rengeteg munkát ad a fák művelése és a termény betakarítása, de
            mindig megéri a fáradtságos munka elvégzése.
          </p>
        </div>
        <div>
          <picture class="imgright">
            <source media="(min-width:800px)" srcset="images/florinamedium.jpg">
            <img src="images/florinasmall.jpg" alt="Egy kép a Florina almásomról">
          </picture>
          <h4>Florina</h4>
          <p>
            Az első saját telepítésű fáim, amivel az Idared melletti üres területeket ültettem be. A kis fákat az új
            tipusú metszéssel igyekszem kialakítani bő termőre és már várom, hogy lássam mennyit fognak teremni.
          </p>
        </div>
        <div>
          <picture class="imgleft">
            <source media="(min-width:800px)" srcset="images/bonitamedium.jpg">
            <img src="images/bonitasmall.jpg" alt="Egy kép a Bonita almásomról">
          </picture>
          <!---<h4>Bonita</h4>-->
          <?php
            echo "<h4>Bonita</h4>";
          ?>
          <p>
            A legújabb telepítésű fáim, a legújabb fajta piros almával. Édesapámmal közösen raktuk rendbe a területet a
            régi szőlősünk helyén és tavaly december 28-án ültettük el a fákat, a két ünnep között. Jelenleg ezek a
            legszebben fejlődő fáim és remélem a jővőben is így fog maradni.
          </p>
        </div>
        <div>
          <picture class="imgright">
            <source media="(min-width:800px)" srcset="images/lepoticamedium.jpg">
            <img src="images/lepoticasmall.jpg" alt="Egy kép a Lepotica szilvásomról">
          </picture>
          <h4>Lepotica</h4>
          <p>
            Tiszamogyoróson található 1 hektáros gyümölcsös, ami sajnos nem sikerült a legjobban mostanában, de régen
            nagyon sok munkát adott nekünk a szedése és magolása.
          </p>
        </div>
      </div>
      <h2 class="valtszin"><span id="forest"></span>Erdőm</h2>
      <div class="main-div">
        <div>
          <picture class="imgleft">
            <source media="(min-width:800px)" srcset="images/erdomedium.jpg">
            <img src="images/erdosmall.jpg" alt="Egy kép az akácerdőmről">
          </picture>
          <h4>Alaphegyi akácerdő</h4>
          <p>
            Az Alaphegyen található egy három hektáros szögletes kerekerdő, amit 20 éve a szüleim ültettek és gondoztak.
            Az egyik legjobb befektetés volt, mert évek óta a téli tüzelőre nincsen gondunk, mivel az erdő mindig ellát
            minket fával. Az egyik legjobb dolog nyáron kimenni az erdőbe és gyönyörködni a látványban.
          </p>
        </div>
      </div>
    </div>
    <div class="aside">
      <div class="aside-haladas">
        <h2>Haladásom</h2>
        <h3 id="skilldate"></h3>
        <h3 id="actualtime"></h3>
        <p id="skilldateinterval">Itt lesz az adatom</p>
        <div id="skill-grid"></div>
      </div>
      <div class="aside-technikak">
        <h2>Felhasznált technikák</h2>
        <p>Ezen az oldalon HTML5, CSS3 és alap Js technológiát használtam. Az oldal elrendezésnél a CSS3 grid layout
          technológiáját használtam,
          mind a fő, mind a belső elemek elrendezésénél. Az oldal jelenleg a 800 és az 1200 pixelnél kisebb felbontásra
          van optimalizálva, nemsokára azonban kész lesz az 1200 pixelnél nagyobbra is. Az oldalon már alkalmazom a
          külső Js metódusokat, osztályokat és a HTML DOM elemek elérését.</p>
      </div>
    </div>
    <div class="footer">
      <p>Az oldalt készítette: Lucski Zsolt</p>
    </div>
  </div>
  <script>adatbetoltesLakohely()</script>
</body>

</html>