<!-- Main section login start -->
<section id="login" class="pt-32 lg:pt-40 px-4">
    <div
        class="container mx-auto flex flex-col lg:flex-row gap-12 bg-white dark:bg-[#01060f] items-center rounded-2xl px-4 lg:px-14 py-14 lg:py-24 shadow-md justify-center">
        <div class="w-full">
            <img src="<?= base_url() ?>/dist/gif/login.gif" alt="" class="w-[200px] lg:w-[300px] mx-auto">
        </div>
        <div class="w-full">
            <h5 class="font-bold text-xl text-center text-darken mb-7 dark:text-white">MASUKKAN AKUN</h5>
            <!-- Flashdata Start -->
            <?= $this->session->flashdata('message'); ?>
            <!-- Flashdata End -->
            <form action="<?= base_url('auth/login_action') ?>" method="POST">
                <div class="form-group mt-7">
                    <label for="email" class="text-sm md:text-base text-dark dark:text-txtdark">Email</label><br>
                    <input type="email" name="email" id="email"
                        class="bg-white dark:text-txtdark border bg-opacity-[40%] p-4 rounded-md w-full mt-1"
                        placeholder="Masukkan email Anda" autofocus>
                </div>
                <div class="form-group mt-7 relative">
                    <label for="password" class="text-sm md:text-base text-dark dark:text-txtdark">Kata
                        Sandi</label><br>
                    <input type="password" name="password" id="password"
                        class="bg-white dark:text-txtdark border bg-opacity-[40%] p-4 rounded-md w-full mt-1"
                        placeholder="Masukkan password Anda">
                    <span toggle="#password"
                        class="fa-solid fa-eye field-icon toggle-password absolute top-1/2 right-5 text-darken dark:text-white text-xl cursor-pointer"></span>
                </div>
                <div class="flex justify-between mt-3">
                    <div class="form-group">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox" class="text-sm md:text-base text-darken dark:text-white">Ingat
                            Saya</label>
                    </div>
                    <a href="" class="text-sm md:text-base text-darken dark:text-white underline">Lupa Password?</a>
                </div>
                <div class="flex justify-center mt-7">
                    <button type="submit"
                        class="py-3 px-5 bg-primary text-lg rounded-lg w-full text-white">Masuk</button>
                </div>
            </form>
            <p class="text-sm text-darken dark:text-white text-center mt-4">Belum punya akun? <a
                    href="register.html" class="text-primary">Daftar</a></p>
        </div>
    </div>
</section>
<!-- Main section login end -->