<?php
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'/>
    <title>Привет редирект</title>
</head>
<body>
<form action="index4.php">
    <label>
        Введите обрабатываемую ссылку
    </label>
    <input type="text" name="ref_in"/>
    <input type="submit" value="поменять" />
</form>


<label>Последовательности</label>
<p>выводим первые 28 чисел:&nbsp<?php echo number(28);?></p>
<p>выводим первые 120 чисел:&nbsp<?php echo number(120);?></p>
<p>выводим первые 500 чисел:&nbsp<?php echo number(500);?></p>
</body>
</html>


<?php
function number ($j)
{$n=0;
    if ($j >= 0) {
        for ($i = 1; $i >= 0; $i++) {
            $n.=' '.$i;
            //echo $n;
            if ($i == $j) {
                break;
            }
        }
    }
    return  $n;
}




?>