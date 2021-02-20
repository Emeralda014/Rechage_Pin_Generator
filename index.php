<!DOCTYPE html>
<html>
<head></head>
<body>
   <?php
    function myfunction():array{
       $randomNumbers = array();
        $i=0;
        do{

        $k=mt_rand(0,999999999999);
    $i++;
    
    $randomNumbers[] = $k;
    } while($i<=200);
    return $randomNumbers;
    }
    print_r(myfunction());
    ?>

    <form action=“index.php” method=“POST”>
      <input type=“submit” name=“Recharge” value="Click to Generate Recharge pin here">
    </form>

</body>
</html>



