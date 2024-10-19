<?php

$id = $_GET['id'];
if (empty($id)) {
    header("Location:masyarakat.php");
    exit; // it's a good practice to exit after a header redirection
}

include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan='$id'AND tanggapan.id_pengaduan=pengaduan.id_pengaduan");
?>
<div class="card shadow">
    <div class="card-header">
        <a href="?url=lihat-pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
<?php
    if(mysqli_num_rows($query)==0){
        echo"<script>alert('Pengaduan Belum Ditanggapi'); window.location.assign('masyarakat.php?url=lihat-tanggapan.php'); </script>";
    }else{ $data = mysqli_fetch_array($query); }
?>
    <div class="card-body">
        <form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">
            <div class="form-group">
                <label style="font-size: 14px;">Tgl Pengaduan</label>
                <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= $data['Tgl_pengaduan']; ?>">
            </div>
            <div class="form-group">
                <label style="font-size: 14px;">Isi Laporan</label>
                <textarea name="isi_laporan" class="form-control" required><?= $data['isi_laporan']; ?></textarea>
            </div>
            <div class="form-group">
                <label style="font-size: 14px;">Foto</label>
                <img class="img-thumbnail" name="isi_laporan" src="foto/<?= $data['foto'] ?>" width="300">
            </div>
            <div class="form-group">
                <label style="font-size: 14px;">Tanggapan</label>
                <textarea name="isi_laporan" class="form-control" required><?= $data['tanggapan']; ?></textarea>
            </div>
        </form>
    </div>
</div>
