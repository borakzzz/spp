<?php
$id_petugas = $_GET['id_petugas'];


include '../koneksi.php';
$sql = "DELETE FROM petugas  WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi,$sql);
if($query){
    header("location:?url=petugas");
}else{
    echo"<script>
    alert('maaf data tidak terhapus'); 
    window.location.assign('?url=petugas');
    </script>";
}
