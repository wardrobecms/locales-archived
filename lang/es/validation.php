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
	"after"            => ":attribute debe ser después que :date.",
	"alpha"            => ":attribute sólo puede incluir letras.",
	"alpha_dash"       => "The :attribute sólo puede incluir letras, números y guiones.",
	"alpha_num"        => "The :attribute sólo puede incluir letras y números.",
	"before"           => ":attribute debe ser una fecha antes que :date.",
	"between"          => array(
		"numeric" 			=> ":attribute debe ser entre :min y :max.",
		"file"    			=> ":attribute debe ser entre :m y :max kilobytes.",
		"string"  			=> ":attribute debe ser entre :min y :max letras.",
	),
	"confirmed"        => "Confirmación del :attribute no está de acuerdo.",
	"date"             => ":attribute no es una fecha.",
	"date_format"      => ":attribute no está de acuerdo del formato :format.",
	"different"        => ":attribute y :other debe ser diferente.",
	"digits"           => ":attribute debe ser :digits cifras.",
	"digits_between"   => ":attribute debe ser entre :min y :max cifras.",
	"email"            => "El formato :attribute no es válido.",
	"exists"           => ":attribute seleccionado no es una dirección válido.",
	"image"            => ":attribute debe ser una foto.",
	"in"               => ":attribute seleccionado no es válido.",
	"integer"          => ":attribute debe ser un entero.",
	"ip"               => ":attribute debe ser una dirección IP válida.",
	"max"              => array(
		"numeric" => ":attribute no debe ser menos que que :max.",
		"file"    => ":attribute no debe ser menos que que :max kilobytes.",
		"string"  => ":attribute no debe ser menos que que :max letras.",
	),
	"mimes"            => ":attribute debe ser un archivo de tipo: :values.",
	"min"              => array(
		"numeric" => ":attribute debe ser por lo menos :min.",
		"file"    => ":attribute debe ser por lo menos :min kilobytes.",
		"string"  => ":attribute debe ser por lo menos :min letras.",
	),
	"not_in"           => ":attribute seleccionado no es válido.",
	"numeric"          => ":attribute debe ser un número.",
	"regex"            => ":attribute no es un formato válido.",
	"required"         => "Se require el campo de :attribute.",
	"required_if"      => "Se require el campo de :attribute cuando :other sea :value.",
	"required_with"    => "Se require el campo de :attribute cuando :values existe.",
	"required_without" => "Se require el campo de :attribute cuando :values no existe.",
	"same"             => ":attribute y :other debe coincidir.",
	"size"             => array(
		"numeric" => ":attribute debe ser :size.",
		"file"    => ":attribute debe ser :size kilobytes.",
		"string"  => ":attribute debe ser :size letras.",
	),
	"unique"           => ":attribute ya se ha tomado.",
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
