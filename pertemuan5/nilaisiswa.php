<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-400 flex items-center justify-center min-h-screen">

    <?php
    $nama = "";
    $nilai_akhir = "";
    $predikat ="";
    $nilai_tugas = "";
    
    
    if(isset($_POST['Hitung'])) {
       $nama = $_POST['nama'];
       $tugas = $_POST['tugas'] ;
       $uts = $_POST['uts'];
       $uas = $_POST['uas'];

      $nilai_akhir = $tugas + $uts + $uas;


       
            if($nilai_akhir >= 85) {
                $predikat = 'A';
            } elseif ($nilai_akhir >= 70) {
                $predikat = 'B';
            } elseif ($nilai_akhir >= 60) {
                $predikat = 'C';
            } elseif ($nilai_akhir >= 50) {
                $predikat = 'D';
            } else {
                $predikat = 'E';
            }
        };
  
    ?>

    <div class="bg-white p-8 rounded-lg shadow-lg w-96 mr-4">
        <h2 class="text-2xl font-semibold text-center mb-5">Form Input Nilai Siswa</h2>
        <form action="" method="POST" name="nilaiakhir">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="w-full p-3 mb-4 border border-gray-200 rounded-md" autocomplate="off"> 
            <label for="tugas">Nilai Tugas</label>
            <input type="text" name="tugas" class="w-full p-3 mb-4 border border-gray-200 rounded-md" autocomplate="off">
            <label for="uts">Nilai UTS</label>
            <input type="text" name="uts" class="w-full p-3 mb-4 border border-gray-200 rounded-md" autocomplate="off"> 
            <label for="uas">Nilai UAS</label>
            <input type="text" name="uas" class="w-full p-3 mb-4 border border-gray-200 rounded-md" autocomplate="off"> 
            
            <input type="submit" name="Hitung" value="Hitung Nilai" class="w-full p-1 mb-3 border border-gray-200 rounded-md cursor-pointer bg-purple-600 hover:bg-purple-300">
        </form>
    </div>

    <div class="bg-white p-8 rounded-lg shadow-lg w-96 ">
        <h2 class="text-2xl font-semibold text-center mb-5">Hasil Penilaian</h2>
        <table class="border-collapse border border-gray-400 ... w-full">
  <thead>
    <tr class="bg-gray-500 ">
      <th class="border border-gray-300 ...">Nama</th>
      <th class="border border-gray-300 ...">Nilai Akhir</th>
      <th class="border border-gray-300 ...">Kategori</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-gray-300 ..."><?php echo $nama;?></td>
      <td class="border border-gray-300 ..."><?php echo $nilai_akhir;?></td>
      <td class="border border-gray-300 ..."><?php echo $predikat;?></td>
    </tr>
   
  </tbody>
</table>
    </div>
  </body>
</html>