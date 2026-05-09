<div class="auth-container">
    <div class="auth-card">
        <h2>Bejelentkezés</h2>
        <form action="belep" method="post">
            <fieldset>
                <div class="form-group">
                    <input type="text" name="felhasznalo" placeholder="Felhasználónév" required>
                </div>
                <div class="form-group">
                    <input type="password" name="jelszo" placeholder="Jelszó" required>
                </div>
                <input type="submit" name="belepes" value="Belépés">
            </fieldset>
        </form>
    </div>

    <div class="auth-card">
        <h2>Regisztráció</h2>
        <form action="regisztral" method="post">
            <fieldset>
                <div class="form-group">
                    <input type="text" name="vezeteknev" placeholder="Vezetéknév" required>
                </div>
                <div class="form-group">
                    <input type="text" name="utonev" placeholder="Utónév" required>
                </div>
                <div class="form-group">
                    <input type="text" name="felhasznalo" placeholder="Felhasználói név" required>
                </div>
                <div class="form-group">
                    <input type="password" name="jelszo" placeholder="Jelszó" required>
                </div>
                <input type="submit" name="regisztracio" value="Fiók létrehozása">
            </fieldset>
        </form>
    </div>
</div>