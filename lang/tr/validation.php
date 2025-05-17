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

   'accepted' => ':attribute alanı kabul edilmelidir.',
'accepted_if' => ':other :value olduğunda :attribute alanı kabul edilmelidir.',
'active_url' => ':attribute alanı geçerli bir URL olmalıdır.',
'after' => ':attribute alanı :date tarihinden sonra olmalıdır.',
'after_or_equal' => ':attribute alanı :date tarihine eşit veya sonra olmalıdır.',
'alpha' => ':attribute alanı yalnızca harf içermelidir.',
'alpha_dash' => ':attribute alanı yalnızca harf, rakam, tire ve alt çizgi içermelidir.',
'alpha_num' => ':attribute alanı yalnızca harf ve rakam içermelidir.',
'array' => ':attribute alanı dizi olmalıdır.',
'ascii' => ':attribute alanı yalnızca tek bayt alfanümerik karakterler ve semboller içermelidir.',
'before' => ':attribute alanı :date tarihinden önce olmalıdır.',
'before_or_equal' => ':attribute alanı :date tarihine eşit veya önce olmalıdır.',
'between' => [
    'array' => ':attribute alanı en az :min, en fazla :max öğe içermelidir.',
    'file' => ':attribute alanı :min ile :max kilobayt arasında olmalıdır.',
    'numeric' => ':attribute alanı :min ile :max arasında olmalıdır.',
    'string' => ':attribute alanı :min ile :max karakter arasında olmalıdır.',
],
'boolean' => ':attribute alanı true veya false olmalıdır.',
'can' => ':attribute alanı yetkisiz bir değer içeriyor.',
'confirmed' => ':attribute doğrulaması eşleşmiyor.',
'current_password' => 'Parola yanlış.',
'date' => ':attribute alanı geçerli bir tarih olmalıdır.',
'date_equals' => ':attribute alanı :date tarihine eşit olmalıdır.',
'date_format' => ':attribute alanı :format biçimiyle eşleşmelidir.',
'decimal' => ':attribute alanı :decimal ondalık basamağa sahip olmalıdır.',
'declined' => ':attribute alanı reddedilmelidir.',
'declined_if' => ':other :value olduğunda :attribute alanı reddedilmelidir.',
'different' => ':attribute ve :other farklı olmalıdır.',
'digits' => ':attribute alanı :digits basamak olmalıdır.',
'digits_between' => ':attribute alanı :min ile :max basamak arasında olmalıdır.',
'dimensions' => ':attribute alanının görüntü boyutları geçersiz.',
'distinct' => ':attribute alanında yinelenen bir değer var.',
'doesnt_end_with' => ':attribute alanı şu değerlerle bitmemelidir: :values.',
'doesnt_start_with' => ':attribute alanı şu değerlerle başlamamalıdır: :values.',
'email' => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
'ends_with' => ':attribute alanı şu değerlerden biriyle bitmelidir: :values.',
'enum' => 'Seçilen :attribute geçersiz.',
'exists' => 'Seçilen :attribute geçersiz.',
'extensions' => ':attribute alanı şu uzantılardan birine sahip olmalıdır: :values.',
'file' => ':attribute alanı dosya olmalıdır.',
'filled' => ':attribute alanı dolu olmalıdır.',
'gt' => [
    'array' => ':attribute alanında :value öğeden fazla olmalıdır.',
    'file' => ':attribute alanı :value kilobayttan büyük olmalıdır.',
    'numeric' => ':attribute alanı :value değerinden büyük olmalıdır.',
    'string' => ':attribute alanı :value karakterden uzun olmalıdır.',
],
'gte' => [
    'array' => ':attribute alanında en az :value öğe olmalıdır.',
    'file' => ':attribute alanı :value kilobayta eşit veya büyük olmalıdır.',
    'numeric' => ':attribute alanı :value değerine eşit veya büyük olmalıdır.',
    'string' => ':attribute alanı :value karaktere eşit veya uzun olmalıdır.',
],
'hex_color' => ':attribute alanı geçerli bir onaltılık renk olmalıdır.',
'image' => ':attribute alanı resim olmalıdır.',
'in' => 'Seçilen :attribute geçersiz.',
'in_array' => ':attribute alanı :other içinde olmalıdır.',
'integer' => ':attribute alanı tam sayı olmalıdır.',
'ip' => ':attribute alanı geçerli bir IP adresi olmalıdır.',
'ipv4' => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
'ipv6' => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
'json' => ':attribute alanı geçerli bir JSON dizesi olmalıdır.',
'lowercase' => ':attribute alanı küçük harf olmalıdır.',
'lt' => [
    'array' => ':attribute alanında :value öğeden az olmalıdır.',
    'file' => ':attribute alanı :value kilobayttan küçük olmalıdır.',
    'numeric' => ':attribute alanı :value değerinden küçük olmalıdır.',
    'string' => ':attribute alanı :value karakterden kısa olmalıdır.',
],
'lte' => [
    'array' => ':attribute alanında en fazla :value öğe olmalıdır.',
    'file' => ':attribute alanı :value kilobayta eşit veya küçük olmalıdır.',
    'numeric' => ':attribute alanı :value değerine eşit veya küçük olmalıdır.',
    'string' => ':attribute alanı :value karaktere eşit veya kısa olmalıdır.',
],
'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
'max' => [
    'array' => ':attribute alanında en fazla :max öğe olmalıdır.',
    'file' => ':attribute alanı :max kilobayttan büyük olmamalıdır.',
    'numeric' => ':attribute alanı :max değerinden büyük olmamalıdır.',
    'string' => ':attribute alanı :max karakterden uzun olmamalıdır.',
],
'max_digits' => ':attribute alanı en fazla :max basamak içerebilir.',
'mimes' => ':attribute alanı şu türde dosya olmalıdır: :values.',
'mimetypes' => ':attribute alanı şu türde dosya olmalıdır: :values.',
'min' => [
    'array' => ':attribute alanında en az :min öğe olmalıdır.',
    'file' => ':attribute alanı en az :min kilobayt olmalıdır.',
    'numeric' => ':attribute alanı en az :min değerinde olmalıdır.',
    'string' => ':attribute alanı en az :min karakter olmalıdır.',
],
'min_digits' => ':attribute alanı en az :min basamak içermelidir.',
'missing' => ':attribute alanı eksik olmalıdır.',
'missing_if' => ':other :value olduğunda :attribute alanı eksik olmalıdır.',
'missing_unless' => ':other :value olmadıkça :attribute alanı eksik olmalıdır.',
'missing_with' => ':values var olduğunda :attribute alanı eksik olmalıdır.',
'missing_with_all' => ':values var olduğunda :attribute alanı eksik olmalıdır.',
'multiple_of' => ':attribute alanı :value katı olmalıdır.',
'not_in' => 'Seçilen :attribute geçersiz.',
'not_regex' => ':attribute alanı formatı geçersiz.',
'numeric' => ':attribute alanı sayı olmalıdır.',
'password' => [
    'letters' => ':attribute alanı en az bir harf içermelidir.',
    'mixed' => ':attribute alanı en az bir büyük ve bir küçük harf içermelidir.',
    'numbers' => ':attribute alanı en az bir rakam içermelidir.',
    'symbols' => ':attribute alanı en az bir sembol içermelidir.',
    'uncompromised' => 'Verilen :attribute veri sızıntısında görülmüştür. Lütfen farklı bir :attribute seçin.',
],
'present' => ':attribute alanı mevcut olmalıdır.',
'present_if' => ':other :value olduğunda :attribute alanı mevcut olmalıdır.',
'present_unless' => ':other :value olmadıkça :attribute alanı mevcut olmalıdır.',
'present_with' => ':values var olduğunda :attribute alanı mevcut olmalıdır.',
'present_with_all' => ':values var olduğunda :attribute alanı mevcut olmalıdır.',
'prohibited' => ':attribute alanı yasaktır.',
'prohibited_if' => ':other :value olduğunda :attribute alanı yasaktır.',
'prohibited_unless' => ':other :values içinde olmadıkça :attribute alanı yasaktır.',
'prohibits' => ':attribute alanı :other alanının mevcut olmasını engeller.',
'regex' => ':attribute alanı formatı geçersiz.',
'required' => ':attribute alanı zorunludur.',
'required_array_keys' => ':attribute alanı şu girdeleri içermelidir: :values.',
'required_if' => ':other :value olduğunda :attribute alanı zorunludur.',
'required_if_accepted' => ':other kabul edildiğinde :attribute alanı zorunludur.',
'required_unless' => ':other :values içinde olmadıkça :attribute alanı zorunludur.',
'required_with' => ':values var olduğunda :attribute alanı zorunludur.',
'required_with_all' => ':values var olduğunda :attribute alanı zorunludur.',
'required_without' => ':values yokken :attribute alanı zorunludur.',
'required_without_all' => ':values hiçbiri yokken :attribute alanı zorunludur.',
'same' => ':attribute ve :other eşleşmelidir.',
'size' => [
    'array' => ':attribute alanı :size öğe içermelidir.',
    'file' => ':attribute alanı :size kilobayt olmalıdır.',
    'numeric' => ':attribute alanı :size olmalıdır.',
    'string' => ':attribute alanı :size karakter olmalıdır.',
],
'starts_with' => ':attribute alanı şu değerlerden biriyle başlamalıdır: :values.',
'string' => ':attribute alanı metin olmalıdır.',
'timezone' => ':attribute alanı geçerli bir zaman dilimi olmalıdır.',
'unique' => ':attribute daha önce alınmış.',
'uploaded' => ':attribute yüklenemedi.',
'uppercase' => ':attribute alanı büyük harf olmalıdır.',
'url' => ':attribute alanı geçerli bir URL olmalıdır.',
'ulid' => ':attribute alanı geçerli bir ULID olmalıdır.',
'uuid' => ':attribute alanı geçerli bir UUID olmalıdır.',


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
'rule-name' => 'özel-mesaj',
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
