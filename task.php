<?php

# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);

# 以下に回答を記載

    $names = ["田中", "佐藤", "佐々木", "高橋"];

    array_push($names, "斎藤");
    print_r($names);

echo PHP_EOL;

print("#####q2#####".PHP_EOL);

# 以下に回答を記載

    $array1 = ["dog", "cat", "fish"];
    $array2 = ["bird", "bat", "tiger"];

    $array = array_merge($array1, $array2);
    print_r($array);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);

# 以下に回答を記載

    $numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];
    $count == 0;

    foreach ($numbers as $number) {
        if ($number === 3) {
        $count++;
        }
    }

    print_r("配列の中に3は" . $count . "回あります。");

echo PHP_EOL;

print("#####q4#####".PHP_EOL);

# 以下に回答を記載

    $sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

    $sports = array_diff($sports, [null]);
    print_r($sports);

echo PHP_EOL;

print("#####q5#####".PHP_EOL);

# 以下に回答を記載

    $array1 = [];
    $array2 = [1, 5, 8, 10];

    var_dump(empty($array1));
    var_dump(empty($array2));

echo PHP_EOL;

print("#####q6#####".PHP_EOL);

# 以下に回答を記載

    $numbers1 = [1, 2, 3, 4, 5];
    $numbers2 = [];

    foreach ($numbers1 as $number) {
    $number2 = $number * 10;
    array_push($numbers2, $number2);
    }

    print_r($numbers2);

echo PHP_EOL;

print("#####q7#####".PHP_EOL);

# 以下に回答を記載

    $array = ["1", "2", "3", "4", "5"];
    $array = array_map('intval', $array);

    # 以下は変更しないで下さい
    var_dump($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);

# 以下に回答を記載

    $programming_languages = ["php", "ruby", "python", "javascript"];

    $programming_languages = array_map('ucfirst', $programming_languages);
    $upper_case_programming_languages = array_map('strtoupper', $programming_languages);

    # 以下は変更しないで下さい
    print_r($programming_languages);
    echo PHP_EOL;
    print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);

# 以下に回答を記載

    $names = ["田中", "佐藤", "佐々木", "高橋"];
    $names2 = [];

    foreach ($names as $key => $name) {
    $number = $key + 1;
    $name2 = "会員No." . $number . " " . $name;
    array_push($names2, $name2);
    }

    print_r($names2);

echo PHP_EOL;

print("#####q10#####".PHP_EOL);

# 以下に回答を記載

    $foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];

    foreach ($foods as $food) {
        if (preg_match('/うに/', $food)) {
            print_r($food . "：好物です" . PHP_EOL);
        } else {
            print_r($food. "：まぁまぁ好きです" . PHP_EOL);
        }
    }

echo PHP_EOL;

print("#####q11#####".PHP_EOL);

# 以下に回答を記載

    $sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];
    $sports2 = [];  // 新しい配列を作る

    foreach ($sports as $key => $sport) {
        if (is_array($sport)) {             // $sportが配列かどうか検証する
            // true（配列）の処理
            $sports2 = array_merge($sports2, $sport); //$sports2に$sportを結合して、$sports2に代入する
        } else {
            // false（配列ではない）の処理
            array_push($sports2, $sport);   //$sports2に$sportを追加する
        }
    }

    $sports2 = array_unique($sports2);      // $sports2の重複した要素を削除する
    $sports2 = array_values($sports2);       // $sports2の要素に添字を振り直す
    $sports3 = [];                          // 新しい配列を作る

    foreach ($sports2 as $key => $sport) {
        $number = $key + 1;                 // $keyに1を足して$numberに代入する
        $sport3 = "No." . $number . " " . $sport;
        array_push($sports3, $sport3);      // $sports3に$sport3を追加する
    }

    print_r("ユーザーの趣味一覧" . PHP_EOL);
    foreach ($sports3 as $sport) {
        print_r($sport . PHP_EOL);
    }

