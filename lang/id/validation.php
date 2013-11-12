<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => ":attribute harus diterima.",
	"active_url"       => ":attrubute bukan URL yang valid.",
	"after"            => ":attribute harus tanggal setelah :date",
	"alpha"            => ":attribute hanya dapat berisi huruf.",
	"alpha_dash"       => ":attribute hanya dapat berisi huruf, angka, dan strip.",
	"alpha_num"        => ":attribute hanya dapat berisi huruf dan angka.",
	"before"           => ":attribute harus tanggal sebelum :date",
	"between"          => array(
		"numeric" => ":attribute harus antara :min - :max.",
		"file"    => ":attribute harus antara :min - :max kilobytes.",
		"string"  => ":attribute harus antara :min - :max karakter.",
	),
	"confirmed"        => "Konfirmasi :attribute tidak cocok.",
	"date"             => ":attribute bukan tanggal yang valid.",
	"date_format"      => ":attribute tidak sesuai format :format",
	"different"        => ":attribute dan :other harus berbeda.",
	"digits"           => ":attribute harus :digits angka.",
	"digits_between"   => ":attribute harus antara :min dan :max angka",
	"email"            => "Format :attribute tidak valid.",
	"exists"           => ":attribute yang dipilih tidak valid.",
	"image"            => ":attribute harus berupa image.",
	"in"               => ":attribute yang dipilih tidak valid.",
	"integer"          => ":attribute harus berupa integer.",
	"ip"               => ":attribute harus berupa alamat IP yang valid.",
	"max"              => array(
		"numeric" => ":attribute mungkin tidak lebih besar dari :max.",
		"file"    => ":attribute mungkin tidak lebih besar dari :max kilobytes.",
		"string"  => ":attribute mungkin tidak lebih besar dari :max karakter.",
	),
	"mimes"            => ":attribute harus berupa file dengan tipe: :values",
	"min"              => array(
		"numeric" => ":attribute harus setidaknya :min.",
		"file"    => ":attribute harus setidaknya :min kilobytes.",
		"string"  => ":attribute harus setidaknya :min karakter.",
	),
	"not_in"           => ":attribute yang dipilih tidak valid.",
	"numeric"          => ":attribute harus berupa angka.",
	"regex"            => "Format :attribute tidak valid.",
	"required"         => ":attribute diperlukan.",
	"required_if"      => ":attribute diperlukan ketika :other adalah :value.",
	"required_with"    => ":attribute diperlukan ketika :values ada.",
	"required_without" => ":attribute diperlukan ketika :values tidak ada.",
	"same"             => ":attribute dan :other harus sama.",
	"size"             => array(
		"numeric" => ":attribute harus :size.",
		"file"    => ":attribute harus harus :size kilobytes.",
		"string"  => ":attribute harus :size karakter.",
	),
	"unique"           => ":attribute sudah ada.",
	"url"              => "Format :attribute tidak valid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
