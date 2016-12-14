/**
 * Created by Administrator on 07/12/2016.
 */
function login() {
    var username = $("#usernameLog").val();
    var password = $("#passwordLog").val();
    $(".errorLog").text("");
    $.ajax({
        method: "post",
        url :"http://localhost/blog-mvc/home/login",
        data: {username: username, password: password, action: "login" },
        success: function (data) {
            data = $.parseJSON(data);
            console.log(data);
            if (data.error == false){
                var html = "<div class='btn-group'> " +
                    "<button type='button' class='btn button_logout '>" + "Xin chào: " + username + "</button> " +
                    "<button type='button' class='btn dropdown-toggle button_logout' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <span class='caret'></span> <span class='sr-only'>Toggle Dropdown</span> </button> " +
                    "<ul class='dropdown-menu menu_user'> " +
                    "<li><a href='#' onclick= 'logout()' >Đăng xuất</a></li> " +
                    "<li><a href='#' >aaaaaaaa</a></li> </ul> </div>";
                $("#login").remove();
                $("#username").html(html);
                $("#myModal").modal("toggle");
            } else {
                $(".errorLog").text(data.message);
            }
        }
    })
}

function register() {
    var username = $("#namerg").val();
    var email = $("#emailrg").val();
    var password = $("#passwordrg").val();
    $(".error").text("");
    $.ajax({
        method: "post",
        url:"http://localhost/blog-mvc/home/register",
        data: {username: username, email: email, password: password, action: "register"},
        success: function (data) {
            data = $.parseJSON(data);
            console.log(data.length);
            if (data.length == 0){
                var html = "<div class='btn-group'> " +
                    "<button type='button' class='btn button_logout '>" + "Xin chào: " + name + "</button> " +
                    "<button type='button' class='btn dropdown-toggle button_logout' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <span class='caret'></span> <span class='sr-only'>Toggle Dropdown</span> </button> " +
                    "<ul class='dropdown-menu menu_user'> " +
                    "<li><a href='#' onclick= 'logout()' >Đăng xuất</a></li> " +
                    "<li><a href='#' >aaaaaaaa</a></li> </ul> </div>";
                $("#login").remove();
                $("#username").html(html);
                $("#myModal").modal("toggle");
            } else {
                for (i = 0; i < data.length; i++) {
                    $(".error").append(data[i] + "<br />");
                }
            }
        },
        beforeSend: function () {
            $('.modal-dialog').css('opacity',0.85);
            $('.overlay-loader').css('display','block');
        },
        complete: function () {
            $('.modal-dialog').css('opacity',1);
            $('.overlay-loader').css('display','none');
        }

    })
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