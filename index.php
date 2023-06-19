<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar do while</h1>    
        <?php 
        $a = 1;
        do {
            echo "perulangan ke-$a <br>";
            $a++;
        } while ($a <= 5);
        ?>

        <h2>Nested loop do while</h2>
        <?php 
            $variable1 = 0;
            do {
                $variable2 = 0;
                do {
                    echo $variable1;
                    $variable2++;
                } while ($variable2 < 10);
                echo "<br>";
                $variable1++;
            } while ($variable1 < 10);
        ?>

        <h2>Menampilkan urutal bilangan ganjil dari 1-100</h2>
        <?php 
        $a = 1;
        do {
            if($a % 2 != 0)
            {
                echo $a . " ";
            }
            $a++;
        }while ($a <= 20);
        ?>

        <h2>Menampilkan fibonaci</h2>
        <?php 
        $a = 0;
        $x = 1;
        $count = 0;

        echo $a . " ";
        echo $x . " ";

        do {
            $num3 = $a + $x;
            echo $num3. " ";

            $a = $x;
            $x = $num3;

            $count++;
        } while ($count < 8);
        ?>
<hr>
        <?php 
            function menghitungAngkaX($x){
                $result = (((($x + 5) * 2) - 10) / 4);
                return $result;
            }

            //panggil fungsi x
            $x = 7;
            $hasil = menghitungAngkaX($x);

            echo "Hasil Hitungan: " . $hasil;
        ?>
        <hr>
        <?php 
        for($i = 1; $i <= 20; $i++){
            if($i % 2 !== 0){
                echo $i . " ";
            }
        }
        ?>
</body>
</html>


