require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

import PrimeVue from 'primevue/config';
import "primeflex/primeflex.css";
import 'primevue/resources/themes/saga-blue/theme.css';       
import 'primevue/resources/primevue.min.css';                 
import 'primeicons/primeicons.css';    
import { FilterMatchMode } from 'primevue/api';
import InputText from "primevue/inputtext";
import Button from "primevue/button";
import Checkbox from "primevue/checkbox";
import RadioButton from "primevue/radiobutton";
import Textarea from "primevue/textarea";
import Dropdown from "primevue/dropdown";
import MultiSelect from 'primevue/multiselect';
import ToastService from 'primevue/toastservice';
import Toast from 'primevue/toast';
import Card from 'primevue/card';
import Rating from 'primevue/rating';
import SelectButton from 'primevue/selectbutton';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import ColumnGroup from 'primevue/columngroup';
import ConfirmationService from 'primevue/confirmationservice';
import ConfirmDialog from 'primevue/confirmdialog';

import CascadeSelect from 'primevue/cascadeselect';
// import TreeSelect from 'primevue/treeselect';
import ProgressSpinner from 'primevue/progressspinner';
import Toolbar from 'primevue/toolbar';
import Dialog from 'primevue/dialog';
import Divider from 'primevue/divider';

import Galleria from 'primevue/galleria';
import Menubar from 'primevue/menubar';
import MegaMenu from 'primevue/megamenu';
import SplitButton from 'primevue/splitbutton';

const el = document.getElementById('app');

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .mixin({ methods: { route } })
            .use(plugin)
            .use(FilterMatchMode)
    
    .use(PrimeVue, {
        ripple: true
    })
    .use(ToastService)
    .use(Toast)
    .use(ConfirmationService)
  
    .component("InputText", InputText)
    .component("Button", Button)
    .component("Checkbox", Checkbox)
    .component("RadioButton", RadioButton)
    .component("Textarea", Textarea)
    .component("Dropdown", Dropdown)
    .component("MultiSelect", MultiSelect)
    .component("Toast", Toast)
    .component("Card", Card)
    .component("Rating", Rating)
    .component("SelectButton", SelectButton)
    .component("CascadeSelect", CascadeSelect)
    .component("DataTable", DataTable)
    .component("Column", Column)
    .component("ColumnGroup", ColumnGroup)
    .component("ProgressSpinner", ProgressSpinner)
    .component("Dialog", Dialog)
    .component("ConfirmDialog", ConfirmDialog)
    .component("Divider", Divider)
    .component("Toolbar", Toolbar)
    .component("Galleria", Galleria)
    .component("Menubar", Menubar)
    .component("MegaMenu", MegaMenu)
    .component("SplitButton", SplitButton)
    
    
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
