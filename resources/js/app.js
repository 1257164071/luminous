/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// window.Vue = require('vue');
//
// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */
//
// // const files = require.context('./', true, /\.vue$/i);
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// const app = new Vue({
//     el: '#app',
// });

window.penguin = {};
window.penguin.TableRun = function (TableElement, url, columns, queryParams, sidePagination = 'client') {

    TableElement.bootstrapTable({
        url: url,
        search: true,
        pagination: true,
        queryParams: queryParams,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        iconSize: 'outline',
        toolbar: '#exampleTableEventsToolbar',
        icons: {
            refresh: 'glyphicon-repeat',
            toggle: 'glyphicon-list-alt',
            columns: 'glyphicon-list'
        },
        method: 'post',
        sidePagination: sidePagination,
        detailView: true,
        uniqueId: "id",
        columns: columns

    });

};
window.penguin.toastrSet = function () {
    toastr.options = {
        debug: true,
        progressBar: true,
        positionClass: 'toast-top-right',
        onclick: null,
        showDuration: 800,
        hideDuration: 1000,
        timeOut: 7000,
        extendedTimeOut: 1000,
        showEasing: 'swing',
        hideEasing: 'linear',
        showMethod: 'fadeIn',
        hideMethod: 'fadeOut',
    };

};
window.penguin.layWindows = function (url, title = '增加', submitFun, size = ['500px', '600px']) {
    parent.layer.open({
        type: 2,
        title: title,
        shadeClose: true,
        shade: false,
        maxmin: true, //开启最大化最小化按钮
        btn: ['确定', '取消'],
        area: size,
        content: url,
        end: function () {
            // window.location.reload();
        },
        yes: function (index, layero) {
            submitFun(index);

        }
    });
};

window.penguin.imgView = function (path) {
    if(path == null){
        return false;
    }
    var img = new Image();
    img.src = path;
    var imgHtml = "<img src='" + path + "' />";
    //捕获页
    layer.open({
        type: 1,
        shade: false,
        title: false, //不显示标题
        //area:['600px','500px'],
        area: [img.width + 'px', img.height + 'px'],
        content: imgHtml,
        cancel: function () {
        }
    });
};
