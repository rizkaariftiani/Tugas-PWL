@extends('layouts.Master')

@section('title', 'Home')

@section('content')


<!-- Page Content -->
<div class="container">
  
  <div class="row">
    
    <!-- Blog Entries Column -->
    <div class="col-md-8">
      <br><br>
      <h1 class="my-4">WELCOME TO WEB STRAY KIDS</h1>
      
      <!-- Blog Post -->
      @foreach ($article as $artic)
      <div class="card mb-4">
        <img class="card-img-top" src="{{asset('storage/'.$artic->imageurl)}}" alt="">
        <div class="card-body" style="background-color: #DCDCDC">
          <h2 class="card-title">{{ $artic->title }}</h2>
          <p class="card-text">{{ Str::limit($artic->content, 100, '...') }}</p>
          <a href="{{ './article/'.$artic->id }}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted" style="background-color: #4B0082">{{ $artic-> created_at }}
          <a href="https://www.instagram.com/rizkaariftiani/"> oleh RIZKA</a>
        </div>
      </div>
      @endforeach
      
      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>
      
    </div>
    
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      
      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header" style="background-color: #778899">Search</h5>
        <div class="card-body" style="background-color: #D3D3D3">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-append">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
      
      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header" style="background-color: #778899">Social Media</h5>
        <div class="card-body" style="background-color: #D3D3D3">
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
            <div class="card-body" style="background-color: #D3D3D3">
              <h5 class="card-header" style="background-color: #778899">My Profil</h5>
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