import { createStore } from 'vuex'

import users from './modules/users'

const store = createStore({
  state: {},
  getters: {},
  mutations: {},
  actions: {},
  modules: {
    users,
  },
})

export default store;