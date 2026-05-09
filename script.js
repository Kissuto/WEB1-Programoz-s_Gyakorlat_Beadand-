document.addEventListener("DOMContentLoaded", function () {
    const userTable = document.getElementById("userTable");
    const userForm = document.getElementById("userForm");
    const messageBox = document.getElementById("message");



    // Adatok lekérése (READ)
    function fetchUsers() {
        if (!userTable) return; 

        fetch('api.php')
            .then(response => response.json())
            .then(data => {
                if (data.status === 'Read success!') {
                    renderTable(data.readData);
                }
            })
            .catch(error => console.error('Hiba:', error));
    }

    // Táblázat kirajzolása
    function renderTable(users) {
        userTable.innerHTML = "";
        users.forEach(user => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${user.id}</td>
                <td>${user.name}</td>
                <td>${user.email}</td>
                <td>${user.mobile}</td>
                <td>
                    <button class="btn btn-edit" onclick="editUser(${JSON.stringify(user).replace(/"/g, '&quot;')})">Szerkesztés</button>
                    <button class="btn btn-delete" onclick="deleteUser(${user.id})">Törlés</button>
                </td>
            `;
            userTable.appendChild(row);
        });
    }

    // Adat mentése (CREATE / UPDATE)
    if (userForm) {
        userForm.addEventListener("submit", function (e) {
            e.preventDefault();
            
            const id = document.getElementById("id").value;
            const userData = {
                name: document.getElementById("name").value,
                email: document.getElementById("email").value,
                mobile: document.getElementById("mobile").value
            };

            const method = id ? 'PUT' : 'POST';
            if (id) userData.id = id;

            fetch('api.php', {
                method: method,
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(userData)
            })
            .then(response => response.json())
            .then(data => {
                messageBox.textContent = data.status;
                userForm.reset();
                document.getElementById("id").value = "";
                fetchUsers();
            });
        });
    }

    // Törlés funkció 
    window.deleteUser = function(id) {
        if (confirm("Biztosan törlöd?")) {
            fetch('api.php', {
                method: 'DELETE',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ id: id })
            })
            .then(response => response.json())
            .then(data => {
                messageBox.textContent = data.status;
                fetchUsers();
            });
        }
    };

    // Szerkesztés betöltése az űrlapba
    window.editUser = function(user) {
        document.getElementById("id").value = user.id;
        document.getElementById("name").value = user.name;
        document.getElementById("email").value = user.email;
        document.getElementById("mobile").value = user.mobile;
        document.getElementById("addedit").textContent = "Felhasználó módosítása";
    };

   
    fetchUsers();


    
    const contactForm = document.getElementById("contactForm");
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            let valid = true;
            const nev = document.getElementById("nev");
            const email = document.getElementById("email");
            const szoveg = document.getElementById("szoveg");
            const nevError = document.getElementById("nevError");
            const emailError = document.getElementById("emailError");
            const szovegError = document.getElementById("szovegError");

            [nevError, emailError, szovegError].forEach(el => el.textContent = "");

            if (nev.value.trim().length < 3) {
                nevError.textContent = "A névnek legalább 3 karakternek kell lennie!";
                valid = false;
            }

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email.value)) {
                emailError.textContent = "Kérjük, érvényes e-mail címet adjon meg!";
                valid = false;
            }

            if (szoveg.value.trim().length < 10) {
                szovegError.textContent = "Az üzenetnek legalább 10 karakternek kell lennie!";
                valid = false;
            }

            if (!valid) e.preventDefault();
        });
    }
});