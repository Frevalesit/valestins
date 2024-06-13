<?php $dah = $_GET['dah'];

$file = "$dah.php";

if (!unlink($file))
{
echo ("SUDAH DI HAPUS $file");
}
else
{
echo ("BERHASIL DI HAPUS $img");
}
?>

