/**
 * Created by Administrator on 07/12/2016.
 */
function login() {
    var name = $("#email1").val();
    var pass = $("#exampleInputPassword1").val();
    $.ajax({
        method: "post",
        url :"http://localhost/blog-mvc/home/login",
        data: {name: name, pass: pass, action: "login" },
        success: function (data) {
            console.log(data);
            if (data == "thanhcong" ){
                var html = "<div class='btn-group'> " +
                    "<button type='button' class='btn button_logout '>" + "Xin chào: " + name + "</button> " +
                    "<button type='button' class='btn dropdown-toggle button_logout' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <span class='caret'></span> <span class='sr-only'>Toggle Dropdown</span> </button> " +
                    "<ul class='dropdown-menu menu_user'> " +
                    "<li><a href='#' onclick= 'logout()' >Đăng xuất</a></li> " +
                    "<li><a href='#' >aaaaaaaa</a></li> </ul> </div>";
                $("#login").remove();
                $("#username").html(html);
            }
        }
    })
    $("#myModal").modal("toggle");
}
function register() {

    var name = $("#namerg").val();
    var email = $("#emailrg").val();
    var pass = $("#passwordrg").val();
    $.ajax({
        method: "post",
        url:"http://localhost/blog-mvc/home/register",
        data: {name: name, email: email, pass: pass, action: "register"},
        success: function (data) {
            console.log(data);
            if (data == "thanhcong"){

                var html = "<div class='btn-group'> " +
                    "<button type='button' class='btn button_logout '>" + "Xin chào: " + name + "</button> " +
                    "<button type='button' class='btn dropdown-toggle button_logout' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <span class='caret'></span> <span class='sr-only'>Toggle Dropdown</span> </button> " +
                    "<ul class='dropdown-menu menu_user'> " +
                    "<li><a href='#' onclick= 'logout()' >Đăng xuất</a></li> " +
                    "<li><a href='#' >aaaaaaaa</a></li> </ul> </div>";
                $("#login").remove();
                $("#username").html(html);
                $("#myModal").modal("toggle");
            }
        }

    })
    $('#add_post').click(function () {
        var content = $('#post_content_create').summernote('code');
        $('#post_content').val(content);
    });

    $.fn.editable.defaults.mode = 'popup';

    var id = $("#category_id").text();

    //make name, description category editable
    $('#name_category').editable({
        type: "text",
        url: "http://localhost/blog-mvc/categories/edit_category/" + id,
        pk: id,
        name:  'name_category',
        title: 'Edit category',
        ajaxOptions:{
            type: "post"
        },
        success: function(response, newValue) {
            if (response.status == 'error')
                return response.msg; //msg will be shown in editable form
            console.log(newValue);
        }
    });

    $('#category_description').editable({
        type: "textarea",
        url: "http://localhost/blog-mvc/categories/edit_category/" + id,
        pk: id,
        name:  'category_description',
        title: 'Edit description',
        success: function(response, newValue) {
            if (response.status == 'error')
                return response.msg; //msg will be shown in editable form
            console.log(newValue);
        }
    });

}
function logout () {
    $.ajax({
        method: "post",
        url:"http://localhost/blog-mvc/home/logout",
        data: {action: "logout"},
        success: function (data) {
            var html = "<a class='btn button_login' data-toggle='modal' data-target='#myModal'>Login</a>";
            $(".logout").remove();
            $("#username").html(html);
        }
    })
}