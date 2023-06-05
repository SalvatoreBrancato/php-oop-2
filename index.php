<!-- L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->
<?php
require_once __DIR__ . '/models/prodotti.php';
require_once __DIR__ . '/models/pet.php';
require_once __DIR__ . '/database/db.php';
//require_once __DIR__ . '/models/categoria.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>E-commerce pet</title>
</head>
<body>
    <div class="d-flex justify-content-around ">
        <!-- inizio card -->
        <?php foreach ($arrayProdotti as $elem) {?>
            <div class="card mt-3" style="width: 18rem;">
                <img src="<?php echo $elem->immagine ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $elem->nome ?></h5>
                    <div class="card-text"><?php 
                    try {
                        if ($elem->prezzo < 15) {
                            throw new Exception('Il valore del prezzo è minore di 15');
                        }elseif($elem->prezzo > 60){
                            throw new Exception('Il valore del prezzo è maggiore di 60');
                        }
                        echo $elem->prezzo;
                    } catch (Exception $e) {
                        echo 'Eccezione: ' . 
                        $e->getMessage() . '<br>';
                    }                    
                     ?></div>
                    <div><?php echo $elem->categoria ?></div>
                    <div class="text-end">
                        <?php 
                        if($elem->pet == "cane"){?>
                            <i class="fa-solid fa-dog fa-beat fa-xl"></i>
                           <?php }else{?>
                            <i class="fa-solid fa-cat fa-beat fa-xl"></i>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>    
        <!-- fine card -->
    </div>
</body>
</html>