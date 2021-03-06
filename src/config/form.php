<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

return array(
	'prep_value'			=> true,
	'auto_id'				=> true,
	'auto_id_prefix'		=> '', // form_
	'form_method'			=> 'post',
	'form_template'			=> "\t\t{form_open}\n{fields}\n\t\t{form_close}\n",
	'field_template'		=> "\t\t\t{label} {required} {field}\n",
	'multi_field_template'	=> "\t\t\t{group_label}{required}\n {fields}\t\t\t{label} {field}{fields}",
	'required_mark'			=> '<span class="required">*</span>',
);

/* End of file form.php */
