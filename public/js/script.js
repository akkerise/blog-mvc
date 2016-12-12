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

});