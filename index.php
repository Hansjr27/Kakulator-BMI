<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <!================= Bootsrtap CSS cuy =================>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!================= CSS cuy =================>
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif, "roboto";
        }
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            background-color: #31363F;
        }
        .peringatan {
            display: none;
            position: absolute;
            bottom: 0;
            text-align: center;
            padding: 10px 15px;
            background-color: #fff;
            z-index: 99;
        }

        .allert {
            width: 260px;
            position: absolute;
            top: 0;
            right: 0;
        }
        .alert {
            font-size: 12px;
            display: flex;
            flex-direction: column;
            background: transparent;
            backdrop-filter: blur(8px);
            border: 1px solid black;
            color: black;
        }
        .alert p {
            text-align: center;
            font-weight: 700;
            border:2px dashed;
        }
        .layout {
            display: flex;
            flex-direction: row;
            align-items: end;
            justify-content: space-between;
        }
        .container {
            width: auto;
            height: auto;
        }
        .card {
            width: 50rem;
            height: 25rem;
            display: flex;
            justify-content: center;
            flex-direction: row;
            border-radius: none;
            background-color: #76ABAE;
        }
        .formulir {
            display: flex;
            flex-direction: column;
            width: 50rem;
            margin-left: 1rem;
        }
        

        h3, h4 {
            text-align: center;
        }
        .tb,
        .bb {
            display: flex;
            flex-direction: column;
        }
        .tb-input, .bb-input {
            border-radius: 15px;
            padding: 5px 0;
            background-color: #DDDDDD;
        }
        form label {
            font-size: 1rem;
            margin: 5px 0;
        }
        .btn {
            background-color: #31363F;
            color: #DDDDDD;
            margin-left: 5px;
        }
        .btn:hover {
            background-color: #31363F;
            color: red;
        }

        /* Media query untuk ukuran hp */
        @media only screen and (max-width: 600px) {
            .container {
                width: 100px;
                display: flex;
                flex-direction: column;
                justify-content: start;
                align-items: center;
            }
            .peringatan {
                display: block;
                width: 100%;
                font-size: 50%;
            }

            .formulir {
            display: flex;
            flex-direction: column;
            width: 20rem;
            margin-left: 1rem;
            }

            .alert {
            width: 250px;
            font-size: 10px;
            position: absolute;
            top: 0;
            right: 14rem;
            }

            .alert p {
                font-weight: 500;
            }

            img {
                display: none;
            }
        }

        /* Media query untuk tablet */
        @media only screen and (min-width: 601px) and (max-width: 1024px) {
            .container {
                width: 80%;
                display: flex;
                flex-direction: column;
                justify-content: start;
                align-items: center;
            }
            .peringatan {
                display: block;
                width: 100%;
                font-size: 80%;
            }
            img {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="peringatan">
        <h3>Perhatian!!!</h3>
        <p>Direkomendasikan dibuka di laptop, pc, ataupun mode dekstop di browser</p>
    </div>
    <div class="container">
        <div class="card card-body card shadow">
            <div class="gambar">
                <img src="asset/form.png" alt="" height="100%">
            </div>
            <div class="formulir">
                <h3>Kalkulator BMI</h3>
                <form action="">
                    <div class="tb">
                        <label for="">Tinggi badan</label>
                        <input type="text" class="tb-input" name="tb" required>
                    </div>
                    <div class="bb">
                        <label for="">Berat badan</label>
                        <input type="text" class="bb-input" name="bb" required>
                    </div>
                    <button type="submit" class="btn btn-sm mt-3 ml-3" name="hitung">Hitunglah</button>
                </form>
            </div>
            <span class="allert">
            <?php
                if(isset($_GET['hitung'])) {
                    $tb = $_GET['tb'];
                    $bb = $_GET['bb'];

                    $tbHasil = $_GET['tb']/100;
                    $hasil = $bb / ($tbHasil * $tbHasil);

                    if($hasil <= 18.5) {
                echo'
                    
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4 style="color: yellow; " >Warning</h4>
                        <div class="layout">
                        <img src="asset/kurus-rmv.png" alt="" height="170px">
                            Tinggi Badan :  '.$tb.' Cm</br>
                            Berat Badan  :  '.$bb.' Kg</br>
                            Hasil        :  '.number_format($hasil,1).'</br>
                            Keterangan   :  Kurus</br><br>
                        </div>
                            <p style="border-color: yellow;">Tetap Semangat jangan terlalu banyak pikiran mungkin ini salah satu penyebab anda kurus</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    
                ';
                    } 
                    elseif($hasil <= 25) {
                echo'
                    
                        <div class="alert alert-dismissible fade show" role="alert">
                        <h4 style="color: rgb(1, 228, 1);">Aman</h4>
                        <div class="layout">
                        <img src="asset/kurus-rmv.png" alt="" height="170px">
                            Tinggi Badan :  '.$tb.' Cm</br>
                            Berat Badan  :  '.$bb.' Kg</br>
                            Hasil        :  '.number_format($hasil,1).'</br>
                            Keterangan   :  Normal</br><br>
                        </div>
                            <p style="border-color: rgb(1, 228, 1);">Anda Harus tetap menjaga pola hidup sehat agar tetap memiliki badan yang Normal</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    
                ';
                    }
                    elseif($hasil <= 29.9) {
                        echo'
                        
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4 style="color: orange;">Awas</h4>
                            <div class="layout">
                            <img src="asset/gemuk-rmv.png" alt="" height="170px">
                                Tinggi Badan :  '.$tb.' Cm</br>
                                Berat Badan  :  '.$bb.' Kg</br>
                                Hasil        :  '.number_format($hasil,1).'</br>
                                Keterangan   : Gemuk<br><br>
                            </div>
                                <p style="border-color: orange;">Tetap jaga kesehatan dan jangan lupa olahraga</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        
                    ';
                    }
                    elseif($hasil > 30)  {
                        echo'
                        
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4 style="color: red; flex-direction: column;">Warning</h4>
                            <div class="layout">
                            <img src="asset/Obesitas-rmv.png" alt="" height="170px">
                                Tinggi Badan :  '.$tb.' Cm</br>
                                Berat Badan  :  '.$bb.' Kg</br>
                                Hasil        :  '.number_format($hasil,1).'</br>
                                Keterangan   : <br>Obesitas</br><br>
                            </div>
                            <p style="border-color: red;">Tetap semangat, jaga kesehatan, dan selalu perbaiki semua pola hidup agar tidak obesitas</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        
                    ';
                    }
                }
            ?>
    </span>
        </div>
    </div>     
    <!================= Bootsrtap JS cuy =================>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>