import Vue from 'vue'
import Router from 'vue-router'
import home from '@/views/home.vue'

// auth
import auth from '@/views/auth/auth.vue'

import register from '@/views/auth/register.vue'
import login from '@/views/auth/login.vue'
import secret from '@/views/auth/secret.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: home
    },
    {
      path: '/auth',
      name: 'auth',
      component: auth,
      children: [
        {
          path: 'register',
          name: 'register',
          component: register
        },
        {
          path: 'login',
          name: 'login',
          component: login
        },
        {
          path: 'secret',
          name: 'secret',
          component: secret
        },
      ]
    },
  ]
})
