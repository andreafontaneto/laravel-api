<template>

  <main>
    <div class="container">
      POSTS Lista
    </div>
  </main>

</template>

<script>
export default {
  name: 'Posts',

  mounted(){
    this.getPosts();
  },

  methods: {

    getPosts(){
      // console.log(axios);
      axios.get('http://127.0.0.1:8000/api/posts')
        .then(res => {

          // SE in Api > PostController abbiamo passato $post SENZA compact()
          // allora "res" è direttamente l'array (data) che contiene tutti i post
          
          // SE in Api > PostController abbiamo passato $post TRAMITE compact()
          // allora "res" è un oggetto che contiene un array (data) con tutti i post
          // per vedere l'array pulito (senza oggetto come genitore) dobbiamo passare "res.data.posts"
          
          // console.log(res);
          console.log(res.data);
        })
    }

  }
}
</script>

<style lang="scss" scoped>

main{
  margin: 30px 0;
}

</style>