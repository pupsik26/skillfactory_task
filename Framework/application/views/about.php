
<div class="text-center">
    <h1>Наша команда</h1>
</div>

<div class="row">
    <?php foreach ($data as $item): ?>
    <div class="col-md-4 border">
        <span>Имя: <?= $item['name'] ?></span><br>
        <span>Фамилия: <?= $item['surname'] ?></span><br>
        <span>Должность: <?= $item['post'] ?></span><br>
        <img class="img-thumbnail" src=<?= $item['imagePath']?> alt="cat">
    </div>
    <?php endforeach; ?>
</div>
