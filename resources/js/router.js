import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';


const routes = [
    { path: '/', component: Login,name:'login' },
    { path: '/register', component: Register, name:'register' }
]



export default routes;



