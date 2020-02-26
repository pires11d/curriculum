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
            </div>
            <!-- Initial Slide -->
            <div id="stdSlide">
                <div class="numbertext">1 / 7</div>
                <img class="screens" src="img/ExtraOil.gif">
                <div id="caption" class="text">Interface para o simulador de extração de soja, desenvolvido na Tubanharon Process Engineering</div>
            </div>
            <!-- Other Slides -->
            <div class="mySlides">
                <div class="numbertext">1 / 7</div>
                <img class="screens" src="img/ExtraOil.gif">
                <div class="text">Interface para o simulador de extração de soja, desenvolvido na Tubanharon Process Engineering</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 7</div>
                <img class="screens" src="img/A2Rsheet.PNG">
                <div class="text">Interface principal da planilha de cálculos para uma Unidade de Regeneração de Ácidos (U.R.A)</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 7</div>
                <img class="screens" src="img/A2Rsheet1.PNG">
                <div class="text">Input de dados - Planilha desenvolvida na Tubanharon Process Engineering</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">4 / 7</div>
                <img class="screens" src="img/TEA.PNG">
                <div class="text">Planilha de Análise Técnico-Econômica para processos de Crushing</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">5 / 7</div>
                <img class="screens" src="img/PlantEconomics.PNG">
                <div class="text">Planilha genérica para cálculo de custos de equipamentos e viabilidade econômica de projetos</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 7</div>
                <img class="screens" src="img/PlantDesign.PNG">
                <div class="text">Planilha genérica para projetos de engenharia química</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">7 / 7</div>
                <img class="screens" src="img/OxyFree1.PNG">
                <div class="text">Saída gráfica - Simulador de Decapagem Ácida feito em Excel + Octave</div>
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