<div class="auth-container">
    <div class="auth-card" style="text-align: center;">
        <?php if(isset($row)) { ?>
            <?php if($row) { ?>
                <h2 style="color: #4ade80;">Sikeres belépés!</h2>
                <p>Üdvözöljük újra!</p>
                <div style="margin: 20px 0; padding: 15px; background: rgba(0,0,0,0.2); border-radius: 10px;">
                    Azonosító: <strong><?= $row['id'] ?></strong><br>
                    Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong>
                </div>
                <a href="./" class="btn">Tovább a főoldalra</a>
            <?php } else { ?>
                <h2 style="color: #f43f5e;">Hiba történt!</h2>
                <p>A bejelentkezés nem sikerült. Kérjük, ellenőrizze adatait.</p><br>
                <a href="belepes" class="btn">Próbálja újra</a>
            <?php } ?>
        <?php } ?>

        <?php if(isset($errormessage)) { ?>
            <p style="color: #f43f5e;"><?= $errormessage ?></p>
        <?php } ?>
    </div>
</div>