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
            <th width="25%"><label for="meta_box_heading">Heading</label></th>
            <td>
                <input type="text" id="meta_box_heading" name="<?php echo RWMo_PREFIX; ?>post_options[heading]" class="text rwm-tooltip" value="<?php echo $options['heading']; ?>" title="Type in a longer creative page heading here. It will replace the standard page/post title" />
            </td>
        </tr>
        <tr>
            <th><label for="meta_box_heading_alignment">Heading Alignment</label></th>
            <td>
                <select id="meta_box_heading_alignment" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[heading_alignment]" title="Make your heading sit left, right, or centered">
                <?php foreach ($text_alignment_array as $key => $value): ?>
                    <?php $selected = ($key == $options['heading_alignment']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="meta_box_tagline">Tagline</label></th>
            <td>
                <input type="text" id="meta_box_tagline" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[tagline]" class="text rwm-tooltip" value="<?php echo $options['tagline']; ?>" title="Add some text that sits under your page/post heading" />
            </td>
        </tr>
        <tr>
            <th><label for="meta_box_tagline_alignment">Tagline Alignment</label></th>
            <td>
                <select id="meta_box_tagline_alignment" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[tagline_alignment]" title="Make your tagline text sit left, right, or centered">
                <?php foreach ($text_alignment_array as $key => $value): ?>
                    <?php $selected = ($key == $options['tagline_alignment']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <?php
        	/**
        	 * Inclusion Button Style
             * @return string [square, round, text]
             * @since 0.1.9
        	 */
        ?>
        <tr>
            <th><label for="meta_box_inc_btn_style">Inclusion Button Style</label></th>
            <td>
                <select id="meta_box_inc_btn_style" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[inc_btn_style]" title="Choose square, round, or a simple text as style for your button.">
                <?php foreach ($btn_style_array as $key => $value): ?>
                    <?php $selected = ($key == $options['inc_btn_style']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>
        <tr>
            <th><label for="meta_box_show_action">Show Readmore</label></th>
            <td>
                <select id="meta_box_show_action" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[show_action]" title="Show or hide your readmore button. You can hide if you don't want this post to link anywhere">
                <?php foreach ($yes_no_array as $key => $value): ?>
                    <?php $selected = ($key == $options['show_action']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="meta_box_action_url">Readmore Link</label></th>
            <td><input type="text" id="meta_box_action_url" name="<?php echo RWMo_PREFIX; ?>post_options[action_url]" class="text rwm-tooltip" value="<?php echo $options['action_url']; ?>" title="Want your page/post to link somewhere specific? Then type in the link here. Leave blank if you just want it to open this page/post." /></td>
        </tr>
        <tr>
            <th><label for="meta_box_action_text">Readmore Text</label></th>
            <td><input type="text" id="meta_box_action_text" name="<?php echo RWMo_PREFIX; ?>post_options[action_text]" class="text rwm-tooltip" value="<?php echo $options['action_text']; ?>" title="Change the text in your read more button for this page/post. Leave blank to show the default." /></td>
        </tr>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>
        <tr>
            <th><label for="meta_box_post_layout">Post Layout</label></th>
            <td>
                <select id="meta_box_post_layout" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[post_layout]" title="Choose between two different post layouts.">
                <?php foreach ($post_layout_array as $key => $value): ?>
                    <?php $selected = ($key == $options['post_layout']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>
        <tr>
            <th><label for="meta_box_show_sidebar">Show Sidebar</label></th>
            <td>
                <select id="meta_box_show_sidebar" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[show_sidebar]" title="Turn your side bar on or off for this page/post. Leave blank to use the default setting.">
                <?php foreach ($show_hide_array as $key => $value): ?>
                    <?php $selected = ($key == $options['show_sidebar']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="meta_box_show_comments">Show Comments</label></th>
            <td>
                <select id="meta_box_show_comments" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[show_comments]" title="Show comments on this page/post/ Leave blank to use the default setting">
                <?php foreach ($show_hide_array as $key => $value): ?>
                    <?php $selected = ($key == $options['show_comments']) ? ' selected="selected"' : ''; ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>
        <tr>
            <th><label for="meta_box_show_slider">Show Slider</label></th>
            <td>
                <select id="meta_box_show_slider" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[show_slider]" title="Turn your banner slider on or off for this page/post.">
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
                <select id="meta_box_slider_set" class="rwm-tooltip" name="<?php echo RWMo_PREFIX; ?>post_options[slider_set]" title="Choose which set of slides you want to show on this page/post. You will need to have created a slider set first in your slider area.">
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