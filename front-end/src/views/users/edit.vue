<template>
  <div>
    <form class="mt-5" @submit.prevent="updateUser">
      <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input type="name" :value="user.name" class="form-control" ref="name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" :value="user.email" class="form-control" ref="email">
      </div>
      <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
  </div>
</template>

<script>
  import { mapGetters, mapActions } from 'vuex';

  export default {
    computed: mapGetters(['USERS', 'USER']),

    methods: {
      ...mapActions(['GET_USER']),
      
      updateUser() {
        this.user.name = this.$refs.name.value;
        this.user.email = this.$refs.email.value;
        this.$store.dispatch('UPDATE_USER', this.user)
      }
    },

    data() {
      return {
        user: []
      }
    },

    async mounted() {
      if (this.USERS.length === 0) 
        await this.GET_USER(this.$route.params.userId)

      while (this.user.length <= 0) {
        this.user = this.USER(this.$route.params.userId)
      }
    },
  }
</script>