<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];// ? 
        $sql = "DELETE FROM pesanan WHERE id=?";
   } else {
        $_nama_pemesan = $_POST['nama_pemesan'];
        $_tanggal = $_POST['tanggal'];
        $_alamat_pemesan= $_POST['alamat_pemesan'];
        $_jumlah_pesanan = $_POST['jumlah_pesanan'];
        $_produk_id = $_POST['produk_id'];
        $_proses = $_POST['proses'];

      // array data
        $ar_data[]=$_nama_pemesan;
        $ar_data[]=$_tanggal;
        $ar_data[]=$_alamat_pemesan;
        $ar_data[]=$_jumlah_pesanan;
        $ar_data[]=$_produk_id;

      if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO pesanan (nama_pemesan,tanggal,alamat_pemesan,jumlah_pesanan,produk_id) VALUES (?,?,?,?,?)";
      }else if($_proses == "Update"){
      $ar_data[]=$_POST['idedit'];// ? 5
      $sql = "UPDATE pesanan SET nama_pemesan=?,tanggal=?,alamat_pemesan=?,jumlah_pesanan=?,produk_id=? WHERE id=?";
      } 
   }
   
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   header('location:list_pesanan.php');
?>