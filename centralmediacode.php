<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-119576046-2', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

<?php
$agent = @$_SERVER['HTTP_USER_AGENT'];
$uri = @$_SERVER['REQUEST_URI'];
$ip = @$_SERVER['REMOTE_ADDR'];
$ref = @$_SERVER['HTTP_REFERER'];
$proxy = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$via = @$_SERVER['HTTP_VIA'];
$dtime = date('r');
$fp = fopen("logging.txt", "a") or die("gokil");
fputs($fp,$dtime."|".$ip."|".$agent."|".$uri."|".$ref."|".$proxy."|".$via."\r\n");
fclose($fp);
?>
