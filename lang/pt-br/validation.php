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

	"accepted"         => ":attribute deve ser aceito.",
	"active_url"       => ":attribute não é uma URL válida.",
	"after"            => ":attribute deve ser uma data posterior a :date.",
	"alpha"            => ":attribute só pode conter letras.",
	"alpha_dash"       => ":attribute só pode conter letras, números e traços.",
	"alpha_num"        => ":attribute só pode conter letras e números.",
	"before"           => ":attribute deve ser uma data anterior a :date.",
	"between"          => array(
		"numeric" => ":attribute deve estar entre :min e :max.",
		"file"    => ":attribute deve estar entre :min e :max kilobytes.",
		"string"  => ":attribute deve ter entre :min e :max caracteres.",
	),
	"confirmed"        => ":attribute confirmation does not match.",
	"date"             => ":attribute não é uma data válida.",
	"date_format"      => ":attribute não coincide com o formato :format.",
	"different"        => ":attribute e :other deve ser diferentes.",
	"digits"           => ":attribute precisa ter :digits dígitos.",
	"digits_between"   => ":attribute precisa ter entre :min e :max dígitos.",
	"email"            => "O formato de :attribute é inválido.",
	"exists"           => ":attribute selecionado é inválido.",
	"image"            => ":attribute deve ser uma imagem.",
	"in"               => ":attribute selecionado é inválido.",
	"integer"          => ":attribute deve ser um inteiro.",
	"ip"               => ":attribute precisa ser um endereço IP válido.",
	"max"              => array(
		"numeric" => ":attribute não pode ser maior que :max.",
		"file"    => ":attribute não pode ser maior que :max kilobytes.",
		"string"  => ":attribute não pode ser maior que :max caracteres.",
	),
	"mimes"            => ":attribute precisa ser um arquivo do tipo: :values.",
	"min"              => array(
		"numeric" => ":attribute precisa ser pelo menos :min.",
		"file"    => ":attribute precisa ter pelo menos :min kilobytes.",
		"string"  => ":attribute precisa ter pelo menos :min caracteres.",
	),
	"not_in"           => ":attribute selecionado é inválido.",
	"numeric"          => ":attribute precisa ser um número.",
	"regex"            => ":attribute tem um formato inválido.",
	"required"         => "campo :attribute é necessário.",
	"required_if"      => "campo :attribute é necessário quando :other for :value.",
	"required_with"    => "campo :attribute é necessário quando :values estiver presente.",
	"required_without" => "campo :attribute é necessário quando :values não estiver presente.",
	"same"             => ":attribute e :other precisam ser iguais.",
	"size"             => array(
		"numeric" => ":attribute precisa ser :size.",
		"file"    => ":attribute precisa ter :size kilobytes.",
		"string"  => ":attribute precisa ter :size caracteres.",
	),
	"unique"           => ":attribute já existe.",
	"url"              => ":attribute tem um formato inválido.",

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
