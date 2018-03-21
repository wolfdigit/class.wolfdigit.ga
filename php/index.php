<?php 
$path="";
require_once('util.inc.php');
?>
<?php 
    $title="老狼的資科概";
    $active=1;
    require( 'header.inc.php' ); 
?>
    <!-- Header -->
    <header class="masthead" style="background: url('https://unsplash.it/1900/1080?image=668') no-repeat center center scroll">
    <div class="overlay">
      <div class="container">
        <h1 class="display-1 text-white">資訊科技概論</h1>
        <h2 class="display-4 text-white">106學年度‧下學期</h2>
        <p class="text-white"><del>立志成為最潮的課程網站(?)</del></p>
      </div>
    </div>
  </header>

  <!-- main -->
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Video-film.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 order-1">
          <div class="p-5">
            <h2 class="display-4">短片製作</h2>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-1">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="https://unsplash.it/500/500?image=403" alt="">
          </div>
        </div>
        <div class="col-md-6 order-2">
          <div class="p-5">
            <h2 class="display-4">中文打字練習</h2>
            <p>打字測驗程式 - <a href="https://drive.google.com/open?id=0B65DH-sSwkNARVJjbHVZSlZxc00">WinWTS</a></p>
            <p>f(n) = 1.6*n + 36 ， 測5次取較高分的3次平均</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php require( 'footer.inc.php' ); ?>