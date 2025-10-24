<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi Password</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi Password</h1>
        <form id="formValidasi" method="post" action="proses_validasi.php">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="email"><br>
            <span id="nama-error" style="color:red;"></span><br>

            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <span id="email-error" style="color:red;"></span><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <span id="password-error" style="color:red;"></span><br>
            
            
            <input type="submit" value="Submit">
        </form>

        <script>
            $(document).ready(function(){
                $('#formValidasi').submit(function(event){
                    event.preventDefault();
                    var nama =$('#nama').val();
                    var email = $('#email').val();
                    var password = $('#password').val();
                    var valid = true;

                    if (nama === '') {
                        $('#nama-error').text('Nama harus diisi.');
                        valid = false;
                    } else {
                        $('#nama-error').text('');
                    }

                    if (email === '') {
                        $('#email-error').text('Email harus diisi.');
                        valid = false;
                    } else {
                        $('#email-error').text ("");
                    }

                    if (password.length < 8) {
                        $('#password-error').text('Password harus terdiri dari minimal 8 karakter.');
                        valid = false;
                    } else {
                        $('#password-error').text('');
                    }

                    if (valid) {
                        $.ajax({
                            url: 'proses_validasi.php',
                            type: 'POST',
                            data: {nama: nama, email: email, password: password},
                            success: function(response) {
                                alert(response);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>