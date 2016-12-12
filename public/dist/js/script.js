/**
 * Created by Administrator on 08/12/2016.
 */

function showModal (id) {
    $("#delete_users").modal();
    $("#id_user_DL").val(id);
}

function delete_user ()
{
    var id_user = $("#id_user_DL").val();
    $.ajax({
        method: "post",
        url: "http://localhost/blog-mvc/admin/delete",
        data: {
            id: id_user,
            action: "delete"
        },
        success: function (data) {

            if (data = "delete_thanhcong")
            {
                $("#row-user-" + id_user ).remove()
            }
        }
    })
    $("#delete_users").modal("toggle");
}
$(document).ready(function() {

    $('#post_content_create').summernote({
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,            // set maximum height of editor
        focus: true                  // set focus to editable area after initializing summernote
    });

    $('#add_post').click(function () {
        var content = $('#post_content_create').summernote('code');
        $('#post_content').val(content);
    })

});