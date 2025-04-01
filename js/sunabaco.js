console.log("Hello JavaScript!")

// 変数
// let course = "プログラミングスクール"
// console.log(course);
// 変数の再代入
// course = "WordPressコース"
// console.log(course);


// 定数
const course = "プログラミングスクール"
console.log(course);
// course = "WordPressコース"
// console.log(course);

// 文字列型の整数
let str = "1"
console.log(typeof(str));

// 数値型の整数
let num = 1
console.log(typeof(num));

// 算術演算
let x = 200;
let y = 100;
console.log(x + y);
console.log(x - y);
console.log(x * y);
console.log(x / y);
console.log(x % y);

// 代入演算
let calc = 1
calc += 1 // calc = calc + 1
calc -= 1 // calc = calc - 1
calc *= 6 // calc = calc * 6
calc /= 2 // calc = calc / 2
calc %= 2 // calc = calc % 2
console.log(calc);

// 配列
let city = ["江別", "高松", "今治", "八代", "コザ"]
console.log(city);
console.log(city[0]);
city[3] = "天草"
console.log(city);

// 連想配列
let prefecture = {北海道:"江別", 香川:"高松", 愛媛:"今治", 熊本:"八代", 沖縄:"コザ"}
console.log(prefecture);
console.log(prefecture["熊本"]);
prefecture["熊本"] = "天草市"
console.log(prefecture);

// 真偽値
let value1 = 1
let value2 = "1"
let value3 = 2

console.log(value1 == value2);
console.log(value1 === value2);
console.log(value1 != value2);
console.log(value1 !== value2);
console.log(value1 > value3);
console.log(value1 >= value3);
console.log(value1 < value3);
console.log(value1 <= value3);

// 条件式（if文）
let score = 10

if(score >= 80){
    // scoreが80点以上の場合の処理
    console.log("大変よくできました")
} else if(score >= 50) {
    // scoreが80点未満だけど50点以上の処理
    console.log("よくできました")
} else {
    // scoreが50未満の場合の処理
    console.log("もっと頑張りましょう！");  
}

// 繰り返し文（for文）
for(let i = 1; i <= 10; i++){
    console.log(i + "回目のHello World");
}

// 関数（function）
function greet(name){
    message = name + "さん、こんにちは！"
    return message
}

// 関数の実行！
greet("SUNABACO")
console.log(message)

console.log("======================");


// カレーを作る関数
function curry(taste){
    console.log("材料を準備する");
    console.log("野菜を切る");
    console.log("肉を切る");
    console.log("鍋で炒める");
    console.log("水を加えて煮る");
    console.log("カレールーを入れる");
    console.log("辛さを" + taste + "にする");
    console.log("ご飯と一緒に盛り付ける");
    console.log(taste + "カレーの完成🍛");
    // 戻り値は呼び出し元に返ってくる
    // menu関数から味によって料金を計算してくれる
    menu(taste)
    console.log(taste+"カレー"+price+"です");
}

curry("激辛")

// 金額を取得する関数
function menu(spiciness){
    price = {甘口:"700円", 辛口:"800円", 激辛:"900円"}
    price = price[spiciness]
    return price
}