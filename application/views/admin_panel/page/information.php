<div id="content" class="container_16 clearfix">
<div class="grid_16" style="display: block">
    <?php if (!empty($information['success'])) : ?>
        <div class="success">
            <?php echo $information['success'] ?></div>
    <?php elseif(!empty($information['error'])): ?>
        <div class="error">
            <?php echo $information['error']; ?>
        </div>
    <?php endif; ?>
</div>