<?php

return [
    "messages" => [
        "code_is_not_valid" => "Code is not valid",
        "customer_created" => "The account has been created successfully. An email will be sent when the account is activated"
    ],
    "auth" => [
        "attributes" => [
            "username" => "Username",
            "password" => "Password",
            "pin_code" => "Pin Code",
            "name" => "Name",
            "phone" => "Phone",
            "email" => "Email",
            "state_id" => "State",
            "city_id" => "City",
            "password" => "Password",
            "type_of_commerce" => "Type Of Commerce",
            "new_password" => "New Password",
            "token" => "Token",
        ]
    ],

    "verifications" => [
        "attributes" => [
            "token" => "Token",
            "code" => "Code",
        ]
    ],

    "carts" => [
        "messages" => [
            "success_add_to_cart" => "Product has been added to cart",
            'out_of_stock' => 'Sorry, the product is out of stock.',
            'not_have_enough_quantity_in_stock' => 'Sorry, we only have :stock in stock.',
            'one_or_more_product_is_out_of_stock' => 'Sorry, one or more product is out of stock.',
            'one_or_more_product_doesn\'t_have_enough_stock' => 'Sorry, one or more product doesn\'t have enough stock.',
            'your_cart_is_empty' => 'Your cart is empty',
            'shipping_address_is_required' => "Shipping Address is required"
        ],
        "attributes" => [
            "product_id" => "Product",
            "qty" => "Quantity",
        ]
    ],

    "checkout" => [
        "attributes" => [
            "payment_method" => "Payment Method",
            "product_id" => "Product",
            "qty" => "Quantity",
            "phone_id" => "Phone Number",
            "amount" => "Amount",
            "company" => "Company",
        ],
        "messages" => [
            "your_order_has_been_placed" => "Your order :orderId has been placed!",
            'sorry_product_does_not_have_enough_stock' => 'Sorry, product doesn\'t have enough stock.',
            'sorry_product_does_not_have_enough_stock_with_stock_count' => "Sorry, the product doesn't have enough stock. There are :count cards in stock",
            "topup_has_been_filled" => "Top-Up has been filled"
        ]
    ],

    "customer_numbers" => [
        "phone_number" => "Phone Number",
        "attributes" => [
            "company" => "Company",
            "phone" => "Phone Number",
        ]
    ],

    "users" => [
        "attributes" => [
            'new_password' => 'New Password',
            "current_password" => "Current Password",
            'new_password_confirmation' => 'Confirm new password',
            'new_pin_code' => 'New Pin Code',
            "current_pin_code" => "Current Pin Code",
            'new_pin_code_confirmation' => 'Confirm new pin code',
            'invitation_code' => "Invitation Code",
            "shipping_full_address" => "Full Address",
            "shipping_state_id" => "State",
            "shipping_city_id" => "City"
        ],
        "messages" => [
            "current_password_does_not_match" => "Current password does not match",
            "current_pin_code_does_not_match" => "Current pin code does not match",
            "pin_code_updated" => "Your pin code has been updated",
            "pin_code_setup" => "Your pin code has been setup",
            "password_updated" => "Your password has been updated",
            "profile_updated" => "Your profile has been updated",
            "accepted_invitation" => "Successfully accepted invitation",
            "invalid_invitation_code" => "Invalid invitation code",
            "already_accepted_the_invitation" => "Already accepted the invitation",
            "not_allow_accept_invitation" => "Not allowed to accept the invitation",
            "shipping_address_updated" => "Your shipping address has been updated"
        ]
    ],

    "tickets" => [
        "ticket" => "Ticket",
        "comment" => "Comment",
        "attributes" => [
            "subject" => "Subject",
            "content" => "Content",
            "ticket_issue_id" => "ticket issue",
            "comment" => "Comment",
        ],
        "messages" => [
            "ticket_comment_has_been_sent" => "Ticket comment has been sent",
        ]
    ],

    "clients" => [
        "attributes" => [
            "client_id" => "Client",
            "amount" => "Amount",
        ],
        "messages" => [
            "ticket_comment_has_been_sent" => "The money has been sent to :name successfully",
        ]
    ]
];
