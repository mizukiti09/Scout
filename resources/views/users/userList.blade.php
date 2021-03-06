@extends('layouts.app')

@section('content')
<div class="accordion" id="accordionExample">

<!-- ============ User一覧 ================================== -->
<div class="swiper-container">
        <div class="swiper-wrapper">
        @foreach ($users as $user)
            <div class="swiper-slide">
              <img src="{{ '/storage/' . $user->profile_img }}" class="user-img" style=" height:380px;
            width:100%; object-fit: contain; background: currentColor;">
            <div class="card-body">
              <h5 class="card-title">{{  $user->name }}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endforeach
        </div>
        <div class="swiper-pagination" style="bottom:-5px;"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
</div>

</div>


@endsection
