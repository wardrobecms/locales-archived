<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Το following language lines contain Το default error messages used by
	| Το validator class. Some of Τοse rules have multiple versions such
	| such as Το size rules. Feel free to tweak each of Τοse messages.
	|
	*/

	"accepted"         => "Το :attribute πρέπει να γίνει αποδεκτό.",
	"active_url"       => "Το :attribute δεν είναι έγκυρη διεύθυνση URL.",
	"after"            => "Το :attribute πρέπει να είναι μία ημερομηνία μετά την :date.",
	"alpha"            => "Το :attribute επιτρέπεται να περιέχει μόνον γράμματα.",
	"alpha_dash"       => "Το :attribute επιτρέπεται να περιέχει μόνον γράμματα, αριθμούς, και παύλες.",
	"alpha_num"        => "Το :attribute επιτρέπεται να περιέχει μόνον γράμματα και αριθμούς.",
	"before"           => "Το :attribute πρέπει να είναι μία ημερομηνά πριν από :date.",
	"μεταξύ"          => array(
		"numeric" => "Το :attribute πρέπει να είναι μεταξύ :min - :max.",
		"file"    => "Το :attribute πρέπει να είναι μεταξύ :min - :max kilobytes.",
		"string"  => "Το :attribute πρέπει να είναι μεταξύ :min - :max χαρακτήρες.",
	),
	"confirmed"        => "Το :attribute επιβεβαίωση δεν ταιριάζει.",
	"date"             => "Το :attribute δεν είναι έγκυρη ημερομηνία.",
	"date_format"      => "Το :attribute δεν ταιριάζει με τη μορφή :format.",
	"different"        => "Τα :attribute και :oΤοr πρέπει να είναι διαφορετικά.",
	"digits"           => "Το :attribute πρέπει να είναι :digits ψηφία.",
	"digits_μεταξύ"   => "Το :attribute πρέπει να είναι μεταξύ :min και :max ψηφίων.",
	"email"            => "Το :attribute μορφή είναι μη έγκυρο.",
	"exists"           => "Το επιλεγμένο :attribute είναι μη έγκυρο.",
	"image"            => "Το :attribute πρέπει να είναι μία εικόνα.",
	"in"               => "Το επιλεγμένο :attribute είναι μη έγκυρο.",
	"integer"          => "Το :attribute πρέπει να είναι ακέραιος.",
	"ip"               => "Το :attribute πρέπει να είναι μία έγκυρη διεύθυνση IP.",
	"max"              => array(
		"numeric" => "Το :attribute δεν επιτρέπεται να είναι μεγαλύτερο του :max.",
		"file"    => "Το :attribute δεν επιτρέπεται να είναι μεγαλύτερο του :max kilobytes.",
		"string"  => "Το :attribute δεν επιτρέπεται να είναι μεγαλύτερο του :max χαρακτήρες.",
	),
	"mimes"            => "Το :attribute πρέπει να είναι ένα αρχείο τύπου: :values.",
	"min"              => array(
		"numeric" => "Το :attribute πρέπει να είναι τουλάχιστον :min.",
		"file"    => "Το :attribute πρέπει να είναι τουλάχιστον :min kilobytes.",
		"string"  => "Το :attribute πρέπει να είναι τουλάχιστον :min χαρακτήρες.",
	),
	"not_in"           => "Το επιλεγμένο :attribute είναι μη έγκυρο.",
	"numeric"          => "Το :attribute πρέπει να είναι αριθμός.",
	"regex"            => "Το :attribute μορφή είναι μη έγκυρο.",
	"required"         => "Το :attribute πεδίο είναι υποχρεωτικό.",
	"required_if"      => "Το :attribute πεδίο είναι υποχρεωτικό όταν το :oΤοr είναι :value.",
	"required_with"    => "Το :attribute πεδίο είναι υποχρεωτικό όταν το :values υπάρχει.",
	"required_without" => "Το :attribute πεδίο είναι υποχρεωτικό όταν το :values δεν υπάρχει.",
	"same"             => "Τα :attribute και :oΤοr πρέπει να ταιριάζουν.",
	"size"             => array(
		"numeric" => "Το :attribute πρέπει να είναι :size.",
		"file"    => "Το :attribute πρέπει να είναι :size kilobytes.",
		"string"  => "Το :attribute πρέπει να είναι :size χαρακτήρες.",
	),
	"unique"           => "Το :attribute είναι ήδη κατειλημμένο.",
	"url"              => "Η μορφή του :attribute είναι μη έγκυρη.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using Το
	| convention "attribute.rule" to name Το lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| Το following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
