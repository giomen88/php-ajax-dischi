<?php
include_once __DIR__ .'/../data.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap-grid.min.css' integrity='sha512-8zKdCtHHn4yrmrAKteDmaIVUMppsWMTlaZCffpRG6k6sVHwWQ2kiJOFQ22e7dSPc7yYD/GC5onkJCfxemQsyeQ==' crossorigin='anonymous'/>
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header></header>
    <main>
        <div
        class="
            container
            py-5
            d-flex
            justify-content-center
            align-items-center
            flex-wrap
        "
        >
        <?php foreach($discs as $disc) : ?>
            <div
            class="disc-card d-flex flex-column justify-content-between p-4"
            >
                <img src="<?=$disc['poster']?>" alt="<?=$disc['title']?>" class="img-fluid mb-3" />
                <h3><?= strtoupper($disc['title'])?></h3>
                <h4 class="text-secondary fs-4"><?= $disc['author']?></h4>
                <p class="text-secondary fs-5"><?= $disc['year']?></p>
            </div>
        <?php endforeach ; ?>    

        </div>
    </main>
</body>
</html>