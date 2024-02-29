<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Thistleskull</title>
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../bouton.css">
    <link rel="stylesheet" href="../tattoopresentation.css">
</head>

<body>
        

        <!-- pour intégration nav bar a prévoir en php -->$_COOKIE
    <!--navbar-->

<nav>
        <!-- légende: /.mot./ egal lien non défini -->
          <div class="wrapper">
            <div class="logo"><img src="img/dos_Mini.png" alt=""></a></div>
            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links">
              <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
              <li><a href="index.php">Home</a></li>
              <li>
                <a href="#" class="desktop-item">Shop</a>
                <input type="checkbox" id="showDrop">
                <label for="showDrop" class="mobile-item">Dropdown Menu</label>
                <ul class="drop-menu">
                  <li><a href="#">Vetements</a></li>  
                  <li><a href="#">Illustration</a></li>
                  <li><a href="#">gravure sur bois</a></li>
                  <li><a href="#">...</a></li>
                </ul>
              <li>
                <a href="#" class="desktop-item">Contact</a>
                <input type="checkbox" id="showDrop">
                <label for="showDrop" class="mobile-item">Dropdown Menu</label>
                <ul class="drop-menu">
                  <li><a href="submitproject.php">Proposez votre projet</a></li>  
                  <li><a href="#">...</a></li>
                  <li><a href="#">...</a></li>
                  <li><a href="#">...</a></li>
                </ul>
              </li>
              <li>
                <a href="index.php#photos" class="desktop-item">photo</a>
                <input type="checkbox" id="showMega">
                <label for="showMega" class="mobile-item">...</label>
                <div class="mega-box">
                  <div class="content">
                    <div class="row">
                      <img src="img/goldsansfond2.png" alt="">
                    </div>
                    <div class="row">
                      <header>...</header>
                      <ul class="mega-links">
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                      </ul>
                    </div>
                    <div class="row">
                      <header>...</header>
                      <ul class="mega-links">
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                      </ul>
                    </div>
                    <div class="row">
                      <header>...</header>
                      <ul class="mega-links">
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="#">News</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            <div href="#" class="titre">David Chardon</div>
          </div>
    </nav>

    <div class="flash-box">
        <img src="../img/Flashs/Skull Chardon.jpg" alt="DiestelSkull"/>
    </div>

        <div class="container-infobox">
            <div class="info-box">
                <h2>Thistel Skull</h2>
                <br>
                <p><strong>Taille Min:</strong> 15cm</p>
                <p><strong>Taille Max :</strong> 30cm</p>
                <br><br>
                
                <p><strong>Lore :</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quasi eligendi expedita molestias ipsa officia sed excepturi id eius voluptatibus sequi fugit similique perferendis eveniet, et cumque veniam blanditiis quis!</p>
                <br><br>
                
                <p><strong>Prix :</strong></p>
                <br><br>
                <p>A venir: slide variation pri en fonction de la taille</p>
                <div class="slidecontainer">
                    <input type="range" min="15" max="30" value="22" class="slider" id="myRange">
                    <p>Largeur : <span id="demopop"></span>cm</p>
                    <p>Hauteur : <span id="hauteur" value="10"></span> cm</p>
                    <p>Prix : <span id="prix"></span> €</p>
                    
                    
                </div>
                <p>Note: prvoir une section "Déja pris par X....."</P>
            </div>
        </div>



<!-- prevoir php pour footer -->

<footer style="text-align: right;">
  <a href="index.php#flashs">
    <button class='glowing-btn'>
      <span class='glowing-txt'>
        F<span class='faulty-letter'></span>la<span class='faulty-letter'>shs</span>
      </span>
    </button>
  </a>
</footer>

    <script src="../slider.js"></script>
</body>
</html>
