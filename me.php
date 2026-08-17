<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>猫猫的介绍页</title>
    <link rel='stylesheet' href='style/main.css'>
</head>
<body>
    <div>
        <div class="terminal-box">
            <h1 class="terminal-title">新月猫Neko</h1>
            <?php
                echo "<p class='p_size'>一个普普通通的学生</p>";
                echo "<p class='p_size'>已经上高中了</p>";

                $pLanguages = ['PHP', 'Java'];
                echo "<p class='p_size'>正在学习";
                foreach($pLanguages as $lang) {
                    $url = ($lang == 'PHP') ? 'https://www.php.net' : 'https://www.java.com';
                    echo "<a href='$url' class='t-link'>$lang</a>";
                    if ($lang !== end($pLanguages)) {
                        echo ", ";
                    }
                }
                echo "</p><br>";

                /* ======== 其他链接 ======== */
                echo "<p class='p_size'>其他链接: </p>";
                $socialLinks = [
                // Link[0] | name     Link[1] | links
                    ['Bilibili', 'https://space.bilibili.com/562830332'],
                    ['X(Twitter)', 'https://x.cn/XinYue_Neko'], // 说你呢！埃隆·马斯克
                    ['Facebook', 'https://www.facebook.com/profile.php?id=61585334816423'], // 还是扎克伯格人好啊，能让我们中国大陆的随便注册
                ];
                foreach($socialLinks as $Link) {
                    echo "<a href='{$Link[1]}' class='t-link'>{$Link[0]}</a><br>";
                }

                echo "<p class='p_size'>博客内容: </p>";
                $blogPorts = [
                    //   $ports[1] | name          $ports[0] | file
                    ['0.9.0 ~ 1.1.7版本的各相协议', 'port/blog1.php'],
                ];
                $index = 1;
                foreach($blogPorts as $ports) {
                    echo "<p class='p_size'>{$index} · <a href='{$ports[1]}' class='t-link'>{$ports[0]}</a></p>";
                }
            ?>
        </div>
        <a href="index.php", class="button">返回主页</a>
        <div class="footer">
                &copy; 2026 XinYueNeko
        </div>
    </div>
</body>
</html>