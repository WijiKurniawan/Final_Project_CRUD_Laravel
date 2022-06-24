<h1>Halaman create</h1>

<form action="/pegawai/store">
    @csrf
    <input type="text" name="NIP" placeholder="NIP"><br>
    <input type="text" name="Nama" placeholder="Nama"><br>
    <input type="text" name="TempatLahir" placeholder="Tempat Lahir"><br>
    <input type="date" name="TanggalLahir" placeholder="Tanggal Lahir"><br>
    <input type="text" name="Agama" placeholder="Agama"><br>
    <select name="JenisKelamin"><br>
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki Laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <input type="text" name="NoHP" placeholder="Nomor HP"><br>
    <textarea name="Alamat" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Simpan">


</form>