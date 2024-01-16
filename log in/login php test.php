<?php
// Definujte své uživatelské jméno a heslo (nahraďte je skutečnými přihlašovacími údaji)
$valid_username = 'karel';
$valid_password = 'rohlik';

// Získání odeslaných přihlašovacích údajů z formuláře
$username = $_POST['username'];
$password = $_POST['password'];

// Ověření, zda jsou odeslané přihlašovací údaje správné
if ($username === $valid_username && $password === $valid_password) {
    // Úspěšné přihlášení, přesměrování na chráněnou stránku
    header('Location: secret.html');
    exit();
} else {
    // Nesprávné přihlašovací údaje, přesměrování zpět na přihlašovací stránku
    header('Location: page.html');
    exit();
}
?>
