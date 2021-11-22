@extends('layouts.app')

@section('content')
<div class="page-container">
  <div class="accordion" class="col-sm-8" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {{ __('CastCreate') }}
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">

                    <div class="col-sm-12">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('castCreate') }}">
                    @csrf

                    

                    <!-- === キャスト名 ========== -->
                        <div class="form-group row">
                            <label for="cast_name" class="col-md-4 col-form-label text-md-right">{{ __('CastName') }}</label>

                            <div class="col-md-6">
                                <input id="cast_name" type="text" class="form-control @error('cast_name') is-invalid @enderror" name="cast_name" value="{{ old('cast_name') }}" required autocomplete="cast_name" autofocus>

                                @error('cast_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <!-- === 年齢 ========== -->
                    <div class="form-group row">
                        <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                        <div class="col-md-6 unit">
                            <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus><p class="unit-each">歳</p>

                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- === 身長 ========== -->
                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('Height') }}</label>

                            <div class="col-md-6 unit">
                                <input id="height" type="number" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height') }}" required autocomplete="height" autofocus><p class="unit-each">cm</p>

                                @error('height')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <!-- === 体重 ========== -->
                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>

                            <div class="col-md-6 unit">
                                <input id="weight" type="number" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') }}" required autocomplete="weight" autofocus><p class="unit-each">kg</p>

                                @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <!-- === バスト ========== -->
                    <div class="form-group row">
                            <label for="bust" class="col-md-4 col-form-label text-md-right">{{ __('Bust') }}</label>

                            <div class="col-md-6 unit">
                                <input id="bust" type="text" class="form-control @error('bust') is-invalid @enderror" name="bust" value="{{ old('bust') }}" required autocomplete="bust" autofocus><p class="unit-each">cup</p>

                                @error('bust')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <!-- === 電話番号 ========== -->
                    <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('PhoneNumber') }}</label>

                            <div class="col-md-6 unit">
                                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <!-- === お住まいのエリア ========== -->
                    <div class="form-group row">
                            <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>

                            <div class="col-md-6 unit">
                            <select class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" required autocomplete="area" autofocus>
                                <option value="">選択してください</option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                                </select>

                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <!-- === 現在の在籍店舗 ========== -->
                    <div class="form-group row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Current') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control @error('current') is-invalid @enderror" name="current" value="{{ old('current') }}" required autocomplete="current" autofocus>

                                @error('current')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <!-- === 経験店舗 ========== -->
                    <div class="form-group row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="experience" autofocus>

                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <!-- === NGプレイ ========== -->
                    <div class="form-group row">
                            <label for="ng_play" class="col-md-4 col-form-label text-md-right">{{ __('NgPlay') }}</label>

                            <div class="col-md-6">
                                <input id="ng_play" type="text" class="form-control @error('ng_play') is-invalid @enderror" name="ng_play" value="{{ old('ng_play') }}" required autocomplete="ng_play" autofocus>

                                @error('ng_play')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <!-- === 顔写真1 ========== -->
                    <div class="form-group row">
                            <label for="face_img1" class="col-md-4 col-form-label text-md-right">{{ __('FaceImg1') }}</label>

                            <div class="col-md-6">
                                <input id="face_img1" type="file" class="form-control @error('face_img1') is-invalid @enderror" name="face_img1" value="{{ old('face_img1') }}" required autocomplete="face_img1" autofocus>

                                @error('face_img1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <!-- === 顔写真2 ========== -->
                    <div class="form-group row">
                            <label for="face_img2" class="col-md-4 col-form-label text-md-right">{{ __('FaceImg2') }}</label>

                            <div class="col-md-6">
                                <input id="face_img2" type="file" class="form-control @error('face_img2') is-invalid @enderror" name="face_img2" value="{{ old('face_img2') }}" autocomplete="face_img2" autofocus>

                                @error('face_img2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                    <!-- === 下着全身写真1 ========== -->
                    <div class="form-group row">
                            <label for="body_img1" class="col-md-4 col-form-label text-md-right">{{ __('BodyImg1') }}</label>

                            <div class="col-md-6">
                                <input id="body_img1" type="file" class="form-control @error('body_img1') is-invalid @enderror" name="body_img1" value="{{ old('body_img1') }}" required autocomplete="body_img1" autofocus>

                                @error('body_img1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                    <!-- === 下着全身写真2 ========== -->
                    <div class="form-group row">
                            <label for="body_img2" class="col-md-4 col-form-label text-md-right">{{ __('BodyImg2') }}</label>

                            <div class="col-md-6" style="position:relative;margin-bottom:50px;">
                                <input id="body_img2" type="file" class="form-control @error('body_img2') is-invalid @enderror" name="body_img2" value="{{ old('body_img2') }}" autocomplete="body_img2" autofocus>

                                @error('body_img2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="col-auto" style="position:absolute;right:0;bottom:-60px;">
                                    <button type="submit" class="btn btn-primary">Create Cast</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection