<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz Zamówienia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="buty/logo.png" alt="Logo">
    </div>

    <div class="nav">
        <a href="index.php">Buty</a>
        <a href="onas">O nas</a>
        <a href="kontak">Kontakt</a>
    </div>

    <div class="baner">
        <img src="buty/buty.png" alt="Banner"> <br>
        <center><h4>Wybierz but rozmiar oraz ilość</h4></center>
    </div>

    <form action="index.php" method="post">
        <div class="main">
            <div class="nowosci">
                <div class="lewo">
                    <!-- Airmax -->
                    <label class="image-checkbox">
                        <input type="checkbox" id="airmax" name="airmax">
                        <img src="buty/airmax-cutout.png" alt="Buty Airmax">
                        <br>
                        499.99zł <br>
                        <label for="airmax-size">Rozmiar:</label> <br>
                        <select name="airmax-size" id="airmax-size">
                            <option value="">Wybierz rozmiar</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                        </select> <br>
                        <label for="airmaxilosc">Ilość:</label> <br>
                        <input type="number" id="airmaxilosc" name="airmaxilosc" min="1" value="1">
                    </label>

                    <!-- Converse -->
                    <label class="image-checkbox">
                        <input type="checkbox" id="converse" name="converse">
                        <img src="buty/converse-cutout.png" alt="Buty Converse">
                        <br>
                        299.99zł <br>
                        <label for="converse-size">Rozmiar:</label> <br>
                        <select name="converse-size" id="converse-size">
                            <option value="">Wybierz rozmiar</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                        </select> <br>
                        <label for="converseilosc">Ilość:</label> <br>
                        <input type="number" id="converseilosc" name="converseilosc" min="1" value="1">
                    </label>

                    <!-- Jordan -->
                    <label class="image-checkbox">
                        <input type="checkbox" id="jordan" name="jordan">
                        <img src="buty/jordan 1-cutout.png" alt="Buty Jordan">
                        <br>
                        699.99zł<br>
                        <label for="jordan-size">Rozmiar:</label> <br>
                        <select name="jordan-size" id="jordan-size">
                            <option value="">Wybierz rozmiar</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                        </select> <br>
                        <label for="jordanilosc">Ilość:</label> <br>
                        <input type="number" id="jordanilosc" name="jordanilosc" min="1" value="1">
                    </label>
                </div>

                <div class="srodek">
                    <!-- Oldskool -->
                    <label class="image-checkbox">
                        <input type="checkbox" id="oldskool" name="oldskool">
                        <img src="buty/oldskool.png" alt="Buty Oldskool">
                        <br>
                        249.99zł<br>
                        <label for="oldskool-size">Rozmiar:</label> <br>
                        <select name="oldskool-size" id="oldskool-size"> 
                            <option value="">Wybierz rozmiar</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                        </select> <br>
                        <label for="oldskoolilosc">Ilość:</label> <br>
                        <input type="number" id="oldskoolilosc" name="oldskoolilosc" min="1" value="1">
                    </label>

                    <!-- Puma -->
                    <label class="image-checkbox">
                        <input type="checkbox" id="puma" name="puma">
                        <img src="buty/puma.png" alt="Buty Puma">
                        <br>
                        459.99zł<br>
                        <label for="puma-size">Rozmiar:</label> <br>
                        <select name="puma-size" id="puma-size">
                            <option value="">Wybierz rozmiar</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                        </select> <br>
                        <label for="pumailosc">Ilość:</label> <br>
                        <input type="number" id="pumailosc" name="pumailosc" min="1" value="1">
                    </label>
                    <label class="image-checkbox">
                        <input type="checkbox" id="yzy" name="yzy">
                        <img src="buty/yzy black.png" alt="Buty yzy">
                        <br>
                        899.99zł<br>
                        <label for="yzy-size">Rozmiar:</label> <br>
                        <select name="yzy-size" id="yzy-size">
                            <option value="">Wybierz rozmiar</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                        </select> <br>
                        <label for="yzyilosc">Ilość:</label> <br>
                        <input type="number" id="yzyilosc" name="yzyilosc" min="1" value="1">
                    </label>
                    <!-- formularz -->
                    <fieldset>
        <legend>Dane Klienta</legend>
        <label for="imie">Imię:</label>
        <input type="text" id="imie" name="imie" required><br>
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" id="nazwisko" name="nazwisko" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="telefon">Telefon:</label>
        <input type="tel" id="telefon" name="telefon" pattern="[0-9]{9}" placeholder="123456789" required><br>
        <label for="miasto">Miasto:</label>
        <input type="text" id="miasto" name="miasto" required><br>
        <label for="ulica">Ulica:</label>
        <input type="text" id="ulica" name="ulica" required><br>
    </fieldset>
    <button type="submit">Złóż zamówienie</button>
                </div>

                <div class="prawo">
                    <!-- Rebook -->
                    <label class="image-checkbox">
                        <input type="checkbox" id="rebook" name="rebook">
                        <img src="buty/rebook.png" alt="Buty Rebook">
                        <br>
                        349.99 <br>
                        <label for="rebook-size">Rozmiar:</label> <br>
                        <select name="rebook-size" id="rebook-size">
                            <option value="">Wybierz rozmiar</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                        </select> <br>
                        <label for="rebookilosc">Ilość:</label> <br>
                        <input type="number" id="rebookilosc" name="rebookilosc" min="1" value="1">
                    </label>

                    <!-- Superstar -->
                    <label class="image-checkbox">
                        <input type="checkbox" id="superstar" name="superstar">
                        <img src="buty/superstar.png" alt="Buty Superstar">
                        <br>
                        399.99 <br>
                        <label for="superstar-size">Rozmiar:</label> <br>
                        <select name="superstar-size" id="superstar-size">
                            <option value="">Wybierz rozmiar</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                        </select> <br>
                        <label for="superstarilosc">Ilość:</label> <br>
                        <input type="number" id="superstarilosc" name="superstarilosc" min="1" value="1">
                    </label>
                </div>
            </div>
        </div>

    </form>