echo PHP_EOL;

print("#####q12#####".PHP_EOL);

# 以下に回答を記載

    $data = ["user" => ["name" => "satou", "age" => 33]];   // 多次元連想配列？
    echo $data["user"]["name"];                             // 変数$dataに格納されているuserの中のnameを出力

echo PHP_EOL;

print("#####q13#####".PHP_EOL);

# 以下に回答を記載

    $user_data   = ["name" => "神里", "age" => 31, "address" => "埼玉"];
    $update_data = ["age" => 32, "address" => "沖縄"];
    $user_data   = array_merge($user_data, $update_data);   // $user_dataに$update_dataを結合して（同じキーの場合は上書きされる）$user_dataに代入
    print_r($user_data);                                    // $user_dataを出力

echo PHP_EOL;

print("#####q14#####".PHP_EOL);

# 以下に回答を記載

    $data = [
        "name"   => "satou",
        "age"    => 33,
        "addres" => "saitama",
        "hobby"  => "soccer",
        "email"  => "hoge@fuga.com"
        ];

    $data = array_values($data);    // 値だけを抽出して配列を返し、帰ってきた配列を$data代入する
    print_r($data);                 // $dataを出力する

echo PHP_EOL;

print("#####q15#####".PHP_EOL);

# 以下に回答を記載

    // array_key_exists() 配列のkeyが存在するか調べる関数
    $data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
    if (array_key_exists("age", $data1)) {
        print_r("OK" . PHP_EOL);
    } else {
        print_r("NG" . PHP_EOL);
    }

    $data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];
    if (array_key_exists("age", $data2)) {
        print_r("OK" . PHP_EOL);
    } else {
        print_r("NG" . PHP_EOL);
    }

    // isset() 変数がセットされていて、それがNULLかどうか調べる関数
    // 指定したキーの要素がNULLの場合はfalseを返す
    $data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
    if (isset($data1["age"])) {
        print_r("OK" . PHP_EOL);
    } else {
        print_r("NG" . PHP_EOL);
    }

    $data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];
    if (isset($data2["age"])) {
        print_r("OK" . PHP_EOL);
    } else {
        print_r("NG" . PHP_EOL);
    }

echo PHP_EOL;

print("#####q16#####".PHP_EOL);

# 以下に回答を記載

    $users = [
        ["name" => "satou", "age" => 22],
        ["name" => "yamada", "age" => 12],
        ["name" => "takahashi", "age" => 32],
        ["name" => "nakamura", "age" => 41]
    ];

    foreach ($users as $key => $user) {
        echo "私の名前は" . $user["name"] . "です。年齢は" . $user["age"] . "歳です。" . PHP_EOL;
    }

echo PHP_EOL;

print("#####q17#####".PHP_EOL);

// クラスを定義（設計図に例えられることが多い）
class User
{

    // プロパティ（インスタンス変数）：クラスが持つ情報
    protected $name;
    protected $age;
    protected $sex;

    # コードを追加
    // constructメソッド：プロパティの初期値の設定
    public function __construct($user_name, $user_age, $user_sex)
    {
        $this->name = $user_name;
        $this->age = $user_age;
        $this->sex = $user_sex;
    }

    public function info()
    {
        print("名前:" . $this->name . PHP_EOL);
        print("年齢:" . $this->age . PHP_EOL);
        print("性別:" . $this->sex . PHP_EOL);
    }

}

    // インスタンス（物体）を作成
    $user1 = new User("神里", 32, "男");
    $user2 = new User("あじー", 32, "男");

    $user1->info();
    print("-------------".PHP_EOL);
    $user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

