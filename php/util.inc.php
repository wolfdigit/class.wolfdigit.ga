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