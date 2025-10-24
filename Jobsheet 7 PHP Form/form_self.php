<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <?php
        $namaErr = "";
        $nama = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi";
            } else {
                $nama = htmlspecialchars($_POST["nama"]);
                echo "Data berhasil disimpan";
            }
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"><br>
            <span class="error"><?php echo $namaErr; ?></span><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>