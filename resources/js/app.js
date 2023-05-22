import './bootstrap';
import {createApp} from 'vue';

import Index from "./Index.vue";
import NavBar from "./NavBar/NavBar.vue";

createApp(Index).mount('#index');
createApp(NavBar).mount('#nav-bar');
