@extends('layouts.Master')

@section('title',' Article ')

@section('content')


<!-- Page Content -->
<div class="container">

  <div class="row">


    <!-- Post Content Column -->

    <div class="col-lg-8">

      <!-- Title -->
      <h1 class="mt-4">{{ $article->title }}</h1>

      <!-- Author -->
      <p class="lead">
        by 
        <a href="https://www.instagram.com/rizkaariftiani/">RIZKA</a>
      </p>

      <hr>

      <!-- Date/Time -->
      <p>Post from {{ $article-> created_at }}</p>

      <hr>

      <!-- Preview Image -->
      <img class="img-fluid rounded" src="{{$article->imageurl }}" alt="">

      <hr>

      <!-- Post Content -->
      {{$article->content}}

      <hr>

      
      <!-- Comment with nested comments -->
      <div class="card text-center">
        <div class="card-header" style="background-color: #F08080">
          Baca Juga!
        </div>
        <div class="card-body" style="background-color: #FAFAD2">
          <h5 class="card-title">Stray Kids Ajak STAY Berpesta dalam Back Door </h5>
          <p class="card-text">Stray Kids resmi comeback pada Senin (14/9) dengan repackaged album IN生 (IN LIFE) serta video musik Back Door, di mana boyband tersebut mengajak para penggemar yang dikenal dengan sebutan STAY untuk berpesta.</p>
          <a href="https://www.cnnindonesia.com/hiburan/20200914171242-227-546364/stray-kids-ajak-stay-berpesta-dalam-back-door" class="btn btn-primary" style="background-color: #B22222">Go somewhere</a>
        </div>
        <div class="card-footer text-muted" style="background-color: #F08080">
          3 week ago
        </div>
      </div>
      <div class="media mb-4">
        <div class="media-body">
          
          <div class="media mt-4">
            <div class="media-body">
            </div>
          </div>

          <div class="media mt-4">
            <div class="media-body">
            </div>
          </div>

        </div>
      </div>

    </div>



    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header" style="background-color: #DB7093">Search</h5>
        <div class="card-body" style="background-color: #FFDAB9">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-append">
              <button class="btn btn-secondary" type="button" style="background-color: #800000">Go!</button>
            </span>
          </div>
        </div>
      </div> 

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header" style="background-color: #DB7093">Categories</h5>
        <div class="card-body" style="background-color: #FFDAB9">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="https://twitter.com/stray_kids">Twitter</a>
                </li>
                <li>
                  <a href="https://www.instagram.com/realstraykids/?hl=id">Instagram</a>
                </li>
                <li>
                  <a href="https://www.facebook.com/JYPEStrayKids/">Facebook</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="https://channels.vlive.tv/D7A4F1/home">VLive</a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UCaO6TYtlC8U5ttz62hTrZgg">Youtube</a>
                </li>
                <li>
                  <a href="https://open.spotify.com/artist/2dIgFjalVxs4ThymZ67YCE">Spotify</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="https://i.pinimg.com/564x/4b/57/c2/4b57c226885bbf5f90698a8910be2089.jpg" class="card-img" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="background-color: #FFDAB9">
              <h5 class="card-header" style="background-color: #DB7093">My Profil</h5>
              <p class="card-text" >
                Hi, aku Rizka Nur Ariftiani dari MI 2F, Politeknik Negeri Malang. <br>
              From Bekasi and Enjoy it!</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->

</div>
@endsection