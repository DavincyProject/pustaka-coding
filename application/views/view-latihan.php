<html>

<head>
    <style>
        html {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }
    </style>

    <title>Latihan 1</title>
</head>

<body>
    <div class="container">
        <h1>Halo Kawan..<br>Yuk kita belajar web programming..!!!</h1>

        <div class="isi">
            <p>Nilai 1 = <?= $nilai1; ?> <br>
                Nilai 2 = <?= $nilai2; ?> <br></p>
            <h4>ini hasil dari pemodelan dengan methode penjumlahan yaitu <?= $nilai1 . " + " . $nilai2 . " = " . $hasil; ?></h4>
        </div>
    </div>
</body>

</html>