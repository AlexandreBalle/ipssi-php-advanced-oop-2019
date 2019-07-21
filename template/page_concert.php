<html lang="fr">
<head>
    <title>Music</title>
</head>
<body>
    <?php if (isset($concerts)): ?>
        <?php foreach ($concerts as $concert): ?>
            <h1><?= $concert->getName(); ?> organisé par <?= $concert->getOrganiser()->getName(); ?></h1>
            <table border>
                <thead>
                    <tr>
                        <th>Groupes</th>
                        <th>Membres</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($concert->getBands() as $band): ?>
                    <tr>
                        <td><?= $band->getName(); ?></td>
                        <td>
                        <?php foreach ($band->getMembers() as $member): ?>
                            <?= $member->getName(); ?> ( <?= $member->getRole(); ?>
                            <?php if ($member->canSing()): ?>/ Singer<?php endif; ?>)
                        <?php endforeach; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>