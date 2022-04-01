<template>
  <div class="container">
    <Navbar/>

    <main class="layout__main">
      <RouterView/>
    </main>
  </div>
</template>

<script>
  import { RouterLink, RouterView } from 'vue-router'
  import Navbar from './components/Navbar.vue';
  
  export default {
    name: 'App',

    components: {
      Navbar
    },
  }
</script>

<style lang="scss">
  @import '@/assets/app.scss';
</style>
