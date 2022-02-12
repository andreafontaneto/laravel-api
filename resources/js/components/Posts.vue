<template>

  <main>
    <div class="container">
      
      <h1>I miei Posts</h1>

      <PostItem />
      <PostItem />
      <PostItem />
      <PostItem />
      <PostItem />
      <PostItem />

    </div>
  </main>

</template>

<script>

import PostItem from './partials/PostItem.vue';

export default {
  name: 'Posts',

  components: {
    PostItem
  },

  data(){
    return{

      apiUrl: 'http://127.0.0.1:8000/api/posts',
      posts: null // si potrebbe fare un oggetto, ma così si gestisce il loading

    }
  },

  mounted(){
    this.getPosts();
  },

  methods: {

    getPosts(){
      // console.log(axios);
      axios.get(this.apiUrl)
        .then(res => {

          // SE in Api > PostController abbiamo passato $post SENZA compact()
          // allora "res" è direttamente l'array (data) che contiene tutti i post
          
          // SE in Api > PostController abbiamo passato $post TRAMITE compact()
          // allora "res" è un oggetto che contiene un array (data) con tutti i post
          // per vedere l'array pulito (senza oggetto come genitore) dobbiamo passare "res.data.posts"
          
          // console.log(res);
          // console.log(res.data);

          this.posts = res.data;
          console.log(this.posts);
        })
    }

  }
}
</script>

<style lang="scss" scoped>

main{
  margin: 30px 0;

  h1{
    margin-bottom: 20px;
  }
}

</style>