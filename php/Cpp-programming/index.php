<?php 
$path="../";
require_once('util.inc.php');
?>
<?php 
    $title="老狼的資科概";
    $active=array(6,61);
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
  <?php p("整合式開發環境", "http://www.jetsonhacks.com/wp-content/uploads/2016/01/codeblocks2.png"); ?>
  <p>編輯器 editor + 編譯器 compiler + ... </p>
  <p>
  Code::Blocks <a href="http://www.codeblocks.org/">http://www.codeblocks.org/</a><br/>
  下載：<br/>
  Downloads → Download the binary release → <br/>
  codeblocks-17.12mingw-setup.exe (安裝檔) <br/>
  或 <br/>
  codeblocks-17.12mingw-nosetup.zip (免安裝壓縮包)<br/>
  中文化：<br/>
  從<a href="https://translations.launchpad.net/codeblocks/trunk/+pots/codeblocks/zh_TW/+translate">翻譯文件網站</a>(需註冊登入) 或 <a href="codeblocks_zh_TW_20180104.mo">這裡</a>下載.mo檔<br/>
  放進 C:\Program Files\CodeBlocks\share\CodeBlocks\locale\zh_TW <br/>
  (C:\Program Files\CodeBlocks是安裝路徑，後面的locale\zh_TW這兩層如果不存在請自行建立資料夾)<br/>
  然後打開程式找setting→Environment→view裡面勾選Internationlization應該就會看到Chinese了
  </p>
  <p>Dev C++ <a href="https://sourceforge.net/projects/orwelldevcpp/">https://sourceforge.net/projects/orwelldevcpp/</a></p>
  <?php pp(); ?>

  <?php p("編譯與執行", "http://everyday-tech.com/wp-content/uploads/2013/09/CMD.jpg"); ?>
  <p>*.cpp 原始碼 (文字檔)<br>
     → 編譯<br>
     → *.exe 執行檔 (非文字檔)</p>
  <?php pp(); ?>

  <?php p("C++入門工具", "novice tool.png"); ?>
  <p>整塊積木上面寫的字，你就一字不差整個背起來就是了，就像背英文片語一樣。</p>
  <p><a href="http://page.wolfdigit.ga/blockly-c/">http://page.wolfdigit.ga/blockly-c/</a></p>
  <?php pp(); ?>

  <?php p("期末考題庫", "https://image.flaticon.com/icons/png/512/185/185575.png"); ?>
  <p><a href="conditions.html">條件式</a> (共7題)</p>
  <p><a href="loops.html">迴圈</a> (共15題)</p>
  <?php pp(); ?>

  <?php require( 'footer.inc.php' ); ?>