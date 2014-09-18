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

	"accepted"         => ":attribute skal accepteres.",
	"active_url"       => ":attribute er ikke en gyldig URL.",
	"before"           => ":attribute skal være en dato før :date.",
	"after"            => ":attribute skal være en dato efter :date.",
	"alpha"            => ":attribute må kun indeholde bogstaver.",
	"alpha_num"        => ":attribute må kun indeholde bogstaver og tal.",
	"alpha_dash"       => ":attribute må kun indeholde bogstaver, tal og skråstreger.",
	"between"          => array(
		"numeric" => ":attribute skal være mellem :min og :max.",
		"file"    => ":attribute skal være mellem :min og :max kilobytes.",
		"string"  => ":attribute skal være mellem :min og :max bogstaver.",
	),
	"confirmed"        => ":attribute bekræftigelsen og :attribute er ikke identisk.",
	"date"             => ":attribute er ikke en gyldig dato.",
	"date_format"      => ":attribute følger ikke formatet :format.",
	"different"        => ":attribute og :other må ikke være ens.",
	"digits"           => ":attribute skal være :digits cifre.",
	"digits_between"   => ":attribute skal være mellem :min og :max cifre.",
	"email"            => ":attribute har ikke et korrekt format.",
	"image"            => ":attribute skal være et billede.",
	"exists"           => "Den valgte :attribute er ikke gyldig.",
	"in"               => "Den valgte :attribute er ikke gyldig.",
	"integer"          => ":attribute skal være et heltal.",
	"ip"               => ":attribute skal være en gyldig IP adresse.",
	"max"              => array(
		"numeric" => ":attribute må ikke være større end :max.",
		"file"    => ":attribute må ikke være større end :max kilobytes.",
		"string"  => ":attribute må ikke være mere end :max bogstaver.",
	),
	"mimes"            => ":attribute skal være en fil af typen: :values.",
	"min"              => array(

		"numeric" => ":attribute skal mindst være :min.",
		"file"    => ":attribute skal mindst være :min kilobytes.",
		"string"  => ":attribute skal mindst være :min bogstaver.",
	),
	"not_in"           => "Den valgte :attribute er ikke gyldig.",
	"numeric"          => ":attribute skal være et tal.",
	"regex"            => ":attribute formattering er ikke gyldig.",
	"required"         => ":attribute skal udfyldes.",
	"required_if"      => "Feltet :attribute skal udfyldes hvis :other er :value.",
	"required_with"    => "Feltet :attribute skal udfyldes når :values er tilstedeværende.",
	"required_without" => "Feltet :attribute skal udfyldes når :values er fraværende.",
	"same"             => ":attribute og :other skal matche.",
	"size"             => array(
		"numeric" => ":attribute skal skal være :size.",
		"file"    => ":attribute skal skal være :size kilobytes.",
		"string"  => ":attribute skal skal være :size bogstaver.",
	),
	"unique"           => ":attribute er allerede taget.",
	"url"              => ":attribute har ikke et gyldigt format.",

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
