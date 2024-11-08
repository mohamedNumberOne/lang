<?php 

return [
    "messages" => [
        "code_is_not_valid" => "الرمز غير صالح",
        "customer_created" => "تم إنشاء الحساب بنجاح. سيتم إرسال بريد إلكتروني عند تفعيل الحساب"
    ],
    "auth" => [
        "attributes" => [
            "username" => "اسم المستخدم",
            "password" => "كلمة المرور",
            "pin_code" => "رمز التعريف الشخصي",
            "name" => "الاسم",
            "phone" => "الهاتف",
            "email" => "البريد الإلكتروني",
            "state_id" => "الولاية",
            "city_id" => "المدينة",
            "password" => "كلمة المرور",
            "type_of_commerce" => "نوع التجارة",
            "new_password" => "كلمة المرور الجديدة",
            "token" => "الرمز",
        ]
    ],

    "verifications" => [
        "attributes" => [
            "token" => "الرمز",
            "code" => "الرمز",
        ]
    ],

    "carts" => [
        "messages" => [
            "success_add_to_cart" => "تم إضافة المنتج إلى السلة",
            'out_of_stock' => 'عذراً، المنتج غير متوفر في المخزون.',
            'not_have_enough_quantity_in_stock' => 'عذراً، لدينا فقط :stock في المخزون.',
            'one_or_more_product_is_out_of_stock' => 'عذراً، واحد أو أكثر من المنتجات غير متوفرة في المخزون.',
            'one_or_more_product_doesn\'t_have_enough_stock' => 'عذراً، واحد أو أكثر من المنتجات ليس لديهم مخزون كافٍ.',
            'your_cart_is_empty' => 'سلتك فارغة',
            'shipping_address_is_required' => "عنوان الشحن مطلوب"
        ],
        "attributes" => [
            "product_id" => "المنتج",
            "qty" => "الكمية",
        ]
    ],

    "checkout" => [
        "attributes" => [
            "payment_method" => "طريقة الدفع",
            "product_id" => "المنتج",
            "qty" => "الكمية",
            "phone_id" => "رقم الهاتف",
            "amount" => "المبلغ",
            "company" => "الشركة",
        ],
        "messages" => [
            "your_order_has_been_placed" => "تم تقديم طلبك :orderId!",
            'sorry_product_does_not_have_enough_stock' => 'عذراً، المنتج ليس لديه مخزون كافٍ.',
            'sorry_product_does_not_have_enough_stock_with_stock_count' => "عذراً، المنتج ليس لديه مخزون كافٍ. يوجد :count في المخزون",
            "topup_has_been_filled" => "تم تعبئة الرصيد"
        ]
    ],

    "customer_numbers" => [
        "phone_number" => "رقم الهاتف",
        "attributes" => [
            "company" => "الشركة",
            "phone" => "رقم الهاتف",
        ]
    ],

    "users" => [
        "attributes" => [
            'new_password' => 'كلمة المرور الجديدة',
            "current_password" => "كلمة المرور الحالية",
            'new_password_confirmation' => 'تأكيد كلمة المرور الجديدة',
            'new_pin_code' => 'رمز التعريف الشخصي الجديد',
            "current_pin_code" => "رمز التعريف الشخصي الحالي",
            'new_pin_code_confirmation' => 'تأكيد رمز التعريف الشخصي الجديد',
            'invitation_code' => "رمز الدعوة",
            "shipping_full_address" => "العنوان الكامل",
            "shipping_state_id" => "الولاية",
            "shipping_city_id" => "المدينة"
        ],
        "messages" => [
            "current_password_does_not_match" => "كلمة المرور الحالية غير صحيحة",
            "current_pin_code_does_not_match" => "رمز التعريف الشخصي الحالي غير صحيح",
            "pin_code_updated" => "تم تحديث رمز التعريف الشخصي",
            "pin_code_setup" => "تم إعداد رمز التعريف الشخصي",
            "password_updated" => "تم تحديث كلمة المرور",
            "profile_updated" => "تم تحديث الملف الشخصي",
            "accepted_invitation" => "تم قبول الدعوة بنجاح",
            "invalid_invitation_code" => "رمز الدعوة غير صالح",
            "already_accepted_the_invitation" => "تم قبول الدعوة بالفعل",
            "not_allow_accept_invitation" => "لا يُسمح بقبول الدعوة",
            "shipping_address_updated" => "تم تحديث عنوان الشحن"
        ]
    ],

    "tickets" => [
        "ticket" => "تذكرة",
        "comment" => "تعليق",
        "attributes" => [
            "subject" => "الموضوع",
            "content" => "المحتوى",
            "ticket_issue_id" => "مشكلة التذكرة",
            "comment" => "تعليق",
        ],
        "messages" => [
            "ticket_comment_has_been_sent" => "تم إرسال تعليق التذكرة",
        ]
    ],

    "clients" => [
        "attributes" => [
            "client_id" => "العميل",
            "amount" => "المبلغ",
        ],
        "messages" => [
            "ticket_comment_has_been_sent" => "تم إرسال المال إلى :name بنجاح",
        ]
    ]
];
