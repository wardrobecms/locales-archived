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

	"accepted"         => ":attribute måste accepteras.",
	"active_url"       => ":attribute är inte en giltid webbadress.",
	"after"            => ":attribute måste vara ett datum efter :date.",
	"alpha"            => ":attribute får bara inehålla bokstäver.",
	"alpha_dash"       => ":attribute får bara inehålla bokstäver, nummer, och bindestreck.",
	"alpha_num"        => ":attribute får bara inehålla bokstäver och nummer.",
	"before"           => ":attribute måste vara ett datum före :date.",
	"between"          => array(
		"numeric" => ":attribute måste vara mellan :min - :max.",
		"file"    => ":attribute måste vara mellan :min - :max kilobyte.",
		"string"  => ":attribute måste vara mellan :min - :max tecken.",
	),
	"confirmed"        => ":attribute bekräftelsen matchar inte.",
	"date"             => ":attribute är inte ett gitigt datum.",
	"date_format"      => ":attribute matchar inte formatet :format.",
	"different"        => ":attribute och :other måste vara olika.",
	"digits"           => ":attribute måste vara :digits siffror.",
	"digits_between"   => ":attribute måste vara mellan :min och :max siffror.",
	"email"            => ":attribute formatet är ogiltigt.",
	"exists"           => "Fältet :attribute du valde är ogiltigt.",
	"image"            => ":attribute måste vara en bild.",
	"in"               => "Det valda :attribute är ogiltigt.",
	"integer"          => ":attribute måste vara ett heltal.",
	"ip"               => ":attribute måste vara en giltig IP-adress.",
	"max"              => array(
		"numeric" => ":attribute får inte vara större än :max.",
		"file"    => ":attribute får inte vara större än :max kilobyte.",
		"string"  => ":attribute får inte vara större än :max tecken.",
	),
	"mimes"            => ":attribute måste vara av filtypen: :values.",
	"min"              => array(
		"numeric" => ":attribute måste vara minst :min.",
		"file"    => ":attribute måste vara minst :min kilobyte.",
		"string"  => ":attribute måste vara minst :min tecken.",
	),
	"not_in"           => "Det valda :attribute är ogiltigt.",
	"numeric"          => ":attribute måste vara ett nummer.",
	"regex"            => ":attribute format är ogiltigt.",
	"required"         => ":attribute krävs.",
	"required_if"      => ":attribute krävs när :other är :value.",
	"required_with"    => ":attribute krävs när :values is present.",
	"required_without" => "The :attribute field is required when :values inte fyllts i.",
	"same"             => ":attribute och :other måste matcha varandra.",
	"size"             => array(
		"numeric" => ":attribute måste vara :size.",
		"file"    => ":attribute måste vara :size kilobyte.",
		"string"  => ":attribute måste vara :size tecken.",
	),
	"unique"           => ":attribute är upptaget.",
	"url"              => ":attribute formatet är ogiltigt.",

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
