<?php

return [

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

    'accepted'             => 'يجب قبول حقل :attribute',
    'active_url'           => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',
    'after'                => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array'                => 'يجب أن يكون حقل :attribute ًمصفوفة',
    'before'               => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',
    ],
    'boolean'              => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date'                 => 'حقل :attribute ليس تاريخًا صحيحًا',
    'date_format'          => 'لا يتوافق حقل :attribute مع الشكل :format.',
    'different'            => 'يجب أن يكون حقلان :attribute و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',
    'digits_between'       => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists'               => 'حقل :attribute لاغٍ',
    'filled'               => 'حقل :attribute إجباري',
    'image'                => 'يجب أن يكون حقل :attribute صورةً',
    'in'                   => 'حقل :attribute لاغٍ',
    'integer'              => 'يجب أن يكون حقل :attribute عددًا صحيحًا',
    'ip'                   => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',
    'json'                 => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                => 'يجب أن يكون حقل ملفًا من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',
        'string'  => 'يجب أن تكون :attribute أكبر :min خانات',
        'array'   => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in'               => 'حقل :attribute لاغٍ',
    'numeric'              => 'يجب على حقل :attribute أن يكون رقمًا',
    'regex'                => 'صيغة حقل :attribute .غير صحيحة',
    'required'             => 'حقل :attribute مطلوب.',
    'required_if'          => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => 'حقل :attribute إذا توفّر :values.',
    'required_with_all'    => 'حقل :attribute إذا توفّر :values.',
    'required_without'     => 'حقل :attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => 'حقل :attribute مطلوب إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق حقل :attribute مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',
        'string'  => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',
        'array'   => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',
    ],
    'string'               => 'يجب أن يكون حقل :attribute نصآ.',
    'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique'               => 'قيمة حقل :attribute مُستخدمة من قبل',
    'url'                  => 'صيغة الرابط :attribute غير صحيحة',
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
    'ar'    => 'حقل :attribute يجب ان يكون باللغة العربية',
    'en'    => 'حقل :attribute يجب ان يكون باللغة الانجليزية',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'required_programs.*' =>[ 'required' => 'يجب مل حقل البرامج المطلوبة',]
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

    'attributes'           => [
        'name'                  => 'الاسم',
        'name_en'                  => 'الاسم باللغة الانجليزية',
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'email_confirmation'    => 'تأكيد البريد الالكتروني',
        //ar
        'first_name'            => 'الاسم',
        'second_name'           => 'اسم الأب',
        'third_name'            => 'اسم الجد',
        'last_name'             => 'اسم العائلة',
        //en
        'first_name_en'         => 'الاسم الانجليزي',
        'second_name_en'        => 'اسم الأب الانجليزي',
        'third_name_en'         => 'اسم الجد الانجليزي',
        'last_name_en'          => 'اسم العائلة الانجليزي',
        'password'              => 'كلمة السر',
        'password_confirmation' => 'تأكيد كلمة السر',
        'new_password'          => ' كلمة السر الجديدة',
        'new_password_confirmation' => 'تأكيد كلمة السر الجديدة',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'birthday'              => 'تاريخ الميلاد',
        'gender'                => 'الجنس',
        'type'                  => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'title'                 => 'العنوان',
        'text'                  => 'النص',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
        'national_id'           => 'السجل المدني',
        'identity'              => 'الهوية الوطنية',
        'national_id_photo'     => 'صورة السجل المدني',
        'home_phone'            => 'رقم الهاتف',
        'mobile_no'             => 'رقم الجوال',
        'certificate_contry'    => 'دولة الشهادة',
        'certificate'           => 'الشهادة',
        'school_name'           => 'اسم المدرسة',
        'department'            => 'القسم',
        'graduation_year'       => 'سنة التخرج',
        'gba'                   => 'المعدل',
        'gat'                   => 'إختبار القدرات',
        'saat'                  => 'إختبار التحصيلي',
        'emergency_name'        => 'الاسم الكامل لشخص الطوارئ',
        'emergency_relation'    => 'صلة القرابة لشخص الطوارئ',
        'phone_number'          => 'رقم الهاتف',
        'emergency_phone'       => 'رقم هاتف شخص الطوارئ',
        'emergency_mobile'      => 'رقم الجوال',
        'GPA'                   => 'المعدل',
        'major_type'            => 'نوع الؤهل',
        'education_level_id'    => 'الدرجة العلمية',
        'department_id'         => 'التخصص',
        'certificate_country_id'=> 'دولة الدراسة',
        'graduate_from_id'      => 'متخرج من',

        //labs evaliuation
        'step_one'                  => 'الخطوة الاولى',
        'step_two'                  => 'الخطوة الثانية',
        'step_three'                => 'الخطوة الثالثة',
        
        'location'                  => 'اسم الجهة',
        'lab_admin'                 => 'مسؤول / مشرف المعمل',
        'lab_number'                => 'رقم المعمل #',
        'room_number'               => 'رقم القاعة #',
        'space'                     => 'المساحة (تقريبا)',
        'ground_type'               => 'نوع الأرضية',
        'network_tools'             => '&nbsp; توفر كبينة لمعدات الشبكة',
        'server_type'               => 'الخادم ونوعه (ان وجد)',
        'switch_type'               => 'switch ونوعه (ان وجد)',
        'patch_panel_type'          => 'Patch Panel ونوعه (ان وجد)',
        'projector_type'            => 'البروجيكتور  ونوعه (ان وجد)',
        
        'table_count'               => 'عدد الطاولات',
        'computer_count'            => 'عدد أجهزة الحاسب',
        'type_and_model'            => 'النوع و الموديل',
        'ram_size'                  => 'حجم الذاكرة RAM',
        'keyboard_count'            => 'عدد لوحات المفاتيح',
        'mouse_count'               => 'عدد الفأرات (ماوس)',
        'screen_count'              => 'عدد الشاشات',
        'network_cable_count'       => 'عدد كوابل الشبكة',
        'network_point_count'       => 'عدد نقاط الشبكة',
        'electricity_point_count'   => 'عدد نقاط الكهرباء',
        'os_type'                   => 'نظام التشغيل OS',

        'required_programs'         => 'البرامج المطلوبة',
        'note'                      => 'اية نواقص أو ملاحظات',
        'super_phone'               => 'رقم هاتف المشرف',
        'super_email'               => 'بريد الكتروني المشرف',
        'ms'                        => 'الرسالة',
        'management'                => 'الإدارة',
        'no_treatment'              => 'رقم المعاملة',
        'treatment_date'            => 'تاريخ المعاملة',
        'app_name'                  => 'اسم البرنامج',
        'request_reason'            => 'مبرر الطلب',
        'employee_id'               => 'الرقم الوظيفي',

    ],

    'captcha' => 'رمز التحقق المدخل غير صحيح',
];
