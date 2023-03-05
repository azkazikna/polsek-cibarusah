<!-- Pengaduan Start -->
<section id="pengaduan" class="pt-24 lg:pt-36">
    <div class="container max-w-screen-xl px-6 md:px-14 2xl:px-0  mx-auto">
        <h5 class="font-bold text-base md:text-xl lg:text-2xl text-text">Isi Formulir</h5>
        <p class="mt-2 text-sm md:text-base">Ajukan laporan pengaduan dengan mengisi formulir dibawah ini.</p>
        <form action="<?= base_url('user/add_laporan_pengaduan') ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user2') ?>">
            <div class="form-group w-full mt-4">
                <label for="judul" class="text-sm md:text-base font-semibold dark:text-txtdark">Judul Laporan
                    <span class="text-red-500">*</span></label><br>
                <input type="text" name="judul" id="judul"
                    class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] rounded-md w-full mt-1 p-4">
                <?php echo form_error('judul', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
            </div>
            <div class="form-group w-full mt-4">
                <label for="isi" class="text-sm md:text-base font-semibold dark:text-txtdark">Isi Laporan
                    <span class="text-red-500">*</span></label><br>
                <textarea name="isi" id="isi" rows="10"
                    class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] rounded-md w-full mt-1 p-4"></textarea>
                <?php echo form_error('isi', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
            </div>
            <div class="form-group w-full mt-4">
                <label for="foto_ktp" class="text-sm md:text-base font-semibold dark:text-txtdark">Foto KTP (Gambar)
                    <span class="text-red-500">*</span></label><br>
                <input type="file" name="foto_ktp" id="foto_ktp"
                    class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] rounded-md w-full mt-1 p-2">
                <?php echo form_error('foto_ktp', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
            </div>
            <div class="form-group w-full mt-4">
                <label for="foto_bukti" class="text-sm md:text-base font-semibold dark:text-txtdark">Bukti Kuat (Gambar)
                    <span class="text-red-500">*</span></label><br>
                <input type="file" name="foto_bukti" id="foto_bukti"
                    class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] rounded-md w-full mt-1 p-2">
                <?php echo form_error('foto_bukti', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
            </div>
            <button type="submit"
                class="mt-4 bg-primary text-white px-6 py-2 md:py-3 rounded-lg w-full text-base md:text-lg">Kirim</button>
        </form>
    </div>
</section>
<!-- Pengaduan End -->