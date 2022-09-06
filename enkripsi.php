<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enkripsi</title>
    </head>
    <body>
        <?php
            $input=$_POST["input"];

            $key = array(
                'a' => 'sd',
                'i' => 'dss',
                'u' => 'yy',
                'e' => 'rt',
                'o' => 'pp',
            );

            $output = str_replace(array_keys($key), $key, $input);
        ?>
        <div>
            <div>
                <form action="enkripsi.php" method="POST">
                    <h4>ENKRIPSI</h4>
                    <textarea name="input" cols="50" rows="3" placeholder="Masukkan data yang akan dienkripsi disini..."></textarea><br>
                    <input type="submit" value="ENKRIPSIKAN"/>
                </form>
            </div>
            <div>
                <h4>HASIL ENKRIPSI</h4>
                <?php echo $output; ?>
            </div>
            <div>
            <a href="dekripsi.php">ke Halaman Dekripsi</a>
            </div>
        </div>
    </body>
</html>