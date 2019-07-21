<html lang="fr">
<head>
    <title>Music</title>
</head>
<body>
    <?php if (isset($concert)): ?>
        <h1><?= $concert->getName(); ?></h1>
    <table border>
        <thead>
            <tr>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($concert->getBands() as $band): ?>
            <tr>
                <td><?= $band->getName(); ?></td>
                <td>
                <?php foreach ($band->getMembers() as $member): ?>
                    <?= get_class($member); ?>
                <?php endforeach; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>