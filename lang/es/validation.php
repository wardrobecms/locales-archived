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

	"accepted"         => ":attribute debe ser aceptado.",
	"active_url"       => ":attribute no es un URL válido.",
	"after"            => ":attribute debe ser una fecha posterior a :date.",
	"alpha"            => ":attribute sólo puede contener letras.",
	"alpha_dash"       => ":attribute sólo puede contener letras, números y guiones.",
	"alpha_num"        => ":attribute sólo puede contener letras y números.",
	"before"           => ":attribute debe ser una fecha anterior a :date.",
	"between"          => array(
		"numeric" 			=> ":attribute debe estar entre :min y :max.",
		"file"    			=> ":attribute debe estar entre :m y :max kilobytes.",
		"string"  			=> ":attribute debe estar entre :min y :max caracteres.",
	),
	"confirmed"        => "Confirmación del :attribute no es igual.",
	"date"             => ":attribute no es una fecha válida.",
	"date_format"      => ":attribute no tiene el formato :format.",
	"different"        => ":attribute y :other debe ser diferente.",
	"digits"           => ":attribute deben ser :digits cifras.",
	"digits_between"   => ":attribute deben tener entre :min y :max cifras.",
	"email"            => "El formato :attribute no es válido.",
	"exists"           => "El :attribute seleccionado no es válido.",
	"image"            => ":attribute debe ser una imagen.",
	"in"               => ":attribute seleccionado no es válido.",
	"integer"          => ":attribute debe ser un integer.",
	"ip"               => ":attribute debe ser una dirección IP válida.",
	"max"              => array(
		"numeric" => ":attribute no debe ser mayor que :max.",
		"file"    => ":attribute no debe ser mayor que :max kilobytes.",
		"string"  => ":attribute no debe ser mayor que :max caracteres.",
	),
	"mimes"            => ":attribute debe ser un archivo del tipo: :values.",
	"min"              => array(
		"numeric" => ":attribute debe ser de por lo menos :min.",
		"file"    => ":attribute debe ser de por lo menos :min kilobytes.",
		"string"  => ":attribute debe ser de por lo menos :min caracteres.",
	),
	"not_in"           => ":attribute seleccionado no es válido.",
	"numeric"          => ":attribute debe ser un número.",
	"regex"            => ":attribute no tiene un formato válido.",
	"required"         => ":attribute es obligatorio.",
	"required_if"      => ":attribute es obligatorio cuando :other contiene :value.",
	"required_with"    => ":attribute es obligatorio cuando :values existe.",
	"required_without" => ":attribute es obligatorio cuando :values no existe.",
	"same"             => ":attribute y :other debe coincidir.",
	"size"             => array(
		"numeric" => ":attribute debe ser :size.",
		"file"    => ":attribute debe tener :size kilobytes.",
		"string"  => ":attribute debe tener :size caracteres.",
	),
	"unique"           => ":attribute ya está cogido.",
	"url"              => "El formato :attribute no es válido.",

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
