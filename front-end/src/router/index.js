import { createRouter, createWebHistory } from 'vue-router'

import IndexUsers from '../views/users/index.vue'
import EditUser from '../views/users/edit.vue'
import CreateUser from '../views/users/create.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/users',
      name: 'users.index',
      component: IndexUsers
    },
    {
      path: '/users/:userId/edit',
      name: 'users.edit',
      component: EditUser
    },
    {
      path: '/users/create',
      name: 'users.create',
      component: CreateUser
    }
  ]
})

export default router
