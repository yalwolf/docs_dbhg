<?php

    $source = $_GET['source'];
	$html = file_get_contents('https://api.docs.dbhg.top/download/'. $source);
	$nic = json_decode($html,true);
?>
<!DOCTYPE html>
<html lang="zh-CN" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>下载 | 后宫文档</title>
    <link rel="shortcut icon" href="../images/logo.ico" width="64px" height="64px" type="image/x-icon" />
	<link rel="apple-touch-icon" href="../images/logo.ico" width="64px" height="64px" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/download.css" />
    <script src="../js/main.js"></script>
    <style>
  .source option {
   text-align:center;
  }
  .source .button {
    padding: 4px 10px;
    color: white;
    text-align: center;
    font-size: 13px;
    border-width: 1;
    background-color: #4CAF50;
    border-color: red;
    border-radius: 12px;
	margin:0px 0px 0px 0px;
  }
  .source .button:hover {
    background-color: #3e8e41;
    border-width: 1;
    border-color: red;
    cursor: pointer;
  }
@media (min-width: 280px) {
  .source .button{
    padding: 4px 10px;
	margin:25px -10px 0px 0px;
  }
}

@media (min-width: 360px) {
  .source .button{
    padding: 4px 10px;
	margin:20px 0px 0px 0px;
  }
}

@media (min-width: 412px) {
  .source .button{
    padding: 4px 10px;
	margin:30px 0px 0px 0px;
  }
}

@media (min-width: 820px) {
  .source .button{
    padding: 10px 15px;
	font-size:15px;
	margin:20px 0px 0px 0px;
  }
}

@media (min-width: 1080px) {
  .source .button{
    padding: 4px 10px;
	font-size:15px;
	margin:20px 0px 0px 0px;
  }
}
    </style>
</head>

