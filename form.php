<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Mahasiswa</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            background-color: rgb(128, 216, 187);
            box-sizing: border-box;
        }

        form {
            margin: 2rem auto;
            width: 30rem;
            padding: 1rem;
        }

        h2 {
            text-align: center;
        }

        label {
            float:left;
            width: 10rem;
        }

        input[type=text], select {
            width: 13rem;
            margin: 0.1rem;
            display: inline-block;
            box-sizing: border-box;
        }
        
    </style>
</head>
<body>
    <form action="action.php" method="POST">
        <h2>Data Diri Mahasiswa</h2>
        <br>
        <div>
            <label>Nama Lengkap :</label>
            <input type="text" name="namaL">
        </div>
        <div>
            <label>Nama Panggilan :</label>
            <input type="text" name="namaP">
        </div>
        <div>
            <label>Usia :</label>
            <input type="text" name="usia">
        </div>
        <div>
            <label>Tanggal Lahir :</label>
            <input type="text" name="lahir">
        </div>
        <div>
            <label>Tinggi Badan :</label>
            <input type="text" name="tinggi">
        </div>
        <div>
            <label>Berat Badan :</label>
            <input type="text" name="berat">
        </div>
        <input type="submit" name="Save">
    </form>
</body>
</html>
