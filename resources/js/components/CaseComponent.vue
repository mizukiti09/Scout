<template>
  <div>
    <div class="cast-one" v-for="(data, i) in cases" :key="i" v-show="show">
      <form @submit.prevent style="position: relative;">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" :id="'heading' + i">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                :data-bs-target="'#collapse' + i"
                aria-expanded="true"
                :aria-controls="'collapse' + i"
              >
                <span style="width: 90%; overflow: scroll; text-align: left;">
                  <button
                    type="submit"
                    class="btn btn-dark"
                    v-on:click="imgShow(data.cast_id)"
                  >
                    Img
                  </button>
                  {{ data.cast_name }}&nbsp;/ {{ data.suggestion_store }}
                </span>
              </button>
            </h2>
            <div
              :id="'collapse' + i"
              class="accordion-collapse collapse"
              :aria-labelledby="'heading' + i"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div>
                  [案件]
                  <br />
                  名前：{{ data.cast_name }}
                  <br />
                  年齢：{{ data.age }}
                  <br />
                  身長：{{ data.height }}
                  <br />
                  体重：{{ data.weight }}
                  <br />
                  バスト：{{ data.bust }}
                  <br />
                  電話番号：{{ data.phone_number }}
                  <br />
                  NGプレイ：{{ data.ng_play }}
                  <br />
                  お住まいのエリア：{{ data.area }}
                  <br />
                  現在の在籍店舗：{{ data.current }}
                  <br />
                  経験店舗：{{ data.experience }}
                  <br />
                  提案店舗：{{ data.suggestion_store }}
                  <br />
                  <!-- Vertically centered modal -->
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    :data-bs-target="'#exampleModal'  + data.id"
                  >
                    {{ stateChangeText }}
                  </button>
                  <div
                    class="modal fade"
                    :id="'exampleModal' + data.id"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            {{ stateChangeText }}：{{ data.cast_name }}
                          </h5>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          実行しますか？
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                          >
                            いいえ
                          </button>
                          <button
                            type="submit"
                            class="btn"
                            style="background: skyblue;"
                            v-on:click="
                              changeDecided(data.id, data.decided_flg)
                            "
                          >
                            {{ stateChangeText }}
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  props: ['cases', 'stateChangeText'],
  data() {
    return {
      cast_id: '',
      case_id: '',
      show: true,
    }
  },
  methods: {
    imgShow: function (cast_id) {
      console.log('imgShowのCastのIDは' + cast_id)
      this.cast_id = cast_id
      var self = this
      this.$axios
        .post('/api/myPage/', {
          cast_id: self.cast_id,
        })
        .then((res) => {
          console.log(res['data'])
          this.$parent.i_cast = res['data']
        })
        .catch((error) => {
          console.log('imgShowは正常に起動していません。')
          console.log(error)
        })
    },
    changeDecided: function (id, decided_flg) {
      console.log('changeDecidedの案件のIDは：' + id)
      console.log('decided_flg：' + decided_flg)
      var self = this
      if (decided_flg == 0) {
        self.case_id = id
        this.$axios
          .post('/api/myPage/decided', {
            case_id: self.case_id,
          })
          .then((res) => {
            console.log('未確定案件を確定に変更。')
            console.log(res['data'])
            window.location.reload()
          })
          .catch((error) => {
            console.log('changeDecidedは正常に起動していません。：')
            console.log(error)
          })
      } else if (decided_flg == 1) {
        self.case_id = id
        this.$axios
          .post('/api/myPage/done', {
            case_id: self.case_id,
          })
          .then((res) => {
            console.log('確定案件を完了に変更。')
            console.log(res['data'])
            window.location.reload()
          })
          .catch((error) => {
            console.log('changeDecidedは正常に起動していません。：')
            console.log(error)
          })
      }
    },
  },
}
</script>
