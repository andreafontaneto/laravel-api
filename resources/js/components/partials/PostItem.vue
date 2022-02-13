<template>

  <article>
    <h3>{{ post.title }}</h3>
    <p class="date">{{ post.created_at }}</p>
    <p class="post-content">{{ post.content }}</p>
  </article>
  
</template>

<script>
export default {
  name:'PostItem',

  props: {
    'post': Object
  }
}
</script>

<style lang="scss" scoped>

article{
  margin-bottom: 30px;

  h3{
    margin-bottom: 5px;
  }

  .date{
    font-size: 12px;
    font-style: italic;
    margin-bottom: 5px;
  }

  .post-content{
    font-size: 14px;
  }
}

</style>