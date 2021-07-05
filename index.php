<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Inception</title>
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1,
minimum-scale=1, user-scalable=no">
</head>

<body>

<!-- Styles Section -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css" type="text/css" />

<!-- StartBar Section -->
<div class="startbar">
  <div id="startbutton" class="startbutton-off">
    <b>Start</b>
  </div>
  <div class="time">
  </div>
</div>

<!-- Menu Section -->
<div id="menu">
  <div class="sidebar"></div>
  <div class="headline"><b>Windows</b> 98
  </div>

  <!-- Programs Section -->

  <ul class="menu-content">
    <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990247/directory_program_group_small_fqw8rr.ico">Programs
      <ul class="dropdown-content">

        <li class="dropdown-item launch2" data-launch2="420" data-title="User" data-icon="img/win95/msnp32_FOLDER_ICON.ico" data-url="mycomputer/mycomputer.php">User</li>

        <li class="dropdown-item" data-icon="https://res.cloudinary.com/penry/image/upload//w_65,h_65,c_lpad/v1474990266/msie2_ks3wek.png">Internet Explorer</li>    

        <li class="dropdown-item launch2" data-launch2="420" data-title="Notepad" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990270/notepad_file_kf9wqx.ico" data-url="assembler/index.html">Notepad</li>

        <li class="dropdown-item launch2" data-launch2="420" data-title="Paint" data-icon="https://win98icons.alexmeub.com/icons/png/paint_old-0.png" data-url="apps/paint/index.html">Paint</li>

        <li class="dropdown-item launch2" data-launch2="JSCalculator" data-title="JSCalculator" data-icon="img/calc.png" data-url="https://rafavsistemas.000webhostapp.com/">JSCalculator</li>       

      </ul>
    </li>

    <!-- Photos Section -->
    <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/w_65,h_65,c_lpad/v1474990246/directory_pictures_ualddt.png">Photos
      <ul class="dropdown-content">

        <li class="dropdown-item launch2" data-launch2="UploadAFile" data-title="UploadAFile" data-icon="img/upload.png" data-url="assembler/adicionar.php">Upload a File</li>

        <li class="dropdown-item launch2" data-launch2="screenshot1" data-title="screenshot1.jpg" data-icon="img/screenshots.png" data-url="mycomputer/relogiodeluxo.jpg">Screenshot1.jpg
        </li>
        
        <li class="dropdown-item launch2" data-launch2="screenshot2" data-title="screenshot2.jpg" data-icon="img/screenshots.png"  data-url="mycomputer/sol.gif">Screenshot2.jpg</li>
      </ul></li>

<!-- App Section -->
    
    <li class="item more" data-icon="https://win98icons.alexmeub.com/icons/png/package-1.png">Applications
    <ul class="dropdown-content">

        <li class="dropdown-item launch2" data-launch2="RafaelPortfolio" data-title="RafaelPortfolio" data-icon="img/portfolio.png" data-url="http://rafaelvilaruelsportfolio.000webhostapp.com/">RafaelPortfolio</li>

        <li class="dropdown-item launch2" data-launch2="CopernicusTheory" data-title="CopernicusTheory" data-icon="img/sun.png" data-url="apps/copernio/index.html">CopernicusTheory</li>

        <li class="dropdown-item launch2" data-launch2="420" data-title="MusicPlayer" data-icon="img/win95/mmsys_112.ico" data-url="apps/musicplayer/index.html">MusicPlayer</li>

        <li class="dropdown-item launch2" data-launch2="420" data-title="ControleDePedidos" data-icon="img/dollar.png" data-url="https://danibolsas.000webhostapp.com/">Controle de Pedidos</li>

        <li class="dropdown-item launch2" data-launch2="420" data-title="To-Do-List-JS" data-icon="img/todolist.png" data-url="https://todolistrafael.000webhostapp.com/">ToDoListJS</li>

      </ul>
    </li>

<!-- Game Section -->
    <li class="item more" data-icon="https://win98icons.alexmeub.com/icons/png/mshearts.png">Games

      <ul class="dropdown-content">
        <li class="dropdown-item launch2" data-launch2="SpaceInvaders" data-title="Space Invaders" data-icon="img/siicon.png" data-url="games/spaceship.html">Space Invaders</li>
        <li class="dropdown-item launch2" data-launch2="Pokemon" data-title="Pokemon" data-icon="img/pokebola.png" data-url="games/pokemon.html">Pokemon</li>        

        <li class="dropdown-item launch2" data-launch2="Jokenpo" data-title="Jokenpo" data-icon="img/scissors.png" data-url="https://sistemasrafaelv.000webhostapp.com/">Jokenpô</li>        
      
      </ul>
    </li>

    <!-- Office Section -->

    <li class="item more" data-icon="img/office2.png">Office

      <ul class="dropdown-content">
        <li class="dropdown-item launch2" data-launch2="Word" data-title="Word" data-icon="img/word.png" data-url="office/word/index.html">Word</li>

        <li class="dropdown-item launch2" data-launch2="Excel" data-title="Excel" data-icon="img/excel.png" data-url="office/excel/index.php">Excel</li>        

        <li class="dropdown-item launch2" data-launch2="AdobePDF" data-title="AdobePDF" data-icon="img/pdf2.png" data-url="https://rafavsistemas.000webhostapp.com/">AdobePDF</li>
      
      </ul>
    </li>

    
    <!-- Other Section -->
    <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/q_100/v1474990280/settings_gear_zxd7tf.ico">Settings</li>
    <!-- Other Section <li class="item launch2" data-launch2="420" data-title="User" data-icon="img/win95/msnp32_FOLDER_ICON.ico" data-url="mycomputer/mycomputer.php" ><div class="clickmenu">Folders</div></li>-->
    <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990254/help_book_small_ra0uhc.ico">Help</li>
    <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990231/application_hourglass_small_yyhy5z.ico">Run</li>
    <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990258/key_win_anpnfo.ico">Log off</li>
    <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990281/shut_down_normal_t24or4.ico">Shutdown</li>
  </ul>
</div>

<!-- Trivial Section -->

<div class="desktop" id="desktop">
 </div>

  <script src='./jquery.min.js'></script>
  <script src='./jquery-ui.min.js'></script>
  <script  src="./script.js"></script>

</body>
</html>
