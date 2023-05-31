<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->title ?></title>
    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Визитка</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/main/about">Команда</a>
                <a class="nav-item nav-link" href="/main/products">Наши продукты</a>
                <a class="nav-item nav-link" href="/main/gd">Скрин phpinfo</a>
            </div>
        </div>
    </nav>
    <?php include $content_view; ?>
</div>

<script src="../../asset/js/bootstrap.bundle.min.js"</script>
</body>
</html>