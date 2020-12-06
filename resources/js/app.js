/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap")

window.Vue = require("vue")
import Vuelidate from "vuelidate"

Vue.use(Vuelidate)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// ADMIN
Vue.component("dashboard-index", require("./components/Admin/dashboard/Index.vue").default)

Vue.component("purchasing-index", require("./components/Admin/purchasing/Index.vue").default)

Vue.component("products-index", require("./components/Admin/products/Index.vue").default)
Vue.component("product-types", require("./components/Admin/products/addProductType.vue").default)

// REUSABLE
Vue.component("modal", require("./components/Reusable/Modal.vue").default)

// SUPPLIER
Vue.component("add-supplier", require("./components/Admin/supplier/addSupplier.vue").default)

// CUSTOMER

// MODULES
Vue.component("columns-managing", require("./components/Admin/products/ManageColumns.vue").default)
Vue.component("edit-product-type", require("./components/Admin/products/EditProductTypes.vue").default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
})
