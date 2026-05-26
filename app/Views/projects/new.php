<!doctype html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <title>Nový projekt</title>
</head>
<body>
    <h1>Nový projekt</h1>

    <?php if (session('errors')): ?>
        <ul style="color: red;">
            <?php foreach (session('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="/projects">
        <?= csrf_field() ?>

        <p>
            <label>Název</label><br>
            <input type="text" name="name" value="<?= old('name') ?>">
        </p>

        <p>
            <label>Popis</label><br>
            <textarea name="description"><?= old('description') ?></textarea>
        </p>

        <button type="submit">Uložit</button>
    </form>

    <p>
        <a href="/projects">Zpět</a>
    </p>
</body>
</html>