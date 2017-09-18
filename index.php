<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EduCrate - Lär dig skapa vad som helst</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="css/foundation.min.css"/>
</head>
<body>
<header>
    <div class="row small-8 columns float-center show-for-small-only">
        <img src="assets/img/logo-black@2x.png" alt="EduCrate Logga" class="logo">
    </div>
    <div class="row medium-11 align-justify hide-for-small-only">
        <div class="medium-3 columns">
            <img src="assets/img/logo-black@4x.png" alt="EduCrate Logga" class="logo">
        </div>
        <nav class="shrink columns align-self-middle">
            <ul class="menu" id="menu">
                <li><a onclick="mySwipe.slide(0, 400)" id="link1">Hem</a></li>
                <li><a onclick="mySwipe.slide(1, 400)" id="link2">EduCrate</a></li>
                <li><a onclick="mySwipe.slide(2, 400)" id="link3">Om oss</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <div class="swipe" id="slider">
        <div class="swipe-wrap">
            <div class="page" id="home">
                <div class="show-for-small hide-for-medium show-for-portrait">
                    <div id="mobileheading">
                        <h1 id="line1">LÄR DIG</h1>
                        <h1 id="line2">SKAPA VAD SOM</h1>
                        <h1 id="line3">HELST</h1>
                    </div>
                    <div class="row small-10 align-spaced medium-unstack" id="mobilecards">
                        <div class="card medium-5 columns">
                            <a onclick="mySwipe.slide(2, 400)">
                                <div class="card-divider">
                                    <h1>Vilka är vi?</h1>
                                </div>
                                <img src="assets/img/educrate05-compressor.jpg">
                                <div class="card-section">
                                    <p>Vi är två elever från Bodens teknikprogram som tack vare UngDrive
                                        initiativet har fått möjlighet att starta EduCrate. Till höger är Mikael
                                        Eriksson och till vänster är Karl Olsson-Lalor.</p>
                                    <p class="highlighttext"><b>Klicka här för att läsa mer om oss!</b></p>
                                </div>
                            </a>
                        </div>
                        <div class="card medium-5 columns">
                            <a onclick="mySwipe.slide(1, 400)">
                                <div class="card-divider">
                                    <h1>Vad gör vi?</h1>
                                </div>
                                <img src="assets/img/Arduino-Temp0001.png">
                                <div class="card-section">
                                    <p>Har du någonsin funderat över hur fjärrkontrollen till din TV fungerar? Eller
                                        hur man gör sin egen datormus? Teknik finns överallt i våra liv, men inte
                                        många vet hur den fungerar.</p>
                                    <p class="highlighttext"><b>Det vill vi ändra på!</b></p><p>Vi har tagit fram EduCrate
                                        lådan för att vem som helst ska kunna lära sig att skapa vad som helst.</p>
                                    <p class="highlighttext"><b>Klicka här för att läsa mer om EduCrate!</b></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="show-for-medium hide-for-small hide-for-portrait row align-center medium-12 desktopcards">
                    <div class="card medium-3 columns">
                        <a onclick="mySwipe.slide(2, 400)">
                            <div class="card-divider">
                                <h1>Vilka är vi?</h1>
                            </div>
                            <img src="assets/img/educrate05-compressor.jpg">
                            <div class="card-section">
                                <p>Vi är två elever från Bodens teknikprogram som tack vare UngDrive
                                    initiativet har fått möjlighet att starta EduCrate. Till höger är Mikael Eriksson
                                    och till vänster är Karl Olsson-Lalor.</p>
                                <p class="highlighttext"><b>Klicka här för att läsa mer om oss!</b></p>
                            </div>
                        </a>
                    </div>
                    <div class="medium-4 columns show-for-medium" id="desktopheading">
                        <h1 id="line1">LÄR DIG</h1>
                        <h1 id="line2">SKAPA VAD SOM</h1>
                        <h1 id="line3">HELST</h1>
                    </div>
                    <div class="card medium-3 columns">
                        <a onclick="mySwipe.slide(1, 400)">
                            <div class="card-divider">
                                <h1>Vad gör vi?</h1>
                            </div>
                            <img src="assets/img/Arduino-Temp0001.png">
                            <div class="card-section">
                                <p>Har du någonsin funderat över hur fjärrkontrollen till din TV fungerar? Eller hur
                                    man gör sin egen datormus? Teknik finns överallt i våra liv, men inte många vet
                                    hur den fungerar. </p>
                                <p class="highlighttext"><b>Det vill vi ändra på!</b></p><p>Vi har tagit fram EduCrate
                                    lådan för att vem som helst ska kunna lära sig att skapa vad som helst.</p>
                                <p class="highlighttext"><b>Klicka här för att läsa mer om EduCrate!</b></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="page row small-12 align-spaced" id="products">
                <div class="card small-10 medium-5 large-3 columns desktopcards">
                    <div class="card-divider">
                        <h1>Tydligt och enkelt!</h1>
                    </div>
                    <img src="assets/img/manual.png" class="cardicon">
                    <div class="card-section">
                        <p>EduCrate lådan är från grunden skapad med idéen om att precis vem som helst ska kunna öppna
                            locket och börja bygga på en gång utan några som helst förkunskaper.
                            Därför har vi jobbat hårt med att göra instruktioner som inte bara tydligt och enkelt
                            förklara steg för steg vad man ska göra, men också hur och varför allting fungerar.</p>
                    </div>
                </div>
                <div class="card small-10 medium-5 large-3 columns desktopcards">
                    <div class="card-divider">
                        <h1>Riktiga kunskaper!</h1>
                    </div>
                    <img src="assets/img/machine.png" class="cardicon">
                    <div class="card-section">
                        <p>Det du får ut av EduCrate lådan är inte bara en rolig upplevelse. Du lär dig riktiga
                            kunskaper som kan användas i andra sammanhang också. Allting i EduCrate lådan är baserat
                            på och utformat efter den elektronik som finns runt omkring oss. En av de många projekten
                            i lådan är tillexempel att bygga sin egna TV fjärrkontroll.</p>
                    </div>
                </div>
                <div class="card small-10 medium-10 large-3 columns desktopcards">
                    <div class="card-divider">
                        <h1>Kommer snart!</h1>
                    </div>
                    <img src="assets/img/email.png" class="cardicon">
                    <div class="card-section">
                        <p>Vi håller just nu på att utveckla EduCrate lådan och hoppas att den kommer att vara klar
                            inom kort! Under tiden kan ni anmäla intresse genom att skriva in er email adress här:</p>
                        <form class="input-group">
                            <input placeholder="Mail adress" class="input-group-field" type="email" id="emailinput" name="email">
                            <div class="input-group-button">
                                <input type="button" class="button" onclick="get_mail();" value="Skicka">
                            </div>
                        </form>
                        <div class="callout small alert" id="mailfail">
                            <p>Ogiltig email adress. Försök igen.</p>
                        </div>
                        <div class="callout small success" id="mailsuccess">
                            <p>Du kommer nu få mail när lådan släpps!</p>
                        </div>
                        <p>Vi kommer att kontakta er när lådan blir tillgänglig. Till en början kommer det endast
                            finnas ett begränsat antal lådor som i första hand kommer att säljas till de som anmält
                            intresse.</p>
                    </div>
                </div>
            </div>
            <div class="page row small-12 align-spaced" id="about">
                <div class="card small-10 medium-5 columns desktopcards">
                    <div class="card-divider">
                        <h1>Mikael Eriksson</h1>
                    </div>
                    <div class="row stack-for-small align-center medium-unstack">
                        <div class="small-11 columns">
                            <img src="assets/img/mikael-compressor.jpg" align="left" hspace="8" class="profileimg">
                            <p>
                                Tjena! Mitt namn är Mikael Eriksson. Nästan hela mitt liv har jag varit intresserad av
                                teknik, datorer och programmering. Med åren har jag fått mycket erfarenhet och
                                kunskaper av att göra egna hemsidor och programmeringsprojekt, det är bland det
                                roligaste jag vet. Därför vill jag att fler ska kunna prova på att själva bygga med
                                elektronik och att programmera. Det var från det som jag fick idéen att göra EduCrate
                                lådan.<br><br>Tyvärr är jag näst intill rikskass när det kommer till att göra illustrationer,
                                bilder och dylikt. Därför frågade jag min gode vän Karl om han ville hjälpa till med
                                att starta detta företag. Efter mycket planering, förberedelser och finslipning av
                                detaljer står vi nu här idag, snart redo att lansera EduCrate lådan som vi har jobbat
                                hårt med.
                                <br><br>
                                Jag kan nås på mikael.eriksson@educrate.win
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card small-10 medium-5 columns desktopcards">
                    <div class="card-divider">
                        <h1>Karl Olsson-Lalor</h1>
                    </div>
                    <div class="row stack-for-small align-center medium-unstack">
                        <div class="small-11 columns">
                            <img src="assets/img/karl-compressor.jpg" align="left" hspace="8" class="profileimg">
                            <p>
                                Jag heter Karl Olsson-Lalor och enda sedan jag varit liten så har jag drömt om att
                                bli rik. Planen var att gå teknik läsa någon fysikkurs och lösa något svårt problem som
                                till exempel millenieproblemen eller något liknande. När jag senare började på teknikprogrammet
                                i Boden och läste lite matematik, fysik och andra ämnen insåg jag att dessa problem
                                var olösta av en anledning.<br><br>Jag kände att jag antingen skulle behöva ägna hela livet åt
                                problemen eller bara göra något helt annat. Detta ledde till att jag helt bytte plan
                                till att satsa riktigt ordentligt på de UF företag vi skulle starta nästa år och i
                                samband med detta kom Mikael till mig med en bra idé om vad vi skulle kunna göra.
                                Jag hoppade på tåget när han även föreslog att starta företaget under sommaren med
                                UngDrive för att få ett litet startkapital. Nu leder vi båda detta företag tillsammans
                                och hoppas att vi ska vara det du behöver för att lära dig skapa vad som helst från
                                ingenting.
                                <br><br>
                                Jag kan nås på karl.olsson-lalor@educrate.win
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="row show-for-small-only" id="pages-nav">
            <button class="small-4 columns" onclick="mySwipe.slide(0, 400)" id="button1">Hem</button>
            <button class="small-4 columns" onclick="mySwipe.slide(1, 400)" id="button2">EduCrate</button>
            <button class="small-4 columns" onclick="mySwipe.slide(2, 400)" id="button3">Om oss</button>
        </nav>
    </div>
</main>
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/swipe.min.js"></script>
<script src="js/app.js"></script>
<script type="application/ld+json">
{
  "@type": "ItemList",
  "url": "https://educrate.win",
  "numberOfItems": "1",
  "itemListElement": [{
      "@type": "Product",
      "image": "https://educrate.win/assets/img/Arduino-Temp0001.png",
      "url": "https://educrate.win",
      "name": "EduCrate"
    }]
}
</script>
</body>
</html>