</div>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buty";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = $_POST['imie'] ?? '';
    $nazwisko = $_POST['nazwisko'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefon = $_POST['telefon'] ?? '';
    $miasto = $_POST['miasto'] ?? '';
    $ulica = $_POST['ulica'] ?? '';


    $sql = "INSERT INTO klienci (imie, nazwisko, email, telefon, miasto, ulica) VALUES ('$imie', '$nazwisko', '$email', '$telefon', '$miasto', '$ulica')";
    if (mysqli_query($conn, $sql)) {
        $id_klienta = mysqli_insert_id($conn);


        $sql = "INSERT INTO zamówienia (id_klienta, data_zamówienia) VALUES ($id_klienta, NOW())";
        if (mysqli_query($conn, $sql)) {
            $zamowienie_id = mysqli_insert_id($conn);

    
            $products = [
                'airmax' => 1, 'converse' => 4, 'jordan' => 7, 'oldskool' => 5,
                'puma' => 3, 'rebook' => 6, 'superstar' => 2, 'yzy' => 8
            ];
            foreach ($products as $product => $id_produktu) {
                if (!empty($_POST[$product]) && !empty($_POST[$product . '-size']) && !empty($_POST[$product . 'ilosc'])) {
                    $size = (int) $_POST[$product . '-size'];
                    $ilosc = (int) $_POST[$product . 'ilosc'];
                    $sql = "INSERT INTO szczegółyzamówienia (id_zamówienia, id_produktu, rozmiar, ilość) VALUES ($zamowienie_id, $id_produktu, $size, $ilosc)";
                    mysqli_query($conn, $sql);
                }
            }

            echo "<p>Zamówienie zostało złożone. Dziękujemy!</p>";
        } else {
            echo "<p>Błąd zapisu zamówienia: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p>Błąd zapisu klienta: " . mysqli_error($conn) . "</p>";
    }
}

mysqli_close($conn);
?>
