<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="utf-8" />
    <title>Nagrania Kamera 2</title>
</head>
<body>
    <div class="dropdown">
        <button class="dropbtn">Kamera 2</button>
        <div class="dropdown-content">
            <a href="kamera1.html">Kamera 1</a>
            <a href="kamera3.html">Kamera 3</a>
        </div>
    </div>
    <div class="navbar">
        <a href="index.html">Powrót do strony głównej</a>
    </div>
    <div id="vid-gallery"><?php
  // (A) GET ALL VIDEO FILES FROM THE GALLERY FOLDER
//  $dir = __DIR__ . DIRECTORY_SEPARATOR . "VIDEO" . DIRECTORY_SEPARATOR;
  $videos = glob("/var/www/html/RSBP/VIDEO/*.{webm,mp4,ogg,h264}", GLOB_BRACE);
 
  // (B) OUTPUT ALL VIDEOS
  if (count($videos) > 0) { foreach ($videos as $vid) {
      echo $vid;
    printf("<video src='/var/www/html/RSBP/VIDEO/%s'></video>", rawurlencode(basename($vid)));
  }}
?></div>
</body>
</html>
