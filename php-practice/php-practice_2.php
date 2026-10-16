<?php

// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++) {

    if ($i % 4 === 0 && $i % 5 === 0) { //①4の倍数・5の倍数の時
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) { //②　①じゃない時に4の倍数の時
        echo "tic\n";
    } elseif ($i % 5 === 0) { //③　①②じゃない時に5の倍数の時
        echo "tac\n";
    } else { //④　①②③じゃない時
        echo $i . "\n";
    }
}
?>


// Q2 多次元配列
<?php

// 指定記述
$personalInfos = [
    ['name' => 'Aさん',
     'mail' => 'aaa@mail.com',
     'tel'  => '09011112222'
    ],
    ['name' => 'Bさん',
     'mail' => 'bbb@mail.com',
     'tel'  => '08033334444'
    ],
    ['name' => 'Cさん',
     'mail' => 'ccc@mail.com',
     'tel'  => '09055556666'
    ],
];


// 問1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";

// 問2
foreach ($personalInfos as $index => $info) {
    $number = $index + 1; // 配列は0スタート +1して1番目にする
    echo "{$number}番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
}

// 問3
$ageList = [25, 30, 18];

// foreachでageを追加する
foreach ($personalInfos as $index => $info) {
    $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);


// Q3 オブジェクト-1
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
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田');
echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";


// Q4 オブジェクト-2
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

    public function attend($subject)
    {
        echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
// 問1
<?php

// 今日の日付を基準にDateTimeを作成
$dt = new DateTime();

// 1ヶ月前に変更
$dt->modify('-1 month');

// 指定フォーマットで出力（YYYY-MM-DD）
echo $dt->format('Y-m-d');

// 問2
<?php
$today = new DateTime();               // 今日の日付
$past  = new DateTime('1992-04-25');   // あの日の日付

$diff = $today->diff($past);           // 日付の差を計算

echo "あの日から{$diff->days}日経過しました。";
?>