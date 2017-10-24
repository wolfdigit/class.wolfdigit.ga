<?php
require_once('const.inc.php');

if (!isset($path)) $path="";
function l($file) {
    global $path;
    $path=rtrim($path, "/");
    if ($path!="") return $path.'/'.$file;
    else           return $file;
}

function p($title, $img="placeholder.png") { ?>
    <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 order-1">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="<?=$img?>" alt="">
          </div>
        </div>
        <div class="col-md-9 order-2">
          <div class="p-5">
            <h2 class="display-4"><?=$title?></h2>
<?php }
// and here goes raw HTML
function pp() { ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php }






function printProb($p, $id="") {
  static $cnt=0;
  $uid = ($id!="")?$id:"gen-$cnt";
  $cnt++;
  ?>
<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-2 order-1">
        <div class="p-5">
          <div class="probNum"><?=($id!="")?(strlen($id)>2?"<span class=\"small\">$id</span>":$id):"→"?></div>
        </div>
      </div>
      <div class="col-md-10 order-2">
        <div class="p-5">
          <p><?=$p->desc?></p>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <?php for ($i=0; $i<count($p->run); $i++) { ?>
      <?php   if (count($p->run)>1) { ?>
      <div class="col-md-6">
      <?php } else { ?>
      <div class="col-md-12">
      <?php } ?>
        <div class="p-1">
          <pre class="probRun"><?=$p->run[$i]?></pre>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="row align-items-center">
      <div class="col-md-12 order-2">
        <div class="p-1">
        <?php for ($i=0; $i<count($p->ans); $i++) { ?>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl-ans-<?=$uid."-".$i?>">ans<?=$i+1?></button>
        <?php } ?>
        </div>
      </div>
    </div>
    <?php for ($i=0; $i<count($p->ans); $i++) { ?>
    <div class="modal fade" id="mdl-ans-<?=$uid."-".$i?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document"><div class="modal-content">
        <div class="modal-header"><h5 class="modal-title"><?=$uid."-".$i?></h5></div>
        <div class="modal-body">
          <img src="<?=code2img($p->ans[$i], "ans-".$uid."-".$i.".png")?>"></img>
        </div>
        <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
      </div></div>
    </div>
    <?php } ?>
  </div>
</section>

  <?php
}

/*
  $c_code = "
  #include <iostream>
  
  int main() {
      return 0;
  }
  ";
*/
function code2img($c_code, $imgFn="") {
  $baseDir = dirname($_SERVER['PHP_SELF'])."/";
  if (!$imgFn) {
    $imgFn = sha1(microtime()).".png";
  }
  if (BUILDIMG) {
    ob_start();
    include($baseDir."ansImg.inc.php");
    $html = ob_get_clean();
    
    //echo $html;
    file_put_contents("/tmp/htmlImg.html", $html);
    // https://wkhtmltopdf.org/
    exec("wkhtmltoimage --width 0 --zoom 1.5 --transparent --format png /tmp/htmlImg.html ".$baseDir.$imgFn);
  }

  return $imgFn;
}