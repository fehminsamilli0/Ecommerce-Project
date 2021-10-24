
    let login = require("./components/auth/login").default;
    let register = require("./components/auth/register").default;
    let forget = require("./components/auth/forget").default;
    let logout = require("./components/auth/logout").default;

    //End Auth

    let home = require("./components/home").default;

    // Employee Components
    let storeemployee = require("./components/employee/create").default;
    let employee = require('./components/employee/index').default;
    let editemployee = require('./components/employee/edit').default;

    // Supplier Components
    let storesupplier = require("./components/supplier/create").default;
    let supplier = require('./components/supplier/index').default;
    let editsupplier = require('./components/supplier/edit').default;

    // Category Components
    let storecategory = require("./components/category/create").default;
    let category = require('./components/category/index').default;
    let editcategory = require('./components/category/edit').default;

    // Product Components
    let storeproduct = require("./components/product/create").default;
    let product = require('./components/product/index').default;
    let editproduct = require('./components/product/edit').default;

    // Expense Components
    let storeexpense = require("./components/expense/create").default;
    let expense = require('./components/expense/index').default;
    let editexpense = require('./components/expense/edit').default;

    // Salary Components
    let salary = require("./components/salary/all_employee").default;
    let paysalary = require('./components/salary/create').default;
    let allsalary = require('./components/salary/index').default;
    let viewsalary = require('./components/salary/view').default;
    let editsalary = require('./components/salary/edit').default;


    // Stock Components
    let stock = require("./components/product/stock").default;
    let editstock = require("./components/product/edit-stock").default;

    // Customer Components
    let storecustomer = require("./components/customer/create").default;
    let customer = require('./components/customer/index').default;
    let editcustomer = require('./components/customer/edit').default;


    // POS Component
    let pos = require('./components/pos/pointofsale').default;


    // POS Component
    let order = require('./components/order/order').default;
    let vieworder = require('./components/order/vieworder').default;
    let searchorder = require('./components/order/search').default;



    export const routes = [
        { path: '/', component: login,name: '/' },
        { path: '/register', component: register,name:'register' },
        { path: '/forget', component: forget,name:'forget' },
        { path: '/home', component: home,name:'home' },
        { path: '/logout', component: logout,name:'logout' },

        // Employee Routes
        { path: '/store-employee', component: storeemployee,name:'store-employee' },
        { path: '/employee', component: employee, name:'employee'},
        { path: '/edit-employee/:id', component: editemployee, name:'edit-employee'},

        // Supplier Routes
        { path: '/store-supplier', component: storesupplier,name:'store-supplier' },
        { path: '/supplier', component: supplier, name:'supplier'},
        { path: '/edit-supplier/:id', component: editsupplier, name:'edit-supplier'},


        // Category Routes
        { path: '/store-category', component: storecategory,name:'store-category' },
        { path: '/category', component: category, name:'category'},
        { path: '/edit-category/:id', component: editcategory, name:'edit-category'},

        // Product Routes
        { path: '/store-product', component: storeproduct,name:'store-product' },
        { path: '/product', component: product, name:'product'},
        { path: '/edit-product/:id', component: editproduct, name:'edit-product'},

        // Expense Routes
        { path: '/store-expense', component: storeexpense,name:'store-expense' },
        { path: '/expense', component: expense, name:'expense'},
        { path: '/edit-expense/:id', component: editexpense, name:'edit-expense'},


        // Salary Routes
        { path: '/given-salary', component: salary, name:'given-salary'},
        { path: '/pay-salary/:id', component: paysalary, name:'pay-salary'},

        { path: '/salary', component: allsalary, name:'salary'},
        { path: '/view-salary/:id', component: viewsalary, name:'view-salary'},
        { path: '/edit-salary/:id', component: editsalary, name:'edit-salary'},

        // Stock Routes
        { path: '/stock', component: stock,name:'stock' },
        { path: '/edit-stock/{id}', component: editstock,name:'edit-stock' },

        // Customer Routes
        { path: '/store-customer', component: storecustomer,name:'store-customer' },
        { path: '/customer', component: customer, name:'customer'},
        { path: '/edit-customer/:id', component: editcustomer, name:'edit-customer'},


        // POS Route
        { path: '/pos', component: pos, name:'pos'},

        // Order Route
        { path: '/order', component: order, name:'order'},
        { path: '/view-order/:id', component: vieworder, name:'view-order'},
        { path: '/searchorder', component: searchorder, name:'searchorder'},

    ]

