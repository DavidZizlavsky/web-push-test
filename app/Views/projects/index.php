<!doctype html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <title>Mini Checklist</title>
</head>
<body>
    <h1>Projekty</h1>

    <p>
        <a href="/projects/new">Nový projekt</a>
    </p>

    <?php if (empty($projects)): ?>
        <p>Zatím žádné projekty.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($projects as $project): ?>
                <li>
                    <a href="/projects/<?= esc($project['id']) ?>">
                        <?= esc($project['name']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>