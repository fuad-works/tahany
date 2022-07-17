<?php
if (isset($_GET['fullname'])) {
    header('Content-Type: image/png');
    if(isset($_GET['download']))
        header('Content-Disposition: attachment; filename="card.png"');

    

    $font = realpath('./css/TheSans-Bold.otf');
    $imgPath = './img/WhatsApp Image 2022-04-29 at 6.29.12 PM.jpeg';
    $x1 = 0;
    $y1 = 740;
    $x2 = 629;
    $y2 = 810;
    $font_size = 27;
    

    require('Arabic.php');
    $Arabic = new I18N_Arabic('Glyphs');

    $text = $_GET['fullname'];
    $text = $Arabic->utf8Glyphs($text);

    $im = imagecreatefromjpeg($imgPath);
    imagesavealpha($im, true);

    $box = imagettfbbox($font_size * 2, 0, $font, $text);
    $text_width = abs($box[6] - $box[4]); // text width.
    $text_height = abs($box[7] - $box[1]); // text height.

    $clr = "#fafafa";
    $red = 100;
    $green = 100;
    $blue = 100;


    if ($clr[0] == '#')
        $clr = substr($clr, 1);

    if (strlen($clr) == 6)
        list($r, $g, $b) = array(
            $clr[0] . $clr[1],
            $clr[2] . $clr[3],
            $clr[4] . $clr[5]
        );
    elseif (strlen($clr) == 3)
        list($r, $g, $b) = array(
            $clr[0] . $clr[0],
            $clr[1] . $clr[1], $clr[2] . $clr[2]
        );


    $r = hexdec($r);
    $g = hexdec($g);
    $b = hexdec($b);

    $red = $r;
    $green = $g;
    $blue = $b;

    $color = imagecolorallocate($im, $red, $green, $blue);


    $location_x = $x1;
    $location_y = $y1;
    $rec_width = ($x2 - $x1);
    $rec_height = ($y2 - $y1);

    $center_x = $x1 + ($rec_width / 2);
    $center_y = $y1 + ($rec_height / 2);

    $x = intval($center_x - ($text_width / 4));
    $y = intval($center_y + ($text_height / 8));

    imagettftext($im, $font_size, 0, $x, $y, $color, $font, $text);

    imagepng($im);

    imagedestroy($im);

    exit;
}

?>