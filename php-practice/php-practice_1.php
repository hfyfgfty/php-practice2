// Q1 変数と文字列
<?php
$name = "「村越」";   // 名前格納
echo "私の名前は" . $name . "です";   // 文字列結合で表示



// Q2 四則演算
<?php
$num = 5 * 4;        // 5＊4の値を格納
echo " " . $num . "\n";   // 20を表示（5＊4の値）
echo ($num / 2);     // 10を表示（20/2の値）
?>



// Q3 日付操作　date関数
<?php
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です'
?>



// Q4 条件分岐-1 if文
<?php
$device = "windows";  // 文字列を格納

if ($device === "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device === "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}
?>



// Q5 条件分岐-2 三項演算子
<?php
$age = 25;  // 数値を格納
echo ($age < 18) ? "未成年です。" : "成人です。";
?>



// Q6 配列
<?php
// 関東地方の都・県を格納
$kanto = ["東京都", "神奈川県", "埼玉県", "千葉県", "茨城県", "栃木県", "群馬県"];

// 3、4番目を取得
$third  = $kanto[2]; // 埼玉県
$fourth = $kanto[3]; // 千葉県

echo $third . "と" . $fourth . "は関東地方の都道府県です。";
?>



// Q7 連想配列-1
<?php
// 関東の県庁所在地の連想配列
$kanto = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "茨城県"   => "水戸市"
];

//　すべて縦に表示
foreach ($kanto as $city) {
    echo $city . "\n";
}
?>



// Q8 連想配列-2
<?php
// 関東の県庁所在地の連想配列
$kanto = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "茨城県"   => "水戸市"
];

// 県名を格納
$target = "神奈川県";

// if文判定
if ($target === "神奈川県") {
    // 連想配列を使って出力
    echo $target . "の県庁所在地は、" . $kanto[$target] . "です。";
}
?>



// Q9 連想配列-3
<?php
// 関東＋関東以外＊2
$kanto = [
    "東京都"   => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県"   => "千葉市",
    "埼玉県"   => "さいたま市",
    "栃木県"   => "宇都宮市",
    "群馬県"   => "前橋市",
    "茨城県"   => "水戸市",
    "愛知県"   => "名古屋市",
    "大阪府"   => "大阪市"
];

// 関東地方の都道府県名だけを定義
$kanto_only = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"];

// 連想配列を1つずつ処理
foreach ($kanto as $pref => $city) {

    // 関東かどうか判定
    if (in_array($pref, $kanto_only)) {
        
    // 関東：県庁所在地を表示
        echo $pref . "の県庁所在地は、" . $city . "です。\n";
    } else {
    
    // 関東以外：は関東ではありません表示
        echo $pref . "は関東地方ではありません。\n";
    }
}
?>



// Q10 関数-1　hello関数
<?php
// hello関数定義
function hello($name) {
    return $name . "さん、こんにちは。";
}

// 関数を2回実行して返り値を表示
echo hello("金谷") . "\n";
echo hello("安藤") . "\n";
?>



// Q11 関数-2
<?php
// 関数（税抜き価格を取り、税込価格を返す）
function calcTaxInPrice($price) {
        return $price * 1.10; // 消費税10%加算して税込価格を返す
        }

$price = 1000; // 税抜き価格を代入

// 関数を実行し、返り値を税込価格として変数代入
$taxInPrice = calcTaxInPrice($price);

// 結果を表示
echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";
?>



// Q12 関数とif文
<?php
// 奇数か偶数かを判別する関数
function distinguishNum($num) {

    // 偶数か判定（2で割って余りが0なら偶数）
    if ($num % 2 === 0) {
        return $num . "は偶数です。";
    } else {
        return $num . "は奇数です。";
    }
}

// 奇数と偶数を渡して実行
echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";
?>



// Q13 関数とswitch文
<?php
// 成績を評価する関数
function evaluateGrade($seiseki) {

    // 成績に応じて処理を分ける
    switch ($seiseki) {
        case "A":
        case "B":
            return "合格です。";

        case "C":
            return "合格ですが追加課題があります。";

        case "D":
            return "不合格です。";

        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

// 関数を実行の結果を2種類表示
echo evaluateGrade("A") . "\n";
echo evaluateGrade("Z") . "\n";
?>