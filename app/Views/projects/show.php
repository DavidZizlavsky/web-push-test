<!doctype html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <title><?= esc($project['name']) ?></title>
</head>
<body>
    <h1><?= esc($project['name']) ?></h1>

    <p><?= esc($project['description']) ?></p>

    <h2>Úkoly</h2>

    <?php if (empty($tasks)): ?>
        <p>Zatím žádné úkoly.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <?= esc($task['title']) ?>
                    —
                    <?= esc($task['status']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <p>
        <a href="/projects">Zpět na projekty</a>
    </p>
</body>
</html>