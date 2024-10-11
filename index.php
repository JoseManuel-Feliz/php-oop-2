<?

require_once __DIR__ . "/db/data.php";
require_once __DIR__ . "/db/class/categories.php";
require_once __DIR__ . "/db/class/products.php";
require_once __DIR__ . "/db/class/detailsclass.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP STYLESHEET CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <!-- CUSTOM STYLESHEET CSS -->
    <link rel="stylesheet" href="./app/css/style.css">
    <!-- AXIOS SCRIPT -->
    <script defer src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js'
        integrity='sha512-DdX/YwF5e41Ok+AI81HI8f5/5UsoxCVT9GKYZRIzpLxb8Twz4ZwPPX+jQMwMhNQ9b5+zDEefc+dcvQoPWGNZ3g=='
        crossorigin='anonymous'></script>
    <!-- VUE JS -->
    <script defer src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.5.11/vue.global.min.js'
        integrity='sha512-d5RJLIaLqj0K5T7t2d9vfRd4QTNgxscc4tlqScuhGmhSFdvbuBUndxSZCbUoqCIMUc5aBtS68bUfUiz2cwBf4w=='
        crossorigin='anonymous'></script>
    <!-- SCRIPT JS -->
    <script defer src="./app/js/script.js"></script>
    <title>php-oop-2</title>
</head>

<body>



    <main class="container">
        <div class="row row-cols-4 g-5">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-img-top">
                            <?php foreach ($product->details as $detail) { ?>
                                <?= $detail ?>
                            <?php } ?>
                        </div>
                        <div class="card-body">
                            <p>
                                <?php foreach ($product->categories as $category) { ?>
                                    <?= $category ?>
                                <?php } ?>
                            </p>

                            <p>
                                <?= $product->name ?>
                            </p>
                            <p>
                                <?= $product->price ?>
                            </p>
                            <p>
                                <?= $product->type ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

</body>

</html>