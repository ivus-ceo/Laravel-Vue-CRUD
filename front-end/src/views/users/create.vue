<template>
  <div>
    <form class="mt-5" @submit.prevent="this.$store.dispatch('SAVE_USER', user)">
      <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input type="name" v-model="user.name" class="form-control" ref="name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" v-model="user.email" class="form-control" ref="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" v-model="user.password" class="form-control" ref="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        user: {
          name: '',
          email: '',
          password: '',
        }
      }
    },
  }
</script>