<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Kalkulator</h2>

<form method="post">
    <input type="number" name="angka1" required>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="angka2" required>
    <br><br>
    <button type="submit" name="hitung">Hitung</button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = 0;

    switch ($operator) {
        case '+':
            $hasil = $angka1 + $angka2;
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            break;
        case '/':
            if ($angka2 == 0) {
                echo "Tidak bisa dibagi dengan nol";
                return;
            }
            $hasil = $angka1 / $angka2;
            break;
    }

    echo "<h3>Hasil: $hasil</h3>";
}
?>

</body>
</html>
