<?php

return [
    'required' => ':attribute on pakollinen.',
    'numeric' => ':attribute tulee olla numero.',
    'max' => ['string' => ':attribute saa olla enintään :max merkkiä pitkä.',],
    'email' => ':attribute tulee olla sähköpostiosoite.',
    'regex' => ':attribute on virheellinen.',

    'attributes' => [
        'store.name' => 'Myymälän nimi',
        'store.city' => 'Kaupunki',
        'store.street_address' => 'Katuosoite',
        'store.zip_code' => 'Postinumero',
        'store.email' => 'Sähköposti',
        'store.phone' => 'Puhelinnumero',
        'store.open_hours' => 'Aukioloajat',
    ],
];
