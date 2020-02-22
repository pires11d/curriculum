<!DOCTYPE html>
<html>

<head>
    <title>Curriculum Vitae</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="icon/equinoxe_64.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styler.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 640px)">
</head>

<body>
    <!-- Header -->
    <?php include("header.php"); ?>
    <div class="container">
        <!-- Next and previous buttons -->
        <a class="prev" onclick="changeSlides(-1)">&#10094;</a>
        <a class="next" onclick="changeSlides(1)">&#10095;</a>
        <br>
        <div class="slideshow-container">
            <!-- The dots/circles -->
            <div id="navcont" class="container" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
            </div>
            <!-- Initial Slide -->
            <div id="stdSlide">
                <div class="numbertext">1 / 8</div>
                <img class="screens" src="img/ExtraOil.gif">
                <div id="caption" class="text">Interface para o programa desenvolvido na Tubanharon Process Engineering</div>
            </div>
            <!-- Other Slides -->
            <div class="mySlides">
                <div class="numbertext">1 / 8</div>
                <img class="screens" src="img/ExtraOil.gif">
                <div class="text">Interface para o programa desenvolvido na Tubanharon Process Engineering</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 8</div>
                <img class="screens" src="img/A2Rsheet.PNG">
                <div class="text">Interface principal - Planilha desenvolvida na Tubanharon Process Engineering</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 8</div>
                <img class="screens" src="img/A2Rsheet1.PNG">
                <div class="text">Input de dados - Planilha desenvolvida na Tubanharon Process Engineering</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">4 / 8</div>
                <img class="screens" src="img/TEA.PNG">
                <div class="text">Análise Técnico Econômica para processos de Crushing</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">5 / 8</div>
                <img class="screens" src="img/PlantEconomics.PNG">
                <div class="text">"PlantEconomics" - Planilha genérica para cálculo de custos de equipamentos e viabilidade econômica de projetos</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 8</div>
                <img class="screens" src="img/PlantDesign.PNG">
                <div class="text">"PlantDesign" - Planilha genérica para projetos de engenharia química</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">7 / 8</div>
                <img class="screens" src="img/OxyFree.PNG">
                <div class="text">Interface principal - Simulador de Decapagem Ácida em Excel</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">8 / 8</div>
                <img class="screens" src="img/OxyFree1.PNG">
                <div class="text">Saída gráfica - Simulador de Decapagem Ácida em Excel</div>
            </div>
        </div>
    </div>
    <p></p>
    <?php include("footer.php"); ?>
</body>
<script src="js/jquery.js"></script>
<script src="js/scripts.js"></script>
<script src="js/gallery.js"></script>
</html>