<body>

    <nav class="border-bottom">
        <div class="uk-container">
            <div data-uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo uk-text-small" href="index.html">后宫文档</a>
                </div>
                <div class="uk-navbar-right">
    
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li ><a href="../index.html">网站首页</a></li>
                        <li ><a href="../faq.html">常见问题</a></li>
                        <li><a href="../tool.html">工具</a></li>
                        <li class="uk-active"><a href="">下载</a></li>
                        <li><a href="/video/">视频站</a></li>
                        <li><a href="../log.html">更新日志</a></li>
                    </ul>
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="/join/" target="_blank" class="uk-button uk-button-primary">加入我们</a>
                    </div>
                    <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-navbar-toggle-icon data-uk-toggle></a>
                </div>
            </div>
        </div>
    </nav>

    <section class="uk-section">

        <div class="uk-text-center uk-container uk-container-xsmall">
            <h1 class="uk-article-title">下载</h1>
            <form class="source" action="download" id="carform" method="get">
            <p>更换下载源：
            <select name="source" form="carform">
                <option value="official">官方</option>
                <option value="Github">Github（国外）</option>
                <option value="Gitee" disabled>Gitee（国内）（维护）</option>
                <option value="baidupan" disabled>百度网盘（维护）</option>
                <option value="aliyundrive" disabled>阿里云盘（维护）</option>
                <option value="lanzoul" disabled>蓝奏云（维护）</option>
                <option value="tomys">荼蘼云盘</option>
              </select>
              <input type="submit" class="button" value="更换">
            </form></p>
            <p>注：下载源如为Github的话，部分地区可能会访问不了</p>
			<h2 style="text-align:center;">当前下载源为：<?php echo $source;?></h2>
        </div>

        <div class="uk-container uk-container-small">
            <hr class="uk-margin-large-top uk-margin-large-bottom">
            <div class="uk-margin-large-top">
                <h2 id="download-pkali213"><?php echo $nic['pk213']['name'];?></h2>
                <table class="uk-table uk-table-divider uk-table-middle uk-table-justify uk-table-responsive">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>版本</td>
                            <td>文件名</td>
                            <td>日期</td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo $nic['pk213']['url'];?>"><span data-uk-icon="icon: download; ratio: 1.4"></span></a></td>
                            <td><?php echo $nic['pk213']['version'];?></td>
                            <td><?php echo $nic['pk213']['filename'];?></td>
                            <td><?php echo $nic['pk213']['time'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="uk-margin-large-top">
                <h2 id="download-hmcl"><?php echo $nic['hmcl']['name'];?></h2>
                <table class="uk-table uk-table-divider uk-table-middle uk-table-justify uk-table-responsive">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>版本</td>
                            <td>文件名</td>
                            <td>日期</td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo $nic['hmcl']['url'];?>"><span data-uk-icon="icon: download; ratio: 1.4"></span></a></td>
                            <td><?php echo $nic['hmcl']['version'];?></td>
                            <td><?php echo $nic['hmcl']['filename'];?></td>
                            <td><?php echo $nic['hmcl']['time'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="uk-margin-large-top">
                <h2 id="download-pcl2"><?php echo $nic['pcl2']['name'];?></h2>
                <table class="uk-table uk-table-divider uk-table-middle uk-table-justify uk-table-responsive">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>版本</td>
                            <td>文件名</td>
                            <td>日期</td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo $nic['pcl2']['url'];?>"><span data-uk-icon="icon: download; ratio: 1.4"></span></a></td>
                            <td><?php echo $nic['pcl2']['version'];?></td>
                            <td><?php echo $nic['pcl2']['filename'];?></td>
                            <td><?php echo $nic['pcl2']['time'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="uk-margin-large-top">
                <h2 id="download-Java" name="download-Java"><?php echo $nic['Java']['name'];?> <span style="font-size: 20px;"><a href="/Java/" style="color: red;">如何选择？</a></span></h2>
                <table class="uk-table uk-table-divider uk-table-middle uk-table-justify uk-table-responsive">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>文件版本</td>
							<td>系统版本</td>
                            <td>文件名</td>
                            <td>日期</td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo $nic['Java']['offline-32']['url'];?>"><span data-uk-icon="icon: download; ratio: 1.4"></span></a></td>
                            <td><?php echo $nic['Java']['offline-32']['version'];?></td>
							<td><span class="uk-label"><?php echo $nic['Java']['offline-32']['xversion'];?></span></td>
                            <td><?php echo $nic['Java']['offline-32']['filename'];?></td>
                            <td><?php echo $nic['Java']['offline-32']['time'];?></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo $nic['Java']['offline-64']['url'];?>"><span data-uk-icon="icon: download; ratio: 1.4"></span></a></td>
                            <td><?php echo $nic['Java']['offline-64']['version'];?></td>
							<td><span class="uk-label"><?php echo $nic['Java']['offline-64']['xversion'];?></span></td>
                            <td><?php echo $nic['Java']['offline-64']['filename'];?></td>
                            <td><?php echo $nic['Java']['offline-64']['time'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="uk-margin-large-top">
                <h2 id="download-MackLauncher">造图端</h2>
                <span class="uk-label" style="background: red;">下载链接为加群链接，绝对不是站长懒得弄</span>
                <table class="uk-table uk-table-divider uk-table-middle uk-table-justify uk-table-responsive">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>版本</td>
                            <td><span>信息</span><span>&nbsp;</span>&nbsp;<span>&nbsp;</span><span>&nbsp;</span>&nbsp;<span>来源(QQ群)</span></td>
                            <td>文件名</td>
                            <td>日期</td>
                        </tr>
                        <tr>
                            <td><a href="https://jq.qq.com/?_wv=1027&k=ymnaZMvV" title="点击链接加入群聊【我的世界蛋白造图群】"><span data-uk-icon="icon: download; ratio: 1.4"></span></a></td>
                            <td>1.7.10</td>
                            <td><span class="uk-label">公开</span>
                            <span class="uk-label">821369564</span></td>
                            <td>蛋白作图客户端QAQ</td>
                            <td>2020-1-19</td>
                        </tr>
                        <tr>
                            <td><a href="https://jq.qq.com/?_wv=1027&k=gBjDnbqo" title="加入群聊【我的世界蛋白造图群】"><span data-uk-icon="icon: download; ratio: 1.4"></span></a></td>
                            <td>1.7.10</td>
                            <td><span class="uk-label">公开</span>
                            <span class="uk-label">660593010</span></td>
                            <td>蛋白作图客户端QAQ</td>
                            <td>2020-2-01</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1.12.2</td>
                            <td><span class="uk-label" style="background: red;">内测</span></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

	<section class="uk-section">
        <footer>
              <div class="uk-container">
                <div class="uk-grid-large uk-child-width-expand@m" data-uk-grid>	
                </div>
                <div class="uk-grid-large uk-margin-large-top uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-4@m"></div>
                    <div class="uk-width-expand@m">
                        <div class="uk-width-auto@m uk-margin-medium uk-text-small">
                            <p class="uk-display-inline-block uk-margin-medium-right uk-margin-remove-bottom">By © 2022 <a href="https://dbhg.top">DBHG</a> & <a href="https://alwolf.cn">ALWOLF</a></p>
                            <p> 作者 © 2022 <a href="https://dbhg.top">蛋白后宫</a> & <a href="https://alwolf.cn">ALWOLF</a></p>
                      </div>
                    </div>
                    <div class="uk-width-auto@m">
                        <div class="uk-width-auto@m uk-margin-medium uk-text-small">
                            <a href="https://space.bilibili.com/390126641/" data-uk-icon="icon: bilibili; ratio:0.8" class="uk-margin-left uk-icon-link"></a>
                            <a href="https://www.douyin.com/user/MS4wLjABAAAAthBauB1siWQBJefyVq2U8RIc1RrIXR00Hr1aC0SU6eA" data-uk-icon="icon: douyin; ratio:0.8" class="uk-margin-left uk-icon-link"></a>
                        </div>
                    </div>
                </div>
              </div>
        </footer>
    </section>
    
        <div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar">
        
                <button class="uk-offcanvas-close" type="button" data-uk-close></button>
        
                <ul class="uk-nav uk-nav-primary uk-nav-offcanvas">
                    <li class="uk-nav-header uk-logo uk-margin-bottom">后宫文档</li>
                    <li><a href="../index.html">网站首页</a></li>
                    <li><a href="../faq.html">常见问题</a></li>
                    <li><a href="../tool.html">工具</a></li>
                    <li class="uk-active"><a href="">下载</a></li>
                    <li><a href="/video/">视频站</a></li>
                    <li><a href="../log.html">更新日志</a></li>
                    <li><a href="/join/">加入我们</a></li>
                </ul>
            </div>
        </div>
    </body>
    </html>
