<?php
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
    try {
        
            $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7;charset=utf8', 'root', '',
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // A régi lekérdezés helyett:
        $sqlSelect = "select id, csaladi_nev, uto_nev, jelszo from felhasznalok where bejelentkezes = :bejelentkezes";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);

        // Jelszó ellenőrzése PHP-ban:
        if($row && password_verify($_POST['jelszo'], $row['jelszo'])) {
            $_SESSION['csn'] = $row['csaladi_nev']; 
            $_SESSION['un'] = $row['uto_nev']; 
            $_SESSION['login'] = $_POST['felhasznalo'];
        } else {
            $row = false; // Hibás belépés
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>
