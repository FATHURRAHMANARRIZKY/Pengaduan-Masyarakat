<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pelaporan Pengaduan Masyarakat</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Custom style for buttons */
        .custom-btn {
            padding: 5px 10px; /* Adjust padding to make it smaller */
            margin-bottom: 8px; /* Extend the margin between buttons */
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Pengaduan</h6>
        </div>
        <div class="card-body" style="font-size: 14px">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tgl Pengaduan</th>
                            <th>NIK</th>
                            <th>Isi Laporan</th>
                            <th>Tanggapan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tgl Pengaduan</th>
                            <th>NIK</th>
                            <th>Isi Laporan</th>
                            <th>Tanggapan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    include 'koneksi.php';

                    $sql = "SELECT pengaduan.*, tanggapan.tanggapan FROM pengaduan 
                            LEFT JOIN tanggapan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['Tgl_pengaduan']; ?></td>
                            <td><?= $data['nik']; ?></td>
                            <td><?= $data['isi_laporan']; ?></td>
                            
                            <!-- Kolom Tanggapan -->
                            <td>
                                <?php 
                                    if (!empty($data['tanggapan'])) {
                                        echo $data['tanggapan']; // Tampilkan tanggapan jika ada
                                    } else {
                                        echo "Belum ada tanggapan"; // Jika tidak ada tanggapan
                                    }
                                ?>
                            </td>

                            <!-- Kolom Foto dengan Modal -->
                            <td>
                                <img class="img-thumbnail" src="foto/<?= $data['foto'] ?>" width="150" onclick="showImage('foto/<?= $data['foto'] ?>')" style="cursor: pointer;">
                            </td>

                            <td><?= $data['status']; ?></td>
                            <td class="text-center">
                                <!-- Tombol Lihat Tanggapan -->
                                <a href="?url=lihat-tanggapan&id=<?= $data['id_pengaduan'] ?>" class="btn btn-info custom-btn">
                                    <i class="fa fa-info-circle"></i> Tanggapan
                                </a>

                                <!-- Tampilkan tombol "Selesai" hanya jika status masih 'proses' -->
                                <?php if ($data['status'] == 'proses') { ?>
                                    <a href="pengaduan-selesai.php?id=<?= $data['id_pengaduan'] ?>" class="btn btn-success custom-btn">
                                        <i class="fa fa-check-circle"></i> Selesai
                                    </a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Bootstrap untuk menampilkan gambar -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Lihat Gambar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" class="img-fluid" alt="Gambar" />
      </div>
    </div>
  </div>
</div>

<!-- JavaScript untuk membuka modal dan menampilkan gambar -->
<script>
    function showImage(src) {
        document.getElementById("modalImage").src = src;
        $('#imageModal').modal('show');
    }
</script>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
