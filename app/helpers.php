<?php

if(!function_exists('customHelperFunction')){
	function customHelperFunction(){
		echo 'in customHelperFunction';
	}
}

if(!function_exists('addCurrencySymbol')){
	function addCurrnecySymbol($symb, $value){
		return $symb . (string)$value;
	}
}

if(!function_exists('addWeightSymbol')){
	function addWeightSymbol($symb, $value){
		return number_format($value, 2) . (string)$symb;
	}
}