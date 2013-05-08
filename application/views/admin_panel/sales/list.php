<?php if (!empty($data['list'])) : ?>
    <?php echo form_open('admin_panel/sales/search',array('name'=>'search','method'=>'post')); ?>
        <div class="grid_4">
            <p>
                <?php echo form_label('ID:', 'id'); ?>
                <?php echo form_input('id', set_value('id')); ?>
            </p>
        </div>
        <div class="grid_2">
            <p>
                <label>&nbsp;</label>
                <?php echo form_submit('submit', 'Search'); ?>
            </p>
        </div>
    <?php echo form_close(); ?>
    <div class="grid_16">
        <table>
            <thead>
                <tr>
                    <th height="15px" width="20%">ID</th>
                    <th width="20%">Price</th>
                    <th width="20%">Street</th>
                    <th colspan="2" width="3%">Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="5" class="pagination">
                            <?php echo $data['pagination'] ?>
                    </td>
                </tr>
            </tfoot>
            <tbody>

                <?php foreach ($data['list'] as $item) : ?>
                    <tr class="alt">
                        <td><?php echo $item->entity_id ?></td>
                        <td><?php echo $item->price ?></td>
                        <td><?php echo htmlspecialchars($item->street) ?></td>
                        <td><a href="<?php echo base_url('admin_panel/sales/search/'.$item->entity_id) ?>" class="edit">Edit</a></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Sales are empty.</h3>
<?php endif; ?>