<div class="auth-container">
    <div class="auth-card">
        <h2>Kapcsolat</h2>
        <p style="text-align: center; color: var(--secondary-color); margin-bottom: 30px;">
            Kérdése van? Küldjön üzenetet, és hamarosan válaszolunk!
        </p>
        
        <form id="contactForm" action="index.php?oldal=uzenet_kuldés" method="post" novalidate>
            <div class="form-group">
                <label for="nev" class="form-label">Az Ön neve</label>
                <input type="text" id="nev" name="nev" placeholder="pl. Kovács János">
                <span class="error-msg" id="nevError"></span>
            </div>
            
            <div class="form-group">
                <label for="email" class="form-label">E-mail címe</label>
                <input type="email" id="email" name="email" placeholder="pelda@email.com">
                <span class="error-msg" id="emailError"></span>
            </div>
            
            <div class="form-group">
                <label for="szoveg" class="form-label">Üzenet tartalma</label>
                <textarea id="szoveg" name="szoveg" rows="5" placeholder="Írja le észrevételét..."></textarea>
                <span class="error-msg" id="szovegError"></span>
            </div>
            
            <button type="submit" class="btn-submit" style="width: 100%;">Üzenet küldése</button>
        </form>
    </div>

    <div class="auth-card">
        <h2>Elérhetőségek</h2>
        
        <ul class="contact-info-list">
            <li><span>📍</span> 6000 Kecskemét, Izsáki út 10.</li>
            <li><span>📧</span> info@projektoldal.hu</li>
            <li><span>📞</span> +36 76 123 456</li>
            <li><span>🕒</span> H-P: 08:00 - 16:00</li>
        </ul>

        <div class="map-wrapper" style="border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); background: #f0f0f0;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3375211915!2d19.6644263!3d46.8960799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da10c4974f27%3A0x60064f27f878f797!2sPallasz%20Ath%C3%A9n%20Egyetem%20GAMF%20Kar!5e0!3m2!1shu!2shu!4v1620000000000!5m2!1shu!2shu" 
                width="100%" 
                height="320" 
                style="border:0; display: block;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
        <p style="font-size: 0.8rem; color: var(--secondary-color); text-align: center; margin-top: 15px;">
            Kattintson a térképre a navigációhoz
        </p>
    </div>
</div>