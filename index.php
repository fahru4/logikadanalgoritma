<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Belajar do while</h1>
                <?php
                $a = 1;
                do {
                    echo "perulangan ke-$a <br>";
                    $a++;
                } while ($a <= 5);
                ?>
            </div>
            <div class="col">
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

            </div>
            <div class="col">
                <h2 class="justify-content-center">Menampilkan urutal bilangan ganjil dari 1-100</h2>
                <?php
                $a = 1;
                do {
                    if ($a % 2 != 0) {
                        echo $a . " ";
                    }
                    $a++;
                } while ($a <= 20);
                ?>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Belajar function menghitung</h1>
                <?php
                function menghitungAngkaX($x)
                {
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
                for ($i = 1; $i <= 20; $i++) {
                    if ($i % 2 !== 0) {
                        echo $i . " ";
                    }
                }
                ?>

            </div>
            <div class="col">
                <h2>Menampilkan fibonaci</h2>
                <?php
                $a = 0;
                $x = 1;
                $count = 0;

                echo $a . " ";
                echo $x . " ";

                do {
                    $num3 = $a + $x;
                    echo $num3 . " ";

                    $a = $x;
                    $x = $num3;

                    $count++;
                } while ($count < 8);
                ?>

            </div>

            <div class="col">
                <h2>Menampilkan bilangan prima</h2>
                <?php
                for($i = 1; $i<=100; $i++){   // variable i untuk menampung angka kurang sama dengan dari 100
                    $a = 0;
                    for($j=1; $j <= $i; $j++){
                        if($i % $j === 0){
                            $a++;
                        }
                    }

                    if($a == 2){ // untuk menyeleksi bilangan prima atau bukan
                        echo $i . ' , ';
                    }
                }
                ?>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Menentukan bilangan prima atau bukan</h1>
                <?php
                    $number = 51;
                    $print = true;

                    for($i=2; $i < $number; $i++){
                        if($number % $i == 0)
                        $print = false;
                    }

                    echo 'Number <b>' . $number . '</b>';
                    echo $print ? ' isPrime' : ' notPrime';
                ?>

            </div>
            <div class="col">
                <h2>Menampilkan fibonaci</h2>
                <?php
            
                ?>

            </div>

            <div class="col">
                <h2>Menampilkan bilangan prima</h2>
                <?php
              
                ?>

            </div>
        </div>
    </div>
</body>

</html>