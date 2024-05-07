<?php

$userEmail = $_POST['email'] ?? null;
var_dump($userEmail);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <main>
        <div class="contianer-sm p-4">
            <div>
                <h1>Iscriviti alla nostra newsletter</h1>
            </div>
            <div>
                <form method="POST" action="">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Inserisci la tua mail...">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Iscriviti">
                </form>
            </div>
        </div>
    </main>

</body>
</html>