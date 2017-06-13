<form action="" method="post">
    <fieldset>
        <legend>Thêm Sách Mới</legend>
        <div class="new_input">
            <label>Tên Sách: </label>
            <input type="text" name="name_book" value="<?=isset($data_erro['name_book'])?$data_erro['name_book']:""?>">
        </div>
        <div class="new_input">
            <label>Nhà Xuất Bản: </label>
            <input type="text" name="producer" value="<?=isset($data_erro['producer'])?$data_erro['producer']:""?>">
        </div>
        <div class="new_input">
            <label>Tác Giả: </label>
            <input type="text" name="author" value="<?=isset($data_erro['author'])?$data_erro['author']:""?>">
        </div>
        <div class="new_input">
            <label>Năm Xuất Bản: </label>
            <input type="date" name="year_of_production" value="<?=isset($data_erro['year_of_production'])?$data_erro['year_of_production']:""?>">
        </div>
        <div class="new_input">
            <label>Số Lần Xuất Bản: </label>
            <input type="text" name="number_of_editions" value="<?=isset($data_erro['number_of_editions'])?$data_erro['number_of_editions']:""?>">
        </div>
        <div class="new_input">
            <label>Giá : </label>
            <input type="text" name="price" value="<?=isset($data_erro['price'])?$data_erro['price']:""?>">
        </div>
        <div class="new_input">
            <label>Thể Loại : </label>
            <select name="category_id">
                <?php
                foreach ($data as $row){
                    ?>
                    <option value="<?= $row["id_category"]?>" <?=isset($data_erro['category_id'])?$data_erro['category_id'] == $row["id_category"]? 'selected' : '' :"" ?>  ><?= $row["name_category"]?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <button type="submit" name="ok" value="Lưu">Lưu</button>
    </fieldset>
</form>
