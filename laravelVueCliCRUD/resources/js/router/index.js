import Home  from '../views/Home.vue';
import About  from '../views/About.vue';
import Contact  from '../views/Contact.vue';
import NewNote from '../views/Notes/Create.vue';
import { create } from 'lodash';

export default {
    mode : 'history',
    linkActiveClass : 'active',
    routes : [
        {
            path : '/',
            name : 'home',
            component : Home
        },
        {
            path : '/about',
            name : 'pages.about',
            component : About
        },
        {
            path : '/contact',
            name : 'pages.contact',
            component : Contact
        },
        {
            path : '/notes/create',
            name : 'notes.create',
            component : NewNote
        }
    ]
}