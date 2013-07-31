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

	"accepted"         => ":attribute يجب ان تكون مقبوله.",
	"active_url"       => ":attribute رابط إلكتروني غير صحيح.",
	"after"            => ":attribute يجب ان يكون تاريخ بعد :date.",
	"alpha"            => ":attribute يقبل فقط حروف.",
	"alpha_dash"       => " :attribute يقبل فقط حروف وأرقام و-.",
	"alpha_num"        => " :attribute يقبل فقط حروف وأرقام .",
	"before"           => " :attribute يجب ان يكون تاريخ قبل :date.",
	"between"          => array(
		"numeric" => " :attribute يجب ان يكون بين :min - :max.",
		"file"    => " :attribute يجب ان يكون بين :min - :max kilobytes.",
		"string"  => " :attribute يجب ان يكون بين :min - :max حروف.",
	),
	"confirmed"        => ":attribute التأكيد غير مطابقة.",
	"date"             => ":attribute ليس تاريخ صحيح.",
	"date_format"      => ":attribute لا يطابق صيغة :format.",
	"different"        => ":attribute و :other يجب ان يختلفان.",
	"digits"           => ":attribute يجب ان :digits أرقام.",
	"digits_between"   => ":attribute يجب ان يكون الأرقام بين :min و :max .",
	"email"            => ":attribute الصيغه غير صحيحه.",
	"exists"           => ":attribute المختار غير صحيح.",
	"image"            => ":attribute يجب ان تكون صوره.",
	"in"               => ":attribute المختار غير صحيح.",
	"integer"          => ":attribute يجب ان يكون عدد صحيح.",
	"ip"               => ":attribute يجب ان يكون  IP address صحيح.",
	"max"              => array(
		"numeric" => ":attribute يجب ان لا يكون أكبر من :max.",
		"file"    => ":attribute يجب ان لا يكون أكبر من :max kilobytes.",
		"string"  => ":attribute يجب ان لا يكون أكبر من :max characters.",
	),
	"mimes"            => ":attribute صيغة الملف يجب ان تكون: :values.",
	"min"              => array(
		"numeric" => ":attribute يجب عالاقل ان يكون :min.",
		"file"    => ":attribute يجب عالاقل ان يكون :min kilobytes.",
		"string"  => ":attribute يجب عالاقل ان يكون :min characters.",
	),
	"not_in"           => ":attribute المختار غير صحيح.",
	"numeric"          => ":attribute يجب ان يكون رقم.",
	"regex"            => ":attribute الصيغه غير صحيحه.",
	"required"         => ":attribute الحقل إجباري.",
	"required_if"      => ":attribute الحقل إجباري عندما :other يكون :value.",
	"required_with"    => ":attribute الحقل إجباري عندما :values يكون حاضر.",
	"required_without" => ":attribute الحقل إجباري عندما :values يكون غير حاضر.",
	"same"             => ":attribute و :other يجب ان  يتطابقان.",
	"size"             => array(
		"numeric" => ":attribute يجب ان يكون :size.",
		"file"    => ":attribute يجب ان يكون :size kilobytes.",
		"string"  => ":attribute يجب ان يكون :size characters.",
	),
	"unique"           => ":attribute تم أخذه مسبقا.",
	"url"              => ":attribute الصيغه غير صحيحه.",

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
