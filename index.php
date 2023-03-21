<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body>
    <?php 

    $caracterNumber = $_GET['caracterNumber'];

    $lowercase = ['abcdefghilmnopqrstuvz'];
    $uppercase = ['ABCDEFGHILMNOPQRSTUVZ'];
    $numbers = ['123456789'];
    $symbols = ['!@#$%&*'];

    $password = '';

    while ($password < $caracterNumber) {
        $password = $lowercase[rand(1,21)] . $uppercase[rand(1,21)] . $numbers[rand(1,9)] . $symbols[rand(1,7)];
    }

    var_dump($passwordLower);

    ?>
    <main class="bg-info-subtle vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1>Strong Generator Password</h1>
                    <h3 class="mt-3">Genera una password sicura</h3>
                </div>
                <div class="col-12">
                    <div class="fs-3 bg-info mt-4 py-3 ps-2 border rounded">
                        <?php echo $password ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mt-4 align-items-center">
                        <div class="col-8 fs-3">
                            <span>Lunghezza password:</span>
                        </div>
                        <form action="" method="get">
                            <div class="col-4">
                                <input class="w-100 rounded" type="text" placeholder="Inserisci un numero" name="caracterNumber">
                            </div>
                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-primary">Invia</button>
                                <button type="submit" class="btn btn-secondary" class="border border-light">Annulla</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>