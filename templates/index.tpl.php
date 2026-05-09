<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="styles/stilus.css" type="text/css">
    <meta charset="UTF-8">
    <title><?= $ablakcim['cim'] . ( (isset($keres['szoveg'])) ? (' - ' . $keres['szoveg']) : '' ) ?></title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <div class="user-status">
            <?php if(isset($_SESSION['login'])): ?>
                <p>Bejelentkezett: <?= $_SESSION['csn'] ?> <?= $_SESSION['un'] ?> (<?= $_SESSION['login'] ?>)</p>
            <?php endif; ?>
        </div>
        <nav>
            <ul class="nav-menu">
                <?php foreach ($oldalak as $url => $oldal) { ?>
                    <?php if (!isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                        <li<?= (($keres == $oldal) ? ' class="active"' : '') ?>>
                            <a href="<?= ($url == '/') ? '.' : ('index.php?' . $url) ?>">
                                <?= $oldal['szoveg'] ?>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main class="container">
        <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> - <?= $ablakcim['cim'] ?></p>
    </footer>
</body>
</html>