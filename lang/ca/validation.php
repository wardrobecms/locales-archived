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

	"accepted" => ":attribute ha de ser acceptat.",
	"active_url" => ":attribute no és una adreça web valida.",
	"after" => ":attribute ha de ser una data posterior a:date.",
	"alpha" => ":attribute només pot contenir lletres.",
	"alpha_dash" => ":attribute només pot contenir lletres , números i guions.",
	"alpha_num" => ":attribute només pot contenir lletres i números.",
	"before" => ":attribute ha de ser una data anterior a:date.",
	"between" => array (
		"numeric" => ":attribute ha d'estar entre :min i :max.",
		"file" => ":attribute ha d'estar entre :m i :max kilobytes.",
		"string" => ":attribute ha d'estar entre :min i :max caràcters.",
	) ,
	"confirmats" => "Confirmació del camp :attribute no és igual.",
	"date" => ":attribute no és una data vàlida.",
	"date_format" => ":attribute no té el format :format.",
	"different" => ":attribute i :other han de ser diferent.",
	"digits" => ":attribute han de ser de :digits digits.",
	"digits_between" => ":attribute han de tenir entre :min i :max digits.",
	"email" => "El format del camp :attribute no és vàlid.",
	"exists" => "El:attribute seleccionat no és vàlid.",
	"image" => ":attribute ha de ser una imatge.",
	"in" => ":attribute seleccionat no és vàlid.",
	"integer" => ":attribute ha de ser un integer.",
	"ip" => ":attribute ha de ser una adreça IP vàlida.",
	"max" => array (
		"numeric" => ":attribute no ha de ser més gran que :max.",
		"file" => ":attribute no ha de ser més gran que :max kilobytes.",
		"string" => ":attribute no ha de ser més gran que :max caràcters.",
	) ,
	"mimes" => ":attribute ha de ser un arxiu del tipus: :values.",
	"min" => array (
		"numeric" => ":attribute ha de ser d'almenys :min.",
		"file" => ":attribute ha de ser d'almenys :min kilobytes.",
		"string" => ":attribute ha de ser d'almenys :min caràcters.",
	) ,
	"not_in" => ":attribute seleccionat no és vàlid.",
	"numeric" => ":attribute ha de ser un nombre.",
	"regex" => ":attribute no té un format vàlid.",
	"required" => ":attribute és obligatori.",
	"required_if" => ":attribute és obligatori quan:other conté :value.",
	"required_with" => ":attribute és obligatori quan :values ​​existeix.",
	"required_without" => ":attribute és obligatori quan :values ​​no existeix.",
	"same" => ":attribute i :other ha de coincidir.",
	"size" => array (
		"numeric" => ":attribute ha de ser :size.",
		"file" => ":attribute ha de tenir :size kB.",
		"string" => ":attribute ha de tenir :size caràcters.",
	) ,
	"unique" => ":attribute ja està agafat.",
	"url" => "El format :attribute no és vàlid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention"attribute.rule"to name the lines. This makes it quick to
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
	| of"email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
