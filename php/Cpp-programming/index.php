<?php 
$path="../";
require_once('util.inc.php');
?>
<?php 
    $title="老狼的資科概";
    $active=2;
    require( 'header.inc.php' ); 
?>
    <!-- Header -->
    <header class="masthead" style="background: url('https://unsplash.it/1900/1080?image=668') no-repeat center center scroll">
    <div class="overlay">
      <div class="container">
        <h1 class="display-1 text-white">資訊科技概論</h1>
        <h2 class="display-4 text-white">C++程式設計</h2>
        <p class="text-white">程式的基本概念以及工具</p>
      </div>
    </div>
  </header>

  <!-- Main -->
  <?php p("code::blocks", "https://3.bp.blogspot.com/-FzWn6OaxIAs/UkNSNpMUJfI/AAAAAAAAbhQ/rR3On67pJwA/s1600/CodeBlocks.png"); ?>
  <a href="http://www.codeblocks.org/">http://www.codeblocks.org/</a>
  <?php pp(); ?>

  <?php p("dev-c++", "https://img.utdstc.com/icons/256/bloodshed-dev-c-plus-plus.png"); ?>
  <a href="https://sourceforge.net/projects/orwelldevcpp/">https://sourceforge.net/projects/orwelldevcpp/</a>
  <?php pp(); ?>

  <?php p("編譯與執行"); ?>
  <p>cpp --&gt; exe</p>
  <?php pp(); ?>

  <?php p("C++入門工具"); ?>
  <a href="http://page.wolfdigit.ga/blockly-c/">http://page.wolfdigit.ga/blockly-c/</a>
  <?php pp(); ?>

  <?php require( 'footer.inc.php' ); ?>