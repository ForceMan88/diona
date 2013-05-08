<div id="upload">
    <?php
        echo form_open_multipart('admin_panel/import/upload');
        echo form_upload('userfile');
        echo form_submit('upload', 'Upload');
        echo form_close();
    ?>
</div>