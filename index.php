<?php
/* 
Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) 
da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
*/
function pass_gen()
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?';
    $password = '';
    for ($i = 0; $i < $_GET['length']; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}

pass_gen();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Strong Password Generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="./assets/style.css">

</head>

<body>
    <header class="text-center">
        <h1 class="grey_text">Strong Password Generator</h1>
        <h2 class="text-white">Genera una password sicura</h2>
    </header>

    <main>
        <div class="container">
            <?php if (isset($_GET['length'])) : ?>
                <div class="alert alert-primary mt-3 fs-5" role="alert">
                    <strong>Ecco la tua password: </strong> <?= pass_gen() ?>
                </div>
            <?php endif; ?>
            <form action="index.php" method="GET">
                <div class="generator rounded mt-3">
                    <div class="row cols-6">
                        <div class="col">
                            <div class="text">
                                <p>Lunghezza password:</p>
                                <p>Consenti ripetizioni di uno o più caratteri:</p>
                            </div>
                            <div class="buttons">
                                <button type="submit" class="btn btn-primary">Genera</button>
                                <button type="reset" class="btn btn-secondary">Annulla</button>
                            </div>
                        </div>
                        <div class="col">
                            <input type="number" name="length" id="length">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>