<?php 
$path="../";
require_once('util.inc.php');
?>
<?php 
    $title="老狼的資科概";
    $active=array(6,62);
    require( 'header.inc.php' ); 
?>
    <!-- Header -->
    <header class="masthead" style="background: url('https://unsplash.it/1900/1080?image=668') no-repeat center center scroll">
    <div class="overlay">
      <div class="container">
        <h1 class="display-1 text-white">資訊科技概論</h1>
        <h2 class="display-4 text-white">C++程式設計</h2>
        <p class="text-white">條件式</p>
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
      background-color: #EE0;
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
      "desc" => "輸入一正整數，判斷為奇數或偶數。",
      "run" => array(
"輸入一正整數，判斷此數是否為一個奇數或偶數。
請輸入此數：<i>55</i>
<i>55</i>為奇數", 
"輸入一正整數，判斷此數是否為一個奇數或偶數。
請輸入此數：<i>56</i>
<i>56</i>為偶數"
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(
      "desc" => "輸入兩正整數，判斷此二數是否為一個奇數與一個偶數。",
      "run" => array(
"輸入兩正整數，判斷此二數是否為一個奇數與一個偶數。
請輸入此二數：<i>55 56</i>
<i>55,56</i>恰為一個奇數與一個偶數", 
"輸入兩正整數，判斷此二數是否為一個奇數與一個偶數。
請輸入此二數：<i>55 55</i>
<i>55,55</i>不為一個奇數與一個偶數"
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(
      "desc" => "輸入月份（月份為一個正整數），判斷此月份在四季（春、夏、秋或冬）中的哪一季 ？<br>
                （春：3~5月，夏：6~8月，秋：9~11月，冬：12月以及1-2月）",
      "run" => array(
"輸入月份，判斷此月份在四季中的哪一季
請輸入月份：<i>5</i>
<i>春</i>", 
"輸入月份，判斷此月份在四季中的哪一季
請輸入月份：<i>55</i>
<i>不要亂打</i>",
"輸入月份，判斷此月份在四季中的哪一季
請輸入月份：<i>8</i>
<i>夏</i>",
"輸入月份，判斷此月份在四季中的哪一季
請輸入月份：<i>12</i>
<i>冬</i>"
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(
      "desc" => "輸入三個整數，找出最大值與最小值。",
      "run" => array(
"輸入三數，找出最大值與最小值。
請輸入此三數：<i>3 4 5</i>
(<i>3,4,5</i>)中，最大值為<i>5</i> 最小值為<i>3</i>", 
"輸入三數，找出最大值與最小值。
請輸入此三數：<i>5 5 6</i>
(<i>5,5,6</i>)中，最大值為<i>6</i> 最小值為<i>5</i>"
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(
      "desc" => "輸入一個整數，請判斷這個整數為兩位數整數（請考慮99～10 與 -10～-99 兩種狀況）。",
      "run" => array(
"判斷一個輸入的數字是否為兩位數整數
請輸入此數字=<i>35</i>
<i>35為</i>兩位數整數", 
"判斷一個輸入的數字是否為兩位數整數
請輸入此數字=<i>355</i>
<i>355不為</i>兩位數整數",
"判斷一個輸入的數字是否為兩位數整數
請輸入此數字=<i>-35</i>
<i>-35為</i>兩位數整數",
"判斷一個輸入的數字是否為兩位數整數
請輸入此數字=<i>-355</i>
<i>-355不為</i>兩位數整數"
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(
      "desc" => "求個人BMI值？並判斷體位標準與否？<br>
                BMI=體重/(身高*身高)，身高以公尺(M)為單位，體重以公斤(KG)為單位 。<br>
                （BMI＜18.5 ，請輸出「體重過輕」。<br>
                  23＞＝BMI＞＝18.5，請輸出「標準體重」。<br>
                  25＞BMI＞23，請輸出「體重過重」。<br>
                  　BMI＞＝25，請輸出「肥胖家族」。）",
      "run" => array(
"本程式將計算BMI，並判斷體位是否標準。
請輸入身高（M）：<i>1.75</i>
請輸入體重（Kg）：<i>70</i>
你的身高為<i>175.00</i>公分 體重為<i>70.00</i>公斤 BMI=<i>22.86</i>
<i>標準體重</i>", 
"本程式將計算BMI，並判斷體位是否標準。
請輸入身高（M）：<i>1.8</i>
請輸入體重（Kg）：<i>120</i>
你的身高為<i>180.00</i>公分 體重為<i>120.00</i>公斤 BMI=<i>37.04</i>
<i>肥胖家族</i>"
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(
      "desc" => "輸入任意三邊長，判斷這三邊長可否構成三角形？並判斷構成哪一種三角形。<br>
      判斷依據：三角形任意兩邊長之和＞第三邊。",
      "run" => array(
"本程式將輸入任意三邊長，判斷可否構成三角形？並判斷構成哪一種三角形。
請輸入三個邊長數值，並以空白鍵隔開：<i>3 4 5</i>
<i>3 4 5可以</i>構成三角形
為<i>直角三角形</i>", 
"本程式將輸入任意三邊長，判斷可否構成三角形？並判斷構成哪一種三角形。
請輸入三個邊長數值，並以空白鍵隔開：<i>80 90 100</i>
<i>80 90 100可以</i>構成三角形
為<i>鈍角三角形</i>",
"本程式將輸入任意三邊長，判斷可否構成三角形？並判斷構成哪一種三角形。
請輸入三個邊長數值，並以空白鍵隔開：<i>30 40 500</i>
<i>30 40 500無法</i>構成三角形",
"本程式將輸入任意三邊長，判斷可否構成三角形？並判斷構成哪一種三角形。
請輸入三個邊長數值，並以空白鍵隔開：<i>90 20 100</i>
<i>90 20 100可以</i>構成三角形
為<i>銳角三角形</i>"
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