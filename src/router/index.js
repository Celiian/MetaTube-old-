/* eslint-disable */
import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Video from '../views/VideoPage.vue'
import Channel from '../views/Channel.vue'

const routes = [
  {
    path: '/',
    name: 'App',
    component: Home
  },
  {
    path: '/user/:id',
    name: 'Channel',
    component: Channel
  },
  {
    path: '/video/:id',
    name: 'Video',
    component: Video
  },
  //TODO créer tous les paths
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router