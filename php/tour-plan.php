<?php 
$path="";
require_once('util.inc.php');
?>
<?php 
    $title="老狼的資科概";
    $active=5;
    require( 'header.inc.php' ); 
?>
    <!-- Header -->
    <header class="masthead" style="background: url('https://unsplash.it/1900/1080?image=668') no-repeat center center scroll">
    <div class="overlay">
      <div class="container">
        <h1 class="display-1 text-white">資訊科技概論</h1>
        <h2 class="display-4 text-white">旅遊計畫書</h2>
      </div>
    </div>
  </header>

  <!-- Main -->
  <?php p("心智圖", "mindmap.png"); ?>
            <p>一個旅遊計畫書應該要有哪些內容？<br>
               如果你要辦班遊，要說服班上同學們都參加，你要先寫出哪些東西？</p>
            <p>先列出大綱構想，再陸續補足每個大分類中的小細節</p>
            <p>常用工具有<a href="http://www.xmind.net/">XMind</a>和<a href="http://freemind.sourceforge.net/">FreeMind</a></p>
            <p>但是我們課堂上要教的是<a href="https://coggle.it/">coggle</a><br>
               雲端協作 - 網頁介面免安裝、自動存檔、多人同時編輯</p>
  <?php pp(); ?>

  <?php p("雲端硬碟", "http://is2.mzstatic.com/image/thumb/Purple128/v4/44/2c/b7/442cb71f-91cc-6123-685d-9efde18fb7b7/source/1200x630bb.jpg"); ?>
        <p><a href="http://drive.google.com">http://drive.google.com</a></p>
        <p>google 教育版帳號 - 容量無上限！</p>
        <p>檔案共用 - 是擁有者 / 可以編輯 / 可以註解 / 可以檢視<br>
           資料夾共用 - 是擁有者 / 可以整理、新增、編輯 / 僅供檢視</p>
        <p>共享連結 - 關閉 / 網域中的使用者 / 無需登入</p>
        <p>從「與我共用」新增至「我的雲端硬碟」</p>
        <p>可設定共用到期日</p>
        <p>本機檔案「備份與同步處理」、手機版「google雲端硬碟」</p>
  <?php pp(); ?>

<style>
  .img-list {
    max-width: 48%;
    height: auto;
  }
</style>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 order-1">
          <div class="p-4">
            <img class="img-list" src="https://lh4.ggpht.com/-wROmWQVYTcjs3G6H0lYkBK2nPGYsY75Ik2IXTmOO2Oo0SMgbDtnF0eqz-BRR1hRQg=w300" alt="">
            <img class="img-list" src="https://lh3.ggpht.com/e3oZddUHSC6EcnxC80rl_6HbY94sM63dn6KrEXJ-C4GIUN-t1XM0uYA_WUwyhbIHmVMH=w300" alt="">
            <img class="img-list" src="https://lh3.ggpht.com/9rwhkrvgiLhXVBeKtScn1jlenYk-4k3Wyqt1PsbUr9jhGew0Gt1w9xbwO4oePPd5yOM=w300" alt="">
            <img class="img-list" src="http://www.ryerson.ca/content/dam/google/teach-with-google-apps/quizzes-surveys/create-google-form/google-form" alt="">
            <img class="img-list" src="https://www.mobilworx.com/img/icerikGorselleri/32647272ec6cf0de7945f0445279ca1e.jpg" alt="">
          </div>
        </div>
        <div class="col-md-9 order-2">
          <div class="p-5">
            <h2 class="display-4">google文件</h2>
            <h2 class="display-4">google試算表</h2>
            <h2 class="display-4">google簡報</h2>
            <h2 class="display-4">google表單</h2>
            <h2 class="display-4">google地圖</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php p("圖片編輯", "http://images.sftcdn.net/images/t_optimized,f_auto/p/f00e28a8-96d9-11e6-b450-00163ed833e7/2933457091/autodesk-pixlr-for-windows-10-logo.png"); ?>
        <p>pixlr - 線上影像編輯程式</p>
        <p><a href="https://pixlr.com/">https://pixlr.com/</a></p>
  <?php pp(); ?>
<?php require( 'footer.inc.php' ); ?>