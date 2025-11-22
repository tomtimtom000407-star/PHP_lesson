<!--  -->
<?php
// 1

for($x=1;$x<=100;$x++){
    if(($x % 4)&&($x % 5)=== 0)
    {
        echo'tic-tac'."\n";
    }
    else if ($x % 4 === 0)
    {
        echo'tic'."\n";
    }
    else if ($x % 5 === 0)
    {
        echo'tac'."\n";
    }
    else
    {
        echo $x."\n";
    }
}

//2 
// var_dump確認

<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

var_dump($personalInfos);

//出力結果
array(3) {
  [0]=>
  array(3) {
    ["name"]=>
    string(7) "Aさん"
    ["mail"]=>
    string(12) "aaa@mail.com"
    ["tel"]=>
    string(11) "09011112222"
  }
  [1]=>
  array(3) {
    ["name"]=>
    string(7) "Bさん"
    ["mail"]=>
    string(12) "bbb@mail.com"
    ["tel"]=>
    string(11) "08033334444"
  }
  [2]=>
  array(3) {
    ["name"]=>
    string(7) "Cさん"
    ["mail"]=>
    string(12) "ccc@mail.com"
    ["tel"]=>
    string(11) "09055556666"
  }
}

//Bさんさんの電話番号は08033334444です。
echo $personalInfos[1]['name'].'さんの電話番号は'.$personalInfos[1]['tel'].'です。';


//1番目のAさんのメールアドレスはaaa@mail.comで、電話番号は09011112222です。
//2番目のBさんのメールアドレスはbbb@mail.comで、電話番号は08033334444です。
//3番目のCさんのメールアドレスはccc@mail.comで、電話番号は09055556666です。
foreach ($personalInfos as $index => $kojinjoho){
    echo ($index + 1).'番目の'.$kojinjoho['name'].'のメールアドレスは'.$kojinjoho['mail'].'で、電話番号は'.$kojinjoho['tel'].'です。'."\n";
}

//3番目の答え

<?php

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
    
];

$ageList = [25, 30, 18];

foreach($ageList as $key=>&$val){
  $personalInfos[$key]["age"]=$val;
}
var_dump($personalInfos);



//Q3
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }



    public function attend()
    {
        
        echo '学籍番号'.$this->studentId.'番の生徒は'.$this->studentName.'です';
    }
}


        $id = 120;
        $name = '山田';
        
        $yamada = new Student($id,$name);


$yamada->attend();

//Q4 山田はPHPの授業に参加しました。学生番号：120

<?php

class Student
{
    public $name;
    public $bangou;
    
    public function __construct($gakuseiname,$gakusekibangou)
    {
        $this->name = $gakuseiname ;
        $this->bangou = $gakusekibangou ; 
    }
    
    public function attend ($gengo){
        $this->gengo = 'PHP';
    }
    
    public function information(){
        echo $this->name.'は'.$this->gengo.'の授業に参加しました。学生番号：'.$this->bangou;
    }
}
    
$yamada = new Student('山田', 120);
$yamada->attend('PHP');

$yamada->information();








//Q5

<?php


$date = new DateTime('2025-10-21');
 
echo $date->format('Y-m-d');


<?php

$origin = new DateTime('1992-4-25');
$target = new DateTime('2025-11-21');
$diff = $origin->diff($target);

echo $diff->format('あの日から%a日経過しました。');

?>




内容追記したらadd,commit,pushを実行