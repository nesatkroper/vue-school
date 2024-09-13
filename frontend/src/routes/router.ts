import { createRouter, createWebHistory } from "vue-router";
// @ts-ignore
import NotFound from "../views/404/NotFound.vue";
const routes = [
  {
    path: "/",
    component: () => import("../views/home/Homepage.vue"),
    name: "home",
  },

  {
    path: "/:pathMatch(.*)*",
    component: NotFound,
    name: "404",
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes: routes,
});

export default router;
