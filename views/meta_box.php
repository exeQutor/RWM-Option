<style type="text/css">
.<?php echo RWMo_PREFIX; ?>meta_box input {
    width: 100%;
}

.<?php echo RWMo_PREFIX; ?>meta_box select {
    float: right;
    display: block;
}

.<?php echo RWMo_PREFIX; ?>meta_box ul {
    margin: 0;
    padding: 0;
}

.<?php echo RWMo_PREFIX; ?>meta_box li {
    border-bottom: 1px solid #eee;
    padding-bottom: 5px;
    margin-bottom: 5px;
}

.<?php echo RWMo_PREFIX; ?>meta_box li.middle {
    line-height: 25px;
}

</style>

<div class="<?php echo RWMo_PREFIX; ?>meta_box">

<?php wp_nonce_field(RWMo_PREFIX . 'meta_box_action', RWMo_PREFIX . 'meta_box_nonce'); ?>

    <ul>
        <li>
            <label for="meta_box_heading">Heading</label>
            <input type="text" id="meta_box_heading" name="<?php echo RWMo_PREFIX; ?>post_options[heading]" class="text" value="<?php echo $options['heading']; ?>" />
        </li>
        <li>
            <label for="meta_box_tagline">Tagline</label>
            <input type="text" id="meta_box_tagline" name="<?php echo RWMo_PREFIX; ?>post_options[tagline]" class="text" value="<?php echo $options['tagline']; ?>" />
        </li>
        <li>
            <label for="meta_box_action_url">Action URL</label>
            <input type="text" id="meta_box_action_url" name="<?php echo RWMo_PREFIX; ?>post_options[action_url]" class="text" value="<?php echo $options['action_url']; ?>" />
        </li>
        <li class="middle">
            <label for="meta_box_show_sidebar">Show Sidebar?</label>
            <select id="meta_box_show_sidebar" name="<?php echo RWMo_PREFIX; ?>post_options[show_sidebar]">
            <?php foreach ($show_hide_array as $key => $value): ?>
                <?php $selected = ($key == $options['show_sidebar']) ? ' selected="selected"' : ''; ?>
                <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
            </select>
            <div class="clear"></div>
        </li>
        <li class="middle">
            <label for="meta_box_show_comments">Show Comments?</label>
            <select id="meta_box_show_comments" name="<?php echo RWMo_PREFIX; ?>post_options[show_comments]">
            <?php foreach ($show_hide_array as $key => $value): ?>
                <?php $selected = ($key == $options['show_comments']) ? ' selected="selected"' : ''; ?>
                <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
            </select>
            <div class="clear"></div>
        </li>
    </ul>

</div>