<!DOCTYPE html>
<html>
<head>
  <title>Blur</title>
</head>
<body>
<style type="text/css">
div img {
-webkit-filter: blur(3px);
-moz-filter: blur(3px);
-o-filter: blur(3px);
-ms-filter: blur(3px);
filter: blur(3px);
filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='3'%20/></filter></svg>#blur");

/*filter: url(data:image/svg+xml;base64,<? include("base64.php"); ?>#blur);*/
/*filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='3');*/
}
</style>

<div>
<img src="sample.jpg" height="300" width="300">


<img src="http://www.slacker.com/isv1/album/v3cb7a76e7eee47cd/203511/web/2/fill/5,0/472.jpg" height="300" width="300">
</div>

</body>
</html>
