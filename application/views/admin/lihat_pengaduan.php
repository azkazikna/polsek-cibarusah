<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Laporan Pengaduan</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-primary">
                            <h4>Detail Pengaduan</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="<?= base_url('upload/foto_bukti/') . $pengaduan->foto_bukti ?>" alt=""
                                    class="w-50 h-50 rounded">
                            </div>
                            <table class="mt-3">
                                <tr>
                                    <td class="font-weight-bold">Judul</td>
                                    <td class="font-weight-bold">&emsp;:&nbsp;</td>
                                    <td><?= $pengaduan->judul ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Laporan</td>
                                    <td class="font-weight-bold">&emsp;:&nbsp;</td>
                                    <td><?= $pengaduan->isi ?></td>
                                </tr>
                            </table>
                            <div class="mt-5">
                                <h6 class="text-primary">Tanggapan</h6>
                                <hr>
                                <?php if($this->uri->segment(2) == "lihat_pengaduan") { ?>
                                    <form action="<?= base_url('admin/laporan_pengaduan_action/') . $pengaduan->id_pengaduan ?>" method="POST">
                                        <div class="form-group">
                                            <label class="form-label">Aksi</label>
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="status" value="diproses" class="selectgroup-input"
                                                        checked="">
                                                    <span class="selectgroup-button">Terima</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="status" value="ditolak" class="selectgroup-input">
                                                    <span class="selectgroup-button">Tolak</span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggapan">Tanggapan</label><br>
                                                <textarea class="summernote" id="tanggapan" name="tanggapan"><?= $pengaduan->tanggapan ?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                <?php } else {?>
                                    <div class="form-group">
                                        <label class="form-label">Aksi</label><br>
                                        <?php if($pengaduan->status == "diproses") { ?>
                                            <span class="badge badge-success">Diterima</span>
                                        <?php } elseif($pengaduan->status == "ditolak") { ?>
                                            <span class="badge badge-danger">Ditolak</span>
                                        <?php } else { ?>
                                            <span class="badge badge-success">Selesai</span>
                                        <?php } ?>
                                        <div class="form-group mt-2">
                                            <label for="tanggapan">Tanggapan</label><br>
                                            <?= $pengaduan->tanggapan ?>
                                        </div>
                                        <a href="<?= base_url('admin/laporan_pengaduan') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-primary">
                            <h4>Detail User</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="<?= base_url('upload/profil/') . $pengaduan->image ?>" alt=""
                                    class="mx-auto rounded-circle" width="100px" height="100px">
                            </div>
                            <h5 class="text-capitalize text-center mt-2">
                                <?= $pengaduan->nama_depan . ' ' . $pengaduan->nama_belakang ?>
                            </h5>
                            <table>
                                <tr>
                                    <td>Email</td>
                                    <td>&emsp;:&nbsp;</td>
                                    <td>
                                        <?= $pengaduan->email ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No Telp / WA</td>
                                    <td>&emsp;:&nbsp;</td>
                                    <td>
                                        <?= $pengaduan->no_telp . ' / ' ?>
                                        <?= $pengaduan->no_wa != NULL ? $pengaduan->no_wa : '-' ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>&emsp;:&nbsp;</td>
                                    <td>
                                        <?= $pengaduan->jenis_kelamin == "L" ? "Laki - Laki" : "Perempuan" ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>&emsp;:&nbsp;</td>
                                    <td>
                                        <?= date("d F, Y", strtotime($pengaduan->tanggal_lahir)) ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-primary">
                            <h4>Foto KTP</h4>
                        </div>
                        <div class="card-body">
                            <div class="gallery gallery-fw gallery-fh" data-item-height="300">
                                <div class="gallery-item" data-image="<?= base_url('upload/foto_ktp/') . $pengaduan->foto_ktp ?>" data-title=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>