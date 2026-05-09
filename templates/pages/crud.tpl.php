<section class="content-block">
    <div class="crud-header">
        <h2 id="addedit">Új felhasználó hozzáadása</h2>
        <p id="message" style="font-weight: bold; color: green;"></p>
    </div>

    <form id="userForm" class="crud-form">
        <input type="hidden" id="id"> <div class="form-group">
            <label for="name">Név:</label>
            <input type="text" id="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="mobile">Mobil:</label>
            <input type="text" id="mobile" required>
        </div>

        <button type="submit" class="btn btn-success">Mentés</button>
        <button type="button" class="btn" onclick="location.reload()">Mégse / Frissítés</button>
    </form>

    <hr>

    <h2>Regisztrált felhasználók</h2>
    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Email</th>
                <th>Mobil</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody id="userTable">
            <tr>
                <td colspan="5" style="text-align:center;">Adatok betöltése...</td>
            </tr>
        </tbody>
    </table>
</section>