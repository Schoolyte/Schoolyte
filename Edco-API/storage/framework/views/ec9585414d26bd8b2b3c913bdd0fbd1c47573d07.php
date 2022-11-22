<!DOCTYPE html>
<html lang="en">
  <?php echo $__env->make('components.Header ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Style/Penilaiansiswa1.css">
</head>
<body>
  <?php echo $__env->yieldContent('Navbar'); ?>
    <div class="page-penilaian">
        <div class="tittle-page">
          <span>Penilaian Pembelajaran</span>
          <ul class="breadcrumb">
            <li><a href="#">Akademik</a></li>
            <li>Penilaian Pembelajaran</li>
          </ul>
        </div>
        <div class="identitas-siswa">
          <img src="/assets/img-siswa.png">
          <h1>Novi Rosidhatul Aulia</h1>
          <span>X MIPA 1</span>
        </div>
        <div class="Penilaian-place">
          <div class="dropdown">
            <button class="dropbtn1">Semester Ganjil <br/>Pantau nilai tugas hingga nilai ujianmu di semester ganjil 
              <i class="fa fa-caret-down"></i>
            </button>
            
            <div class="content1 dropdown-content">
              
              <div class="row">
                <div class="column">
                  <a href="#">Matematika</a>
                  <a href="#">IPA</a>
                  <a href="#">Bhs. Inggris</a>
                </div>
                <div class="column">
                  
                  <a href="#">Biologi</a>
                  <a href="#">Bhs. indonesia</a>
                  <a href="#">Pendidikan Agama</a>
                </div>
                <div class="column">
                  
                  <a href="#">Penjas</a>
                  <a href="#">TIK</a>
                  <a href="#">PPKN</a>
                </div>
              </div>
            </div>
          </div> 
          <div class="dropdown">
            <button class="dropbtn">Pengetahuan</button>
            
            <div class="content3 dropdown-content">
              <a href="#table-pengetahuan">Pengetahuan</a>
              <a href="#">Keterampilan</a>
              
            </div>
          </div>
          <table class="table table-hover" id="table-pengetahuan">
            <thead class="thead-dark">
              <tr>
                
                <th scope="col">Kategori</th>
                <th scope="col">Nilai</th>
               
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Tugas 1</th> 
                <th scope="row"></th> 
              </tr>
              <tr>
                <th scope="row">Tugas 2</th>
                <th scope="row"></th> 
              </tr>
              <tr>
                <th scope="row">Tugas 3</th>
                <th scope="row"></th> 
              </tr>
              <tr>
                <th scope="row">UTS</th>
                <th scope="row"></th> 
              </tr>
              <tr>
                <th scope="row">UAS</th>
                <th scope="row"></th>
              </tr>
            </tbody>
            <thead class="thead-dark">
              <tr>
                
                <th scope="col">Rata - rata</th>
                <th scope="col"></th>
               
              </tr>
            </thead>
          </table>
          <div class="dropdown">
            <button class="dropbtn2">Semester Genap <br/>Pantau nilai tugas hingga nilai ujianmu di semester Genap
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="content2 dropdown-content">
              
              <div class="row">
                <div class="column">
                  <a href="#">Matematika</a>
                  <a href="#">IPA</a>
                  <a href="#">Bhs. Inggris</a>
                </div>
                <div class="column">
                  
                  <a href="#">Biologi</a>
                  <a href="#">Bhs. indonesia</a>
                  <a href="#">Pendidikan Agama</a>
                </div>
                <div class="column">
                  
                  <a href="#">Penjas</a>
                  <a href="#">TIK</a>
                  <a href="#">PPKN</a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <button type="button" class="btn-kelasX"><img src="/assets/School Building.png" width="35" height="35" padding="5" /> &nbsp; Kelas X</button>
        <button type="button" class="btn-kelasXI"><img src="/assets/School Building.png"  width="35" height="35"/> &nbsp; Kelas XII</button>
        <button type="button" class="btn-kelasXII"><img src="/assets/School Building.png" width="35" height="35"/> &nbsp; Kelas XII</button>
      </div>
</body>
</html><?php /**PATH C:\Users\Asus\OneDrive\Desktop\Schoolyte-main\Edco-API\resources\views/Penilaian/Penilaiansiswa1.blade.php ENDPATH**/ ?>