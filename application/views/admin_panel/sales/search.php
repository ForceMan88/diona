<?php echo form_open('admin_panel/sales/search', 'search'); ?>
    <div class="grid_4">
        <p>
            <?php echo form_label('ID:', 'id'); ?>
            <?php echo form_input('id', set_value('id')); ?>
        </p>
    </div>
    <div class="grid_5">
        <p>
            <label>&nbsp;</label>
            <?php echo form_submit('submit', 'Search'); ?>
        </p>
    </div>
<?php echo form_close(); ?>
