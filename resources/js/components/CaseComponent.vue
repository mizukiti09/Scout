<template>

  <div>
    <div class="cast-one" v-for="(cast,i) in casts" :key="i">
      {{ cast.cast_name }}
      <button  class="btn btn-primary" v-on:click="onClick(cast.id)">Img</button>
    </div>
  </div>
  
  
    
</template>

<script>

export default {
  props: ['casts'],
  data() {
    return {
      cast_id: ''
    }
  },
  methods: {
    onClick: function(id) {
      console.log(id);
      this.cast_id = id;

      // let url = '/api/myPage'
      var self = this;


      this.$axios.post('https://localhost:8000/api/myPage', self.cast_id)
          .then(response => console.log(response))
          .catch(error => console.log(error))
    }
  },
}
</script>

