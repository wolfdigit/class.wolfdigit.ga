<?php
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
  ?>
<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-2 order-1">
        <div class="p-5">
          <div class="probNum"><?=($id!="")?$id:"→"?></div>
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
      <div class="col-md-6">
        <div class="p-1">
          <pre class="probRun"><?=$p->run[$i]?></pre>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="row align-items-center">
      <div class="col-md-12 order-2">
        <div class="p-1">
          T.B.A.
        </div>
      </div>
    </div>
  </div>
</section>

  <?php
}
