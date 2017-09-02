<?
header('Content-Type: text/html; charset=utf-8');
$host = $_SERVER['HTTP_HOST'];
setlocale(LC_TIME, "id_ID");
date_default_timezone_set('Asia/Jakarta');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Selamat datang di <? print $host; ?>! Hostinger web hosting gratis dengan PHP, MySQL.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.rawgit.com/hostinger/banners/master/hostinger_welcome/css/site.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
    <div id="content">
        <div class="header">
            <a id="logo" href="https://www.hostinger.co.id/"><img src="https://www.hostinger.co.id/static/images/logo.png" alt="Web hosting" /></a>
        </div>
        <div class="content">
            <h1>Akun Anda telah dibuat!</h1>
            <p>Website <b><? print $host; ?></b> telah sukses diinstal di server kami! Silahkan Anda hapus file <b>default.php</b> dari folder <b>public_html</b> dan kemudian uploadlah website Anda dengan menggunakan FTP atau File Manajer</p>
            <div class="clear"></div>
        </div>
        <div class="footer"></div>
        <div class="clear"></div>
    </div>
    <div id="footer">
        <div class="links">
            <a href="http://www.hostinger.co.id/web-hosting" target="_blank">Web Hosting</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.co.id/hosting-gratis" target="_blank">Hosting Gratis</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.co.id/forum" target="_blank">Support Forum</a>
            <span class="pipe">|</span>
            <a href="http://cpanel.hostinger.co.id/" target="_blank">Client Login</a>
        </div>
        <div class="copyright">Hostinger &copy; <? print date('Y'); ?>. All rights reserved</div>
        <div class="social-icons">
            <a href="http://www.facebook.com/IDHostinger"><img src="https://raw.githubusercontent.com/hostinger/banners/master/hostinger_welcome/images/fb.gif" /></a>
            <a href="https://twitter.com/IDHostinger"><img src="https://raw.githubusercontent.com/hostinger/banners/master/hostinger_welcome/images/twitter.gif" /></a>
        </div>
    </div>
</div>
</body>
</html>