<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Laporan Pengaduan</h1>
    </div>

    <div class="section-body">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="text-primary">Data Laporan Pengaduan</h4>
              <div class="card-header-action">
                <a href="#pengaduan_masuk" data-tab="summary-tab" class="btn active">Masuk</a>
                <a href="#pengaduan_diproses" data-tab="summary-tab" class="btn">Diproses</a>
                <a href="#pengaduan_selesai" data-tab="summary-tab" class="btn">Selesai</a>
                <a href="#pengaduan_ditolak" data-tab="summary-tab" class="btn">Ditolak</a>
              </div>
            </div>
            <div class="card-body">
              <div class="pengaduan_masuk active" data-tab-group="summary-tab" id="pengaduan_masuk">
                <div class="row">
                    <div class="col-12">
                      <?php if($pengaduan_masuk == NULL) { ?>
                            <div class="empty-state" data-height="400">
                                <div class="empty-state-icon">
                                <i class="fas fa-question"></i>
                                </div>
                                <h2>Kami tidak menemukan data apapun!</h2>
                                <p class="lead">
                                Maaf kami tidak menemukan data apapun, untuk menghilangkan pesan ini, buat setidaknya 1 data.
                                </p>
                            </div>
                        <?php } else { ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-1">
                            <thead>
                                <tr>
                                  <th style="width: 20px;">No</th>
                                  <th>Nama Pelapor</th>
                                  <th>Judul</th>
                                  <th>Foto Bukti</th>
                                  <th>Foto KTP</th>
                                  <th>Status</th>
                                  <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengaduan_masuk as $row) : ?>
                                    <tr>
                                      <td><?= $no++ ?></td>
                                      <td><img src="<?= base_url('upload/profil/') . $row->image ?>" alt="" class="rounded-circle mr-1" width="35px" height="35px"><?= $row->nama_depan . ' ' . $row->nama_belakang ?></td>
                                      <td class="font-weight-bold"><?= $row->judul ?></td>
                                      <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('upload/foto_bukti/') . $row->foto_bukti ?>" data-title="<?= $row->judul ?>"></div>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('upload/foto_ktp/') . $row->foto_ktp ?>" data-title=""></div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-pill badge-primary">Belum Diproses</span></td>
                                      <td>
                                        <a href="<?= base_url('admin/lihat_pengaduan/') . $row->id_pengaduan ?>" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat</a>
                                      </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                </div>
              </div>
              <div class="pengaduan_diproses" data-tab-group="summary-tab" id="pengaduan_diproses">
                <div class="row">
                    <div class="col-12">
                      <?php if($pengaduan_diproses == NULL) { ?>
                            <div class="empty-state" data-height="400">
                                <div class="empty-state-icon">
                                <i class="fas fa-question"></i>
                                </div>
                                <h2>Kami tidak menemukan data apapun!</h2>
                                <p class="lead">
                                Maaf kami tidak menemukan data apapun, untuk menghilangkan pesan ini, buat setidaknya 1 data.
                                </p>
                            </div>
                        <?php } else { ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-2">
                            <thead>
                                <tr>
                                  <th style="width: 20px;">No</th>
                                  <th>Nama Pelapor</th>
                                  <th>Judul</th>
                                  <th>Foto Bukti</th>
                                  <th>Foto KTP</th>
                                  <th>Status</th>
                                  <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengaduan_diproses as $row) : ?>
                                    <tr>
                                      <td><?= $no++ ?></td>
                                      <td><img src="<?= base_url('upload/profil/') . $row->image ?>" alt="" class="rounded-circle mr-1" width="35px" height="35px"><?= $row->nama_depan . ' ' . $row->nama_belakang ?></td>
                                      <td class="font-weight-bold"><?= $row->judul ?></td>
                                      <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('upload/foto_bukti/') . $row->foto_bukti ?>" data-title="<?= $row->judul ?>"></div>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('upload/foto_ktp/') . $row->foto_ktp ?>" data-title=""></div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-pill badge-warning">Diproses</span></td>
                                      <td>
                                        <a href="<?= base_url('admin/tinjau_pengaduan/') . $row->id_pengaduan ?>" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat</a>
                                        <a href="<?= base_url('admin/selesai_pengaduan/') . $row->id_pengaduan ?>" class="btn btn-success tombol-setuju"><i class="fas fa-check"></i> Selesai</a>
                                      </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                </div>
              </div>
              <div class="pengaduan_selesai" data-tab-group="summary-tab" id="pengaduan_selesai">
                <div class="row">
                    <div class="col-12">
                      <?php if($pengaduan_selesai == NULL) { ?>
                            <div class="empty-state" data-height="400">
                                <div class="empty-state-icon">
                                <i class="fas fa-question"></i>
                                </div>
                                <h2>Kami tidak menemukan data apapun!</h2>
                                <p class="lead">
                                    Maaf kami tidak menemukan data apapun, untuk menghilangkan pesan ini, buat setidaknya 1 data.
                                </p>
                            </div>
                        <?php } else { ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-3">
                            <thead>
                                <tr>
                                  <th width="20px">No</th>
                                  <th>Nama Pelapor</th>
                                  <th>Judul</th>
                                  <th>Foto Bukti</th>
                                  <th>Foto KTP</th>
                                  <th>Status</th>
                                  <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengaduan_selesai as $row) : ?>
                                    <tr>
                                      <td><?= $no++ ?></td>
                                      <td><img src="<?= base_url('upload/profil/') . $row->image ?>" alt="" class="rounded-circle mr-1" width="35px" height="35px"><?= $row->nama_depan . ' ' . $row->nama_belakang ?></td>
                                      <td class="font-weight-bold"><?= $row->judul ?></td>
                                      <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('upload/foto_bukti/') . $row->foto_bukti ?>" data-title="<?= $row->judul ?>"></div>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('upload/foto_ktp/') . $row->foto_ktp ?>" data-title=""></div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-pill badge-success">Selesai</span></td>
                                      <td>
                                        <a href="<?= base_url('admin/tinjau_pengaduan/') . $row->id_pengaduan ?>" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat</a>
                                      </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                </div>
              </div>
              <div class="pengaduan_ditolak" data-tab-group="summary-tab" id="pengaduan_ditolak">
                <div class="row">
                    <div class="col-12">
                      <?php if($pengaduan_ditolak == NULL) { ?>
                            <div class="empty-state" data-height="400">
                                <div class="empty-state-icon">
                                <i class="fas fa-question"></i>
                                </div>
                                <h2>Kami tidak menemukan data apapun!</h2>
                                <p class="lead">
                                    Maaf kami tidak menemukan data apapun, untuk menghilangkan pesan ini, buat setidaknya 1 data.
                                </p>
                            </div>
                        <?php } else { ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-4">
                            <thead>
                                <tr>
                                  <th width="20px">No</th>
                                  <th>Nama Pelapor</th>
                                  <th>Judul</th>
                                  <th>Foto Bukti</th>
                                  <th>Foto KTP</th>
                                  <th>Status</th>
                                  <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengaduan_ditolak as $row) : ?>
                                    <tr>
                                      <td><?= $no++ ?></td>
                                      <td><img src="<?= base_url('upload/profil/') . $row->image ?>" alt="" class="rounded-circle mr-1" width="35px" height="35px"><?= $row->nama_depan . ' ' . $row->nama_belakang ?></td>
                                      <td class="font-weight-bold"><?= $row->judul ?></td>
                                      <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('upload/foto_bukti/') . $row->foto_bukti ?>" data-title="<?= $row->judul ?>"></div>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('upload/foto_ktp/') . $row->foto_ktp ?>" data-title=""></div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-pill badge-danger">Ditolak</span></td>
                                      <td>
                                        <a href="<?= base_url('admin/tinjau_pengaduan/') . $row->id_pengaduan ?>" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat</a>
                                      </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
</div>