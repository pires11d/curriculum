<!-- <div id="google_translate_element"></div> -->

<!-- Translation Flags -->
<div class="languages">
    <ul>
        <li>
            <button id="en" class="btn-flag js-btn" type="button">
                <img src="icon/flags/en.png" alt="English">
            </button>
        </li>
        <li>
            <button id="pt" class="btn-flag js-btn" type="button">
                <img src="icon/flags/pt.png" alt="English">
            </button>
        </li>
    </ul>

</div>
<!-- NavBar -->
<header id="navcont" class="container">
    <nav id="navbar" class="navbar navbar-expand-lg">
        <a class="navbar-brand" role="button" href="index.php">Lucas Joshua Pires</a>
        <div id="btncont">
            <ul>
                <li id="menu1" class="nli"><a class="btn" role="button" href="about.php">Geral</a></li>
                <li id="menu2" class="nli"><a class="btn" role="button" href="grad.php">Formação</a></li>
                <li id="menu3" class="nli"><a class="btn" role="button" href="docs.php">Certificados</a></li>
                <li id="menu4" class="nli"><a class="btn dropbtn" role="button">+ Projetos</a></li>
                <div class="dropdown">
                    <div class="dropdown-content">
                        <a id="menu4_1" href="projects1.php">Acadêmicos</a>
                        <a id="menu4_2" href="projects2.php">Comerciais</a>
                        <a id="menu4_3" href="projects3.php">Comunitários</a>
                    </div>
                </div>
                <li id="menu5" class="nli"><a class="btn" role="button" href="contact.php">Contato</a></li>
            </ul>
        </div>
    </nav>
</header>
<script src="js/jquery.js"></script>
<script src="js/translator-manual.js"></script>
<script src="js/translator-google.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>