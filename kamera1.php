

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
        
        $vids = glob("/home/student/*.h264",GLOB_BRACE);
        foreach($vids as $v)
        {
            echo '<a href=' . $v . ' download>"'. substr($v,14).'"   ' . '   </a>';
        }
        
        ?>
    </div>
    <div class="navbar">
        <a href="index.html">Powrót do strony głównej</a>
    </div>
</body>
</html>
    
