<div class="auth-container">
    <div class="auth-card" style="text-align: center;">
        <?php if(isset($uzenet)) { ?>
            <?php if(strpos($uzenet, 'Sikeres') !== false) { ?>
                <h2 style="color: #4ade80;">Sikeres regisztráció!</h2>
            <?php } else { ?>
                <h2 style="color: #f43f5e;">Regisztrációs hiba</h2>
            <?php } ?>

            <p style="margin: 20px 0; font-size: 1.1rem;"><?= $uzenet ?></p>

            <?php if($ujra) { ?>
                <a href="belepes" class="btn">Vissza a regisztrációhoz</a>
            <?php } else { ?>
                <a href="belepes" class="btn">Tovább a bejelentkezéshez</a>
            <?php } ?>

        <?php } ?>
    </div>
</div>