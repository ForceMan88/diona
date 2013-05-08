<div id="grid_7" style="display: block"">
    <h1>Create CMS Page!</h1>
    <?php echo form_open('admin_panel/cms/cmscreate','cms_create'); ?>

    <?php echo form_label('Title:', 'title'); ?>
    <?php echo form_input('title', set_value('title')); ?>

    <?php echo form_label('Menu title:', 'menu_title'); ?>
    <?php echo form_input('menu_title', set_value('menu_title')); ?>

    <?php echo form_label('Description:', 'description'); ?>
    <?php echo form_input('description', set_value('description')); ?>

    <?php echo form_label('Keywords:', 'keywords'); ?>
    <?php echo form_input('keywords', set_value('keywords')); ?>

    <?php echo form_label('Content:', 'content');  ?>
    <?php echo form_textarea(array('name'=>'content'), set_value('content'))  ?>

    <?php echo form_label('Url:', 'url'); ?>
    <?php echo form_input('url', set_value('url')); ?>

    <?php echo form_label('Sort order:', 'sort_order'); ?>
    <?php echo form_input('sort_order', set_value('login')) ?>

    <?php echo form_submit('submit', 'Create'); ?>
    <?php echo form_close(); ?>
</div>
