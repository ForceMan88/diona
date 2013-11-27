<div class="grid_12" style="width: 100px !important;">
    <table style="width: 100px !important;">
        <thead>
        <tr>
            <th>Name</th>
            <th>value</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>

            <?php echo form_open('admin_panel/config/update', 'config'); ?>
                <?php foreach ($data['currency_rate'] as $item) : ?>
                    <tr >
                        <td><?php echo $item->name ?></td>
                        <td><?php echo form_input($item->name, $item->value); ?></td>
                        <td><?php echo form_submit('submit', 'Update'); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php echo form_close(); ?>
        </tbody>
    </table>
</div>