<style type="text/css">
.<?php echo RWMo_PREFIX; ?>meta_box table th {
    text-align: left;
}
.<?php echo RWMo_PREFIX; ?>meta_box table input {
    width: 100%;
}
.<?php echo RWMo_PREFIX; ?>meta_box table select {
    width: 100%;
}
.<?php echo RWMo_PREFIX; ?>meta_box table input[type=checkbox] {
    width: auto;
}
</style>

<div class="<?php echo RWMo_PREFIX; ?>meta_box">

<?php wp_nonce_field(RWMo_PREFIX . 'meta_box_action', RWMo_PREFIX . 'meta_box_nonce'); ?>

    <table width="100%">
        <tr>
            <th><label for="meta_box_heading">Heading</label></th><th><label for="meta_box_heading_alignment">Alignment</label></th>
        </tr>
        <tr>
            <td>
                <input type="text" id="meta_box_heading" name="<?php echo RWMo_PREFIX; ?>post_options[heading]" class="text" value="<?php echo $options['heading']; ?>" />
            </td>
            <td>
                <select id="meta_box_heading_alignment" name="<?php echo RWMo_PREFIX; ?>post_options[heading_alignment]">
                <?php foreach ($text_alignment_array as $key => $value): ?>
                    <?php $selected = ($key == $options['heading_alignment']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="meta_box_tagline">Tagline</label></th><th><label for="meta_box_tagline_alignment">Alignment</label></th>
        </tr>
        <tr>
            <td>
                <input type="text" id="meta_box_tagline" name="<?php echo RWMo_PREFIX; ?>post_options[tagline]" class="text" value="<?php echo $options['tagline']; ?>" />
            </td>
            <td>
                <select id="meta_box_tagline_alignment" name="<?php echo RWMo_PREFIX; ?>post_options[tagline_alignment]">
                <?php foreach ($text_alignment_array as $key => $value): ?>
                    <?php $selected = ($key == $options['tagline_alignment']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <?php $checked = ($options['action_url_show'] == 'on') ? ' checked="tre"': ''; ?>
            <th colspan="2"><input type="checkbox" id="meta_box_action_url_show" name="<?php echo RWMo_PREFIX; ?>post_options[action_url_show]"<?php echo $checked; ?> /> <label for="meta_box_action_url">Action URL</label></th>
        </tr>
        <tr>
            <td colspan="2"><input type="text" id="meta_box_action_url" name="<?php echo RWMo_PREFIX; ?>post_options[action_url]" class="text" value="<?php echo $options['action_url']; ?>" /></td>
        </tr>
        <tr>
            <?php $checked = ($options['action_text_show'] == 'on') ? ' checked="tre"': ''; ?>
            <th colspan="2"><input type="checkbox" id="meta_box_action_text_show" name="<?php echo RWMo_PREFIX; ?>post_options[action_text_show]"<?php echo $checked; ?> /> <label for="meta_box_action_text">Action Text</label></th>
        </tr>
        <tr>
            <td colspan="2"><input type="text" id="meta_box_action_text" name="<?php echo RWMo_PREFIX; ?>post_options[action_text]" class="text" value="<?php echo $options['action_text']; ?>" /></td>
        </tr>
        <tr>
            <th><label for="meta_box_show_sidebar">Sidebar Visibility</label></th>
            <td>
                <select id="meta_box_show_sidebar" name="<?php echo RWMo_PREFIX; ?>post_options[show_sidebar]">
                <?php foreach ($show_hide_array as $key => $value): ?>
                    <?php $selected = ($key == $options['show_sidebar']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="meta_box_show_comments">Comments Visibility</label></th>
            <td>
                <select id="meta_box_show_comments" name="<?php echo RWMo_PREFIX; ?>post_options[show_comments]">
                <?php foreach ($show_hide_array as $key => $value): ?>
                    <?php $selected = ($key == $options['show_comments']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="meta_box_show_slider">Show Slider</label></th>
            <td>
                <select id="meta_box_show_slider" name="<?php echo RWMo_PREFIX; ?>post_options[show_slider]">
                <?php foreach ($yes_no_array as $key => $value): ?>
                    <?php $selected = ($key == $options['show_slider']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="meta_box_slider_set">Slider Set</label></th>
            <td>
                <select id="meta_box_slider_set" name="<?php echo RWMo_PREFIX; ?>post_options[slider_set]">
                <option value="0">All Sets</option>
                <?php foreach ($slider_sets as $slider_set): ?>
                    <?php $selected = ($slider_set->slider_group_id == $options['slider_set']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $slider_set->slider_group_id; ?>"<?php echo $selected; ?>><?php echo $slider_set->slider_group_name; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
    </table>

</div>