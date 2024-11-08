<?php

return [
    "messages" => [
        "code_is_not_valid" => "Le code n'est pas valide",
        "customer_created" => "Le compte a été créé avec succès. Un e-mail sera envoyé lorsque le compte sera activé"
    ],

    "auth" => [
        "attributes" => [
            "username" => "Nom d'utilisateur",
            "password" => "Mot de passe",
            "pin_code" => "Code PIN",
            "name" => "Nom",
            "phone" => "Téléphone",
            "email" => "E-mail",
            "state_id" => "État",
            "city_id" => "Ville",
            "type_of_commerce" => "Type de commerce",
            "new_password" => "Nouveau mot de passe",
            "token" => "Jeton",
        ]
    ],

    "verifications" => [
        "attributes" => [
            "token" => "Jeton",
            "code" => "Code",
        ]
    ],

    "carts" => [
        "messages" => [
            "success_add_to_cart" => "Le produit a été ajouté au panier",
            "out_of_stock" => "Désolé, le produit est en rupture de stock.",
            "not_have_enough_quantity_in_stock" => "Désolé, nous n'avons que :stock en stock.",
            "one_or_more_product_is_out_of_stock" => "Désolé, un ou plusieurs produits sont en rupture de stock.",
            "one_or_more_product_doesn't_have_enough_stock" => "Désolé, un ou plusieurs produits n'ont pas assez de stock.",
            "your_cart_is_empty" => "Votre panier est vide",
            "shipping_address_is_required" => "L'adresse de livraison est requise"
        ],
        "attributes" => [
            "product_id" => "Produit",
            "qty" => "Quantité",
        ]
    ],

    "checkout" => [
        "attributes" => [
            "payment_method" => "Méthode de paiement",
            "product_id" => "Produit",
            "qty" => "Quantité",
            "phone_id" => "Numéro de téléphone",
            "amount" => "Montant",
            "company" => "Entreprise",
        ],
        "messages" => [
            "your_order_has_been_placed" => "Votre commande :orderId a été passée !",
            "sorry_product_does_not_have_enough_stock" => "Désolé, le produit n'a pas assez de stock.",
            "sorry_product_does_not_have_enough_stock_with_stock_count" => "Désolé, le produit n'a pas assez de stock. Il y a :count cartes en stock",
            "topup_has_been_filled" => "Le rechargement a été effectué"
        ]
    ],

    "customer_numbers" => [
        "phone_number" => "Numéro de téléphone",
        "attributes" => [
            "company" => "Entreprise",
            "phone" => "Numéro de téléphone",
        ]
    ],

    "users" => [
        "attributes" => [
            "new_password" => "Nouveau mot de passe",
            "current_password" => "Mot de passe actuel",
            "new_password_confirmation" => "Confirmer le nouveau mot de passe",
            "new_pin_code" => "Nouveau code PIN",
            "current_pin_code" => "Code PIN actuel",
            "new_pin_code_confirmation" => "Confirmer le nouveau code PIN",
            "invitation_code" => "Code d'invitation",
            "shipping_full_address" => "Adresse complète",
            "shipping_state_id" => "État",
            "shipping_city_id" => "Ville"
        ],
        "messages" => [
            "current_password_does_not_match" => "Le mot de passe actuel ne correspond pas",
            "current_pin_code_does_not_match" => "Le code PIN actuel ne correspond pas",
            "pin_code_updated" => "Votre code PIN a été mis à jour",
            "pin_code_setup" => "Votre code PIN a été configuré",
            "password_updated" => "Votre mot de passe a été mis à jour",
            "profile_updated" => "Votre profil a été mis à jour",
            "accepted_invitation" => "Invitation acceptée avec succès",
            "invalid_invitation_code" => "Code d'invitation invalide",
            "already_accepted_the_invitation" => "Invitation déjà acceptée",
            "not_allow_accept_invitation" => "Autorisation refusée pour accepter l'invitation",
            "shipping_address_updated" => "Votre adresse de livraison a été mise à jour"
        ]
    ],

    "tickets" => [
        "ticket" => "Ticket",
        "comment" => "Commentaire",
        "attributes" => [
            "subject" => "Sujet",
            "content" => "Contenu",
            "ticket_issue_id" => "Problème du ticket",
            "comment" => "Commentaire",
        ],
        "messages" => [
            "ticket_comment_has_been_sent" => "Le commentaire du ticket a été envoyé",
        ]
    ],

    "clients" => [
        "attributes" => [
            "client_id" => "Client",
            "amount" => "Montant",
        ],
        "messages" => [
            "ticket_comment_has_been_sent" => "L'argent a été envoyé à :name avec succès",
        ]
    ]
];

