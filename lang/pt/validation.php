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

    'accepted' => 'O campo :attribute deve ser aceite.',
    'accepted_if' => 'O campo :attribute deve ser aceite quando: other for: value.',
    'active_url' => 'O campo :attribute deve ser um URL válido.',
    'after' => 'O campo :attribute deve ser uma data após :date.',
    'after_or_equal' => 'O campo :attribute deve ser uma data posterior ou igual a :data.',
    'alpha' => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash' => 'O campo :attribute deve conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => 'O campo :attribute deve conter apenas letras e números.',
    'any_of' => 'O campo :attribute é inválido.',
    'array' => 'O campo :attribute deve ser uma matriz.',
    'ascii' => 'O campo :attribute deve conter apenas caracteres e símbolos Alfanuméricos de byte único.',
    'before' => 'O campo :attribute deve ser uma data anterior :data.',
    'before_or_equal' => 'O campo :attribute deve ser uma data anterior ou igual a :data.',
    'between' => [
        'array' => 'O campo :attribute deve ter entre :min e :max itens.',
        'file' => 'O campo :attribute deve estar entre :min e :Max kilobytes.',
        'numeric' => 'O campo :attribute deve estar entre: min e: max.',
        'string' => 'O campo :attribute deve estar entre os caracteres :min e :max.',
    ],
    'boolean' => 'O campo deve ser verdadeiro ou falso.',
    'can' => 'O campo contém um valor não autorizado.',
    'confirmed' => 'A confirmação do campo não corresponde',
    'contains' => 'O campo não tem um valor obrigatório.',
    'current_password' => 'A palavra-passe está incorrecta.',
    'date' => 'O campo deve ser uma data válida.',
    'date_equals' => 'O campo deve ser uma data igual a :data.',
    'date_format' => 'O campo deve corresponder ao formato :format.',
    'decimal' => 'O campo deve ter :decimal decimais decimais.',
    'declined' => 'O campo deve ser recusado.',
    'declined_if' => 'O campo deve ser recusado quando :other for :value.',
    'different' => 'O campo e :other devem ser diferentes.',
    'digits' => 'O campo deve ser :digits dígitos.',
    'digits_between' => 'O campo deve estar entre os dígitos :min e :max.',
    'dimensions' => 'O campo tem dimensões de imagem inválidas.',
    'distinct' => 'O campo tem um valor duplicado.',
    'doesnt_end_with' => 'O campo não deve terminar com um dos seguintes :values.',
    'doesnt_start_with' => 'O campo não deve começar com um dos seguintes  :values.',
    'email' => 'O campo deve ser um endereço de E-mail válido.',
    'ends_with' => 'The  field must end with one of the following: :values.',
    'enum' => 'O selecionado é inválido.',
    'exists' => 'O selecionado é inválido.',
    'extensions' => 'O campo deve ter uma das seguintes extensões: :values.',
    'file' => 'O campo deve ser um ficheiro',
    'filled' => 'O campo deve ter um valor.',
    'gt' => [
        'array' => 'O campo deve ter mais de :value de valor.',
        'file' => 'O campo deve ser maior que :value kilobytes.',
        'numeric' => 'O campo deve ser maior que :value.',
        'string' => 'O campo deve ser maior que :value de valor.',
    ],
    'gte' => [
        'array' => 'The  field must have :value items or more.',
        'file' => 'The  field must be greater than or equal to :value kilobytes.',
        'numeric' => 'The  field must be greater than or equal to :value.',
        'string' => 'The  field must be greater than or equal to :value characters.',
    ],
    'hex_color' => 'The  field must be a valid hexadecimal color.',
    'image' => 'The  field must be an image.',
    'in' => 'The selected  is invalid.',
    'in_array' => 'The  field must exist in :other.',
    'in_array_keys' => 'The  field must contain at least one of the following keys: :values.',
    'integer' => 'The  field must be an integer.',
    'ip' => 'The  field must be a valid IP address.',
    'ipv4' => 'The  field must be a valid IPv4 address.',
    'ipv6' => 'The  field must be a valid IPv6 address.',
    'json' => 'The  field must be a valid JSON string.',
    'list' => 'The  field must be a list.',
    'lowercase' => 'The  field must be lowercase.',
    'lt' => [
        'array' => 'The  field must have less than :value items.',
        'file' => 'The  field must be less than :value kilobytes.',
        'numeric' => 'The  field must be less than :value.',
        'string' => 'The  field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The  field must not have more than :value items.',
        'file' => 'The  field must be less than or equal to :value kilobytes.',
        'numeric' => 'The  field must be less than or equal to :value.',
        'string' => 'The  field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The  field must be a valid MAC address.',
    'max' => [
        'array' => 'The  field must not have more than :max items.',
        'file' => 'The  field must not be greater than :max kilobytes.',
        'numeric' => 'The  field must not be greater than :max.',
        'string' => 'The  field must not be greater than :max characters.',
    ],
    'max_digits' => 'The  field must not have more than :max digits.',
    'mimes' => 'The  field must be a file of type: :values.',
    'mimetypes' => 'The  field must be a file of type: :values.',
    'min' => [
        'array' => 'The  field must have at least :min items.',
        'file' => 'The  field must be at least :min kilobytes.',
        'numeric' => 'The  field must be at least :min.',
        'string' => 'The  field must be at least :min characters.',
    ],
    'min_digits' => 'The  field must have at least :min digits.',
    'missing' => 'The  field must be missing.',
    'missing_if' => 'The  field must be missing when :other is :value.',
    'missing_unless' => 'The  field must be missing unless :other is :value.',
    'missing_with' => 'The  field must be missing when :values is present.',
    'missing_with_all' => 'The  field must be missing when :values are present.',
    'multiple_of' => 'The  field must be a multiple of :value.',
    'not_in' => 'The selected  is invalid.',
    'not_regex' => 'The  field format is invalid.',
    'numeric' => 'The  field must be a number.',
    'password' => [
        'letters' => 'The  field must contain at least one letter.',
        'mixed' => 'The  field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The  field must contain at least one number.',
        'symbols' => 'The  field must contain at least one symbol.',
        'uncompromised' => 'The given  has appeared in a data leak. Please choose a different .',
    ],
    'present' => 'The  field must be present.',
    'present_if' => 'The  field must be present when :other is :value.',
    'present_unless' => 'The  field must be present unless :other is :value.',
    'present_with' => 'The  field must be present when :values is present.',
    'present_with_all' => 'The  field must be present when :values are present.',
    'prohibited' => 'The  field is prohibited.',
    'prohibited_if' => 'The  field is prohibited when :other is :value.',
    'prohibited_if_accepted' => 'The  field is prohibited when :other is accepted.',
    'prohibited_if_declined' => 'The  field is prohibited when :other is declined.',
    'prohibited_unless' => 'The  field is prohibited unless :other is in :values.',
    'prohibits' => 'The  field prohibits :other from being present.',
    'regex' => 'The  field format is invalid.',
    'required' => 'The  field is required.',
    'required_array_keys' => 'The  field must contain entries for: :values.',
    'required_if' => 'The  field is required when :other is :value.',
    'required_if_accepted' => 'The  field is required when :other is accepted.',
    'required_if_declined' => 'The  field is required when :other is declined.',
    'required_unless' => 'The  field is required unless :other is in :values.',
    'required_with' => 'The  field is required when :values is present.',
    'required_with_all' => 'The  field is required when :values are present.',
    'required_without' => 'The  field is required when :values is not present.',
    'required_without_all' => 'The  field is required when none of :values are present.',
    'same' => 'The  field must match :other.',
    'size' => [
        'array' => 'The  field must contain :size items.',
        'file' => 'The  field must be :size kilobytes.',
        'numeric' => 'The  field must be :size.',
        'string' => 'The  field must be :size characters.',
    ],
    'starts_with' => 'The  field must start with one of the following: :values.',
    'string' => 'The  field must be a string.',
    'timezone' => 'The  field must be a valid timezone.',
    'unique' => 'The  has already been taken.',
    'uploaded' => 'The  failed to upload.',
    'uppercase' => 'The  field must be uppercase.',
    'url' => 'The  field must be a valid URL.',
    'ulid' => 'The  field must be a valid ULID.',
    'uuid' => 'The  field must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
