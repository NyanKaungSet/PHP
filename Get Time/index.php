<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Time</title>
</head>
<body>
    <?php
      $timezone = 'Asia/Yangon';
      $timestamp = time();
      $dt = new DateTime("now", new DateTimeZone($timezone));
      $dt->setTimestamp($timestamp);

    $dayofweek = date("w");
    $fullDate = date("Y, M, d");
    $time = $dt->format('H:i:s');
    switch ($dayofweek) {
        case 1:
            echo "<p>Monday $fullDate | $time</p>";
        break;
        case 2:
            echo "<p>Tuesday $fullDate | $time</p>";
        break;
        case 3:
            echo "<p>Wednesday $fullDate | $time</p>";
        break;
        case 4:
            echo "<p>Thursday $fullDate | $time</p>";
        break;
        case 5:
            echo "<p>Friday $fullDate | $time</p>";
        break;
        case 6:
            echo "<p>Saturday $fullDate | $time</p>";
        break;
        case 0:
            echo "<p>Sunday $fullDate | $time</p>";
        break;
    }
    ?>
</body>
</html>
