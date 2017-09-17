<?php 
$path="../";
require_once('util.inc.php');
?>
<?php 
    $title="老狼的資科概";
    $active=array(6,63);
    require( 'header.inc.php' ); 
?>
    <!-- Header -->
    <header class="masthead" style="background: url('https://unsplash.it/1900/1080?image=668') no-repeat center center scroll">
    <div class="overlay">
      <div class="container">
        <h1 class="display-1 text-white">資訊科技概論</h1>
        <h2 class="display-4 text-white">C++程式設計</h2>
        <p class="text-white">迴圈</p>
      </div>
    </div>
  </header>
  <style>
    .probNum {
      width: 100px;
      height: 100px;      
      line-height: 100px;
      font-size: 70px;
      border-radius: 50%;
      background-color: #9CF;
      color: white;
      font-weight: bold;
      text-align: center;
    }
  </style>
<?php

  $contentPhp = array(
    (object)array(
      "desc" => "",
      "run" => array(
"", 
""
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(
      "desc" => "T.B.A.",
      "run" => array(
"", 
""
      ),
      "flow" => array(),
      "ans" => array()
    ),
  );

  for ($i=1; $i<count($contentPhp); $i++) {
    printProb($contentPhp[$i], $i);
  }


/*
  <!-- Main -->
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 order-1">
          <div class="p-5">
            <pre>
              normal <span style="color:red; font-family:inherit">red</span>
            </pre>
          </div>
        </div>
      </div>
    </div>
  </section>
*/
?>

    <?php require( 'footer.inc.php' ); ?>