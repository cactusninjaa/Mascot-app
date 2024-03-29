<?php
    require_once "connec.php";

    //requête pour obtenir tous les liens des assets des mascottes envoyés dans la bdd
    //Corps couleurs différentes
    $requete = $database->prepare("SELECT * FROM `corps` WHERE color='red';");
    $requete->execute();
    $AllCorpsRed = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete = $database->prepare("SELECT * FROM `corps` WHERE color='blue';");
    $requete->execute();
    $AllCorpsBlue = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete = $database->prepare("SELECT * FROM `corps` WHERE color='black';");
    $requete->execute();
    $AllCorpsBlack = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete = $database->prepare("SELECT * FROM `corps` WHERE color='green';");
    $requete->execute();
    $AllCorpsGreen = $requete->fetchAll(PDO::FETCH_ASSOC);
    $requete = $database->prepare("SELECT * FROM `corps` WHERE color='yellow';");
    $requete->execute();
    $AllCorpsYellow = $requete->fetchAll(PDO::FETCH_ASSOC);

    //Visage
    $requete = $database->prepare("SELECT * FROM visage ");
    $requete->execute();
    $AllVisage = $requete->fetchAll(PDO::FETCH_ASSOC);

    //Accessoires / Sport
    $requete = $database->prepare("SELECT * FROM sport ");
    $requete->execute();
    $AllSport = $requete->fetchAll(PDO::FETCH_ASSOC);

    //Chapeaux
    $requete = $database->prepare("SELECT * FROM hat ");
    $requete->execute();
    $AllHat = $requete->fetchAll(PDO::FETCH_ASSOC);

    //Background
    $requete = $database->prepare("SELECT * FROM background ");
    $requete->execute();
    $AllBackground = $requete->fetchAll(PDO::FETCH_ASSOC);

    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mascotte</title>
    <link rel="stylesheet" href="css/mascotte.css" />
  </head>
  <body>
    <!-- formulaire pour envoyer les liens des assets de la mascotte en get pour pouvoir récupérer l'id dans le lien -->
    <form action="insert-mascotte.php" method="get">
    <div class="content">
      <div class="left">
        <a href="index.html">
          <img src="images/logo.png"  class="logo"/>
        </a>

        <!-- mascotte -->
        <div class="mascotte-body">
          <img id="body-mascotte" class="choice descend" src="images/Formes/Formes1.png" >
          <img id="eyes-mascotte" class="choice descend" src="images/Emotions/Emotions1.png" >
          <img id="hat-mascotte" class="choice descend" src="" >
          <img id="accessories-mascotte" class="choice descend" src="" >
          <img id="background-mascotte" class="choice" src="images/Background/Background7.png" >
        </div>
      </div>

      <!-- Les icons pour choisir les assets de la mascotte -->
      <div class="right">
        <div class="icons">
          <div class="round " id="colors" style="background-color:#EC7373">
            <img
              src="images/icons/forme.png"
              class="icon color"
            />
          </div>
          <div class="round eyeIcon" id="eyes">
            <img src="images/icons/expression.png"  class="icon eye opacity" />
          </div>
          <div class="round " id="hats">
            <img src="images/icons/hat.png"  class="icon hat opacity" />
          </div>
          <div class="round " id="sports">
            <img
              src="images/icons/accessoire.png"
              class="icon sport opacity"
            />
          </div>
          <div class="round " id="pictures">
            <img
              src="images/icons/background.png"
              class="icon picture opacity"
            />
          </div>
          <div class="round" id="share">
            <img
              src="images/icons/end.png"
              class="icon share opacity"
            />
          </div>
        </div>

        <!-- choisir les assets pour mobile -->
        <div class="choices">
          <div class="mobileIcon mobileIconBlue">
            <p id="mobileForme" class="opacity mobile">Forme</p>
            <p id="mobileEmotion" class="opacity mobile" >Emotion </p>
            <p id="mobileAccessoire" class="opacity mobile">Accessoire </p>
            <p id="mobileSport" class="opacity mobile">Sport </p>
            <p id="mobileFond" class="opacity mobile" >Fond</p>
            <p id="mobilePartager" class="opacity mobile">Partager</p>
          </div>

          <!-- choix couleurs body -->
          <div class="colors">
            <div class="divRounds">
              <div class="roundColors rouge" id="red"></div>
              <div class="roundColors orange" id="yellow"></div>
              <div class="roundColors vert" id="green"></div>
              <div class="roundColors bleu" id="blue"></div>
              <div class="roundColors noir" id="black"></div>
            </div>
      
            <!-- choix des assets -->
            <?php foreach ($AllCorpsRed as $corps): ?>
            <div class="box" id="box-red">
              <label class="labelexpanded">
                  <div><img src="images/Formes/<?= $corps['lien'] ?>"  class="forme-js"></div>
                  <!-- input radio pour pouvoir récupérer le lien du corps choisi et qu'il puisse choisir qu'un seul asset par catégorie -->
                  <input class="input-btn" type="radio" value="<?= $corps['lien'] ?>" name="corps">
              </label>
            </div>
            <?php endforeach ?>
            <?php foreach ($AllCorpsYellow as $corps): ?>
            <div class="box hidden" id="box-yellow">
              <label class="labelexpanded">
                  <div><img src="images/Formes/<?= $corps['lien'] ?>"  class="forme-js"></div>
                  <input class="input-btn" type="radio" value="<?= $corps['lien'] ?>" name="corps">
              </label>
            </div>
            <?php endforeach ?>
            <?php foreach ($AllCorpsGreen as $corps): ?>
            <div class="box hidden" id="box-green">
              <label class="labelexpanded">
                  <div><img src="images/Formes/<?= $corps['lien'] ?>"  class="forme-js"></div>
                  <input class="input-btn" type="radio" value="<?= $corps['lien'] ?>" name="corps">
              </label>
            </div>
            <?php endforeach ?>
            <?php foreach ($AllCorpsBlue as $corps): ?>
            <div class="box hidden" id="box-blue">
              <label class="labelexpanded">
                  <div><img src="images/Formes/<?= $corps['lien'] ?>"  class="forme-js"></div>
                  <input class="input-btn" type="radio" value="<?= $corps['lien'] ?>" name="corps">
              </label>
            </div>
            <?php endforeach ?>
            <?php foreach ($AllCorpsBlack as $corps): ?>
            <div class="box hidden" id="box-black">
              <label class="labelexpanded">
                  <div><img src="images/Formes/<?= $corps['lien'] ?>"  class="forme-js"></div>
                  <input class="input-btn" type="radio" value="<?= $corps['lien'] ?>" name="corps">
              </label>
            </div>
            <?php endforeach ?>
          </div>

          <div class="eyes hidden">
          <?php foreach ($AllVisage as $visage): ?>
              <div class="box">
                <label class="labelexpanded">
                    <img src="images/Emotions/<?= $visage['lien'] ?>"  class="emotions-js">
                    <input class="input-btn" type="radio" value="<?= $visage['lien'] ?>" name="visage">
                </label>
              </div>
          <?php endforeach ?>
          </div>

          <div class="hats hidden">
          <?php foreach ($AllHat as $hat): ?>
              <div class="box chapeau" id="box-height">
                <label class="labelexpanded">
                    <img src="images/Hat/<?= $hat['lien'] ?>"  class="accessoire-js">
                    <input class="input-btn" type="radio" value="<?= $hat['lien'] ?>" name="hat">
                </label>
              </div>
          <?php endforeach ?>
          </div>

          <div class="sports hidden">
            <?php foreach ($AllSport as $sport): ?>
              <div class="box accessoire" id="box-height">
                <label class="labelexpanded">
                    <img src="images/Accessoires/<?= $sport['lien'] ?>"  class="sport-js">
                    <input class="input-btn" type="radio" value="<?= $sport['lien'] ?>" name="sport">
                </label>
              </div>
            <?php endforeach ?>
          </div>

          <div class="pictures hidden">
          <?php foreach ($AllBackground as $background): ?>
              <div class="box bg">
                <label class="labelexpanded">
                    <img src="images/Background/<?= $background['lien'] ?>"  class="background-js">
                    <input class="input-btn" type="radio" value="<?= $background['lien'] ?>" name="background">
                </label>
              </div>
          <?php endforeach ?>
          </div>

          <!-- Aller à la page galerie -->
          <div class="shares hidden">
            <h2>Merci d'avoir participé !*</h2>
            <p>*J’accepte que ma mascotte soit publiée sur le site du musée</p>
            <button type="submit" name="submit" class="submit-btn" value="Confirm">Voir la galerie</button>
          </div>   
        </form>
        </div>
      </div>
    </div>
  </form>
    <script src="js/mobile.js"></script>
    <script src="js/js.js"></script>
    <script src="js/mascotte.js"></script>
  </body>
</html>
