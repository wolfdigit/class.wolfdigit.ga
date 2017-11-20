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
        <p class="text-white">基本題</p>
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
      background-color: black;
      color: white;
      font-weight: bold;
      text-align: center;
    }

    .probNum .small {
      font-size: 60%;
      vertical-align: middle;
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
      "desc" => "印出麗山校歌，每四句換一行，同一行中每句之間以一個全形空白「　」隔開。",
      "run" => array(
"金面山下　紅樓綠窗　惟我母校　弦歌飛揚
青春俊秀　歡聚一堂　欣坐春風　師道殷長
科學人文　各擅勝場　修己善群　志氣高昂
漪輿美哉　桃李芬芳　前瞻卓越　麗山之光"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    cout << "金面山下　紅樓綠窗　惟我母校　弦歌飛揚" << endl;
    cout << "青春俊秀　歡聚一堂　欣坐春風　師道殷長" << endl;
    cout << "科學人文　各擅勝場　修己善群　志氣高昂" << endl;
    cout << "漪輿美哉　桃李芬芳　前瞻卓越　麗山之光" << endl;
    return 0;
}
')
    ),
    (object)array(
      "desc" => "讓使用者輸入英打字數，依照公式計算出百分數。<br>公式為：百分數=字數*2+30",
      "run" => array(
"請輸入每分鐘字數：<i>20</i>
你的英打成績是 <i>70</i>分", 
"請輸入每分鐘字數：<i>15</i>
你的英打成績是 <i>60</i>分"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int x, y;

    cout << "請輸入每分鐘字數：";
    cin >> x;

    y = 2 * x + 30;
    cout << "你的英打成績是 " << y << "分" << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "讓使用者輸入英打字數，依照公式計算出百分數後，印出其分數是否有及格。(換算公式同上，及格為60分以上)",
      "run" => array(
"請輸入每分鐘字數：<i>12</i>
你的英打成績是 <i>54</i>分，<i>不及格</i>", 
"請輸入每分鐘字數：<i>15</i>
你的英打成績是 <i>60</i>分，<i>及格</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int x, y;

    cout << "請輸入每分鐘字數：";
    cin >> x;

    y = 2 * x + 30;
    cout << "你的英打成績是 " << y << "分，";

    if (y>=60) {
        cout << "及格" << endl;
    }
    else {
        cout << "不及格" << endl;
    }

    return 0;
}
')
    ),
    (object)array(
      "desc" => "讓使用者輸入五次英打字數，印出其中最高的百分數。(換算公式同上)",
      "run" => array(
"請輸入每分鐘字數：<i>12</i>
請輸入每分鐘字數：<i>16</i>
請輸入每分鐘字數：<i>14</i>
請輸入每分鐘字數：<i>11</i>
請輸入每分鐘字數：<i>13</i>
最高分數是 <i>62</i>分
", 
"請輸入每分鐘字數：<i>9</i>
請輸入每分鐘字數：<i>14</i>
請輸入每分鐘字數：<i>20</i>
請輸入每分鐘字數：<i>16</i>
請輸入每分鐘字數：<i>22</i>
最高分數是 <i>74</i>分"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int x, y, max;

    max = 0;

    cout << "請輸入每分鐘字數：";
    cin >> x;
    y = 2 * x + 30;
    if (y>max) {
        max = y;
    }

    cout << "請輸入每分鐘字數：";
    cin >> x;
    y = 2 * x + 30;
    if (y>max) {
        max = y;
    }

    cout << "請輸入每分鐘字數：";
    cin >> x;
    y = 2 * x + 30;
    if (y>max) {
        max = y;
    }

    cout << "請輸入每分鐘字數：";
    cin >> x;
    y = 2 * x + 30;
    if (y>max) {
        max = y;
    }

    cout << "請輸入每分鐘字數：";
    cin >> x;
    y = 2 * x + 30;
    if (y>max) {
        max = y;
    }

    cout << "最高分數是 " << max << "分" << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int x, y, max=0;

    for (int i=0; i<5; i++) {
        cout << "請輸入每分鐘字數：";
        cin >> x;
        y = 2 * x + 30;
        if (y>max) max = y;
    }

    cout << "最高分數是 " << max << "分" << endl;

    return 0;
}
')
    ),
    /*
    (object)array(
      "desc" => "讓使用者輸入五次英打字數，印出其中最高的三次百分數的平均(無條件捨去至整數位)。(換算公式同上)",
      "run" => array(
"", 
""
      ),
      "flow" => array(),
      "ans" => array()
    ),
    */
    (object)array(
      "desc" => "讓使用者輸入N，依序印出1~N，中間用一個空格分開。",
      "run" => array(
"請輸入N：<i>5</i>
<i>1 2 3 4 5 </i>", 
"請輸入N：<i>10</i>
<i>1 2 3 4 5 6 7 8 9 10</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, i;

    cout << "請輸入N：";
    cin >> n;

    for (i=1; i<=n; i++) {
        cout << i << " ";
    }
    cout << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int n;

    cout << "請輸入N：";
    cin >> n;

    for (int i=1; i<=n; i++) {
        cout << i;
        if (i<=n-1) cout << " ";
        else        cout << endl;
    }

    return 0;
}
')
    ),
    (object)array(
      "desc" => "使用者輸入N、M，依照相對位置印出N橫行*M縱列的各個點座標",
      "run" => array(
"請輸入N：<i>3 4</i>
<i>(1,1)	(1,2)	(1,3)	(1,4)	
(2,1)	(2,2)	(2,3)	(2,4)	
(3,1)	(3,2)	(3,3)	(3,4)	</i>", 
"請輸入N：<i>8 7</i>
<i>(1,1)	(1,2)	(1,3)	(1,4)	(1,5)	(1,6)	(1,7)	
(2,1)	(2,2)	(2,3)	(2,4)	(2,5)	(2,6)	(2,7)	
(3,1)	(3,2)	(3,3)	(3,4)	(3,5)	(3,6)	(3,7)	
(4,1)	(4,2)	(4,3)	(4,4)	(4,5)	(4,6)	(4,7)	
(5,1)	(5,2)	(5,3)	(5,4)	(5,5)	(5,6)	(5,7)	
(6,1)	(6,2)	(6,3)	(6,4)	(6,5)	(6,6)	(6,7)	
(7,1)	(7,2)	(7,3)	(7,4)	(7,5)	(7,6)	(7,7)	
(8,1)	(8,2)	(8,3)	(8,4)	(8,5)	(8,6)	(8,7)	</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, i, j;

    cout << "請輸入N：";
    cin >> n;

    for (i=1; i<=n; i++) {
        for (j=1; j<=n; j++) {
            cout << "(" << i << "," << j << ")" << " ";
        }
        cout << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int n;

    cout << "請輸入N：";
    cin >> n;

    for (int i=1; i<=n; i++) {
        for (int j=1; j<=n; j++) {
            cout << "(" << i << "," << j << ")";
            if (j<=n-1) cout << "\t";
            else        cout << "\n";
        }
    }

    return 0;
}
')
    ),
    (object)array(
      "desc" => "依照相對位置印出九九乘法表",
      "run" => array(
"1	2	3	4	5	6	7	8	9
2	4	6	8	10	12	14	16	18
3	6	9	12	15	18	21	24	27
4	8	12	16	20	24	28	32	36
5	10	15	20	25	30	35	40	45
6	12	18	24	30	36	42	48	54
7	14	21	28	35	42	49	56	63
8	16	24	32	40	48	56	64	72
9	18	27	36	45	54	63	72	81"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, i, j;
    n = 9;

    for (i=1; i<=n; i++) {
        for (j=1; j<=n; j++) {
            cout << i*j << " ";
        }
        cout << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int n=9;

    for (int i=1; i<=n; i++) {
        for (int j=1; j<=n; j++) {
            cout << i*j;
            if (j<=n-1) cout << "\t";
            else        cout << "\n";
        }
    }

    return 0;
}
')
    ),
    (object)array(
      "desc" => "讓使用者輸入N，印出一個由星號*排成，長度為N的橫線",
      "run" => array(
"請輸入N：<i>7</i>
<i>*******</i>", 
"請輸入N：<i>3</i>
<i>***</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, i;

    cout << "請輸入N：";
    cin >> n;

    for (i=1; i<=n; i++) {
        cout << "*";
    }
    cout << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "使用者輸入N，用星號*排出底和高皆為N的左下等腰直角三角形",
      "run" => array(
"請輸入N：<i>3</i>
<i>*
**
***</i>", 
"請輸入N：<i>5</i>
<i>*
**
***
****
*****</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, i, j;

    cout << "請輸入N：";
    cin >> n;

    for (i=1; i<=n; i++) {
        for (j=1; j<=i; j++) {
            cout << "*";
        }
        cout << endl;
    }

    return 0;
}
')
    ),
    (object)array(
      "desc" => "使用者輸入N，用星號*排出底和高皆為N的右下等腰直角三角形",
      "run" => array(
"請輸入N：<i>3</i>
<i>  *
 **
***</i>", 
"請輸入N：<i>9</i>
<i>        *
       **
      ***
     ****
    *****
   ******
  *******
 ********
*********</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, i, j;

    cout << "請輸入N：";
    cin >> n;

    for (i=1; i<=n; i++) {
        for (j=1; j<=n-i; j++) {
            cout << " ";
        }
        for (j=1; j<=i; j++) {
            cout << "*";
        }
        cout << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int n;

    cout << "請輸入N：";
    cin >> n;

    for (int i=1; i<=n; i++) {
        for (int j=1; j<=n; j++) {
            if (j<=n-i) cout << " ";
            else        cout << "*";
        }
        cout << endl;
    }

    return 0;
}
')
    ),
);

$probOrder = array(1=>"01", 2=>"02", 3=>"03", 4=>"-04-", 5=>"05", 6=>"06", 7=>"-07-", 8=>"08", 9=>"09", 10=>"-10-");
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