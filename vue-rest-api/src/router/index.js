import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
        path: '/skills',
        name: 'SkillIndex',
        component: () => import('../views/skills/SkillIndex.vue'),
      },
    {
    //   path: '/about',
     path: '/skills/create',
    //   name: 'about',
         name: 'SkillCreate',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
    //   component: () => import('../views/AboutView.vue')

    // component: () => import('../views/HomeView.vue'),
    component: () => import('../views/skills/SkillCreate.vue'),
    },
    {
        path: '/skills/:id/edit',
        name: 'SkillEdit',
        component: () => import('../views/skills/SkillEdit.vue'),
        props: true,
    },
  
  ]
})

export default router
