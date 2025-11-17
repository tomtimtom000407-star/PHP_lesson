<?php
// Q1 変数と文字列
<?php
$name = "「齋藤」";

echo "私の名前は $name です。";

// Q2 四則演算
<?php 
$num = 5 * 4 ;
$x = $num / 2 ;

echo $num;
echo "\n"; 
echo $x; 

// Q3 日付操作
<?php
date_default_timezone_set('Asia/Tokyo');

echo date('現在時刻は、Y年m月d日 H時i分s秒です。');

// Q4 条件分岐-1 if文
<?php
$device =' mac';

if ($device) {
  echo '使用OSは、macです。';
} else {
  echo '使用OSは、windowsです。','どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
<?php

$age = 18;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
<?php
$array = [
 '東京都', 
 '埼玉県', 
 '茨城県', 
 '栃木県',
 '千葉県',
 '神奈川県',
 '群馬県',  
];
$a = 3;
$b = 4;

    echo $array[$a].'と'.$array[$b].'は関東地方の都道府県です。';

// Q7 連想配列-1
<?php
$array = [
  "東京都"=>"新宿区", 
  "神奈川県"=>"横浜市",
   "千葉県"=>"千葉市", 
   "埼玉県"=>"さいたま市",
    "栃木県"=>"宇都宮市", 
    "群馬県"=>"前橋市",
     "茨城県"=>"水戸市"
    ];

foreach ($array as $kento) {
    echo $kento . "\n";
}

// Q8 連想配列-2
<?php
$array = [
  "東京都"=>"新宿区", 
  "神奈川県"=>"横浜市",
   "千葉県"=>"千葉市", 
   "埼玉県"=>"さいたま市",
    "栃木県"=>"宇都宮市", 
    "群馬県"=>"前橋市",
     "茨城県"=>"水戸市"
    ];

    $saitama="さいたま市";

if (isset($array["埼玉県"]) && $array["埼玉県"] === $saitama) {
  echo '埼玉県の県庁所在地は、さいたま市です。';
} else {
  echo '不明';
}

// Q9 連想配列-3

<?php
$kanto = [
  "東京都"=>"新宿区", 
  "神奈川県"=>"横浜市",
   "千葉県"=>"千葉市", 
   "埼玉県"=>"さいたま市",
    "栃木県"=>"宇都宮市", 
    "群馬県"=>"前橋市",
     "茨城県"=>"水戸市"
    ];

$array = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県", "愛知県", "大阪府"];

foreach ($array as $kenmei) {
if (isset($kanto[$kenmei])) {
    $kentyo_syozaichi = $kanto[$kenmei];
  echo $kenmei."の県庁所在地は、".$kentyo_syozaichi."です。\n";
} else {
  echo $kenmei."は関東地方ではありません。\n";
}
}

// Q10 関数-1
<?php
function hello($name='齋藤')
{
  echo $name.'さん、こんにちは。';
  echo "\n"; 
}

hello('金谷');
hello('安藤');

// Q11 関数-2
<?php

function calcTaxInPrice($price) {
    $syouhizei= 0.10; 
    $price_with_tax = $price * (1 + $syouhizei);
    return $price_with_tax; 
}

$price = 1000; 

$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。\n";

// Q12 関数とif文
<?php

$suuji_list = array(11,24);

function distinguishNum ($suuji) {
if ($suuji % 2 == 0) {
    
  echo $suuji."は偶数です。\n";
} else {
    
  echo $suuji."は奇数です\n";
}
}

foreach ($suuji_list as $num) {
    distinguishNum($num);
}

// Q13 関数とswitch文
<?php

$seiseki_list = array('A','E');

function evaluateGrade ($seiseki) {
switch ($seiseki) {
    case 'A':
    case 'B': 
        echo '合格です。';
        break;

    case 'C':
        echo '合格ですが、追加課題があります。';
        break;

    case 'D':
        echo '不合格です。';
        break;

    default:
        echo '判定不明です。講師に問い合わせてください。';
        break;
}
  echo "\n";
}
foreach ($seiseki_list as $num) {
    evaluateGrade($num);
}

