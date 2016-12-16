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

function showModalAvatar(id_user) {
    $("#myModal_avatar").modal();
}
function update_avatar (id_user) {
    var id_user = id_user;
    $.ajax({
        method:"post",
        url: "http://localhost/blog-mvc/travel/update_ava",
        data: {
            action: "update_ava",
            id_user: id_user
        },
        success:function (data) {

        }
    })
}
function submitComment(blogId, userId) {
    blogId = $("#blog-id-cm").val();
    userId = $("#user-id-cm").val();
    comment = $("#comment-detail").val();
    $.ajax({
        method: "post",
        url: "http://localhost/blog-mvc/blogs/detail/" + blogId,
        data: {
            action: "comment",
            blog_id: blogId,
            user_id: userId,
            comment: comment
        },
        success: function (data) {
            console.log(data);
        }
    })
}

$(document).ready(function () {


    // $("#search").autocomplete({
    //     source: 'http://localhost/blog-mvc/home/search'
    // });

    $("#search").keyup(function () {
        var search =  $("#search").val();
        if (search == ""){
            $(".results_search").css("display", "none");
        }else {
            $.ajax({
                method: "post",
                url: "http://localhost/blog-mvc/home/search",
                data: {
                    search: search,
                    action: "search"
                },
                success:function (data) {

                    $(".results_search").css("display", "block");
                    data = JSON.parse(data);

                        var html = "";

                        // console.log(data.length);
                        for (var i = 0; i < data.length; i++)
                        {
                            html += "<li><a>" + data[i].title  +"</a></li>";

                        }
                        $("#results_search").html(html);

                }
            })
        }


    })
    // $("#search_btn").click(function () {
    //     // $("#results_search").css()
    //     var search = $("#search").val();
    //     $.ajax({
    //         method: "post",
    //         url: "http://localhost/blog-mvc/home/search_btn",
    //         data: {
    //             search: search,
    //             action: "search"
    //         },
    //         success:function (data) {
    //             data = JSON.parse(data);
    //             console.log(data);
    //             var html = "";
    //
    //             // console.log(data.length);
    //             for (var i = 0; i < data.length; i++)
    //             {
    //                 html += "<a>" + data[i].title  +"</a></br>";
    //
    //             }
    //             $("#results_search").html(html);
    //         }
    //     })
    // })
    
})