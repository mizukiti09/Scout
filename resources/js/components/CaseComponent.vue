<template>
  <div>
    <div class="cast-one" v-for="(data, i) in cases" :key="i">
      {{ data.cast_name }}
        <form @submit.prevent="onClick(data.id)">
          <button type="submit" class="btn btn-primary">Img</button>
        </form>
        
      
      
    </div>
  </div>
</template>

<script>
export default {
  props: ['cases'],
  data() {
    return {
      cast_id: '',
    }
  },
  methods: {
    onClick: function (id) {
      console.log(id)
      this.cast_id = id

      var c_id = {c_id: this.cast_id};
      var self = this

      this.$axios
        .post("/api/myPage" , {
          cast_id: self.cast_id
        })
        .then(res => {
        console.log(res['data'])
        this.$parent.i_cast = res['data']
        })
        .catch((error) => console.log(error))
    },
  },
}
</script>
