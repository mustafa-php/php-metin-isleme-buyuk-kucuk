<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metin İşleme-1</title>
</head>

<body>

    <style>
        body {
            height: 100vh;
            background: #1D2D3B;
            color: white !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0px;
        }

        form {
            width: 20rem;
            display: flex;
            flex-direction: column;
        }

        input[type="text"] {
            border: 2px solid #187130;
            outline: none;
            padding: .5rem 1rem;
            border-radius: 1rem;
            background: #364A57;
            color: white;
        }

        input::placeholder{
            color: rgb(255, 255, 255, 0.6);
        }

        label {
            padding: .5rem;
        }

        button{
            background: #33884C;
            color: white;
            border: none ;
            outline: none;
            border-radius: 1rem;
            font-size: 1.2rem;
            padding: .5rem;
        }
    </style>
    <form action="" method="post">
        <input type="text" name="metin" autocomplete="off" placeholder="Metin...">
        <label for="buyuk"><input type="radio" name="islev" value="buyuk" id="buyuk">Metinin hepsini BÜYÜK harf yap</label>
        <label for="kucuk"><input type="radio" name="islev" value="kucuk" id="kucuk">Metinin hepsini küçük harf yap</label>
        <button type="submit" name="ayar">Ayarla</button>
    </form>
    <div>
        <H2><?php if (isset($_POST["ayar"])) {
                switch ($_POST["islev"]) {
                    case 'buyuk':
                        $buyuk = mb_strtoupper($_POST["metin"]);
                        echo $buyuk;
                        break;
                    case 'kucuk':
                        $kucuk = mb_strtolower($_POST["metin"]);
                        echo $kucuk;
                        break;
                    default:
                        # code...
                        break;
                }
            } ?></H2>
    </div>
</body>

</html>