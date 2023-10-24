import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import store from './store/index.js';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import Home from './components/Home/Home.vue';
import Register from './components/Register/Register.vue';

app.component('home', Home);

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: ExampleComponent,
            name: 'example',
            meta: {
                requiredAuth: false
            }
        },
        {
            path: '/register',
            component: Register,
            name: 'register',
            meta: {
                requiredAuth: false
            }
        }
    ]
});

router.beforeEach((to, from, next) => {
    const token = store.state.jwt;
    const auth = to.meta.requiredAuth;

    if (auth && !token) {
        next('/')
    }
    else{
        next()
    }
})

app.use(store);
app.use(router);
app.mount('#app');
