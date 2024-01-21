<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Lihat Laporan Checkup Pasien</title>
<link href="<?php echo base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
<script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-8 col-lg-9 col-md-6">
      <div class="card shadow-sm mt-5">
        <div class="card-body">
          <form method="post" class="user">
            <div class="input-group">
              <input type="text" name="ktp" class="form-control" placeholder="Nomor KTP">
              <div class="input-group-append">
                <input type="submit" name="submit" class="btn btn-primary float-right" value="Submit">
              </div>
            </div>
          </form>
          <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped text-center">
              <tr>
                <th>Nama</th>
                <th width="120">Rontgen</th>
                <th width="120">Spirometri</th>
                <th width="120">Audiotmetri</th>
                <th width="120">Ekg</th>
              </tr>
              <?php if ($pasien) {
                echo '<tr>
                  <td>'.$pasien['nama'].'</td>
                  <td>'.($pasien['status_rontgen'] == 'Selesai' ? '<a href="#">'.$pasien['status_rontgen'].'</a>' : $pasien['status_rontgen']).'</td>
                  <td>'.($pasien['status_spirometri'] == 'Selesai' ? '<a href="#">'.$pasien['status_spirometri'].'</a>' : $pasien['status_spirometri']).'</td>
                  <td>'.($pasien['status_audiometri'] == 'Selesai' ? '<a href="#">'.$pasien['status_audiometri'].'</a>' : $pasien['status_audiometri']).'</td>
                  <td>'.($pasien['status_ekg'] == 'Selesai' ? '<a href="#">'.$pasien['status_ekg'].'</a>' : $pasien['status_ekg']).'</td>
                </tr>';
              } else {
                echo '<tr><td colspan="5">Data Pasien Tidak Ditemukan</td></tr>';
              } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
