import { createRouter , createWebHistory } from 'vue-router';

const routes = [
    {
      path: '/',
      name: 'Product',
      component: () => import(/* webpackChunkName: "about" */ '../views/Product/IndexProduct.vue')
    },
    {
      path: '/about',
      name: 'About',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ '../views/About/IndexAbout.vue')
    },
    {
      path: '/product',
      name: 'Teams',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ '../views/Teams/IndexTeams.vue')
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router