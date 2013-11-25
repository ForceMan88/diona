<?php if(!empty($data)) : ?>
    <div class="grid_7">
        <h1>ID : <?php echo $data['prop']->entity_id ?></h1>
        <h1>Street : <?php echo $data['prop']->street ?></h1>
        <h1>Price : <?php echo $data['prop']->price ?></h1>
    </div>
    <div class="grid_5">
        <?php if(isset($data['images']) && !empty($data['images'])): ?>
            <?php foreach($data['images'] as $image) : ?>
                <img src="<?php echo base_url('media/frontend/image/sales').'/'.$image->image ?>" height="30%" width="30%"/>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="grid_4">
        <?php echo form_open_multipart('admin_panel/sales/settopsales'); ?>
        <?php $top_sales = $data['prop']->top_sales && count($data['prop']->top_sales)  ?>
        <?php echo form_hidden('entity_id', $data['prop']->entity_id) ?>
        <?php echo form_label( form_checkbox('top_sales[1]','on', $top_sales && in_array(1, $data['prop']->top_sales) ? 'checked':'') . ' Set top sales 1' );  ?>
        </br>
        <?php echo form_label( form_checkbox('top_sales[2]','on', $top_sales && in_array(2, $data['prop']->top_sales)  ? 'checked':'') . ' Set top sales 2' );  ?>
        </br>
        <?php echo form_label( form_checkbox('top_sales[3]','on', $top_sales && in_array(3, $data['prop']->top_sales)  ? 'checked':'') . ' Set top sales 3' );  ?>
        </br>
        <?php echo form_submit(array('name' => 'submit',), 'Set Top Sales'); ?>
        <?php echo form_close(); ?>
    </div>
    <div class="grid_7">
        <?php echo form_open_multipart('admin_panel/sales/upload'); ?>
        <?php echo form_hidden('entity_id', $data['prop']->entity_id) ?>
        <?php echo form_upload(array('name' => 'userfile[]',
            'onchange' => 'count_files()',
            'multiple' => 'true',
            'accept' => 'image/jpeg, image/png, image/jpg, image/gif'));?>
        <?php echo form_submit(array('name' => 'upload', 'id' => 'submit'), 'Upload'); ?>
        <?php echo form_close(); ?>
        <span id="info"></span><div id="bag"><ul/></div><span id="totals"></span>
    </div>
<?php endif; ?>

<script>
    window.onload = function () {
        var inp = document.querySelector("input[type='file']");
        if (!inp.files.length) document.getElementById('submit').setAttribute("disabled", "disabled");
        var inf = document.getElementById("info");
        inf.innerHTML = '<p>Выбирите файлв для загрузки \n\
    помните поддерживаемые  форматы файлов <b>jpeg png gif bmp</b></p>';
    }
    function count_files() {
        document.getElementById("submit").disabled = false;
        var input = document.querySelector("input[type='file']");
        if (input.files) {
            var ul = document.querySelector("#bag>ul");
            while (ul.hasChildNodes()) {
                ul.removeChild(ul.firstChild);
            }
            if (input.files.length > 5) {
                var inf = document.getElementById("info");
                inf.innerHTML = '<p>Файлов слшиком много,  выбирайте не более 5 файлов:</p>';
                document.getElementById('submit').setAttribute("disabled", "disabled");
                return false;
            }
            totals = 0;
            var inf = document.getElementById("info");
            inf.innerHTML = '<p>Файлы которые вы хотите загрузить:</p>';
            for (var i = 0; i < input.files.length; i++) {
                var li = document.createElement("li");
                var size = parseInt((input.files[i].size * 8) / 7);
                li.innerHTML = input.files[i].name + ' &nbsp; <span class="disabled">' + human_size(size, 2) + 'MB' + '</span>';
                ul.appendChild(li);
                totals += size;
            }
            if (parseInt(human_size(totals, 2)) > 60) {
                var tot = document.getElementById("totals");
                document.getElementById("submit").disabled = true;
                tot.innerHTML = 'Размер всех загружаемых файлов: ' + human_size(totals, 2) + "    "
                    + '<strong>Превышен максимальны размер загружаемых файлов' +
                    " а это 60 мб</strong>";
            }
            else {
                var tot = document.getElementById("totals");
                tot.innerHTML = 'Total size: ' + human_size(totals, 2) + 'MB';
            }

        } else {
            document.getElementById('bag').innerHTML = '<br>Ваш нубский браузер не поддерживает HTML5:( поэтому загрука только по 1 файлу';
        }
    }
    function human_size(bytes, precision) {
        var kilobyte = 1024;
        var megabyte = kilobyte * 1024;
        var gigabyte = megabyte * 1024;
        var terabyte = gigabyte * 1024;
        return  (bytes / megabyte).toFixed(precision);
    }


</script>
</div>