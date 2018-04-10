<?php

require_once(__DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');


$sample_json = '[
	{
		"color": "red",
		"value": "#f00"
	},
	{
		"color": "green",
		"value": "#0f0"
	},
	{
		"color": "blue",
		"value": "#00f"
	},
	{
		"color": "cyan",
		"value": "#0ff"
	},
	{
		"color": "magenta",
		"value": "#f0f"
	},
	{
		"color": "yellow",
		"value": "#ff0"
	},
	{
		"color": "black",
		"value": "#000"
	}
]';


$array = \json_decode($sample_json, true);

/*


*/

?>

<p>Sample array : </p>
<pre><code><?= \print_r(json_last_error_msg(), true); ?></code></pre>
<pre><code><?= \print_r($array, true); ?></code></pre>


<p>get_value($array, "3->color");<p>
<p><?= idema\utils\arr\HashMapTraversal::get_value($array, "3->color"); ?></p>

<p>set_value($array, "0->color", "pink");<p>
<p><pre><code><?= \print_r(idema\utils\arr\HashMapTraversal::set_value($array, "0->color", "pink")); ?></code></pre></p>

<p>update_value($array, "1->color", function($curVal){
	return "not ".$curVal." anymore";
});<p>
<p><pre><code><?= \print_r(idema\utils\arr\HashMapTraversal::update_value($array, "1->color", function($curVal){
	return "not ".$curVal." anymore";
})); ?></code></pre></p>


<p>array_column_nested($array, "color");<p>
<p><pre><code><?= print_r(idema\utils\arr\HashMapTraversal::array_column_nested($array, "color")); ?></code></pre></p>