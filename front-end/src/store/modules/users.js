import axios from 'axios';
import router from '../../router';

export default {
  state: () => ({
    users: [],
  }),

  getters: {
    USERS: (state) => state.users,
    USER: (state) => (id) => {
      return state.users.find(user => user.id == id)
    }
  },

  mutations: {
    SET_USERS: (state, payload) => {
      state.users = payload;
    },
  
    ADD_USER: (state, payload) => {
      state.users.push(payload);
    },
  
    REMOVE_USER: (state, payload) => {
      state.users = state.users.filter((user) => user.id !== payload)
    }
  },

  actions: {
    GET_USERS: async (context) => {
      await axios.get('/api/users')
        .then((response) => {
          if (response.data.status === 200)
            context.commit('SET_USERS', response.data.data)
        })
        .catch((error) => console.warn(`[AXIOS] ${ error }`))
    },

    GET_USER: async (context, payload) => {
      await axios.get(`/api/users/${ payload }`, payload)
        .then((response) => {
          if (response.data.status === 200)
            context.commit('ADD_USER', response.data.data)
        })
        .catch((error) => console.warn(`[AXIOS] ${ error }`))
    },
  
    SAVE_USER: async (context, payload) => {
      await axios.post('/api/users', payload)
        .then((response) => {
          if (response.data.status === 200) {
            context.commit('ADD_USER', response.data.data)
            router.push({ name: 'users.index' })
          }
        })
        .catch((error) => console.warn(`[AXIOS] ${ error }`))
    },

    UPDATE_USER: async (context, payload) => {
      await axios.put(`/api/users/${ payload.id }`, payload)
        .then((response) => {
          if (response.data.status === 200)
            router.push({ name: 'users.index' })
        })
        .catch((error) => console.warn(`[AXIOS] ${ error }`))
    },
  
    DELETE_USER: async (context, payload) => {
      if (confirm('Вы точно уверены?')) {
        await axios.delete(`/api/users/${ payload }`)
          .then((response) => {
            if(response.data.status === 200)
              context.commit('REMOVE_USER', payload)
          })
          .catch((error) => console.warn(`[AXIOS] ${ error }`))
      }
    },
  }
}