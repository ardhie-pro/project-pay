<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/first.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('epay/template/assets/images/favicon.png') ?>" />
</head>

<body>
    <main>
        <ul class='slider'>
            <li class='item' style="background-image: url(IMGDEPAN/IMG-20230604-WA0004.jpg)">
                <div class='content'>
                    <h2 class='title'>"Wali"</h2>
                    <p class='description'>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
                    </p>
                    <a href="<?= base_url('laporankeuangansiswa') ?>"><button>Masuk</button></a>
                </div>
            </li>
            <li class='item' style="background-image: url(IMGDEPAN/IMG_9068.JPG)">
                <div class='content'>
                    <h2 class='title'>"Keuangan"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    <a href="<?= base_url('keuangan') ?>"><button>Masuk</button></a>
                </div>
            </li>
            <li class='item' style="background-image: url(IMGDEPAN/IMG_9074.JPG)">
                <div class='content'>
                    <h2 class='title'>"We-Mart"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    <a href="<?= base_url('wemart') ?>"><button>Masuk</button></a>
                </div>
            </li>
            <li class='item' style="background-image: url(IMGDEPAN/_MG_9469.JPG)">
                <div class='content'>
                    <h2 class='title'>"Kantin"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    <a href="<?= base_url('kantin') ?>"><button>Masuk</button></a>
                </div>
            </li>
            <li class='item' style="background-image: url(IMGDEPAN/_MG_9465.JPG)">
                <div class='content'>
                    <h2 class='title'>"Tenda"</h2>
                    <p class='description'>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
                    </p>
                    <a href="<?= base_url('tenda') ?>"><button>Masuk</button></a>
                </div>
            </li>
            <li class='item' style="background-image: url(IMGDEPAN/_MG_0061.jpg)">
                <div class='content'>
                    <h2 class='title'>"Transfer"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    <a href="<?= base_url('transfer') ?>"><button>Masuk</button></a>
                </div>
            </li>
        </ul>
        <nav class='nav'>
            <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
            <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
        </nav>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="<?= base_url('css/first.js') ?>"></script>
</body>

</html>