# コードを追加

    // クラスの定義
    class Man
    {

        // プロパティの定義
        protected $user_name;
        protected $user_age;

        // constructメソッド（プロパティの初期値）の定義
        public function __construct($user_name, $user_age)
        {
            $this->name = $user_name;
            $this->age = $user_age;
        }

        // introduceメソッドの定義
        public function introduce()
        {
            if ($this->age > 11) {
                print("こんにちは，あじーと申します。宜しくお願いいたします。" . PHP_EOL);
            } else {
                print("はいさいまいど〜，ゆたぼんです！！！" . PHP_EOL);
            }
        }

    }

    // インスタンス生成
    $man1 = new Man("あじー", 32);
    $man2 = new Man("ゆたぼん", 10);

    // introduceメソッドの呼び出し
    $man1->introduce();
    $man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);

    // クラスを定義
    class Item{
    # 以下を修正して下さい

        // プロパティを定義
        public $name;

        function __construct($book_name){
            $this->name = $book_name;
        }
    }
# 以下は変更しないで下さい

    $book = new Item("ゼロ秒思考");
    print($book->name.PHP_EOL);

    // プロパティのアクセス権によるエラー。
    // 367行目「$book->name」がクラス外からアクセスしているため、protectedで定義しているプロパティにアクセスできていなかった。
    // よって、クラス外からアクセス可能な「public」で定義するとエラー解消となる。

    echo PHP_EOL;

print("#####q20#####".PHP_EOL);

    class Human
    {

    # コードを追加
        public $name;   // クラス外から呼び出すのでpublicで定義
        public $age;

        function __construct($user_name, $user_age)
        {
            $this->name = $user_name;
            $this->age = $user_age;
        }

    }

    class Zoo
    {

    # コードを追加
        protected $name;
        protected $entry_fee;

        function __construct($zoo_name, $zoo_entry_fee)
        {
            $this->name = $zoo_name;
            $this->entry_fee = $zoo_entry_fee;
        }

        function info_entry_fee(Human $human)
        {
            if ($human->age <= 5) {
                print($human->name . "さんの入場料金は " . $this->entry_fee["infant"] . " 円です。" . PHP_EOL);
            } elseif($human->age <= 12) {
                print($human->name . "さんの入場料金は " . $this->entry_fee["children"] . " 円です。" . PHP_EOL);
            } elseif($human->age <= 64) {
                print($human->name . "さんの入場料金は " . $this->entry_fee["adult"] . " 円です。" . PHP_EOL);
            } elseif($human->age <= 120) {
                print($human->name . "さんの入場料金は " . $this->entry_fee["senior"] . "円です。" . PHP_EOL);
            }
        }

    }

    $zoo = new Zoo("旭山動物園",["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

    $human1 = new Human("たま", 3);
    $human2 = new Human("ゆたぼん", 10);
    $human3 = new Human("あじー", 32);
    $human4 = new Human("ぎん", 108);

    $humans = [$human1, $human2, $human3, $human4];

    foreach($humans as $human){
    $zoo->info_entry_fee($human);
    }

echo PHP_EOL;

print("#####q21#####".PHP_EOL);

    for ($i = 1; $i < 31; $i++) {
        if ($i % 105 == 0) {
            print("FizzBuzzHoge" . PHP_EOL);
        } elseif ($i % 35 == 0) {
            print("BuzzHoge" . PHP_EOL);
        } elseif ($i % 21 == 0) {
            print("FizzHoge" . PHP_EOL);
        } elseif ($i % 15 == 0) {
            print("FizzBuzz" . PHP_EOL);
        } elseif ($i % 7 == 0) {
            print("Hoge" . PHP_EOL);
        } elseif ($i % 5 == 0) {
            print("Buzz" .PHP_EOL);
        } elseif ($i % 3 == 0) {
            print("Fizz" . PHP_EOL);
        } else {
            print($i . PHP_EOL);
        }
    }

    // 回答例2の方がコード量が短くすっきりしていると感じましたが
    // 回答例1の方は学習したことのあるコードで、冗長のように感じますが理解が早かったです。
    // 未経験なので上記にのように感じるのかもしれませんが、
    // 「短い＝良い（わかりやすい）コード」とは言えないのかな？と思いました。

    // ご確認ありがとうございました。
?>
