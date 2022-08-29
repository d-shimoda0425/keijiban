
<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
    $stmt=$pdo->query("select*from keijiban");
    ?>
    <div class="pic_box">
        <img src="4eachblog_logo.jpg" class="logo">
    </div>
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
                
                <h3>入力フォーム</h3>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" name="handlename"></input>
                </div>
                <div> 
                    <label>タイトル</label>
                    <br>
                    <input type="text" name="title"></input>
                </div>
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea rows="10px"cols="20px" class="comments" name="comments"></textarea>
                </div>
                    <input type="submit" class="submit" value="投稿する"></input>
            </form>
            <?php 
                while($row=$stmt->fetch()){
                    echo"<div class='toukou'>";
                    echo"<h2>".$row['title']."</h2>";
                    echo"<div class='contents'>";
                    echo $row['comments'];
                    echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo"</div>";
                    echo"</div>";
                }
            ?>
        </div>
        <div class="right">
            <h3>人気の記事</h3>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP My Adminの使い方</li>
                    <li>今人気のエディタ　Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
            <h3>オススメリンク</h3>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
            <h3>カテゴリ</h3>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>   
        </div>
    </main>
    <footer>
        copyright&copy;internous|4each blog the which provides A to Z about programming.
    </footer>

</body>
</html>