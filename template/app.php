<?php
	$DOCROOT = $_SERVER['DOCUMENT_ROOT'];
	// Подключает атомы
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/core/atoms/*/*.css') as $__atoms_css ) {
		$__atoms_css = str_replace($DOCROOT, "", $__atoms_css);
		echo "<link type='text/css' rel='stylesheet' href='$__atoms_css'>\n";
	}
	// echo "<link type='text/css' rel='stylesheet' href='/template/core/atoms/__colors-$colors.css'>\n";
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/core/atoms/*/*.js') as $__atoms_js ) {
		$__atoms_js = str_replace($DOCROOT, "", $__atoms_js);
    	echo "<script type='text/javascript' src='$__atoms_js'></script>\n";
	}

	// Подключает молекулы
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/core/molecules/*/*.css') as $__molecules_css ) {
		$__molecules_css = str_replace($DOCROOT, "", $__molecules_css);
    	echo "<link type='text/css' rel='stylesheet' href='$__molecules_css'>\n";
	}
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/core/molecules/*/*.js') as $__molecules_js ) {
		$__molecules_js = str_replace($DOCROOT, "", $__molecules_js);
    	echo "<script type='text/javascript' src='$__molecules_js'></script>\n";
	}

	// Подключает организмы
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/core/organism/*/*.css') as $__organism_css ) {
		$__organism_css = str_replace($DOCROOT, "", $__organism_css);
    	echo "<link type='text/css' rel='stylesheet' href='$__organism_css'>\n";
	}
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/core/organism/*/*.js') as $__organism_js ) {
		$__organism_js = str_replace($DOCROOT, "", $__organism_js);
    	echo "<script type='text/javascript' src='$__organism_js'></script>\n";
	}

	// Подключает шаблон
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/css/*.css') as $__temp_css ) {
		$__temp_css = str_replace($DOCROOT, "", $__temp_css);
    	echo "<link type='text/css' rel='stylesheet' href='$__temp_css'>\n";
	}
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/js/*.js') as $__temp_js ) {
		$__temp_js = str_replace($DOCROOT, "", $__temp_js);
    	echo "<script type='text/javascript' src='$__temp_js'></script>\n";
	}

	// Подключает компоненты
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/comp/**/*.css') as $__comp_css ) {
		$__comp_css = str_replace($DOCROOT, "", $__comp_css);
    	echo "<link type='text/css' rel='stylesheet' href='$__comp_css'>\n";
	}
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/comp/**/*.js') as $__comp_js ) {
		$__comp_js = str_replace($DOCROOT, "", $__comp_js);
    	echo "<script type='text/javascript' src='$__comp_js'></script>\n";
	}

	// Подключает библиотеки
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/libs/*/*.css') as $__libs_css ) {
		$__libs_css = str_replace($DOCROOT, "", $__libs_css);
    	echo "<link type='text/css' rel='stylesheet' href='$__libs_css'>\n";
	}
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/libs/*/*.js') as $__libs_js ) {
		$__libs_js = str_replace($DOCROOT, "", $__libs_js);
    	echo "<script type='text/javascript' src='$__libs_js'></script>\n";
	}

	// Подключает формы ОС
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/libs/*/*/*.css') as $__libs_css ) {
		$__libs_css = str_replace($DOCROOT, "", $__libs_css);
    	echo "<link type='text/css' rel='stylesheet' href='$__libs_css'>\n";
	}
	foreach ( glob($_SERVER['DOCUMENT_ROOT'].'/template/libs/*/*/*.js') as $__libs_js ) {
		$__libs_js = str_replace($DOCROOT, "", $__libs_js);
    	echo "<script type='text/javascript' src='$__libs_js'></script>\n";
	}
?>