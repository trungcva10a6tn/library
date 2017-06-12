<div class="content">
    <table>
        <tr>
            <th>STT</th>
            <th>Ảnh</th>
            <th>Tên Sách</th>
            <th>Tác Giả</th>
            <th>Giá</th>
        </tr>
        <?php
        foreach ($data as $recos){
            ?>
            <tr>
                <td><?= $recos["id_book"]?></td>
                <td><img src="/library/img_book/<?=$recos["id_book"]?>" alt="" width="100" height="auto"></td>
                <td><?= $recos["name_book"]?></td>
                <td><?= $recos["author"]?></td>
                <td><?= $recos["price"]?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<button class="new_book" onclick="location.href='/library/?page=NewBook'">Thêm Mới</button>


