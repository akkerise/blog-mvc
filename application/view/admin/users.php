<div class="container">
    <div class="row col-md-12  custyle">
        <table class="table table-striped custab">
            <thead>
            <a href="index.php?p=themTheLoai" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
            <tr>
                <th>idTL</th>
                <th>Tên thể loại</th>
                <th>Tên thể loại(không dấu)</th>
                <th>Thứ tự</th>
                <th>Ẩn Hiện</th>
                <th class="text-center">Sửa - Xóa</th>
            </tr>
            </thead>
            <tr>
                <td>{idTL}</td>
                <td>{TenTL}</td>
                <td>{TenTL-KhongDau}</td>
                <td>{ThuTu}</td>
                <td>{AnHien}</td>

                <td class="text-center">
                    <form method="post">
                        <a class='btn btn-info btn-xs' href="index.php?p=suaTheLoai&idTL={idTL}"><span
                                class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="index.php?p=xoaTheLoai&idTL={idTL}" class="btn btn-danger btn-xs" name="del"><span
                                class="glyphicon glyphicon-remove"></span> Del</a></td>
                </form>

            </tr>

        </table>
    </div>
</div>