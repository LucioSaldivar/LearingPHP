
<html>
    <head>
        <title> Arrays Functions </title>
    </head>
    <body>
        <?php
            $color = array("red","green", "blue"); 
            array_pop($color);
            array_push($color, "black", "White", "Pink");
            print_r($color);
        ?><br>
        <hr>
        <?php $Numbers = array(13, 54, 6, 89, 100, 15, 12, 789, 1000) ?><br>
        <?php echo count($Numbers); ?><br>
        Max: <?php echo max($Numbers); ?><br>
        Min: <?php echo min($Numbers); ?><br>
        Yes/No: <?php echo in_array(89, $Numbers); ?><br>
        <?php print_r($Numbers); ?><br>
        <?php echo rsort($Numbers); ?><br>
        <?php print_r($Numbers); ?><br>
        <hr>
        Implode: <?php
            $Quote = array("Never", "Give", "Up", "in", "Life");
        ?><br>
        <?php echo implode(" ", $Quote); ?><br>
        Explode: <?php
            $Quote = "Never Give Up in Life";
        ?><br>
        <?php print_r (explode(" ", $Quote)); ?><br>
            
    </body>
</html>

