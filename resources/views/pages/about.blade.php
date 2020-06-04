@extends('app')

@section('content')
<!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">My Name</h2>
    <hr style="width:200px" class="w3-opacity">
    <img src="{{ asset('/images/about4.jpg') }}" alt="Henry Fong" class="w3-image" width="992" height="1108">
    <p>I am Fong Lei Henry. HKU student studying idustrial engineering and logisitic management, minor in finance (Year3). I love playing sports, music and drama. Feel free to check out some photos and videos of mine!
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">Sports</h3>
    <hr style="width:200px" class="w3-opacity">
    <p class="w3-wide">Basketball</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">Volleyball</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:70%"></div>
    </div>
    <p class="w3-wide">Lacrosse</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div>
    <p class="w3-wide">Athletics</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">Aquatics</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:100%"></div>
    </div><br>
    
    <h3 class="w3-padding-16 w3-text-light-grey">Cultural</h3>
    <hr style="width:200px" class="w3-opacity">
    <p class="w3-wide">Vocal</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>

    <p class="w3-wide">Piano</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>

    <p class="w3-wide">Guitar</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div>

    <p class="w3-wide">Drama</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:100%"></div>
    </div>  

    <h3 class="w3-padding-16 w3-text-light-grey">My Alma Mater - St. Mark's School</h3>
    <hr style="width:200px" class="w3-opacity">
    <p><span class="w3-large w3-margin-right"><p>There's a school in Shaukeiwan.</p>
    <img  src="{{ asset('/images/about.jpg') }}"  style="width:300px">
    <p><img  src="{{ asset('/images/about1.jpg') }}"  style="width:300px"></p>
  <!-- End About Section -->
  </div>
@endsection

@section('js')


@endsection