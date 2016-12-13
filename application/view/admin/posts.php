<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Posts
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách bài viết</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a class="btn btn-success btn-add" href="<?php echo URL ?>posts/create_post">Add</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Images</th>
                                <th>Category</th>
                                <th>User</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($totalPosts as $totalPosts) {
                                ?>
                                <tr id="row-post-<?php echo $totalPosts["blog_id"] ?>">
                                    <td><?php echo $totalPosts["blog_id"] ?></td>
                                    <td><?php echo $totalPosts["title"] ?></td>
                                    <td><?php echo $totalPosts["description"] ?></td>
<!--                                    <td>--><?php //var_dump( $totalPosts["image"])?><!--</td>-->
                                    <td class="image">
                                        <img src="<?php echo URL ?>public/images/blog/<?php echo $totalPosts["image"] ?>" style="max-width: 150px; max-height: 150px">
                                    </td>

                                    <td><?php echo $totalPosts["name_category"] ?></td>
                                    <td><?php echo $totalPosts["username"] ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-edit" data-toggle="modal"
                                                href="#edit_category">Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-delete" data-toggle="modal"
                                                href="#delete_category">Delete
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="edit_category">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Sửa danh mục</h4>
			</div>
			<div class="modal-body">
				Tên danh mục: <input type="text" name="name" id="inputID" class="form-control" value="" title="" required="required" >
				Miêu tả: <input type="text" name="name" id="inputID" class="form-control" value="" title="" required="required" >
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				<button type="button" class="btn btn-primary">Lưu</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="delete_category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Yêu cầu xác nhận</h4>
            </div>
            <div class="modal-body">
                <h1>Bạn có chắc chắn muốn xóa không?</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger">Xóa</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->