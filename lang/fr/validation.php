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

	"accepted"         => ":attribute doit être accepté.",
	"active_url"       => ":attribute n'est pas une URL valide.",
	"after"            => ":attribute doit être une date après :date.",
	"alpha"            => ":attribute ne peut contenir que des lettres.",
	"alpha_dash"       => ":attribute ne peut contenir que des lettres, des chiffres et des tirets.",
	"alpha_num"        => ":attribute ne peut contenir que des lettres et des chiffres.",
	"before"           => ":attribute doit être une date avant :date.",
	"between"          => array(
		"numeric" => ":attribute doit être entre :min - :max.",
		"file"    => ":attribute doit être entre :min - :max kilobytes.",
		"string"  => ":attribute doit être entre :min - :max caractères.",
	),
	"confirmed"        => ":attribute : la confirmation ne correspond pas.",
	"date"             => ":attribute n'est pas une date valide.",
	"date_format"      => ":attribute ne correspond pas au format :format.",
	"different"        => ":attribute et :other doivent être différents.",
	"digits"           => ":attribute doivent être des chiffres :digits.",
	"digits_between"   => ":attribute doivent être des chiffres :min et :max.",
	"email"            => ":attribute : le format n'est pas valide.",
	"exists"           => "Le :attribute sélectionné n'est pas valide.",
	"image"            => ":attribute doit être une image.",
	"in"               => "Le :attribute sélectionné n'est pas valide.",
	"integer"          => ":attribute doit être un entier.",
	"ip"               => ":attribute doit être une adresse IP valide.",
	"max"              => array(
		"numeric" => ":attribute ne peut pas être supérieur à :max.",
		"file"    => ":attribute ne peut pas être supérieur à :max kilobytes.",
		"string"  => ":attribute ne peut pas être supérieur à :max caractères.",
	),
	"mimes"            => ":attribute doit être un fichier de type: :values.",
	"min"              => array(
		"numeric" => ":attribute doit être au minimum de :min.",
		"file"    => ":attribute doit être au minimum de :min kilobytes.",
		"string"  => ":attribute doit être au minimum de :min caractères.",
	),
	"not_in"           => "Le :attribute sélectionné n'est pas valide.",
	"numeric"          => ":attribute doit être un chiffre.",
	"regex"            => ":attribute : le format n'est pas valide.",
	"required"         => ":attribute : le champ est obligatoire.",
	"required_if"      => ":attribute : le champ est obligatoire quand :other est :value.",
	"required_with"    => ":attribute : le champ est obligatoire quand :values est présent.",
	"required_without" => ":attribute : le champ est obligatoire quand :values est absent.",
	"same"             => ":attribute et :other doivent correspondre.",
	"size"             => array(
		"numeric" => ":attribute doit être de :size.",
		"file"    => ":attribute doit être de :size kilobytes.",
		"string"  => ":attribute doit être de :size caractères.",
	),
	"unique"           => ":attribute a déjà été pris.",
	"url"              => ":attribute : le format n'est pas valide.",

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
