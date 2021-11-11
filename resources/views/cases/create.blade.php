@extends('layouts.app')

@section('content')
  <div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ '/storage/' . $data->face_img1 }}" class="user-img" style=" height:380px;
          width:100%; object-fit: contain; background: currentColor;">
        </div>
        <div class="swiper-slide">
          @if (!empty($data->face_img2))
          <img src="{{ '/storage/' . $data->face_img2 }}" class="user-img" style=" height:380px;
          width:100%; object-fit: contain; background: currentColor;">
          @else
          <img src="{{ asset('img/no-thum.png') }}" class="user-img" style=" height:380px;
          width:100%; object-fit: contain; background: currentColor;">
          @endif
        </div>
        <div class="swiper-slide">
          <img src="{{ '/storage/' . $data->body_img1 }}" class="user-img" style=" height:380px;
          width:100%; object-fit: contain; background: currentColor;">
        </div>
        <div class="swiper-slide">
          @if (!empty($data->body_img2))
          <img src="{{ '/storage/' . $data->body_img2 }}" class="user-img" style=" height:380px;
          width:100%; object-fit: contain; background: currentColor;">
          @else
          <img src="{{ asset('img/no-thum.png') }}" class="user-img" style=" height:380px;
          width:100%; object-fit: contain; background: currentColor;">
          @endif
        </div>
    </div>
    <div class="swiper-pagination" style="bottom:initial"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
  

  <div class="container">
    <div class="row">
      <div class="col-sm-8">
      <div class="card-body">
        <h5 class="card-title">案件Data</h5>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('CastName') }}</div>
          <div class="col-9 cast-data-col">{{ $data->cast_name }}</div>
        </div>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('Age') }}</div>
          <div class="col-9 cast-data-col">{{ $data->age }}&nbsp;歳</div>
        </div>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('Height') }}</div>
          <div class="col-9 cast-data-col">{{ $data->height }}&nbsp;cm</div>
        </div>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('Weight') }}</div>
          <div class="col-9 cast-data-col">{{ $data->weight }}&nbsp;kg</div>
        </div>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('Bust') }}</div>
          <div class="col-9 cast-data-col">{{ $data->bust }}&nbsp;cup</div>
        </div>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('PhoneNumber') }}</div>
          <div class="col-9 cast-data-col">{{ $data->phone_number }}</div>
        </div>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('Area') }}</div>
          <div class="col-9 cast-data-col">{{ $data->area }}</div>
        </div>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('Current') }}</div>
          <div class="col-9 cast-data-col">{{ $data->current }}</div>
        </div>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('Experience') }}</div>
          <div class="col-9 cast-data-col">{{ $data->experience }}</div>
        </div>
        <div class="row">
          <div class="col-3 cast-data-item-col">{{ __('NgPlay') }}</div>
          <div class="col-9 cast-data-col">{{ $data->ng_play }}</div>
        </div>

      </div>

      </div>
      <div class="col-sm-4">
        <div class="card-body" style="position:relative;">
          <h5 class="card-title">提案店舗</h5>
          <form method="POST" enctype="multipart/form-data" action="">
            @csrf
            <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="suggestion"></textarea>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary" style="position:absolute; right:0;">Send</button>
            </div>
          </form>
          
        </div>
      </div>
    </div>

    

  </div>
  


@endsection
