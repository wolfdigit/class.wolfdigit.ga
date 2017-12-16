<?php 
$path="../";
require_once('util.inc.php');
?>
<?php 
    $title="老狼的資科概";
    $active=array(6,64);
    require( 'header.inc.php' ); 
?>
    <!-- Header -->
    <header class="masthead" style="background: url('https://unsplash.it/1900/1080?image=668') no-repeat center center scroll">
    <div class="overlay">
      <div class="container">
        <h1 class="display-1 text-white">資訊科技概論</h1>
        <h2 class="display-4 text-white">C++程式設計</h2>
        <p class="text-white">迴圈</p>
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
      background-color: #9CF;
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
    (object)array(  // b01
      "desc" => "輸入一正整數N，求1+2+3+4+………………+N=?",
      "run" => array(
"本程式將讓使用者輸入一正整數，計算出1+2+...+N之總和
請輸入一正整數N=<i>10</i>
1+2+...+<i>10</i>=<i>55</i>", 
"本程式將讓使用者輸入一正整數，計算出1+2+...+N之總和
請輸入一正整數N=<i>100</i>
1+2+...+<i>100</i>=<i>5050</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, sum;

    cout << "本程式將讓使用者輸入一正整數，計算出1+2+...+N之總和" << endl;
    cout << "請輸入一正整數N=";
    cin >> n;

    sum = 0;
    for (int i=1; i<=n; i++) {
        sum += i;
    }

    cout << "1+2+...+" << n << "=" << sum << endl;

    return 0;
}
')
    ),
    (object)array(  // b02
      "desc" => "輸入一正整數N，求1-2+3-4+………………±N=?",
      "run" => array(
"本程式將讓使用者輸入一正整數，計算出1-2+...(+-)N之總和
請輸入一正整數N=<i>15</i>
1-2+...<i>+15</i>=<i>8</i>", 
"本程式將讓使用者輸入一正整數，計算出1-2+...(+-)N之總和
請輸入一正整數N=<i>20</i>
1-2+...<i>-20</i>=<i>-10</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, sum;

    cout << "本程式將讓使用者輸入一正整數，計算出1-2+...(+-)N之總和" << endl;
    cout << "請輸入一正整數N=";
    cin >> n;

    sum = 0;
    for (int i=1; i<=n; i++) {
        if (i%2==1) {
            sum += i;
        }
        else {
            sum -= i;
        }
    }

    if (n%2==1) {
        cout << "1-2+...+" << n << "=" << sum << endl;
    }
    else {
        cout << "1-2+...-" << n << "=" << sum << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int n, sum;

    cout << "本程式將讓使用者輸入一正整數，計算出1-2+...(+-)N之總和" << endl;
    cout << "請輸入一正整數N=";
    cin >> n;

    sum = 0;
    for (int i=1; i<=n; i++) {
        if (i%2==1) sum += i;
        else        sum -= i;
    }

    if (n%2==1) {
        cout << "1-2+...+" << n << "=" << sum << endl;
    }
    else {
        cout << "1-2+...-" << n << "=" << sum << endl;
    }

    return 0;
}
')
    ),
    (object)array(
      "desc" => "輸入一正整數N，求1 + 1/2 + 2/3 + 3/4 +………………+ (n-1)/n=?",
      "run" => array(
"本程式將讓使用者輸入一正整數，計算出1+1/2+2/3...+(N-1)/N之總和
請輸入一正整數N=<i>45</i>
1+1/2+2/3...+(<i>44</i>)/<i>45</i>=<i>41.605045</i>", 
"本程式將讓使用者輸入一正整數，計算出1+1/2+2/3...+(N-1)1/N之總和
請輸入一正整數N=<i>5</i>
1+1/2+2/3...+(<i>4</i>)/<i>5</i>=<i>3.716667</i>"
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(
      "desc" => "輸入一正整數N，求1+1/2+1/3+1/4+………………+1/n=?",
      "run" => array(
"本程式將讓使用者輸入一正整數，計算出1+1/2+...+1/N之總和
請輸入一正整數N=<i>10</i>
1+1/2+...+1/<i>10</i>=<i>2.928968</i>", 
"本程式將讓使用者輸入一正整數，計算出1+1/2+...+1/N之總和
請輸入一正整數N=<i>100</i>
1+1/2+...+1/<i>100</i>=<i>5.187378</i>"
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(
      "desc" => "輸入一正整數N，求1-1/2+1/3-1/4+………………±1/n=?",
      "run" => array(
"本程式將讓使用者輸入一正整數，計算出1-1/2+1/3-1/4+…(+-)1/n之總和
請輸入一正整數N=<i>15</i>
1-1/2+...<i>+</i>1/<i>15</i>=<i>0.725372</i>", 
"本程式將讓使用者輸入一正整數，計算出1-1/2+1/3-1/4+…(+-)1/n之總和
請輸入一正整數N=<i>10</i>
1-1/2+...<i>-</i>1/<i>10</i>=<i>0.645635</i>"
      ),
      "flow" => array(),
      "ans" => array()
    ),
    (object)array(  // b06
      "desc" => "讀入10個數字（可正負），列印正值的個數與負值的個數。並依其結果列印訊息“正值多”、“負值多”、“正負值一樣多”。（0算正值）",
      "run" => array(
"讀入10個數字（可正負），列印正值的個數與負值的個數。
請輸入第1次數字：<i>10</i>
請輸入第2次數字：<i>5</i>
請輸入第3次數字：<i>-3</i>
請輸入第4次數字：<i>-5</i>
請輸入第5次數字：<i>-15</i>
請輸入第6次數字：<i>-99</i>
請輸入第7次數字：<i>51</i>
請輸入第8次數字：<i>231</i>
請輸入第9次數字：<i>87</i>
請輸入第10次數字：<i>13</i>
你輸入了<i>6</i>個正數，<i>4</i>個負數。
<i>正值多</i>", 
"讀入10個數字（可正負），列印正值的個數與負值的個數。
請輸入第1次數字：<i>3</i>
請輸入第2次數字：<i>4</i>
請輸入第3次數字：<i>5</i>
請輸入第4次數字：<i>6</i>
請輸入第5次數字：<i>7</i>
請輸入第6次數字：<i>-9</i>
請輸入第7次數字：<i>-5</i>
請輸入第8次數字：<i>-7</i>
請輸入第9次數字：<i>-6</i>
請輸入第10次數字：<i>-5</i>
你輸入了<i>5</i>個正數，<i>5</i>個負數。
<i>正負值一樣多</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int a;
    int count1, count2;

    cout << "讀入10個數字（可正負），列印正值的個數與負值的個數。" << endl;

    count1 = 0;    // 正的個數
    count2 = 0;    // 負的個數
    for (int i=1; i<=10; i++) {
        cout << "請輸入第" << i << "次數字：";
        cin >> a;
        if (a>=0) count1 += 1;
        else      count2 += 1;
    }

    cout << "你輸入了" << count1 << "個正數，" << count2 << "個負數。" << endl;
    if (count1>count2) cout << "正值多" << endl;
    if (count1<count2) cout << "負值多" << endl;
    if (count1==count2) cout << "正負值一樣多" << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a;
    int count1, count2;

    cout << "讀入10個數字（可正負），列印正值的個數與負值的個數。" << endl;

    count1 = 0;    // 正的個數
    for (int i=1; i<=10; i++) {
        cout << "請輸入第" << i << "次數字：";
        cin >> a;
        if (a>=0) count1 += 1;
    }
    count2 = 10 - count1;

    cout << "你輸入了" << count1 << "個正數，" << count2 << "個負數。" << endl;
    if (count1>count2) cout << "正值多" << endl;
    if (count1<count2) cout << "負值多" << endl;
    if (count1==count2) cout << "正負值一樣多" << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a;
    int count;

    cout << "讀入10個數字（可正負），列印正值的個數與負值的個數。" << endl;

    count = 0;    // 正的個數
    for (int i=1; i<=10; i++) {
        cout << "請輸入第" << i << "次數字：";
        cin >> a;
        if (a>=0) count += 1;
    }

    cout << "你輸入了" << count << "個正數，" << 10-count << "個負數。" << endl;
    if (count>5) cout << "正值多" << endl;
    if (count<5) cout << "負值多" << endl;
    if (count==5) cout << "正負值一樣多" << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "阿婆賣蛋，七個一數餘二且十一個一數餘二且三個一數餘二，求<10000之內的所有可能結果。",
      "run" => array(
"本程式將計算阿婆賣蛋，求<10000的所有可能結果
可能的結果有：2 233 464 695 926 1157 1388 1619 1850 2081 2312 2543 2774 3005 3236 3467 3698 3929 4160 4391 4622 4853 5084 5315 5546 5777 6008 6239 6470 6701 6932 7163 7394 7625 7856 8087 8318 8549 8780 9011 9242 9473 9704 9935  "
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    cout << "本程式將計算阿婆賣蛋，求<10000的所有可能結果" << endl;

    cout << "可能的結果有：";
    for (int n=1; n<=10000; n++) {
        if (n%7==2 && n%11==2 && n%3==2) cout << n << " ";
    }
    cout << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    cout << "本程式將計算阿婆賣蛋，求<10000的所有可能結果" << endl;

    cout << "可能的結果有：";
    for (int n=1; n<=10000; n++) {
        if (n%7==2 && n%11==2 && n%3==2) {
            cout << n << " ";
        }
    }
    cout << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "寫一程式計算一組數字的乘積。你的程式必須能夠連續輸入數個整數(以Enter隔開)，當輸入數字為0時，隨即輸出結果，並結束程式。",
      "run" => array(
"本程式將程式計算一組數字的乘積。
請輸入數字：<i>1</i>
請輸入數字：<i>2</i>
請輸入數字：<i>3</i>
請輸入數字：<i>4</i>
請輸入數字：<i>5</i>
請輸入數字：<i>0</i>
此組數字的乘積為<i>120</i>", 
"本程式將程式計算一組數字的乘積。
請輸入數字：<i>-5</i>
請輸入數字：<i>95</i>
請輸入數字：<i>32</i>
請輸入數字：<i>10</i>
請輸入數字：<i>0</i>
此組數字的乘積為<i>-152000</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int a, product;

    cout << "本程式將程式計算一組數字的乘積。" << endl;

    product = 1;
    for (;;) {
        cout << "請輸入數字：";
        cin >> a;

        if (a==0) break;
        product *= a;
    }

    cout << "此組數字的乘積為" << product << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, product;

    cout << "本程式將程式計算一組數字的乘積。" << endl;

    product = 1;
    while (1) {
        cout << "請輸入數字：";
        cin >> a;

        if (a==0) break;
        product *= a;
    }

    cout << "此組數字的乘積為" << product << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, product;

    cout << "本程式將程式計算一組數字的乘積。" << endl;

    product = 1;
    a = 1;
    while (a!=0) {
        product *= a;

        cout << "請輸入數字：";
        cin >> a;
    }

    cout << "此組數字的乘積為" << product << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, product;

    cout << "本程式將程式計算一組數字的乘積。" << endl;

    product = 1;
    do {
        cout << "請輸入數字：";
        cin >> a;

        if (a!=0) product *= a;
    } while (a!=0);

    cout << "此組數字的乘積為" << product << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "輸入兩數字，求最大公因數(GCD)與最小公倍數(LCM)。<br>
      最小公倍數(LCM)=兩整數相乘 / 最大公因數(GCD)。",
      "run" => array(
"本程式將輸入兩數字，求最大公因數(GCD)與最小公倍數(LCM)。
請輸入第一個數字：<i>95</i>
請輸入第二個數字：<i>51</i>
<i>95,51</i>的最大公因數為<i>1</i> 最小公倍數為<i>4845</i>", 
"本程式將輸入兩數字，求最大公因數(GCD)與最小公倍數(LCM)。
請輸入第一個數字：<i>55</i>
請輸入第二個數字：<i>99</i>
<i>55,99</i>的最大公因數為<i>11</i> 最小公倍數為<i>495</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int a, b;
    int gcd, lcm;

    cout << "本程式將輸入兩數字，求最大公因數(GCD)與最小公倍數(LCM)。" << endl;
    cout << "請輸入第一個數字：";
    cin >> a;
    cout << "請輸入第二個數字：";
    cin >> b;

    for (int i=1; i<=a && i<=b; i++) {
        if (a%i==0 && b%i==0) gcd = i;
    }
    lcm = a / gcd * b;

    cout << a << "," << b << "的最大公因數為" << gcd << " 最小公倍數為" << lcm << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, b;
    int x, y, tmp;
    int gcd, lcm;

    cout << "本程式將輸入兩數字，求最大公因數(GCD)與最小公倍數(LCM)。" << endl;
    cout << "請輸入第一個數字：";
    cin >> a;
    cout << "請輸入第二個數字：";
    cin >> b;

    // 輾轉相除法
    x = a;
    y = b;
    for ( ; y>0; ) {
        tmp = y;
        y = x%y;
        x = tmp;
    }
    gcd = x;
    lcm = a / gcd * b;

    cout << a << "," << b << "的最大公因數為" << gcd << " 最小公倍數為" << lcm << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int a, b;
    int x, y, tmp;
    int gcd, lcm;

    cout << "本程式將輸入兩數字，求最大公因數(GCD)與最小公倍數(LCM)。" << endl;
    cout << "請輸入第一個數字：";
    cin >> a;
    cout << "請輸入第二個數字：";
    cin >> b;

    // 輾轉相除法, 使用while
    x = a;
    y = b;
    while (y>0) {
        tmp = y;
        y = x%y;
        x = tmp;
    }
    gcd = x;
    lcm = a / gcd * b;

    cout << a << "," << b << "的最大公因數為" << gcd << " 最小公倍數為" << lcm << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

// 輾轉相除法, 使用遞迴
int calc_gcd(int a, int b) {
    if (b==0) return a;
    return calc_gcd(b, a%b);
}

int main() {
    int a, b;
    int gcd, lcm;

    cout << "本程式將輸入兩數字，求最大公因數(GCD)與最小公倍數(LCM)。" << endl;
    cout << "請輸入第一個數字：";
    cin >> a;
    cout << "請輸入第二個數字：";
    cin >> b;

    gcd = calc_gcd(a, b);
    lcm = a / gcd * b;

    cout << a << "," << b << "的最大公因數為" << gcd << " 最小公倍數為" << lcm << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "請輸出四位數（d<sub>1</sub>d<sub>2</sub>d<sub>3</sub>d<sub>4</sub>）中，所有位數總和為9的數值。（即d<sub>1</sub>+d<sub>2</sub>+d<sub>3</sub>+d<sub>4</sub>=9）",
      "run" => array(
"請輸出四位數中，所有位數總和為9的數值。
這些數值有：1008 1017 1026 1035 1044 1053 1062 1071 1080 1107 1116 1125 1134 1143 1152 1161 1170 1206 1215 1224 1233 1242 1251 1260 1305 1314 1323 1332 1341 1350 1404 1413 1422 1431 1440 1503 1512 1521 1530 1602 1611 1620 1701 1710 1800 2007 2016 2025 2034 2043 2052 2061 2070 2106 2115 2124 2133 2142 2151 2160 2205 2214 2223 2232 2241 2250 2304 2313 2322 2331 2340 2403 2412 2421 2430 2502 2511 2520 2601 2610 2700 3006 3015 3024 3033 3042 3051 3060 3105 3114 3123 3132 3141 3150 3204 3213 3222 3231 3240 3303 3312 3321 3330 3402 3411 3420 3501 3510 3600 4005 4014 4023 4032 4041 4050 4104 4113 4122 4131 4140 4203 4212 4221 4230 4302 4311 4320 4401 4410 4500 5004 5013 5022 5031 5040 5103 5112 5121 5130 5202 5211 5220 5301 5310 5400 6003 6012 6021 6030 6102 6111 6120 6201 6210 6300 7002 7011 7020 7101 7110 7200 8001 8010 8100 9000"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    cout << "請輸出四位數中，所有位數總和為9的數值。" << endl;

    cout << "這些數值有：";
    for (int i=1000; i<=9999; i++) {
        int a, b, c, d;
        a = i/1000%10;
        b = i/100%10;
        c = i/10%10;
        d = i/1%10;
        if (a+b+c+d==9) {
            cout << i << " ";
        }
    }
    cout << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "計算任意正整數Ｎ的階乘值（Ｎ！）。(N<20) (Ｎ！=N*(N-1)*……*2*1)",
      "run" => array(
"計算任意正整數Ｎ的階乘值（Ｎ！）
請輸入此正整數=<i>5</i>
1*2*...*<i>5</i>=<i>120</i>", 
"計算任意正整數Ｎ的階乘值（Ｎ！）
請輸入此正整數=<i>10</i>
1*2*...*<i>10</i>=<i>3628800</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, product;

    cout << "計算任意正整數Ｎ的階乘值（Ｎ！）" << endl;
    cout << "請輸入此正整數=";
    cin >> n;

    product = 1;
    for (int i=1; i<=n; i++) {
        product *= i;
    }

    cout << "1*2*...*" << n << "=" << product << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "計算並列印出2的前20次方之數值。",
      "run" => array(
"本程式將計算並列印出2的前20次方之數值。
2的 1 次方為 2
2的 2 次方為 4
2的 3 次方為 8
2的 4 次方為 16
2的 5 次方為 32
2的 6 次方為 64
2的 7 次方為 128
2的 8 次方為 256
2的 9 次方為 512
2的 10 次方為 1024
2的 11 次方為 2048
2的 12 次方為 4096
2的 13 次方為 8192
2的 14 次方為 16384
2的 15 次方為 32768
2的 16 次方為 65536
2的 17 次方為 131072
2的 18 次方為 262144
2的 19 次方為 524288
2的 20 次方為 1048576"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int i, pr;
    cout << "本程式將計算並列印出2的前20次方之數值。" << endl;

    pr = 1;
    for (i=1; i<=20; i+=1) {
        pr *= 2;
        cout << "2的 " << i << " 次方為 " << pr << endl;
    }

    return 0;
}
')
    ),
    (object)array(
      "desc" => "Fibonacci數列﹦0,1,1,2,3,5,8,13,……<br>
      即 <i>第I位數﹦第(I-1)位數+第(I-2)位數, I>2</i><br>
      請列出Fibonacci數列的前25項。",
      "run" => array(
"本程式將列出Fibonacci數列的前25項。
這些數列為：0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584 4181 6765 10946 17711 28657 46368"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int a, b, c;
    cout << "本程式將列出Fibonacci數列的前25項。" << endl;

    cout << "這些數列為：";
    a = 0;
    b = 1;
    cout << "0 1";
    for (int i=0; i<25-2; i++) {
        c = a + b;
        cout << " " << c;
        a = b;
        b = c;
    }
    cout << endl;

    return 0;
}
', '#include <iostream>
using namespace std;

int main() {
    int fi[26];    // 使用陣列儲存大量數值
    cout << "本程式將列出Fibonacci數列的前25項。" << endl;

    fi[1] = 0;
    fi[2] = 1;
    for (int i=3; i<=25; i++) {
        fi[i] = fi[i-1] + fi[i-2];
    }

    cout << "這些數列為：";
    for (int i=1; i<=25; i++) {
        cout << fi[i] << " ";
    }
    cout << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

// Fibonacci數列遞迴式
int fi(int n) {
    if (n==1) return 0;
    if (n==2) return 1;
    return fi(n-1) + fi(n-2);
}

int main() {
    cout << "本程式將列出Fibonacci數列的前25項。" << endl;

    cout << "這些數列為：";
    for (int i=1; i<=25; i++) {
        cout << fi(i) << " ";
    }
    cout << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "一個數等於它所有的因數和﹝不包括它本身﹞，這種數我們叫它完全數<br>
      像      6=1+2+3<br>
              28=1+2+4+7+14<br>
      請列印出10000之內，所有的完全數。",
      "run" => array(
"本程式將列印出10000之內，所有的完全數。
這些數值有：6 28 496 8128"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, factor, sum;
    cout << "本程式將列印出10000之內，所有的完全數。" << endl;

    cout << "這些數值有：";
    for (n=1; n<=10000; n++) {
        sum = 0;
        for (factor=1; factor<n; factor++) {
            if (n%factor==0) sum += factor;
        }

        if (sum==n) {
            cout << n << " ";
        }
    }
    cout << endl;

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    cout << "本程式將列印出10000之內，所有的完全數。" << endl;

    cout << "這些數值有：";
    for (int n=1; n<=10000; n++) {
        int sum = 0;
        for (int factor=1; factor<n; factor++) {
            if (n%factor==0) sum += factor;
        }

        if (sum==n) {
            cout << n << " ";
        }
    }
    cout << endl;

    return 0;
}
')
    ),
    (object)array(
      "desc" => "輸入一正整數，列出此數的所有正因數，並判斷此數字是否為質數？",
      "run" => array(
"輸入一正整數，列出此數的所有正因數，並判斷此數字是否為質數
請輸入一個數字:<i>15</i>
<i>15</i>的因數有:<i>1 3 5 15</i>
<i>15不為質數</i>", 
"輸入一正整數，列出此數的所有正因數，並判斷此數字是否為質數
請輸入一個數字:<i>121321</i>
<i>121321</i>的因數有:<i>1 121321</i>
<i>121321為質數</i>"
      ),
      "flow" => array(),
      "ans" => array('
#include <iostream>
using namespace std;

int main() {
    int n, i, count;

    cout << "輸入一正整數，列出此數的所有正因數，並判斷此數字是否為質數" << endl;
    cout << "請輸入一個數字:";
    cin >> n;

    cout << n << "的因數有:";
    count = 0;
    for (i=1; i<=n; i+=1) {
        if (n%i==0) {
            count += 1;
            cout << i << " ";
        }
    }
    cout << endl;

    if (count==2) {
        cout << n << "為質數" << endl;
    }
    else {
        cout << n << "不為質數" << endl;
    }

    return 0;
}
', '
#include <iostream>
using namespace std;

int main() {
    int n, i, count=0;

    cout << "輸入一正整數，列出此數的所有正因數，並判斷此數字是否為質數" << endl;
    cout << "請輸入一個數字:";
    cin >> n;

    cout << n << "的因數有:";
    for (i=1; i<n; i+=1) {
        if (n%i==0) {
            count += 1;
            cout << i << " ";
        }
    }
    count += 1;
    cout << n << endl;

    if (count==2) {
        cout << n << "為質數" << endl;
    }
    else {
        cout << n << "不為質數" << endl;
    }

    return 0;
}
')
    ),
  );

  $probOrder = array();
  for ($i=1; $i<=15; $i++) {
    $probOrder[$i] = sprintf("b%02d", $i);
  }
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