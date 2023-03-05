<!-- Riwayat Start -->
<section id="riwayat" class="pt-24 lg:pt-36">
    <div class="container max-w-screen-xl px-6 md:px-14 2xl:px-0 mx-auto">
        <h1 class="text-lg lg:text-xl font-bold">Riwayat</h1>
        <p class="text-sm lg:text-base">Riwayat anda berada disini.</p>

        <div class="flex flex-col">
            <?php foreach($riwayat as $row) : ?>
            <a href="" class="w-full bg-white px-4 py-4 rounded-md shadow-sm <?php if($row->status == 'selesai') {echo 'border-green-500';} elseif($row->status == 'diproses') {echo 'border-yellow-500';} elseif($row->status == 'ditolak'){echo 'border-red-500';}else{echo 'border-primary';} ?> border-t-2 group mt-2 lg:mt-5">
                <div class="flex gap-2">
                    <img src="<?= base_url() ?>/dist/img/buat-laporan.svg" alt="" class="w-7">
                    <p class="font-semibold">Laporan Pengaduan</p>
                </div>
                <hr class="my-2">
                <div class="flex justify-between items-center">
                    <div class="flex gap-2">
                        <h4 class="font-bold lg:text-lg group-hover:text-primary transition duration-300"><?= $row->judul ?></h4>
                    </div>
                    <p class="text-xs lg:text-sm"><?= $row->tanggal ?></p>
                </div>
                <p class="text-sm lg:text-base"><?= $row->isi ?></p>
                <div class="<?php if($row->status == 'selesai') {echo 'bg-green-500';} elseif($row->status == 'diproses') {echo 'bg-yellow-500';} elseif($row->status == 'ditolak'){echo 'bg-red-500';}else{echo 'bg-primary';} ?> py-1 text-white text-center mt-5 mb-2 rounded-lg text-sm lg:text-base">
                <?= ucwords($row->status) ?></div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Riwayat End -->