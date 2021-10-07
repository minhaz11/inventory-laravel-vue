import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';
import Logout from './components/auth/Logout.vue';
import Home from './components/home.vue';
import AllEmployee from './components/employee/all.vue';
import CreateEmployee from './components/employee/Create.vue';


const routes = [
    { path: '/', component: Login,name:'login' },
    { path: '/register', component: Register, name:'register' },
    { path: '/dashboard', component: Home, name:'dashboard' },
    { path: '/logout', component: Logout, name:'Logout' },

    //employee route
    { path: '/all-employee', component: AllEmployee, name:'all-employee' },
    { path: '/add-employee', component: CreateEmployee, name:'add-employee' }
]



export default routes;



