@vite('resources/css/app.css')
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Geist:wght@100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<div class="flex flex-col h-full w-full pl-10 py-5">

    <form action="">

        <h1 class="font-bold text-4xl font-primary w-full whitespace-nowrap mb-5">Tambah <span class="text-primary">Pengguna</span></h1>

        <div class="flex flex-col h-full w-full mt-3 gap-2 font-poppins">
            <p class="font-medium text-[20px]">Nama *</p>
            <input type="text" class="outline-none bg-input/8 h-10 rounded-md px-3 text-[16px] py-1 w-6/4">
        </div>


        <div class="flex flex-row gap-4">
            <div class="flex flex-col h-full w-full mt-3 gap-2 font-poppins">
                <p class="font-medium text-[20px]">NIS *</p>
                <input type="number" class="outline-none bg-input/8 h-10 rounded-md px-3 text-[16px] py-1 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
            </div>

            <div class="flex flex-col h-full w-full mt-3 gap-2 font-poppins">
                <p class="font-medium text-[20px]">NISN *</p>
                <input type="number" class="outline-none bg-input/8 h-10 rounded-md px-3 text-[16px] py-1 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
            </div>
        </div>

        <div class="flex flex-col h-full w-full mt-3 gap-2 font-poppins">
            <p class="font-medium text-[20px]">Role *</p>
            <select name="role" id="role" class="outline-none bg-input/8 h-10 rounded-md px-3 text-[16px] py-1 w-6/4">
                <option value="" disabled selected hidden></option>
                <option class="bg-option outline-none" value="admin">Admin</option>
                <option class="bg-option outline-none" value="kepsek">Kepala Sekolah</option>
                <option class="bg-option outline-none" value="wakakur">Wakil Kepala Sekolah Kurikulum</option>
                <option class="bg-option outline-none" value="wakasis">Wakil Kepala Sekolah Kesiswaan</option>
                <option class="bg-option outline-none" value="wakahum">Wakil Kepala Sekolah Humas</option>
                <option class="bg-option outline-none" value="wakasap">Wakil Kepala Sekolah Sarana Pra Sarana</option>
                <option class="bg-option outline-none" value="kkk">Ketua Konsentrasi Keahlian</option>
                <option class="bg-option outline-none" value="mentor">Mentor / Pembimbing</option>
                <option class="bg-option outline-none" value="siswa">Siswa</option>
            </select>
        </div>

         <div class="flex flex-col h-full w-full mt-3 gap-2 font-poppins">
            <p class="font-medium text-[20px]">Role *</p>
            <select name="role" id="role" class="outline-none bg-input/8 h-10 rounded-md px-3 text-[16px] py-1 w-6/4">
                <option value="" disabled selected hidden></option>
                <option class="bg-option outline-none" value="RPL">Rekayasa Perangkat Lunak</option>
                <option class="bg-option outline-none" value="DKV">Desain Komunikasi Visual</option>
                <option class="bg-option outline-none" value="TKP">Teknik Konstruksi Perumahan</option>
                <option class="bg-option outline-none" value="TP">Teknik Pengelasan</option>
                <option class="bg-option outline-none" value="Kuliner">Kuliner</option>
            </select>
        </div>

        <div class="flex flex-col h-full w-full mt-3 gap-2 font-poppins">
            <p class="font-medium text-[20px]">Jenis Kelamin *</p>
            <input type="radio" id="laki" name="jenis_kelamin" value="L" class="">
            <label for="laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="P" class="">
            <label for="perempuan">Perempuan</label>
        </div>

    </form>

</div>
