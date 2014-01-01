<?php

return array(

	'extend' => 'Ustawienia',

	'fields' => 'Dodatkowe pola',
	'fields_desc' => 'Utwórz dodatkowe pola',

	'variables' => 'Zmienne',
	'variables_desc' => 'Utwórz dodatkowe zmienne',

	'create_field' => 'Utwórz nowe pole',
	'editing_custom_field' => 'Edytujesz pole &ldquo;%s&rdquo;',
	'nofields_desc' => 'Brak dodatkowych pól',

	'create_variable' => 'Utwórz nową zmienną',
	'editing_variable' => 'Edytujesz zmienną &ldquo;%s&rdquo;',
	'novars_desc' => 'Brak dodatkowych zmiennych',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Określ typ zawartości tego pola.',

	'field' => 'Pole',
	'field_explain' => 'Zawartość html',

	'key' => 'Unikalny klucz',
	'key_explain' => 'Unikalny klucz tego pola',
	'key_missing' => 'Proszę podać unikalny klucz',
	'key_exists' => 'Taki klucz jest już w użyciu',

	'label' => 'Etykieta',
	'label_explain' => 'Łatwa do odczytania nazwa',
	'label_missing' => 'Prosze podać etykietę',

	'attribute_type' => 'Typy plików',
	'attribute_type_explain' => 'Oddziel przecinkami rodzaje plików lub zostaw puste.',

	// images
	'attributes_size_width' => 'Maksymalna szerokość obrazka',
	'attributes_size_width_explain' => 'Większe obrazki zostaną przeskalowane',

	'attributes_size_height' => 'Maksymalna szerokość obrazka',
	'attributes_size_height_explain' => 'Większe obrazki zostaną przeskalowane',

	// custom vars
	'name' => 'Nazwa',
	'name_explain' => 'Unikalna nazwa',
	'name_missing' => 'Proszę podać unikalną nazwę',
	'name_exists' => 'Taka nazwa jest już w użyciu',

	'value' => 'Wartość',
	'value_explain' => 'Dane / kod (do 64kb)',
	'value_code_snipet' => 'Snippet do zamieszczenia w szablonie:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Twoja zmienna została utworzona',
	'variable_updated' => 'Twoja zmienna została zaktualizowana',
	'variable_deleted' => 'Twoja zmienna została usunięta',

	'field_created' => 'Twoje pole zostało utworzone',
	'field_updated' => 'Twoje pole zostało zaktualizowane',
	'field_deleted' => 'Twoje pole zostało usunięte'

);
