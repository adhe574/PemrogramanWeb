<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="">
            Masukkan data : 
            <input type="text" name="input"><br><br>
            Masukkan email : 
            <input type="email" name="email"><br><br>
            <input type="submit" value="Submit">
        </form>
    
        <?php
        if (!empty($_POST['input'])) {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            echo "Data yang dimasukkan : " . $input . "<br>";
        }

        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Hasil Email : Email valid ($email) <br>";
            } else {
                echo "Hasil Email : Email tidak valid.";
            }
        }
        ?>
    </body>
</html>