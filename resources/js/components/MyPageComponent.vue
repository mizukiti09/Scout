<template>
  <div>
    <Slick
      ref="slick"
      :options="slickOptions"
      class="slick-outer"
      style="width: 100%; height: 40vh; background: currentColor;"
      v-if="i_cast == 0"
    >
      <div class="slick-cont-img">
        <img :src="img_no_Path" class="slick-img" />
      </div>
      <div class="slick-cont-img">
        <img :src="img_no_Path" class="slick-img" />
      </div>
      <div class="slick-cont-img">
        <img :src="img_no_Path" class="slick-img" />
      </div>
      <div class="slick-cont-img">
        <img :src="img_no_Path" class="slick-img" />
      </div>
    </Slick>
    <Slick
      ref="slick"
      :options="slickOptions"
      class="slick-outer"
      style="width: 100%; height: 40vh; background: currentColor;"
      v-else-if="i_cast !== 0"
    >
      <!-- 顔写真1 -->
      <div class="slick-cont-img">
        <img :src="img_Path + i_cast.face_img1" class="slick-img" />
      </div>
      <!-- 顔写真2 -->
      <div class="slick-cont-img" v-if="i_cast.face_img2">
        <img :src="img_Path + i_cast.face_img2" class="slick-img" />
      </div>
      <div class="slick-cont-img" v-else>
        <img :src="img_no_Path" class="slick-img" />
      </div>
      <!-- 下着全身1 -->
      <div class="slick-cont-img">
        <img :src="img_Path + i_cast.body_img1" class="slick-img" />
      </div>
      <!-- 下着全身2 -->
      <div class="slick-cont-img" v-if="i_cast.body_img2">
        <img :src="img_Path + i_cast.body_img2" class="slick-img" />
      </div>
      <div class="slick-cont-img" v-else>
        <img :src="img_no_Path" class="slick-img" />
      </div>
    </Slick>

    <div class="row">
      <div class="col-sm-12 case-header">
        <div class="col-4 case-state">
          <h2 class="accordion-header" id="flush-headingOne">
            <button
              class="accordion-button collapsed case-state-not"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseOne"
              aria-expanded="false"
              aria-controls="flush-collapseOne"
            >
              未確定
            </button>
          </h2>
        </div>
        <div class="col-4 case-state">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button
              class="accordion-button collapsed case-state-decided"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseTwo"
              aria-expanded="false"
              aria-controls="flush-collapseTwo"
            >
              確定
            </button>
          </h2>
        </div>
        <div class="col-4 case-state">
          <h2 class="accordion-header" id="flush-headingThree">
            <button
              class="accordion-button collapsed case-state-done"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseThree"
              aria-expanded="false"
              aria-controls="flush-collapseThree"
            >
              完了
            </button>
          </h2>
        </div>
      </div>
      <div
        id="flush-collapseOne"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body case-state-info">
          <Case :cases="not_decided" />
        </div>
      </div>

      <div
        id="flush-collapseTwo"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body case-state-info">
          <Case :cases="decided" />
        </div>
      </div>

      <div
        id="flush-collapseThree"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body case-state-info">
          <div class="cast-one">サンプル3</div>
          <div class="cast-one">サンプル3</div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Slick from 'vue-slick'
import Case from '../components/CaseComponent.vue'

export default {
  props: ['not_decided', 'decided'],
  data: function () {
    return {
      i_cast: 0,
      img_no_Path: 'http://localhost:8000/img/no-thum.png',
      img_Path: 'http://localhost:8000/storage/',
      slickOptions: {
        arrows: true, //スライドの矢印ボタン
        dots: false, //ドットマーク
        autoplay: true, //自動スライド
        autoplaySpeed: 4000, //自動スライド間隔(ms)
        pauseOnFocus: false, //ドットマークを押すとスライドショーが止まるのを防ぐ
        prevArrow: '<button type="button" class="slick-prev"></button>', //ひとつ前の画像に戻る矢印ボタン
        nextArrow: '<button type="button" class="slick-next"></button>', //ひとつ先の画像に進む矢印ボタン
      },
    }
  },
  components: {
    Slick,
    Case,
  },
}
</script>
