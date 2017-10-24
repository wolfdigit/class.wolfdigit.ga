<?php
// parameters: $title, $active

if (!isset($active)) $active=Null;
function a($id) {
    global $active;
    if (is_array($active)) {
      if (in_array($id, $active)) return " active";
      else              return "";
    }
    else {
      if ($active==$id) return " active";
      else              return "";
    }
}
?><!DOCTYPE html>
<html lang="zh-Hant">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=isset($title)?$title:"老狼的資科概"?></title>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106338304-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106338304-1');
</script>

    <!-- Bootstrap core CSS -->
    <link href="<?=l('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=l('css/one-page-wonder.css')?>" rel="stylesheet">

    <link href="<?=l('css/font-zh.css')?>" rel="stylesheet">

    <style>
      @media (min-width: 992px) {
        .navbar-expand-lg .navbar-nav-vert {
          -ms-flex-direction: row;
          flex-direction: column;
        }
      }
      .navbar-nav-vert {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;                
      }
    </style>
    <style>
      pre.probRun {
        background-color: black;
        color: white;
        line-height: 1.5em;
        padding: 1.5em;
        border-radius: 5px;
      }

      pre.probRun i {
        font-style: normal;
        font-family: inherit;
        animation: blink-animation 0.8s steps(2, start) infinite;
        -webkit-animation: blink-animation 0.8s steps(2, start) infinite;
      }
      @keyframes blink-animation {
        from {
          color: inherit;
        }
        to {
          /*visibility: hidden;*/
          color: gray;
        }
      }
      @-webkit-keyframes blink-animation {
        from {
          color: inherit;
        }
        to {
          /*visibility: hidden;*/
          color: gray;
        }
      }
    </style>
    <base target="_blank">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a target="_self" class="navbar-brand" href=".">老狼的資科概</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item<?=a(1)?>">
              <a target="_self" class="nav-link" href="<?=l('index.html')?>">資訊科技概論
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item<?=a(2)?>">
              <a target="_self" class="nav-link" href="<?=l('timeTable.html')?>">進度表</a>
            </li>
            <li class="nav-item<?=a(3)?>">
              <a target="_self" class="nav-link" href="<?=l('about.html')?>">關於我</a>
            </li>
            <li class="nav-item<?=a(4)?>">
              <a target="_self" class="nav-link" href="<?=l('info-system.php')?>">麗山資訊系統</a>
            </li>
            <li class="nav-item<?=a(5)?>">
              <a target="_self" class="nav-link" href="<?=l('tour-plan.php')?>">旅遊計畫書</a>
            </li>
            <li class="nav-item dropdown<?=a(6)?>">
              <a target="_self" href="#" id="drop1" class="nav-link dropdown-toggle" data-toggle="dropdown">C++程式設計<b class="caret"></b></a>
              <div class="dropdown-menu bg-dark" aria-labelledby="drop1">
                <ul class="navbar-nav-vert ml-auto" role="menu">
                  <li class="nav-item<?=a(61)?>"><a target="_self" class="nav-link" href="<?=l('Cpp-programming/index.php')?>">C++程式設計</a></li>
                  <li class="nav-item<?=a(62)?>"><a target="_self" class="nav-link" href="<?=l('Cpp-programming/basic.php')?>">基本題</a></li>
                  <li class="nav-item<?=a(63)?>"><a target="_self" class="nav-link" href="<?=l('Cpp-programming/conditions.php')?>">條件式</a></li>
                  <li class="nav-item<?=a(64)?>"><a target="_self" class="nav-link" href="<?=l('Cpp-programming/loops.php')?>">迴圈</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>