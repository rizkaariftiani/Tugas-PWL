@extends('layouts.Master')

@section('title', 'About')

@section('content')

<section class="about" style="margin-bottom: 14%">
  <div class="jumbotron jumbotron-fluid mt-5">
    <div class="container b-5">
      <h1 class="display-2 mb">ABOUT</h1>

      <div class="card">
        <div class="card-body" >
          STRAY KIDS
        </div>
      </div>

      <div class="card-group">
        <div class="card">
          <img src="https://koreanindo.net/wp-content/uploads/2018/10/Stray-Kids-i-am-you-bang-chan.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Bang Chan</h5>
            <p class="card-text">
              Nama Panggung: Bang Chan (방찬) <br>
              Nama Kelahiran: Christoper Bang <br>
              Nama Korea: Bang Chan (방찬) <br>
              Ulang Tahun: 3 Oktober 1997 <br>
              Tinggi: 171 cm (5’7 ″) <br>
              Sub-unit: 3RACHA <br>
            </p>
          </div>
        </div>
        <div class="card">
          <img src="https://koreanindo.net/wp-content/uploads/2018/10/Stray-Kids-i-am-you-lee-know.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Lee Know</h5>
            <p class="card-text">
             Nama Panggung: Lee Know (리노) <br>
             Nama Kelahiran: Lee Min-ho (이민호) <br>
             Ulang Tahun: 25 Oktober 1998 <br>
           Tinggi: 172 cm (5’8 ″)</p>
         </div>
       </div>
       <div class="card">
        <img src="https://koreanindo.net/wp-content/uploads/2018/10/Stray-Kids-i-am-you-changbin.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Changbin</h5>
          <p class="card-text">
           Nama Panggung: Changbin (창빈) <br>
           Nama Kelahiran: Seo Chang-bin (서창빈) <br>
           Ulang Tahun: 11 Agustus 1999 <br>
           Tinggi: 167 cm (5’6 ″) <br>
           Sub-unit: 3RACHA
         </p>
       </div>
     </div>
   </div>

   <div class="card-group">
    <div class="card">
      <img src="https://koreanindo.net/wp-content/uploads/2018/10/Stray-Kids-i-am-you-hyunjin.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Hyunjin</h5>
        <p class="card-text">
         Nama Panggung: Hyunjin (현진) <br>
         Nama Kelahiran: Hwang Hyun-jin (황현진) <br>
         Ulang Tahun: 20 Maret 2000 <br>
       Tinggi: 179 cm (5-10 ‘)</p>
     </div>
   </div>
   <div class="card">
    <img src="https://koreanindo.net/wp-content/uploads/2018/10/Stray-Kids-i-am-you-han.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Han</h5>
      <p class="card-text">
       Nama Panggung: Han (한) <br>
       Nama Lahir: Han Ji-sung (한지성) <br>
       Nama Inggris: Peter Han <br>
       Ulang Tahun: 14 September 2000 <br>
       Tinggi: 169 cm (5’7 ″)<br>
       Sub-unit: 3RACHA
     </p>
   </div>
 </div>
 <div class="card">
  <img src="https://koreanindo.net/wp-content/uploads/2018/10/Stray-Kids-i-am-you-felix.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Felix</h5>
    <p class="card-text">
     Nama Panggung: Felix (필릭스) <br>
     Nama Kelahiran: Lee Felix (이필릭스) <br>
     Nama Korea: Lee Yong-bok (이용복) <br>
     Ulang Tahun: 15 September 2000 <br>
   Tinggi: 171 cm (5’7 ″)</p>
 </div>
</div>
</div>

<div class="card-group">
  <div class="card">
    <img src="https://koreanindo.net/wp-content/uploads/2018/10/Stray-Kids-i-am-you-seungmin3.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Seungmin</h5>
      <p class="card-text">
      	Nama Panggung: Seungmin (승민) <br>
        Nama Kelahiran: Kim Seung-min (김승민) <br>
        Posisi: Lead Vocalist <br>
        Ulang Tahun: 22 September 2000 <br>
      Tinggi: 175 cm (5’9″)</p>
    </div>
  </div>
  <div class="card">
    <img src="https://koreanindo.net/wp-content/uploads/2018/10/Stray-Kids-i-am-you-i.n3.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">IN</h5>
      <p class="card-text">
      	Nama Panggung: I.N (아이엔) <br>
        Nama Kelahiran: Yang Jeong-in (양정인) <br>
        Ulang Tahun: 8 Februari 2001 <br>
      Tinggi: 172 cm (5’8 ″)</p>
    </div>
  </div>
</div>

<!-- Comments Form -->
<div class="card my-4">
  <h5 class="card-header" style="background-color: #CD5C5C">Leave a Comment:</h5>
  <div class="card-body" style="background-color: #CD5C5C">
    <a href="mKomen/add" class="btn btn-secondary btn-lg btn-block">Add</a>
  </div>
</div>


<!-- Blog Post -->
@foreach ($comment as $com)
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-color: #E9967A">
        <h5 class="card-title">{{ $com->title }}</h5>
        <p class="card-text" style="background-color: #FFF8DC">{{ Str::limit($com->content, 50, '...') }}</p>
        <a href="{{ './comment/'.$com->id }}" class="btn btn-secondary">See All Review Comment</a>
      </div>
    </div>
  </div>
</div>
@endforeach


</div>
</div>
</section>
@endsection