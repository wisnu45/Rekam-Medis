<div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span>Dashboard > <?php echo $title ?></span>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Perubahan Data Obat</h6>
            </div>
            <div class="card-body">
              <form method="post">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Nama Obat</label>
                      <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control">
                      <small class="text-danger"><?php echo form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                      <label>Jenis</label>
                      <select class="form-control" name="jenis">
                        <option value="Tablet">Tablet</option>
                        <option value="Serbuk">Serbuk</option>
                        <option value="Pil">Pil</option>
                        <option value="Kapsul">Kapsul</option>
                        <option value="Kaplet">Kaplet</option>
                        <option value="Sirup">Sirup</option>
                        <option value="Suspensi">Suspensi</option>
                        <option value="Suntik">Suntik</option>
                      </select>
                      <small class="text-danger"><?php echo form_error('jenis'); ?></small>
                    </div>
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea name="keterangan" rows="3" class="form-control"><?php echo $data['keterangan']; ?></textarea>
                      <small class="text-danger"><?php echo form_error('keterangan'); ?></small>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Stok</label>
                      <input type="number" name="stok" value="<?php echo $data['stok']; ?>" class="form-control">
                      <small class="text-danger"><?php echo form_error('stok'); ?></small>
                    </div>
                    <div class="form-group">
                      <label>Satuan</label>
                      <input type="text" name="satuan" value="<?php echo $data['satuan']; ?>" class="form-control">
                      <small class="text-danger"><?php echo form_error('satuan'); ?></small>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Masuk</label>
                      <input type="date" name="tgl_masuk" value="<?php echo $data['tgl_masuk']; ?>" class="form-control">
                      <small class="text-danger"><?php echo form_error('tgl_masuk'); ?></small>
                    </div>
                    <div class="form-group">
                      <div class="btn-group d-flex" role="group" aria-label="Basic example">
                        <input type="submit" name="submit" value="Simpan" class="form-control btn btn-primary">
                        <a href="javascript:;" onclick="window.location.href='<?php echo base_url('data/obat'); ?>'" class="form-control btn btn-warning">Batal</a>
                        <a href="javascript:;" onclick="return confirm('Yakin ingin menghapus?') ? window.location.href='<?php echo base_url('hapus/obat/').$data['id']; ?>' : ''" class="form-control btn btn-danger">Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

</div>
</div>
</div>
</div>
