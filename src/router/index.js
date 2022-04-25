/* eslint-disable */
import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../views/Home.vue'

const routes = [
  {
    path: '/',
    name: 'App',
    component: Home
  },
  {
    path: '/TODO',
    name: 'TODO',
    // TODO
    component: () => import('TODO')
  },
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router