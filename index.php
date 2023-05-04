<!DOCTYPE html>
<html>
<head>
<title>Shiny Dex</title>
<link rel="stylesheet" href="./css/shinydex.css" />
<link rel="icon" href="./icones/image_web/shiny.png" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php 
  // include "./inc/init.php";
  include "./inc/init2.php";
  
  $pdo = Database::connect();
  $sql1 = 'SELECT * FROM 1G';
  $sql2 = 'SELECT * FROM 2G';
  $sql3 = 'SELECT * FROM 3G';
  $sql4 = 'SELECT * FROM 4G';
  $sql5 = 'SELECT * FROM 5G';
  $sql6 = 'SELECT * FROM 6G';
  $sql7 = 'SELECT * FROM 7G';
  $sql8 = 'SELECT * FROM 8G';
  $sql9 = 'SELECT * FROM 9G';

  $stmt1 = $pdo->query($sql1);
  $stmt2 = $pdo->query($sql2);
  $stmt3 = $pdo->query($sql3);
  $stmt4 = $pdo->query($sql4);
  $stmt5 = $pdo->query($sql5);
  $stmt6 = $pdo->query($sql6);
  $stmt7 = $pdo->query($sql7);
  $stmt8 = $pdo->query($sql8);
  $stmt9 = $pdo->query($sql9);


  if($stmt1 === false){
    die("Erreur");
  }
  if($stmt2 === false){
    die("Erreur");
  }
  if($stmt3 === false){
    die("Erreur");
  }
  if($stmt4 === false){
    die("Erreur");
  }
  if($stmt5 === false){
    die("Erreur");
  }
  if($stmt6 === false){
    die("Erreur");
  }
  if($stmt7 === false){
    die("Erreur");
  }
  if($stmt8 === false){
    die("Erreur");
  }
  if($stmt9 === false){
    die("Erreur");
  }



?>

<body>
<div class="row justify-content-center m-0 shinydex">
  <div class="bloc col-xs-12 col-md-10 col-lg-8 col-xxxl-7">
    <h1 class="titre">Shiny Dex</h1>

<ul class="nav nav-tabs justify-content-center mb-3" id="shinydex-tabs" role="tablist">
  <li class="nav-item">1G</li>
  <li class="nav-item">2G</li>
  <li class="nav-item">3G</li>
  <li class="nav-item">4G</li>
  <li class="nav-item">5G</li>
  <li class="nav-item">6G</li>
  <li class="nav-item">7G</li>
  <li class="nav-item">8G</li>
  <li class="nav-item">9G</li>
