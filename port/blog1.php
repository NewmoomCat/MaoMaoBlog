<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>博客1: 协议版本</title>
    <link rel='stylesheet' href='../style/main.css'>
</head>
<body>
    <div>
        <div class="terminal-box">
            <h1 class="terminal-title-l">协议版本列表: </h1>
            <?php
            $protocols = [
                "0.9.0 - 17",
                "0.9.5 - 18",
                "0.10.0 - 20",
                "0.11.0 - 27",
                "0.12.1 - 34",
                "0.13.0 - 38",
                "0.13.2 - 39",
                "0.14.0 - 45",
                "0.14.1 - 46",
                "0.14.2 - 60",
                "0.14.3 - 70",
                "0.15.0 - 81",
                "0.15.4 - 82",
            ];
            $protocols2 = [
                "0.15.9 - 83",
                "0.15.10 - 84",
                "0.16.0 - 91",
                "1.0.0 - 100",
                "1.0.3 - 101",
                "1.0.4 - 102",
                "1.0.5 - 105",
                "1.0.6 - 106",
                "1.0.7 - 107",
                "1.1.0 - 110",
                "1.1.1 - 111",
                "1.1.2 - 112",
                "1.1.3 - 113",
            ];

            $count = count($protocols);
            for ($i = 0; $i < $count; $i++) {
                echo "<p class='p_size'>{$protocols[$i]} | {$protocols2[$i]}</p>";
            }
            ?>
            <p class="p_size">以上协议版本仅列出正式版协议，测试版均未列出</p>
        </div>
        <br><a href="../me.php", class="button">返回上一页</a>
        <a href="../index.php", class="button">返回主页</a>
        <div class="footer">
            &copy; 2026 XinYueNeko
        </div>
    </div>
</body>
</html>