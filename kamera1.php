

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="utf-8" />
    <title>Nagrania Kamera 1</title>
</head>
<body>
    <div class="dropdown">
        <button class="dropbtn">Kamera 1</button>
        <div class="dropdown-content">
            <a href="kamera2.html">Kamera 2</a>
            <a href="kamera3.html">Kamera 3</a>
        </div>
    </div>
    <div>
    <?php
        
        $vids = glob("/var/www/html/RSBP/VIDEO/*.h264");
        foreach($vids as $v)
        {
            printf( '<a href='.substr($v,13).' download>"'.substr($v,25).'"</a>');
        }
        
        ?>
    </div>
    <div class="navbar">
        <a href="index.html">Powrót do strony głównej</a>
    </div>
</body>
</html>
    

