<?php
$mappa = './images/';


if (!file_exists($mappa)) {
    mkdir($mappa, 0777, true);
}


$kepek = glob($mappa . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);


if ($kepek) {
    array_multisort(array_map('filemtime', $kepek), SORT_DESC, $kepek);
}
?>

<section class="gallery-container">
    <div class="gallery-header">
        <h2>Galéria</h2>
        <p>Fedezd fel a feltöltött pillanatokat!</p>
    </div>

    <?php if (isset($_SESSION['login'])): ?>
        <div class="upload-card">
            <div class="upload-icon">📤</div>
            <h3>Új kép feltöltése</h3>
            <p>Szia <strong><?= $_SESSION['login'] ?></strong>! Válaszd ki a feltölteni kívánt fotót.</p>
            
            <form action="index.php?kepfeltoltes" method="post" enctype="multipart/form-data" class="pro-upload-form">
                <div class="file-drop-area">
                    <span class="fake-btn">Fájl kiválasztása</span>
                    <span class="file-msg">vagy kattints ide</span>
                    <input type="file" name="sajatkep" class="file-input" required accept="image/*">
                </div>
                <button type="submit" class="btn-submit">Feltöltés indítása</button>
            </form>
            <small class="info-text">Megengedett formátumok: JPG, PNG, GIF (Max. 5MB)</small>
        </div>
    <?php else: ?>
        <div class="login-alert">
            <p>Szeretnél te is képet feltölteni? <a href="index.php?belepes">Jelentkezz be</a> a funkció használatához!</p>
        </div>
    <?php endif; ?>

    <div class="gallery-grid">
        <?php if (empty($kepek)): ?>
            <div class="empty-state">
                <p>Még nincs egyetlen kép sem a galériában. Legyél te az első, aki feltölt!</p>
            </div>
        <?php else: ?>
            <?php foreach ($kepek as $kep): ?>
                <div class="gallery-item">
                    <div class="image-wrapper">
                        <img src="<?= $kep ?>" alt="Galéria kép" loading="lazy">
                        <div class="img-overlay">
                            <span class="img-name"><?= basename($kep) ?></span>
                            <span class="img-date"><?= date("Y.m.d. H:i", filemtime($kep)) ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>