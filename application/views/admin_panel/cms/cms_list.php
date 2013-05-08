<div align="right">
    <p><a href="<?php echo base_url('admin_panel/cms/cmscreate')?>"><h1>Create Cms Page</h1></a>  </p>
</div>
<?php if (count($data) > 0) : ?>
<div class="grid_16">
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Sort Order</th>
            <th colspan="2" width="10%">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $cms):?>
            <tr>
                <td><?php echo $cms->id ?></td>
                <td><?php echo htmlspecialchars($cms->title) ?></td>
                <td><?php echo $cms->sort_order ?></td>
                <td><a href="<?php echo base_url('admin_panel/cms/delete/'.$cms->id) ?>" class="delete">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>

    <?php else: ?>
        <h3>
           Cms pages are empty.
        </h3>

    <?php endif; ?>
</div>