</ul>
    <div class="tab-content">

      <div class="tab-pane fade active show" id="shinydex-1G" role="tabpanel" aria-labelledby="1G-tab">
        <div class="row row-pokemon m-0">
          <?php while ($row = $stmt1->fetch()):?>

          <div class="p-0 col-4 col-sm-3 col-md-2 col-xxl-1 d-flex justify-content-center align-items-center">
            <div class="pkm w-100">
              <div class="dex_number">#<?php echo  $row['numdex'] ?></div>
                <div>
                  <?php echo '<img src="icones/1G/'.$row['nomA'].'.png" alt="'.$row['nomF'].' " style="filter: contrast(0%)"/>';?>
                </div> 
              </div>  
            </div> 
          <?php endwhile;?>
        </div>
      </div>

     <div class="tab-pane fade" id="shinydex-2G" role="tabpanel" aria-labelledby="2G-tab">
        <div class="row row-pokemon m-0">
          <?php while ($row = $stmt2->fetch()):?>

          <div class="p-0 col-4 col-sm-3 col-md-2 col-xxl-1 d-flex justify-content-center align-items-center">
            <div class="pkm w-100">
              <div class="dex_number">#<?php echo  $row['numdex'] ?></div>
                <div>
                  <?php echo '<img src="icones/2G/'.$row['nomA'].'.png" alt="'.$row['nomF'].' " style="filter: contrast(0%)"/>';?>
                </div> 
              </div>  
            </div> 
          <?php endwhile;?>
        </div>
      </div>
      
      <div class="tab-pane fade" id="shinydex-3G" role="tabpanel" aria-labelledby="3G-tab">
        <div class="row row-pokemon m-0">
          <?php while ($row = $stmt3->fetch()):?>

          <div class="p-0 col-4 col-sm-3 col-md-2 col-xxl-1 d-flex justify-content-center align-items-center">
            <div class="pkm w-100">
              <div class="dex_number">#<?php echo  $row['numdex'] ?></div>
                <div>
                  <?php echo '<img src="icones/3G/'.$row['nomA'].'.png" alt="'.$row['nomF'].' " style="filter: contrast(0%)"/>';?>
                </div> 
              </div>  
            </div> 
          <?php endwhile;?>
        </div>
      </div>

      <div class="tab-pane fade" id="shinydex-4G" role="tabpanel" aria-labelledby="4G-tab">
        <div class="row row-pokemon m-0">
          <?php while ($row = $stmt4->fetch()):?>

          <div class="p-0 col-4 col-sm-3 col-md-2 col-xxl-1 d-flex justify-content-center align-items-center">
            <div class="pkm w-100">
              <div class="dex_number">#<?php echo  $row['numdex'] ?></div>
                <div>
                  <?php echo '<img src="icones/4G/'.$row['nomA'].'.png" alt="'.$row['nomF'].' " style="filter: contrast(0%)"/>';?>
                </div> 
              </div>  
            </div> 
          <?php endwhile;?>
        </div>
      </div>

      <div class="tab-pane fade" id="shinydex-5G" role="tabpanel" aria-labelledby="5G-tab">
        <div class="row row-pokemon m-0">
          <?php while ($row = $stmt5->fetch()):?>

          <div class="p-0 col-4 col-sm-3 col-md-2 col-xxl-1 d-flex justify-content-center align-items-center">
            <div class="pkm w-100">
              <div class="dex_number">#<?php echo  $row['numdex'] ?></div>
                <div>
                  <?php echo '<img src="icones/5G/'.$row['nomA'].'.png" alt="'.$row['nomF'].' " style="filter: contrast(0%)"/>';?>
                </div> 
              </div>  
            </div> 
          <?php endwhile;?>
        </div>
      </div>

      <div class="tab-pane fade" id="shinydex-6G" role="tabpanel" aria-labelledby="6G-tab">
        <div class="row row-pokemon m-0">
          <?php while ($row = $stmt6->fetch()):?>

          <div class="p-0 col-4 col-sm-3 col-md-2 col-xxl-1 d-flex justify-content-center align-items-center">
            <div class="pkm w-100">
              <div class="dex_number">#<?php echo  $row['numdex'] ?></div>
                <div>
                  <?php echo '<img src="icones/6G/'.$row['nomA'].'.png" alt="'.$row['nomF'].' " style="filter: contrast(0%)"/>';?>
                </div> 
              </div>  
            </div> 
          <?php endwhile;?>
        </div>
      </div>

      <div class="tab-pane fade" id="shinydex-7G" role="tabpanel" aria-labelledby="7G-tab">
        <div class="row row-pokemon m-0">
          <?php while ($row = $stmt7->fetch()):?>

          <div class="p-0 col-4 col-sm-3 col-md-2 col-xxl-1 d-flex justify-content-center align-items-center">
            <div class="pkm w-100">
              <div class="dex_number">#<?php echo  $row['numdex'] ?></div>
                <div>
                  <?php echo '<img src="icones/7G/'.$row['nomA'].'.png" alt="'.$row['nomF'].' " style="filter: contrast(0%)"/>';?>
                </div> 
              </div>  
            </div> 
          <?php endwhile;?>
        </div>
      </div>

      <div class="tab-pane fade" id="shinydex-8G" role="tabpanel" aria-labelledby="8G-tab">
        <div class="row row-pokemon m-0">
          <?php while ($row = $stmt8->fetch()):?>

          <div class="p-0 col-4 col-sm-3 col-md-2 col-xxl-1 d-flex justify-content-center align-items-center">
            <div class="pkm w-100">
              <div class="dex_number">#<?php echo  $row['numdex'] ?></div>
                <div>
                  <?php echo '<img src="icones/8G/'.$row['nomA'].'.png" alt="'.$row['nomF'].' " style="filter: contrast(0%)"/>';?>
                </div> 
              </div>  
            </div> 
          <?php endwhile;?>
        </div>
      </div>

      <div class="tab-pane fade" id="shinydex-9G" role="tabpanel" aria-labelledby="9G-tab">
        <div class="row row-pokemon m-0">
          <?php while ($row = $stmt9->fetch()):?>

          <div class="p-0 col-4 col-sm-3 col-md-2 col-xxl-1 d-flex justify-content-center align-items-center">
            <div class="pkm w-100">
              <div class="dex_number">#<?php echo  $row['numdex'] ?></div>
                <div>
                  <?php echo '<img src="icones/9G/'.$row['nomA'].'.png" alt="'.$row['nomF'].' " style="filter: contrast(0%)"/>';?>
                </div> 
              </div>  
            </div> 
          <?php endwhile;?>
        </div>
      </div> 

    </div>
  </div>
</div>  
</body>
</html>