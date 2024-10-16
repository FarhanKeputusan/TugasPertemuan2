<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator berani</title>
    <link rel="stylesheet" href="twond.css"> <!-- Menghubungkan file CSS -->
</head>
<body>
    <div class="kalkulator">
        <h1>Kalkulator berani</h1>
        <form method="POST">
            <input type="number" name="angka1" required placeholder="Angka Pertama">
            <input type="number" name="angka2" required placeholder="Angka Kedua">
            <select name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <button type="submit">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operasi = $_POST['operasi'];
            $hasil = 0;

            switch ($operasi) {
                case 'tambah':
                    $hasil = $angka1 + $angka2;
                    break;
                case 'kurang':
                    $hasil = $angka1 - $angka2;
                    break;
                case 'kali':
                    $hasil = $angka1 * $angka2;
                    break;
                case 'bagi':
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        echo "<p style='color:red;'>Error: Pembagian dengan nol!</p>";
                        exit;
                    }
                    break;
            }

            echo "<h2>Hasil: $hasil</h2>";
        }
        ?>
    </div>
    </body>
    </html>