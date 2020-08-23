
<html>
    <head>
        <title> Arrays </title>
    </head>
    <body>
        <?php 
            $food = array('Pizza', 10, 15, array("Asian", "French", "German"),"Pasta");
        ?><br>
        <?php echo $food[2] ?><br>
        <?php echo $food[3][2] ?><br>
        <?php $food[56] = "Mango"; ?><br>
        <?php $food[300] = "Apple"; ?><br>
        <?php echo print_r($food); ?><br>
        <?php
            $name = array('Manuel','Ali','Akram');
            echo $name[1];
        ?><br>
        <hr>

        <?php $color = array("A" => "40", "B" => "Pizza"); ?><br>
        <?php echo $color["B"]; ?><br>
        <?php $foods = array("Asian" => " Pizza", "Italian" => " Biryani"); ?><br>
        <?php echo $foods["Asian"]. "is for" . $foods["Italian"] ; ?><br>
        <?php echo print_r($foods); ?><br>
    </body>
</html>

