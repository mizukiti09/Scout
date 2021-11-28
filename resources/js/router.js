import Router from 'vue-router'
import myPage from './components/MyPageComponent'

Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [{
        path: '/myPage',
        name: 'myPage',
        component: myPage
    }]
})