<?php

/**
 * Preview Templates use handlebars.js for structure
 * see http://handlebarsjs.com/ for more on this.
 * 
 * this is passed the default array in the field register under config
 * It also has {{_name}} and {{_id}} these are used to define the config value and is required
 * The class field-config is also required on tehj actual field capture to aid in config objects
 * 
 * Add the class magic-tag-enabled to a text or textarea to create a magic tag enable field
 * 
 */


?>
<div class="caldera-config-group">
	<label>Checkbox Option</label>
	<div class="caldera-config-field">
		<label><input type="checkbox" class="field-config {{_id}}_my_option" name="{{_name}}[my_option]" value="1" {{#if my_option}}checked="checked"{{/if}}> Enable this option</label>
	</div>
</div>

<div class="caldera-config-group">
	<label>Input Option</label>
	<div class="caldera-config-field">
		<input type="text" id="{{_id}}_another_option" class="block-input field-config magic-tag-enabled" name="{{_name}}[another_option]" value="{{another_option}}">
	</div>
</div>