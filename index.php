<?php

$userEmail = $_POST['email'];

if($userEmail === ''){
    $userEmail = null;
}

var_dump($userEmail);

function emailCheck($userEmail){
    if(!$userEmail) {
        return false;
    }
    if(strpos($userEmail, '@') === false) {
        return false;
    }
    if(strpos($userEmail, '.') === false) {
        return false;
    }
    return true;
}

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
                        <input type="text" class="form-control" name="email" placeholder="Inserisci la tua mail...">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Iscriviti">
                </form>
                <?php
                if($userEmail !== null) :
                ?>
                    <div class="mt-4">
                        <?php
                        if(emailCheck($userEmail)) :
                        ?> 
                            <div class="alert alert-success" role="alert">
                            Registrazione avvenuta con successo!
                            </div><?php
                        else :
                            ?><div class="alert alert-danger" role="alert">
                            La mail inserita non è valida.
                        </div><?php
                        endif;
                        ?>
                    </div>
                </div>
                <?php
                endif;
                ?>
            </div>
        </div>
    </main>

</body>
</html>