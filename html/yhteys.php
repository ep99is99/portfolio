<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = htmlspecialchars($_POST["nimi"]);
    $sahkoposti = htmlspecialchars($_POST["sahkoposti"]);
    $viesti = htmlspecialchars($_POST["viesti"]);

    // Tallennus tiedostoon (tai joskus sähköpostiin)
    $rivi = date("Y-m-d H:i") . " | $nimi <$sahkoposti>: $viesti\n";
    file_put_contents("viestit.txt", $rivi, FILE_APPEND);

    // Ohjataan takaisin lomakesivulle kiitosviestillä
    header("Location: yhteyttä.html?onnistui=1&nimi=" . urlencode($nimi));
    exit();
}
?>


