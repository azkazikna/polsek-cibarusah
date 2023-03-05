<!-- Main section register start -->
<section id="register" class="pt-32 lg:pt-40 px-4">
    <div
        class="container mx-auto flex flex-col lg:flex-row gap-12 lg:gap-0 bg-white dark:bg-[#01060f] items-center rounded-2xl px-4 lg:px-14 py-14 lg:py-24 shadow-md justify-center">
        <div class="w-full">
            <img src="<?= base_url() ?>/dist/gif/login.gif" alt="" class="w-[200px] lg:w-[300px] mx-auto">
        </div>
        <div class="w-full">
            <h5 class="font-bold text-xl text-center text-text mb-7 dark:text-white">DAFTAR AKUN BARU
            </h5>
            <form action="<?= base_url('auth/daftar_action') ?>" method="POST">
                <h4 class="font-bold text-text dark:text-white mt-7">Informasi Pribadi</h4>
                <div class="flex flex-col lg:flex-row gap-2 mt-5">
                    <div class="form-group w-full">
                        <label for="nama_depan" class="text-sm md:text-base font-normal dark:text-txtdark">Nama
                            Depan
                            <span class="text-red-500">*</span></label><br>
                        <input type="text" name="nama_depan" id="nama_depan"
                            class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] px-4 py-3 rounded-md w-full mt-1"
                            placeholder="Masukkan nama depan" value="<?= set_value('nama_depan') ?>">
                        <?php echo form_error('nama_depan', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
                    </div>
                    <div class="form-group w-full">
                        <label for="nama_belakang" class="text-sm md:text-base font-normal dark:text-txtdark">Nama
                            Belakang
                            <span class="text-red-500">*</span></label><br>
                        <input type="text" name="nama_belakang" id="nama_belakang"
                            class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] px-4 py-3 rounded-md w-full mt-1"
                            placeholder="Masukkan nama belakang" value="<?= set_value('nama_belakang') ?>">
                        <?php echo form_error('nama_belakang', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-2 mt-2 lg:mt-5">
                    <div class="form-group w-full">
                        <label for="jenis_kelamin" class="text-sm md:text-base font-normal dark:text-txtdark">Jenis Kelamin
                            <span class="text-red-500">*</span></label><br>
                        <select name="jenis_kelamin" id="jenis_kelamin"
                            class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] px-4 py-3 rounded-md w-full mt-1">
                            <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                            <option value="L" <?= set_value('jenis_kelamin') == 'L' ? 'selected' : '' ?>>Laki - Laki</option>
                            <option value="P" <?= set_value('jenis_kelamin') == 'P' ? 'selected' : '' ?>>Perempuan</option>
                        </select>
                        <?php echo form_error('jenis_kelamin', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
                    </div>
                    <div class="form-group w-full">
                        <label for="birth" class="text-sm md:text-base font-normal dark:text-txtdark">Tanggal
                            Lahir
                            <span class="text-red-500">*</span></label><br>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                            class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] px-4 py-3 rounded-md w-full mt-1 text-dark uppercase" value="<?= set_value('tanggal_lahir') ?>">
                        <?php echo form_error('tanggal_lahir', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
                    </div>
                </div>
                <h4 class="font-bold text-text dark:text-white mt-7">Informasi Kontak</h4>
                <div class="form-group w-full mt-5">
                    <label for="email" class="text-sm md:text-base font-normal dark:text-txtdark">Alamat Email
                        <span class="text-red-500">*</span></label><br>
                    <input type="email" name="email" id="email"
                        class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] px-4 py-3 rounded-md w-full mt-1"
                        placeholder="Masukkan alamat email Anda" value="<?= set_value('email') ?>">
                    <?php echo form_error('email', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
                </div>
                <div class="flex flex-col lg:flex-row gap-2 mt-2">
                    <div class="form-group w-full relative">
                        <label for="password" class="text-sm md:text-base font-normal dark:text-txtdark">Kata
                            Sandi
                            <span class="text-red-500">*</span></label><br>
                        <input type="password" name="password" id="password"
                            class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] px-4 py-3 rounded-md w-full mt-1"
                            placeholder="Masukkan kata sandi Anda">
                        <span toggle="#password"
                            class="fa-solid fa-eye field-icon toggle-password absolute top-1/2 right-5 text-darken dark:text-white text-xl cursor-pointer"></span>
                        <?php echo form_error('password', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
                    </div>
                    <div class="form-group w-full relative">
                        <label for="password2" class="text-sm md:text-base font-normal dark:text-txtdark">Konfirmasi Kata
                            Sandi
                            <span class="text-red-500">*</span></label><br>
                        <input type="password" name="password2" id="password2"
                            class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] px-4 py-3 rounded-md w-full mt-1"
                            placeholder="Konfirmasi kata sandi Anda">
                        <?php echo form_error('password2', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-2 mt-2 lg:mt-5">
                    <div class="form-group w-full">
                        <label for="no_telp" class="text-sm md:text-base font-normal dark:text-txtdark">No.
                            Telepon
                            <span class="text-red-500">*</span></label><br>
                        <input type="number" name="no_telp" id="no_telp"
                            class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] px-4 py-3 rounded-md w-full mt-1"
                            placeholder="Masukkan nomor telepon Anda" value="<?= set_value('no_telp') ?>">
                        <?php echo form_error('no_telp', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
                    </div>
                    <div class="form-group w-full relative">
                        <label for="no_wa" class="text-sm md:text-base font-normal dark:text-txtdark">No. WA
                            <span class="text-red-500 text-xs">(opsional)</span></label><br>
                        <input type="number" name="no_wa" id="no_wa"
                            class="text-sm md:text-base bg-white dark:text-txtdark border bg-opacity-[40%] px-4 py-3 pl-14 rounded-md w-full outline-0"
                            placeholder="Masukkan nomor WA Anda" value="<?= set_value('no_wa') ?>">
                        <div
                            class="text-darken dark:text-white bg-gray-200 top-6 rounded-l-md absolute h-[57px] px-2 pt-4">
                            +62</div>
                        <?php echo form_error('no_wa', '<span class="text-xs md:text-sm text-red-500">', '</span>') ?>
                    </div>
                </div>
                <div class="flex justify-center mt-10">
                    <button type="submit" class="py-3 px-5 bg-primary text-white text-lg rounded-lg w-full">Buat
                        Akun</button>
                </div>
            </form>
            <p class="text-sm text-darken dark:text-white text-center mt-4">Sudah memiliki akun? <a
                    href="login.html" class="text-primary">Masuk</a></p>
        </div>
    </div>
</section>
<!-- Main section register end -->