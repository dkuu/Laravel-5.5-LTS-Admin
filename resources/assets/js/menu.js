/**
 * Created by liu on 2017/7/17.
 */
$(document).ready(function(){
    var protocol = window.location.protocol;
    var host = window.location.host;
    var pathname = window.location.pathname;

    var pathnames = pathname.split('/');
    var app_url = protocol + '//' + host + '/' + pathnames[1];

    $("a[href='" + app_url + "'][title='menu']").parent().addClass('active');
    if(! $("a[href='" + app_url + "'][title='menu']").parent().parent().parent('.sidebar-menu').is()){
        $("a[href='" + app_url + "'][title='menu']").parent().parent().parent().addClass('active');
    }
    //alert(app_url);
});