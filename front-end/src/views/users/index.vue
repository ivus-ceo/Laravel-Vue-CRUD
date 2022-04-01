<template>
  <div class="users">
    <UserTable :users="USERS"/>
  </div>
</template>

<script>
  import { mapGetters, mapActions } from 'vuex';
  import UserTable from '../../components/UserTable.vue';

  export default {
    components: {
      UserTable
    },

    computed: mapGetters(['USERS']),

    methods: mapActions(['GET_USERS']),

    mounted() {
      if (this.USERS.length <= 1) 
        this.GET_USERS()
    }
  }
</script>
