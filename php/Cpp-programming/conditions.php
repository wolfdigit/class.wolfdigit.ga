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
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n;

    cout << "輸入一正整數，判斷此數是否為一個奇數或偶數。" << endl;
    cout << "請輸入此數：";
    cin >> n;

    if (n%2==1) {
        cout << n << "為奇數" << endl;
    }
    else {
        cout << n << "為偶數" << endl;
    }

    return 0;
}
')
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
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int a, b;

    cout << "輸入兩正整數，判斷此二數是否為一個奇數與一個偶數。" << endl;
    cout << "請輸入此二數：";
    cin >> a >> b;

    if ((a%2==1&&b%2==0)||(a%2==0&&b%2==1)) {
        cout << a << "," << b << "恰為一個奇數與一個偶數" << endl;
    }
    else {
        cout << a << "," << b << "不為一個奇數與一個偶數" << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, b;

    cout << "輸入兩正整數，判斷此二數是否為一個奇數與一個偶數。" << endl;
    cout << "請輸入此二數：";
    cin >> a >> b;

    if ((a+b)%2==1) {
        cout << a << "," << b << "恰為一個奇數與一個偶數" << endl;
    }
    else {
        cout << a << "," << b << "不為一個奇數與一個偶數" << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, b;

    cout << "輸入兩正整數，判斷此二數是否為一個奇數與一個偶數。" << endl;
    cout << "請輸入此二數：";
    cin >> a >> b;

    if (a%2==1 && b%2==0) {        // a奇 b偶
        cout << a << "," << b << "恰為一個奇數與一個偶數" << endl;
    }
    else {                         // 非 a奇 b偶：a偶b奇、同奇、同偶
        if (a%2==0 && b%2==1) {      // a偶 b奇
            cout << a << "," << b << "恰為一個奇數與一個偶數" << endl;
        }
        else {                       // 其他
            cout << a << "," << b << "不為一個奇數與一個偶數" << endl;
        }
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, b;

    cout << "輸入兩正整數，判斷此二數是否為一個奇數與一個偶數。" << endl;
    cout << "請輸入此二數：";
    cin >> a >> b;

    if (a%2==1) {        // a為奇數
        if (b%2==0) {      // a奇b偶
            cout << a << "," << b << "恰為一個奇數與一個偶數" << endl;
        }
        else {             // a奇b奇
            cout << a << "," << b << "不為一個奇數與一個偶數" << endl;
        }
    }
    else {               // a為偶數
        if (b%2==1) {      // a偶b奇
            cout << a << "," << b << "恰為一個奇數與一個偶數" << endl;
        }
        else {             // a偶b偶
            cout << a << "," << b << "不為一個奇數與一個偶數" << endl;
        }
    }

    return 0;
}
')
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
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int a;

    cout << "輸入月份，判斷此月份在四季中的哪一季" << endl;
    cout << "請輸入月份：";
    cin >> a;

    if (a==3 || a==4 || a==5) {
        cout << "春" << endl;
    }
    if (a==6 || a==7 || a==8) {
        cout << "夏" << endl;
    }
    if (a==9 || a==10 || a==11) {
        cout << "秋" << endl;
    }
    if (a==12 || a==1 || a==2) {
        cout << "冬" << endl;
    }
    if (a<1 || a>12) {
        cout << "不要亂打" << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int month;

    cout << "輸入月份，判斷此月份在四季中的哪一季" << endl;
    cout << "請輸入月份：";
    cin >> month;

    if (3<=month && month<=5) {
        cout << "春" << endl;
    }
    else if (6<=month && month<=8) {
        cout << "夏" << endl;
    }
    else if (9<=month && month<=11) {
        cout << "秋" << endl;
    }
    else if (month==12 || (1<=month&&month<=2) ) {
        cout << "冬" << endl;
    }
    else {
        cout << "不要亂打" << endl;
    }

    return 0;
}
')
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
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int a, b, c;

    cout << "輸入三數，找出最大值與最小值。" << endl;
    cout << "請輸入此三數：";
    cin >> a >> b >> c;

    cout << "(" << a << "," << b << "," << c << ")中，";

    if (a>=b&&a>=c) {
        cout << "最大值為" << a;
    }
    else if (b>=a&&b>=c) {
        cout << "最大值為" << b;
    }
    else {
        cout << "最大值為" << c;
    }

    if (a<=b&&a<=c) {
        cout << " 最小值為" << a << endl;
    }
    else if (b<=a&&b<=c) {
        cout << " 最小值為" << b << endl;
    }
    else {
        cout << " 最小值為" << c << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, b, c;

    cout << "輸入三數，找出最大值與最小值。" << endl;
    cout << "請輸入此三數：";
    cin >> a >> b >> c;

    cout << "(" << a << "," << b << "," << c << ")中，";

    if (a>=b&&a>=c) {
        cout << "最大值為" << a;
    }
    if (b>a&&b>=c) {
        cout << "最大值為" << b;
    }
    if (c>b&&c>a) {
        cout << "最大值為" << c;
    }

    if (a<=b&&a<=c) {
        cout << " 最小值為" << a << endl;
    }
    if (b<a&&b<=c) {
        cout << " 最小值為" << b << endl;
    }
    if (c<a&&c<b) {
        cout << " 最小值為" << c << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, b, c;
    int max, min;

    cout << "輸入三數，找出最大值與最小值。" << endl;
    cout << "請輸入此三數：";
    cin >> a >> b >> c;

    cout << "(" << a << "," << b << "," << c << ")中，";

    max = a;
    if (b>max) max = b;
    if (c>max) max = c;

    min = a;
    if (b<min) min = b;
    if (c<min) min = c;

    cout << "最大值為" << max << " 最小值為" << min << endl;

    return 0;
}
')
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
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int a;

    cout << "判斷一個輸入的數字是否為兩位數整數" << endl;
    cout << "請輸入此數字=";
    cin >> a;

    if ((10<=a&&a<=99) || (-99<=a&&a<=-10)) {
        cout << a << "為兩位數整數" << endl;
    }
    else {
        cout << a << "不為兩位數整數" << endl;
    }

    return 0;
}
')
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
      "ans" => array('
#include <iostream>
#include <iomanip>
using namespace std;

int main() {
    double m, kg, bmi;

    cout << "本程式將計算BMI，並判斷體位是否標準。" << endl;
    cout << "請輸入身高（M）：";
    cin >> m;
    cout << "請輸入體重（Kg）：";
    cin >> kg;

    bmi = kg / (m*m);
    cout << fixed << setprecision(2);
    cout << "你的身高為" << m*100 << "公分 體重為" << kg << "公斤 BMI=" << bmi << endl;

    if      (            bmi<18.5) cout << "體重過輕" << endl;
    else if (18.5<=bmi && bmi<=23) cout << "標準體重" << endl;
    else if (   23<bmi && bmi<25 ) cout << "體重過重" << endl;
    else                           cout << "肥胖家族" << endl;

    return 0;
}
', '
#include <iostream>
#include <iomanip>
using namespace std;

int main() {
    double m, kg, bmi;

    cout << "本程式將計算BMI，並判斷體位是否標準。" << endl;
    cout << "請輸入身高（M）：";
    cin >> m;
    cout << "請輸入體重（Kg）：";
    cin >> kg;

    bmi = kg / (m*m);
    cout << fixed << setprecision(2);
    cout << "你的身高為" << m*100 << "公分 體重為" << kg << "公斤 BMI=" << bmi << endl;

    if (bmi<18.5) {
        cout << "體重過輕" << endl;
    }
    else if (18.5<=bmi && bmi<=23) {
        cout << "標準體重" << endl;
    }
    else if (23<bmi && bmi<25) {
        cout << "體重過重" << endl;
    }
    else {
        cout << "肥胖家族" << endl;
    }

    return 0;
}
', '
#include <stdio.h>

int main() {
    double m, kg, bmi;

    printf("本程式將計算BMI，並判斷體位是否標準。\n");
    printf("請輸入身高（M）：");
    scanf("%lf", &m);
    printf("請輸入體重（Kg）：");
    scanf("%lf", &kg);

    bmi = kg / (m*m);
    printf("你的身高為%.2lf公分 體重為%.2lf公斤 BMI=%.2lf\n", m*100, kg, bmi);

    if      (            bmi<18.5) printf("體重過輕\n");
    else if (18.5<=bmi && bmi<=23) printf("標準體重\n");
    else if (   23<bmi && bmi<25 ) printf("體重過重\n");
    else                           printf("肥胖家族\n");

    return 0;
}
', '
#include <iostream>
#include <cstdio>
using namespace std;

int main() {
    double m, kg, bmi;

    cout << "本程式將計算BMI，並判斷體位是否標準。" << endl;
    cout << "請輸入身高（M）：";
    cin >> m;
    cout << "請輸入體重（Kg）：";
    cin >> kg;

    bmi = kg / (m*m);
    printf("你的身高為%.2lf公分 體重為%.2lf公斤 BMI=%.2lf\n", m*100, kg, bmi);

    if      (            bmi<18.5) cout << "體重過輕" << endl;
    else if (18.5<=bmi && bmi<=23) cout << "標準體重" << endl;
    else if (   23<bmi && bmi<25 ) cout << "體重過重" << endl;
    else                           cout << "肥胖家族" << endl;

    return 0;
}
')
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
為<i>銳角三角形</i>",
"本程式將輸入任意三邊長，判斷可否構成三角形？並判斷構成哪一種三角形。
請輸入三個邊長數值，並以空白鍵隔開：<i>30 40 500</i>
<i>30 40 500無法</i>構成三角形",
"本程式將輸入任意三邊長，判斷可否構成三角形？並判斷構成哪一種三角形。
請輸入三個邊長數值，並以空白鍵隔開：<i>90 20 100</i>
<i>90 20 100可以</i>構成三角形
為<i>鈍角三角形</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int a, b, c;
    cout << "本程式將輸入任意三邊長，判斷可否構成三角形？並判斷構成哪一種三角形。" << endl;
    cout << "請輸入三個邊長數值，並以空白鍵隔開：";
    cin >> a >> b >> c;

    if (a+b>c && b+c>a && c+a>b) {
        cout << a << " " << b << " " << c << "可以構成三角形" << endl;
        if (a*a==b*b+c*c || b*b==c*c+a*a || c*c==a*a+b*b) {
            cout << "是為直角三角形" << endl;
        }
        else if (a*a>b*b+c*c || b*b>c*c+a*a || c*c>a*a+b*b) {
            cout << "是為鈍角三角形" << endl;
        }
        else {
            cout << "是為銳角三角形" << endl;
        }
    }
    else {
        cout << a << " " << b << " " << c << "無法構成三角形" << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, b, c;
    cout << "本程式將輸入任意三邊長，判斷可否構成三角形？並判斷構成哪一種三角形。" << endl;
    cout << "請輸入三個邊長數值，並以空白鍵隔開：";
    cin >> a >> b >> c;

    if (a+b>c && b+c>a && c+a>b) {
        cout << a << " " << b << " " << c << "可以構成三角形" << endl;
        if (a*a==b*b+c*c || b*b==c*c+a*a || c*c==a*a+b*b) {
            cout << "是為直角三角形" << endl;
        }
        if (a*a>b*b+c*c || b*b>c*c+a*a || c*c>a*a+b*b) {
            cout << "是為鈍角三角形" << endl;
        }
        if (a*a<b*b+c*c && b*b<c*c+a*a && c*c<a*a+b*b) {
            cout << "是為銳角三角形" << endl;
        }
    }
    else {
        cout << a << " " << b << " " << c << "無法構成三角形" << endl;
    }

    return 0;
}
')
    ),
  );

  $probOrder = array(1=>"a01", 2=>"a02", 3=>"a03", 4=>"a04", 5=>"a05", 6=>"a06", 7=>"a07");
  foreach ($probOrder as $i=>$title) {
    if (!$title) $title = $i;
    printProb($contentPhp[$i], $title);
  }
  /*
  for ($i=1; $i<count($contentPhp); $i++) {
    printProb($contentPhp[$i], $i);
  }
  */


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
