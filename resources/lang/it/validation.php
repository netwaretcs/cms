<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Deve essere accettato',
    'active_url' => 'Questo non è un URL valido.',
    'after' => 'Deve essere una data successiva a :date.',
    'after_or_equal' => 'Deve essere una data successiva o uguale a :date.',
    'alpha' => 'Può contenere solo lettere.',
    'alpha_dash' => 'Può contenere solo lettere, numeri, trattini e trattini bassi.',
    'alpha_num' => 'Può contenere solo lettere e numeri.',
    'array' => 'Deve essere un array.',
    'before' => 'Deve essere una data precedente a :date.',
    'before_or_equal' => 'Deve essere una data precedente o uguale a :date.',
    'between'              => [
        'numeric' => 'Deve essere compreso tra :min e :max.',
        'file'    => 'Deve essere compreso tra :min e :max kilobyte :max.',
        'string'  => 'Deve essere compreso tra :min e :max caratteri.',
        'array'   => 'Deve contenere tra :min e :max elementi.',
    ],
    'boolean' => 'Deve essere vero o falso.',
    'confirmed' => 'La conferma non corrisponde.',
    'current_password' => 'Password non valida.',
    'date' => 'Non è una data valida',
    'date_format' => 'Non corrisponde al formato :format.',
    'different' => 'Questo campo e :other devono essere diversi.',
    'digits' => 'Deve essere :digits cifre.',
    'digits_between' => 'Deve essere compreso tra :min e :max cifre.',
    'dimensions' => 'Dimensioni dell\'immagine non valide.',
    'distinct' => 'Questo campo ha un valore duplicato.',
    'email' => 'Deve essere un indirizzo email valido.',
    'exists' => 'Questo non è valido',
    'file' => 'Deve essere un file.',
    'filled' => 'Deve contenere un valore',
    'gt'                   => [
        'numeric' => 'Deve essere maggiore di :value.',
        'file'    => 'Deve essere maggiore di :value kilobyte.',
        'string'  => 'Deve essere maggiore di :value caratteri :value.',
        'array'   => 'Deve contenere più di :value elementi.',
    ],
    'gte'                  => [
        'numeric' => 'Deve essere maggiore o uguale :value.',
        'file'    => 'Deve essere maggiore o uguale :value kilobyte.',
        'string'  => 'Deve essere maggiore o uguale :value caratteri :value.',
        'array'   => 'Deve contenere almeno :value elementi',
    ],
    'image' => 'Deve essere un\'immagine.',
    'in' => 'Questo non è valido',
    'in_array' => 'Questo campo non esiste in :other.',
    'integer' => 'Deve essere un numero intero.',
    'ip' => 'Deve essere un indirizzo IP valido.',
    'ipv4' => 'Deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'Deve essere un indirizzo IPv6 valido.',
    'json' => 'Deve essere una stringa JSON valida.',
    'lt'                   => [
        'numeric' => 'Deve essere inferiore a :value.',
        'file'    => 'Deve essere inferiore a :value kilobyte.',
        'string'  => 'Deve essere inferiore a :value caratteri :value.',
        'array'   => 'Deve contenere meno di :value elementi.',
    ],
    'lte'                  => [
        'numeric' => 'Deve essere minore o uguale :value.',
        'file'    => 'Deve essere minore o uguale :value kilobyte.',
        'string'  => 'Deve essere minore o uguale :value caratteri :value.',
        'array'   => 'Non deve avere più di :value elementi.',
    ],
    'max'                  => [
        'numeric' => 'Non può essere maggiore di :max.',
        'file'    => 'Non può essere maggiore di :max kilobyte :max.',
        'string'  => 'Non può essere maggiore di :max caratteri.',
        'array'   => 'Non può contenete più di :max elementi.',
    ],
    'mimes' => 'Deve essere un file di tipo :values.',
    'mimetypes' => 'Deve essere un file di tipo :values.',
    'min'                  => [
        'numeric' => 'Deve essere almeno :min.',
        'file'    => 'Deve essere almeno :min kilobyte :min.',
        'string'  => 'Deve essere almeno :min caratteri :min.',
        'array'   => 'Deve avere almeno :min elementi.',
    ],
    'not_in' => 'Questo non è valido',
    'not_regex' => 'Formato non valido.',
    'numeric' => 'Deve essere un numero.',
    'present' => 'Deve essere presente',
    'regex' => 'Formato non valido.',
    'required' => 'Questo campo è obbligatorio.',
    'required_if' => 'Questo campo è richiesto quando :other è :value.',
    'required_unless' => 'Questo campo è obbligatorio a meno che :other sia in :values.',
    'required_with' => 'Questo campo è obbligatorio quando :values sono presenti.',
    'required_with_all' => 'Questo campo è obbligatorio quando :values sono presenti.',
    'required_without' => 'Questo campo è obbligatorio quando :values non sono presenti.',
    'required_without_all' => 'Questo campo è obbligatorio quando nessuno dei :values è presente.',
    'same' => 'Questo campo e :other devono corrispondere.',
    'size'                 => [
        'numeric' => 'Deve essere :size.',
        'file'    => 'Deve essere :size kilobyte.',
        'string'  => 'Deve essere :size caratteri.',
        'array'   => 'Deve contenere :size elementi.',
    ],
    'string' => 'Deve essere una stringa.',
    'timezone' => 'Deve essere una zona valida.',
    'unique' => 'Questo valore è già stato utilizzato.',
    'uploaded' => 'Caricamento non riuscito.',
    'url' => 'Il formato non è valido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Statamic Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may validation messages for the custom rules provided by Statamic.
    |
    */

    'unique_entry_value' => 'Questo valore è già stato utilizzato.',
    'unique_term_value' => 'Questo valore è già stato utilizzato.',
    'unique_user_value' => 'Questo valore è già stato utilizzato.',
    'unique_form_handle' => 'Questo valore è già stato utilizzato.',
    'duplicate_field_handle' => 'Il campo con un handle di :handle non può essere utilizzato più di una volta.',
    'one_site_without_origin' => 'Almeno un sito non deve avere un\'origine.',
    'origin_cannot_be_disabled' => 'Impossibile selezionare un\'origine disabilitata.',
    'unique_uri' => 'Questo URI è già stato preso.',
    'duplicate_uri' => 'URI duplicato :value',
    'reserved' => 'Questa è una parola riservata.',
    'parent_causes_root_children' => 'Questo fa sì che la pagina principale abbia dei figli.',
    'parent_cannot_be_itself' => 'Non può essere il proprio genitore.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

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

    'attributes' => [],

];
