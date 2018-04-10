<?php

namespace idema\utils\arr;

Class HashMapTraversal{
	public static function get_value($arr, $path){
		if (is_string($path))
			$arrayPath = self::strPathToArrayPath($path);
		else
			$arrayPath = $path;
		
		return \igorw\get_in($arr, $arrayPath);
	}
	
	public static function set_value($arr, $path, $value) {
		if (is_string($path))
			$arrayPath = self::strPathToArrayPath($path);
		else
			$arrayPath = $path;
		
		return \igorw\assoc_in($arr, $arrayPath, $value);
	}
	
	public static function update_value($arr, $path, callable $func) {
		if (is_string($path))
			$arrayPath = self::strPathToArrayPath($path);
		else
			$arrayPath = $path;
		
		return \igorw\update_in($arr, $arrayPath, $func);
	}
	
	public static function array_column_nested($arr, $col_path) {
		$retArray = [];
		foreach($arr as $row) {
			$retArray[] = self::get_value($row, $col_path);
		}
		return $retArray;
	}
	
	private static function strPathToArrayPath($path, $separator="->") {
		return explode($separator, $path);
	}
}