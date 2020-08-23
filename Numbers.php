
<html>
    <head>
        <title> Numbers </title>
    </head>
    <body>

        <?php ?><br>
        <hr>

        <?php
          $FirstNumber = 3;
          $SecondNumber = 4;
          $ThirdNumber = 3.65478;
        ?><br>
        <?php echo $ThirdNumber + 9 - 6 ?><br>
        <?php echo 3.1/6; ?><br>
        <?php echo 7/0  ; ?><br>
        Ceil:<?php echo ceil($ThirdNumber); ?><br>
        Floor:<?php echo floor($ThirdNumber); ?><br>

        <?php echo "is {$FirstNumber} :integer ", is_int($FirstNumber); ?><br>
        <?php echo "is {$ThirdNumber} :integer ", is_int($ThirdNumber); ?><br>
        <?php echo "is {$FirstNumber} :float ", is_float($FirstNumber); ?><br>
        <?php echo "is {$ThirdNumber} :float ", is_float($ThirdNumber); ?><br>
        <?php echo "is {$FirstNumber} :Numeric ", is_numeric($FirstNumber); ?><br>
        <?php echo "is {$ThirdNumber} :Numeric ", is_numeric($ThirdNumber); ?><br>
        <hr>

        Binary: <?php echo decbin(3); ?><br>
        Decimal: <?php echo bindec(11); ?><br>
        Square Root: <?php echo sqrt(8); ?><br>
        Absolute Value: <?php echo abs(-50 +100); ?><br>
        Power: <?php echo pow(2,10); ?><br>
        Mudulas: <?php echo fmod(15,7); ?><br>
        Random: <?php echo rand(); ?><br>
        Random within 500 and 1600: <?php echo rand(500, 1600); ?><br>

    </body>
</html>

