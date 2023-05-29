@extends('layout')
@section('content')
<!-- home section starts  -->

<section class="home" id="home">

    <div class="img">
        <img src="{{ asset('assets/img/laptop.png')}}" alt="">
    </div>

    <div class="content">
        <h3 class="font-weight-bold">WIKRAMA LAPTOP FOR US</h3>
        <h2></h2>
        <p>Laptop ini dapat dipinjam oleh seluruh siswa-siswi smk wikrama yang 
            membutuhkan laptop saat pembelajaran di sekolah, sebelum meminjam pastikan
            telah membaca syarat dan ketentuan yang ada yaa!!!! </p>
    </div>
  

  
    <div class="cloud cloud-1"></div>
    <div class="cloud cloud-2"></div>
  
  </section>
  
  <!-- home section ends -->
  
  <!-- services section starts  -->
  
  <section class="services" id="services">
  
    <h1 class="heading"> Landing <span>Rules</span> </h1>
  
    <div class="box-container">
  
        <div class="box">
            <img src="images/s-1.png" alt="">
            <h3 class="font-weight-bold">Wajib Isi form</h3>
            <p>Sebelum meminjam laptop pastikan kalian telah mengisi form yang telah disediakan</p>
            <a href="#" class="btn">Wajib dibaca!!</a>
        </div>
  
        <div class="box">
            <img src="{{asset('assets/img/jam.jpeg')}}" alt="">
            <h3 class="font-weight-bold">Tidak dibawa pulang</h3>
            <p>Laptop ini hanya boleh dipakai saat pembelajaran disekolah tidak bisa dipinjam untuk keperluan diluar sekolah</p>
            <a href="#" class="btn">Wajib dibaca!!</a>
        </div>
  
        <div class="box">
            <img src="img/s-3.png" alt="">
            <h3 class="font-weight-bold">konfirmasi ke pengawas</h3>
            <p>Laptop ini hanya bisa dipinjam saat ada pengawas yang memberikan, tidak boleh meminjam tanpa sepengatahuan pengawas</p>
            <a href="#" class="btn">Wajib dibaca!!</a>
        </div>
  
        <div class="box">
            <img src="images/s-4.png" alt="">
            <h3 class="font-weight-bold">menyerahkan name tag dan kartu pelajar</h3>
            <p>wajib menyerahkan name tag dan kartu pelajar selama peminjaman laptop kepada pengawas yang berjaga</p>
            <a href="#" class="btn">Wajib dibaca!!</a>
        </div>
  
        <div class="box">
            <img src="images/s-5.png" alt="">
            <h3 class="font-weight-bold">kembalikan tepat waktu</h3>
            <p>Laptop ini harus dikembalikan tepat waktu karena guru dan laboran memiliki data siapa yang meminjam</p>
            <a href="#" class="btn">Wajib dibaca!!</a>
        </div>
  
        <div class="box">
            <img src="images/s-6.png" alt="">
            <h3 class="font-weight-bold">Menjaga laptop</h3>
            <p>Laptop yang dipinjam harus dijaga dengan baik agar tidak rusak ataupun hilang</p>
            <a href="#" class="btn">Wajib dibaca!!</a>
        </div>
  
    </div>
  
  </section>
  
  <!-- services section ends -->
  
  <!-- jumlah -->

  {{-- end jumlah --}}

  <!-- contact section starts  -->
  
  <section class="contact" id="contact">
  
    <h1 class="heading"> <span>contact</span> us </h1>
  
    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3 class="font-weight-bold">our number</h3>
            <p>08984629292</p>
        </div>
        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3 class="font-weight-bold">our email</h3>
            <p>sabrinadpu@gmail.com</p>
        </div>
        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3 class="font-weight-bold">our location</h3>
            <p>SMK WIKRAMA BOGOR</p>
        </div>
    </div>
  

  
  </section>
  
  <!-- contact section ends -->
  
  <!-- footer section starts  -->
  
  <section class="footer">
  
   
  
    </div>
  
    <div class="credit">created by <span>Sabrina Dwi Putri Utami</span> | all rights reserved</div>
  
  </section>
  
  <!-- footer section ends -->
  
  <!-- custom js file link  -->
  
  </body>
  </html>
@endsection