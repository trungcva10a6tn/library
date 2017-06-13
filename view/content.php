<div class="content">
    <table>
        <tr>
            <th>STT</th>
<!--            <th>Ảnh</th>-->
            <th>Tên Sách</th>
            <th>Nhà Xuất Bản</th>
            <th>Tác Giả</th>
            <th>Năm Xuất Bản</th>
            <th>Số lần Xuất bản</th>
            <th>Giá</th>
            <th>Thể Loại</th>
            <th>Cài Đặt</th>
        </tr>
        <?php
        foreach ($data as $recos){
            ?>
            <tr>
                <td><?= $recos["id_book"]?></td>
<!--                <td><img src="/library/img_book/--><?//=$recos["id_book"]?><!--" alt="" width="100" height="auto"></td>-->
                <td><?= $recos["name_book"]?></td>
                <td><?= $recos["producer"]?></td>
                <td><?= $recos["author"]?></td>
                <td><?= $recos["year_of_production"]?></td>
                <td><?= $recos["number_of_editions"]?></td>
                <td><?= $recos["price"]?></td>
                <td><?= $recos["name_category"]?></td>
                <td><a href="/library/?page=edit&id=<?= $recos["id_book"]?>">Sửa</a> <a href="/library/?page=delete&id=<?= $recos["id_book"]?>">Xóa</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<button class="new_book" onclick="location.href='/library/?page=NewBook'">Thêm Mới</button>


