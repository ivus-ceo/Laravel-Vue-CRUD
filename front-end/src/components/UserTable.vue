<template>
  <div>
    <table class="table table-striped table-hover mt-5">
      <thead>
        <tr>
          <th>ID</th>
          <th>Имя</th>
          <th>E-Mail</th>
          <th>Создано</th>
          <th>Обновлено</th>
          <th>Действия</th>
        </tr>
      </thead>

      <tbody>
        <tr v-for="user in users" :key="user.id">
          <td>{{ user.id }}</td>
          <td>{{ user.name }}</td>
          <td>{{ user.email }}</td>
          <td>{{ user.created_at }}</td>
          <td>{{ user.updated_at }}</td>
          <td class="d-grid gap-2">
            <button @click="this.$store.dispatch('DELETE_USER', user.id)" class="btn btn-danger">Удалить</button>
            
            <RouterLink :to="`/users/${ user.id }/edit`">
              <button class="w-100 btn btn-primary">Изменить</button>
            </RouterLink>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="mt-4 d-flex justify-content-end">
      <RouterLink to="/users/create">
        <button class="text-right btn btn-primary">Создать</button>
      </RouterLink>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Table',

    props: {
      users: {
        type: Array,
        default: []
      }
    }
  }
</script>