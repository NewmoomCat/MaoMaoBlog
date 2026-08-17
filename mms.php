<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>MaoMaoPE</title>
    <link rel='stylesheet' href='style/main.css'>
</head>
<body>
    <div class="container">
        <h1 class="top-title">MaoMaoPE服务器</h1>
        <div class="terminal-box">
            <h2 class="terminal-title">服务器介绍</h2>
            <?php
            $texts = [
                "猫猫怀旧休闲服，一个主打怀旧休闲的服务器！",
                "服务器最初是做高版本1.21.x。后来\"新月猫Neko\"想试试开低版本怀旧服务器，也想回忆回忆过去的童年，于是便有了MaoMaoPE",
                "服务器用的是我们团队的MatchaCake(闭源的), 支持0.16.x ~ 1.1.x的版本游玩(更建议你们用1.0.4)",
                "(其实搞跨版本支持最初是为了装逼的，直到我们把0.16.x ~ 1.0.x搞出来...到后面变得一发不可收拾，直接支持到0.10 ~ 1.1)"
            ];
            foreach($texts as $txt) {
                echo "<p class='p_size'>$txt</p>";
            }
            ?>
        </div>
        <a href="index.php", class="button">返回上一页</a>
        <a href="https://qm.qq.com/q/HBv5WcpGk8", class="button">加入QQ群</a>
        <!-- <a href="minecraft://?addExternalServer=服务器名称|服务器地址:端口">test</a> -->
         <div class="footer">
                &copy; 2026 XinYueNeko
        </div>
    </div>
    
</body>
</html>