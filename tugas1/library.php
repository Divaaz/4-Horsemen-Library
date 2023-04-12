<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection and Circulation</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">4 Horsemen Library</div>
        <nav class="navbar" style="margin-bottom: 10px;">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="library.php">Library</a></li>
            </ul>
        </nav>
        <div class="flex">
            <main>
                <h2>Daftar koleksi</h2>
                <table class="table-main">
                    <tr>
                        <th class="table-bookcover" style="text-align: left 15%; border-bottom: 1px solid black;">Cover</th>
                        <th class="table-description" style="border-bottom: 1px solid black;">Deskripsi</th>
                        <th class="table-book-id" style="border-bottom: 1px solid black;">Kode Buku</th>
                    </tr>
                    <!-- buku 1 -->
                    <tr>
                        <td><img src="/4-Horsemen-Library/tugas1/Media/Akuntansi_pengantar_1.jpg" alt="Akuntansi Pengantar 1" width="120px" style="margin-top: 15px;"></td>
                        <td><p><b>Akuntansi Pengantar 1</b></p>
                        <p class="p-description">Pengarang: Supardi</p>
                        <p class="p-description">Penerbit: Gava Media</p>
                        <p class="p-description">Tahun terbit: 2009</p>
                        <p class="p-description">ISBN: 978-979-107-882-5</p>
                        </td>
                        <td><p style="text-align: center;">1</p></td>
                    </tr>
                    <!-- buku 2 -->
                    <tr>
                        <td><img src="/4-Horsemen-Library/tugas1/Media/induksi_ovulasi.jpg" alt="Aplikasi Klinis Induk Ovulasi dan Stimulasi Ovarium" width="120px" style="margin-top: 15px;"></td>
                        <td><p><b>Aplikasi Klinis Induk Ovulasi dan Stimulasi Ovarium</b></p>
                        <p class="p-description">Pengarang: Samsulhadi</p>
                        <p class="p-description">Penerbit: Sagung Seto</p>
                        <p class="p-description">Tahun terbit: 2013</p>
                        <p class="p-description">ISBN:978-979-328-876-5 </p>
                        </td>
                        <td><p style="text-align: center;">2</p></td>
                    </tr>
                    <!-- buku 3 -->
                    <tr>
                        <td><img src="/4-Horsemen-Library/tugas1/Media/asuhan_keperawatan.jpg" alt="Aplikasi Praktis Asuhan Keperawatan Keluarga" width="120px" style="margin-top: 15px;"></td>
                        <td><p><b>Aplikasi Praktis Asuhan Keperawatan Keluarga</b></p>
                        <p class="p-description">Pengarang: Komang Ayu Heni</p>
                        <p class="p-description">Penerbit: Sagung Seto</p>
                        <p class="p-description">Tahun terbit: 2012</p>
                        <p class="p-description">ISBN: 978-602-867-404-1</p>
                        </td>
                        <td><p style="text-align: center;">3</p></td>
                    </tr>
                    <!-- buku 4 -->
                    <tr>
                        <td><img src="/4-Horsemen-Library/tugas1/Media/A-ZPsikologi.jpg" alt="A-Z Psikologi: Berbagai Kumpulan Topik Psikologi" width="120px" style="margin-top: 15px;"></td>
                        <td><p><b>A-Z Psikologi: Berbagai Kumpulan Topik Psikologi</b></p>
                        <p class="p-description">Pengarang: Zainul Anwar</p>
                        <p class="p-description">Penerbit: Andi Offset</p>
                        <p class="p-description">Tahun terbit: 2012</p>
                        <p class="p-description">ISBN: 978-979-293-215-7</p>
                        </td>
                        <td><p style="text-align: center;">4</p></td>
                    </tr>
                    <!-- buku 5 -->
                    <tr>
                        <td><img src="/4-Horsemen-Library/tugas1/Media/BANGSAGAGAL.jpg" alt="Bangsa Gagal: Mencari Identitas kebangsaan" width="120px" style="margin-top: 15px;"></td>
                        <td><p><b>7Bangsa Gagal: Mencari Identitas kebangsaan</b></p>
                        <p class="p-description">Pengarang: Nasruddin Anshoriy</p>
                        <p class="p-description">Penerbit: LKiS</p>
                        <p class="p-description">Tahun terbit: 2008</p>
                        <p class="p-description">ISBN: 979-979-128-365-6</p>
                        </td>
                        <td><p style="text-align: center;">5</p></td>
                    </tr>
                </table>
            </main>
            <aside></aside>
        </div>
        <div class="flex" style="margin-top: 10px;">
            <main>
            <h2>Peminjaman Buku</h2>
            <form action="sirkulasi.php" method="post" autocomplete="off">
                <label for="fname">First Name</label>
                <input class="input" type="text" name="fname" value maxlength="50" size="30" placeholder="Masukkan nama depan" required>
                <label for="lname">Last Name</label>
                <input class="input" type="text" name="lname" value maxlength="50" size="30" placeholder="Masukkan nama belakang" required>
                <label for="email">Email</label>
                <input class="input" type="email" name="email" value maxlength="50" size="30" placeholder="Masukkan email" required>
                <label for="id_buku">Kode Buku</label>
                <input class="input" type="text" name="id_buku" value maxlength="50" size="30" placeholder="Masukkan kode buku" required>
                <input type="submit" value="Submit" class="input-submit">
            </form>
            </main>
        </div>
    </div>
    <footer style="margin-top: 10px;">copyright ©4 Horsemen Library 2023</footer>
</body>
</html>