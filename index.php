<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="fizzbuzz">
        <h1>A：PHPでfizzbuzzを作ろう</h1>
        <div class="guide">
            <h2>◆fizzbuzzとは？</h2>
            <p>ある連続する数字に対して「○の倍数の時は▲をする」のような処理のこと</p>
            <h3>＜条件＞</h3>
            <ul>
                <li>・5〜100までの数字をブラウザ画面に表示すること</li>
                <li>・7の倍数の場合、数字の代わりに「Fizz」を表示すること</li>
                <li>・5の倍数の場合、数字の代わりに「Buzz」を表示すること</li>
                <li>・5と7の両方の倍数の場合、数字の代わりに「FizzBuzz」を表示すること</li>
            </ul>
        </div>
        <div class="execution">
            <ul>
                <?php for($i = 5; $i <= 100; $i++) {
                    if( $i % 5 == 0 && $i % 7 == 0 ) {
                        // 5と7の公倍数の場合の処理
                        echo '<li>FizzBuzz</li>';
                    } else if( $i % 5 == 0 ) {
                        // 5の倍数時の処理
                        echo '<li>Buzz</li>';
                    } else if( $i % 7 == 0 ) {
                        // 7の倍数時の処理
                        echo '<li>Fizz</li>';
                    } else {
                        // 上記以外の数の場合の処理
                        echo '<li>'.$i.'</li>';
                    }
	            } ?>
            </ul>
        </div>
    </div>
</body>
</html>