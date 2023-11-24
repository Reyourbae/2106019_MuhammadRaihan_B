<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pemesanan Tiket Kereta Api</title>
    <link rel="stylesheet" href="style.css" />
    <form action="proses_input.php" method="post">
  </head>
  <body>
    <div class="container">
      <h1>Pemesanan Tiket Kereta Api</h1>
      <from methode="POST">
        <label for="id_penumpang">ID Penumpang</label>
        <input type="text" id="id_penumpang" required class="from input">

        <label for="stasiun_asal">Stasiun Asal</label>
        <select
          name="stasiun_asal"
          id="stasiun_asal"
          required
          class="from input"
        >
          <option value="">select</option>
          <option value="Stasiun Garut">Stasiun Garut</option>
          <option value="Stasiun Cibatu">Stasiun Cibatu</option>
          <option value="Stasiun Warungbandrek">Stasiun Warungbandrek</option>
          <option value="Stasiun Leuwigoong">Stasiun Leuwigoong</option>
          <option value="Stasiun Leles">Stasiun Leles</option>
          <option value="Stasiun Cipeundeuy">Stasiun Cipeundeuy</option>
          <option value="Stasiun Bumiwaluya">Stasiun Bumiwaluya</option>
        </select>

        <label for="stasiun_tujuan">Stasiun Tujuan</label>
        <select
          name="stasiun_tujuan"
          id="stasiun_tujuan"
          required
          class="from input"
        >
          <option value="select">select</option>
          <option value="Stasiun Cimahi">Stasiun Cimahi</option>
          <option value="Stasiun Kiaracondong">Stasiun Kiaracondong</option>
          <option value="Stasiun Pasar Senen">Stasiun Pasar Senen</option>
          <option value="Stasiun Tanahabang">Stasiun Tanahabang</option>
          <option value="Stasiun Gondangdia">Stasiun Gondangdia</option>
          <option value="Stasiun Jakarta Kota">Stasiun Jakarta Kota.</option>
          <option value="Stasiun Juanda">Stasiun Juanda</option>
          <option value="stasiun Kramat">stasiun Kramat</option>
          <option value="Stasiun Cikini">Stasiun Cikini</option>
          <option value="Stasiun Gambir">Stasiun Gambir</option>
        </select>

        <label for="Kelas"> Kelas </label>
        <select name="kelas" id="kelas" required class="from input">
          <option value="">select</option>
          <option value="Kelas Ekonomi">Kelas Ekonomi</option>
          <option value="Kelas Bisnis">Kelas Bisnis</option>
          <option value="Kelas Eksekutif">Kelas Eksekutif</option>
        </select>
        
        <label for="Tanggal Keberangkatan">Tanggal Keberangkatan</label>
        <input type="date" id="date" name="date" required class="from input" />

        <label for="Dewasa">Dewasa</label>
        <input
          type="number"
          name="Dewasa"
          id="Dewasa"
          min="0"
          max="1000"
          required
          class="from input"
        />
        <label for="Bayi">Bayi dibawah 3 tahun</label>
        <input
          type="number"
          name="Bayi"
          id="Bayi"
          min="0"
          max="1000"
          required
          class="from input"
        />
        <br />

        <input type="submit" name="submit" id="submit" />
      </from>
    </div>
  </body>
</html>
