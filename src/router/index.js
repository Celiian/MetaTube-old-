/* eslint-disable */
import { createRouter, createWebHashHistory } from 'vue-router'
import Register from '../views/Register.vue'
import Home from '../views/Home.vue'


const routes = [
  {
    path: '/',
    name:'home',
    component: Home
  },
  {
    path: '/register',
    name: 'register',
    component: Register
  },
  
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router