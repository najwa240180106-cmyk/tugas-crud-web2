<h2>Tambah Buku</h2>

<form action="/buku" method="POST">
    @csrf

    <input type="text" name="judul" placeholder="Judul"><br><br>
    <input type="text" name="penulis" placeholder="Penulis"><br><br>
    <input type="text" name="penerbit" placeholder="Penerbit"><br><br>
    <input type="number" name="tahun_terbit" placeholder="Tahun"><br><br>

    <button type="submit">Simpan</button>
</form>
