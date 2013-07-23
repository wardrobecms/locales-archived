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

	"accepted"         => "Вы должны принять :attribute.",
	"active_url"       => "Поле :attribute должно быть полным URL.",
	"alpha"          => "Поле :attribute может содержать только буквы.",
	"alpha_dash"     => "Поле :attribute может содержать только буквы, цифры и тире.",
	"alpha_num"      => "Поле :attribute может содержать только буквы и цифры.",
	"array"          => "Поле :attribute необходимо выбрать элементы.",
	"before"         => "Поле :attribute должно быть датой перед :date.",
	"between"        => array(
		"numeric" => "Поле :attribute должно быть между :min и :max.",
		"file"    => "Поле :attribute должно быть от :min до :max Килобайт.",
		"string"  => "Поле :attribute должно быть от :min до :max символов.",
	),
	"confirmed"      => "Поле :attribute не совпадает с подтверждением.",
	"date"             => "Поле :attribute не содержит действительной датой..",
	"date_format"      => "Поле :attribute не соответствует формату :format.",
	"different"        => "Поля :attribute и :other должны различаться.",
	"digits"           => "Поле :attribute должен содержать :digits цифр.",
	"digits_between"   => "Поле :attribute должно быть между :min и :max цифр.",
	"email"          => "Поле :attribute имеет неверный формат.",
	"exists"         => "Выбранное значение для :attribute уже существует.",
	"image"          => "Поле :attribute должно быть картинкой.",
	"in"             => "Выбранное значение для :attribute не верно.",
	"integer"        => "Поле :attribute должно быть целым числом.",
	"ip"             => "Поле :attribute должно быть полным IP-адресом.",
	"max"            => array(
		"numeric" => "Поле :attribute должно быть меньше :max.",
		"file"    => "Поле :attribute должно быть меньше :max Килобайт.",
		"string"  => "Поле :attribute должно быть короче :max символов.",
	),
	"mimes"          => "Поле :attribute должно быть файлом одного из типов: :values.",
	"min"            => array(
		"numeric" => "Поле :attribute должно быть не менее :min.",
		"file"    => "Поле :attribute должно быть не менее :min Килобайт.",
		"string"  => "Поле :attribute должно быть не короче :min символов.",
	),
	"not_in"         => "Выбранное значение для :attribute не верно.",
	"numeric"        => "Поле :attribute должно быть числом.",
	"required"       => "Поле :attribute обязательно для заполнения.",
	"required_if"      => "Поле :attribute требуется при :other является :value.",
	"required_with"    => "Поле :attribute требуется при :values prisutstvuyet.",
	"required_without" => "Поле :attribute требуется при :values нет.",
	"same"           => "Значение :attribute должно совпадать с :other.",
	"size"           => array(
		"numeric" => "Поле :attribute должно быть :size.",
		"file"    => "Поле :attribute должно быть :size Килобайт.",
		"string"  => "Поле :attribute должно быть длиной :size символов.",
	),
	"unique"         => "Такое значение поля :attribute уже существует.",
	"url"            => "Поле :attribute имеет неверный формат.",

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
