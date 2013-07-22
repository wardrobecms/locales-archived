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

	"accepted"         => "De :attribute moet geaccepteerd worden.",
	"active_url"       => "De :attribute is geen geldig URL.",
	"after"            => "De :attribute moet een datum zijn na :date.",
	"alpha"            => "De :attribute mag enkel letters bevatten.",
	"alpha_dash"       => "De :attribute mag alleen letters, cijfers en koppeltekens bevatten.",
	"alpha_num"        => "De :attribute mag enkel letters en cijfers bevatten.",
	"before"           => "De :attribute moet een datum zijn voor :date.",
	"between"          => array(
		"numeric" => "De :attribute moet zich bevinden tussen :min en :max.",
		"file"    => "De :attribute moet zich bevinden tussen :min en :max kilobytes.",
		"string"  => "De :attribute moet zich bevinden tussen :min en :max characters.",
	),
	"confirmed"        => "De :attribute bevestiging komt niet overeen.",
	"date"             => "De :attribute is geen geldige datum.",
	"date_format"      => "De :attribute komt niet overeen met het formaat :format.",
	"different"        => "De :attribute en :other moeten verschillend zijn.",
	"digits"           => "De :attribute moeten :digits cijfers zijn.",
	"digits_between"   => "De :attribute moeten tussen de :min en :max cijfers zijn.",
	"email"            => "Het :attribute formaat is ongeldig.",
	"exists"           => "Het geselecteerde :attribute formaat is ongeldig.",
	"image"            => "De :attribute moet een afbeelding zijn.",
	"in"               => "De geselecteerde :attribute is ongeldig.",
	"integer"          => "De :attribute moet een geheel getal zijn.",
	"ip"               => "De :attribute moet een geldig IP adres zijn.",
	"max"              => array(
		"numeric" => "De :attribute mag niet groter zijn dan :max.",
		"file"    => "De :attribute mag niet groter zijn dan :max kilobytes.",
		"string"  => "De :attribute mag niet groter zijn dan :max karakters.",
	),
	"mimes"            => "De :attribute moet een bestand zijn van een van de volgende types: :values.",
	"min"              => array(
		"numeric" => "De :attribute moest minstens :min groot zijn.",
		"file"    => "De :attribute moest minstens :min kilobytes groot zijn.",
		"string"  => "De :attribute moest minstens :min karakters groot zijn.",
	),
	"not_in"           => "Het geselecteerde :attribute is ongeldig.",
	"numeric"          => "De :attribute moet een cijfer zijn.",
	"regex"            => "Het :attribute formaat is ongeldig.",
	"required"         => "Het :attribute veld is verplicht.",
	"required_if"      => "Het :attribute veld is verplicht wanneer :other gelijk is aan :value.",
	"required_with"    => "Het :attribute veld is verplicht wanneer :values bestaat.",
	"required_without" => "Het :attribute veld is verplicht wanneer :values niet bestaat.",
	"same"             => "De :attribute en :other moeten overeenkomen.",
	"size"             => array(
		"numeric" => "De :attribute moet :size zijn.",
		"file"    => "De :attribute moet :size kilobytes zijn.",
		"string"  => "De :attribute moet :size karakters.",
	),
	"unique"           => "De :attribute is reeds in gebruik.",
	"url"              => "Het :attribute formaat is ongeldig.",

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
