import { createApp } from "vue";
import router from "./routes/router";
import "./assets/index.css";
import App from "./App.vue";

const app = createApp(App);
app.use(router);
app.mount("#app");
