<?php

return [
    'acl' => [
        'leads'           => 'Ügyfelek',
        'lead'            => 'Ügyfél',
        'quotes'          => 'Árajánlatok',
        'mail'            => 'Levelek',
        'inbox'           => 'Beérkezett üzenetek',
        'draft'           => 'Piszkozat',
        'outbox'          => 'Kimenő',
        'sent'            => 'Elküldött',
        'trash'           => 'Szemét',
        'activities'      => 'Tevékenységek',
        'webhook'         => 'Webhook',
        'contacts'        => 'Kapcsolatok',
        'persons'         => 'Személyek',
        'organizations'   => 'Szervezetek',
        'products'        => 'Termékek',
        'settings'        => 'Beállítások',
        'groups'          => 'Csoportok',
        'roles'           => 'Szerepek',
        'users'           => 'Felhasználók',
        'user'            => 'Felhasználó',
        'automation'      => 'Automatizálás',
        'attributes'      => 'Attribútumok',
        'pipelines'       => 'Csővezetékek',
        'sources'         => 'Források',
        'types'           => 'Típusok',
        'email-templates' => 'E-mail sablonok',
        'workflows'       => 'Munkafolyamatok',
        'other-settings'  => 'Egyéb beállítások',
        'tags'            => 'Címkék',
        'configuration'   => 'Konfiguráció',
        'create'          => 'Létrehozás',
        'edit'            => 'Szerkesztés',
        'view'            => 'Megtekintés',
        'print'           => 'Nyomtatás',
        'delete'          => 'Törlés',
        'export'          => 'Exportálás',
        'mass-delete'     => 'Tömeges törlés',
    ],

    'users' => [
        'activate-warning' => 'Az Ön fiókja még nincs aktiválva. Kérjük, vegye fel a kapcsolatot az adminisztrátorral.',
        'login-error'      => 'A megadott hitelesítő adatok nem egyeznek az adatbázisunkkal.',
    
        'login' => [
            'email'                => 'Email cím',
            'forget-password-link' => 'Elfelejtett jelszó?',
            'password'             => 'Jelszó',
            'submit-btn'           => 'Bejelentkezés',
            'title'                => 'Bejelentkezés',
        ],
    
        'forget-password' => [
            'create' => [
                'email'           => 'Regisztrált email',
                'email-not-exist' => 'Az email nem létezik',
                'page-title'      => 'Elfelejtett jelszó',
                'reset-link-sent' => 'Jelszó-visszaállító link elküldve',
                'sign-in-link'    => 'Vissza a bejelentkezéshez?',
                'submit-btn'      => 'Visszaállítás',
                'title'           => 'Jelszó helyreállítása',
            ],
        ],
    
        'reset-password' => [
            'back-link-title'  => 'Vissza a bejelentkezéshez?',
            'confirm-password' => 'Jelszó megerősítése',
            'email'            => 'Regisztrált email',
            'password'         => 'Jelszó',
            'submit-btn'       => 'Jelszó visszaállítása',
            'title'            => 'Jelszó visszaállítása',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'Vissza',
            'change-password'   => 'Jelszó módosítása',
            'confirm-password'  => 'Jelszó megerősítése',
            'current-password'  => 'Jelenlegi jelszó',
            'email'             => 'Email',
            'general'           => 'Általános',
            'invalid-password'  => 'A megadott jelenlegi jelszó helytelen.',
            'name'              => 'Név',
            'password'          => 'Jelszó',
            'profile-image'     => 'Profilkép',
            'save-btn'          => 'Fiók mentése',
            'title'             => 'Saját fiókom',
            'update-success'    => 'Fiók sikeresen frissítve',
            'upload-image-info' => 'Töltsön fel egy profilképet (110px X 110px) PNG vagy JPG formátumban',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'Levelezés',
                    'title'        => 'Levél írása',
                    'to'           => 'Címzett',
                    'enter-emails' => 'Nyomd meg az Entert, hogy hozzáadj email címeket',
                    'cc'           => 'Másolat (CC)',
                    'bcc'          => 'Rejtett másolat (BCC)',
                    'subject'      => 'Tárgy',
                    'send-btn'     => 'Küldés',
                    'message'      => 'Üzenet',
                ],
        
                'file' => [
                    'btn'           => 'Fájl',
                    'title'         => 'Fájl hozzáadása',
                    'title-control' => 'Cím',
                    'name'          => 'Név',
                    'description'   => 'Leírás',
                    'file'          => 'Fájl',
                    'save-btn'      => 'Fájl mentése',
                ],
        
                'note' => [
                    'btn'      => 'Jegyzet',
                    'title'    => 'Jegyzet hozzáadása',
                    'comment'  => 'Megjegyzés',
                    'save-btn' => 'Jegyzet mentése',
                ],
        
                'activity' => [
                    'btn'           => 'Tevékenység',
                    'title'         => 'Tevékenység hozzáadása',
                    'title-control' => 'Cím',
                    'description'   => 'Leírás',
                    'schedule-from' => 'Ütemezés kezdete',
                    'schedule-to'   => 'Ütemezés vége',
                    'location'      => 'Helyszín',
                    'call'          => 'Hívás',
                    'meeting'       => 'Találkozó',
                    'lunch'         => 'Ebéd',
                    'save-btn'      => 'Tevékenység mentése',
        
                    'participants' => [
                        'title'       => 'Résztvevők',
                        'placeholder' => 'Résztvevők keresése',
                        'users'       => 'Felhasználók',
                        'persons'     => 'Személyek',
                        'no-results'  => 'Nincs találat...',
                    ],
                ],
            ],
        
            'index' => [
                'from'         => 'Feladó',
                'to'           => 'Címzett',
                'cc'           => 'CC',
                'bcc'          => 'BCC',
                'all'          => 'Összes',
                'planned'      => 'Tervezett',
                'calls'        => 'Hívások',
                'meetings'     => 'Találkozók',
                'lunches'      => 'Ebéd',
                'files'        => 'Fájlok',
                'quotes'       => 'Idézetek',
                'notes'        => 'Jegyzetek',
                'emails'       => 'E-mailek',
                'change-log'   => 'Változásnaplók',
                'by-user'      => 'Felhasználó által: :user',
                'scheduled-on' => 'Ütemezve ekkor',
                'location'     => 'Helyszín',
                'participants' => 'Résztvevők',
                'mark-as-done' => 'Jelölés elvégzettként',
                'delete'       => 'Törlés',
                'edit'         => 'Szerkesztés',
                'view'         => 'Megtekintés',
                'unlink'       => 'Kapcsolat megszakítása',
                'empty'        => 'Üres',
        
                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'Nincs tevékenység',
                        'description' => 'Nincsenek tevékenységek. Tevékenységeket a bal oldali panel gombjára kattintva adhatsz hozzá.',
                    ],
        
                    'planned' => [
                        'title'       => 'Nincs tervezett tevékenység',
                        'description' => 'Nincsenek tervezett tevékenységek. Tevékenységeket a bal oldali panel gombjára kattintva adhatsz hozzá.',
                    ],
        
                    'notes' => [
                        'title'       => 'Nincs jegyzet',
                        'description' => 'Nincsenek jegyzetek. Jegyzeteket a bal oldali panel gombjára kattintva adhatsz hozzá.',
                    ],
        
                    'calls' => [
                        'title'       => 'Nincs hívás',
                        'description' => 'Nincsenek hívások. Hívásokat a bal oldali panel gombjára kattintva adhatsz hozzá.',
                    ],
        
                    'meetings' => [
                        'title'       => 'Nincs találkozó',
                        'description' => 'Nincsenek találkozók. Találkozókat a bal oldali panel gombjára kattintva adhatsz hozzá.',
                    ],
        
                    'lunches' => [
                        'title'       => 'Nincs ebéd',
                        'description' => 'Nincsenek ebédek. Ebédet a bal oldali panel gombjára kattintva adhatsz hozzá.',
                    ],
        
                    'files' => [
                        'title'       => 'Nincs fájl',
                        'description' => 'Nincsenek fájlok. Fájlokat a bal oldali panel gombjára kattintva adhatsz hozzá.',
                    ],
        
                    'emails' => [
                        'title'       => 'Nincs email',
                        'description' => 'Nincsenek emailek. E-mailt a bal oldali panel gombjára kattintva adhatsz hozzá.',
                    ],
        
                    'system' => [
                        'title'       => 'Nincs változásnapló',
                        'description' => 'Nincsenek változásnaplók.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'Kép hozzáadása',
                'ai-add-image-btn'  => 'Varázslatos AI',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'Csak képfájlok (.jpeg, .jpg, .png) engedélyezettek.',
        
                'placeholders' => [
                    'front'     => 'Előnézet',
                    'next'      => 'Következő',
                    'size'      => 'Méret',
                    'use-cases' => 'Használati esetek',
                    'zoom'      => 'Zoom',
                ],
            ],
        
            'videos' => [
                'add-video-btn'     => 'Videó hozzáadása',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'Csak videófájlok (.mp4, .mov, .ogg) engedélyezettek.',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'Nincsenek kijelölt rekordok.',
                'must-select-a-mass-action-option' => 'Ki kell választani egy tömeges művelet lehetőséget.',
                'must-select-a-mass-action'        => 'Ki kell választani egy tömeges műveletet.',
            ],
        
            'toolbar' => [
                'length-of' => ':length of',
                'of'        => 'ból/ből',
                'per-page'  => 'Oldalonként',
                'results'   => ':total Eredmény',
                'delete'    => 'Törlés',
                'selected'  => ':total Kiválasztott elem',
        
                'mass-actions' => [
                    'submit'        => 'Küldés',
                    'select-option' => 'Válassz lehetőséget',
                    'select-action' => 'Válassz műveletet',
                ],
        
                'filter' => [
                    'apply-filters-btn' => 'Szűrők alkalmazása',
                    'back-btn'          => 'Vissza',
                    'create-new-filter' => 'Új szűrő létrehozása',
                    'custom-filters'    => 'Egyéni szűrők',
                    'delete-error'      => 'Hiba történt a szűrő törlése közben, kérjük próbálja újra.',
                    'delete-success'    => 'A szűrő sikeresen törölve lett.',
                    'empty-description' => 'Nincsenek kiválasztott szűrők, amelyeket elmenthetne. Kérjük, válasszon ki szűrőket a mentéshez.',
                    'empty-title'       => 'Szűrők hozzáadása a mentéshez',
                    'name'              => 'Név',
                    'quick-filters'     => 'Gyors szűrők',
                    'save-btn'          => 'Mentés',
                    'save-filter'       => 'Szűrő mentése',
                    'saved-success'     => 'A szűrő sikeresen mentve lett.',
                    'selected-filters'  => 'Kiválasztott szűrők',
                    'title'             => 'Szűrő',
                    'update'            => 'Frissítés',
                    'update-filter'     => 'Szűrő frissítése',
                    'updated-success'   => 'A szűrő sikeresen frissítve lett.',
                ],
        
                'search' => [
                    'title' => 'Keresés',
                ],
            ],
        
            'filters' => [
                'select' => 'Válassz',
                'title'  => 'Szűrők',
        
                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'Írj be legalább 2 karaktert...',
                        'no-results'         => 'Nincs találat...',
                    ],
                ],
        
                'custom-filters' => [
                    'clear-all' => 'Összes törlése',
                    'title'     => 'Egyéni szűrők',
                ],
        
                'boolean-options' => [
                    'false' => 'Hamis',
                    'true'  => 'Igaz',
                ],
        
                'date-options' => [
                    'last-month'        => 'Elmúlt hónap',
                    'last-six-months'   => 'Elmúlt 6 hónap',
                    'last-three-months' => 'Elmúlt 3 hónap',
                    'this-month'        => 'Ez a hónap',
                    'this-week'         => 'Ez a hét',
                    'this-year'         => 'Ez az év',
                    'today'             => 'Ma',
                    'yesterday'         => 'Tegnap',
                ],
            ],
        
            'table' => [
                'actions'              => 'Műveletek',
                'no-records-available' => 'Nincsenek elérhető rekordok.',
            ],
        ],

        [
            'modal' => [
                'confirm' => [
                    'agree-btn'    => 'Elfogadom',
                    'disagree-btn' => 'Elutasítom',
                    'message'      => 'Biztos benne, hogy végre szeretné hajtani ezt a műveletet?',
                    'title'        => 'Biztosan?',
                ],
            ],
        
            'tags' => [
                'index' => [
                    'title'          => 'Címkék',
                    'added-tags'     => 'Hozzáadott címkék',
                    'save-btn'       => 'Címke mentése',
                    'placeholder'    => 'Írj be címkéket a kereséshez',
                    'add-tag'        => 'Hozzáadás \":term\"...',
                    'aquarelle-red'  => 'Aquarelle Vörös',
                    'crushed-cashew' => 'Törött Kesudió',
                    'beeswax'        => 'Méhviasz',
                    'lemon-chiffon'  => 'Citromsárga Chiffon',
                    'snow-flurry'    => 'Hószállingózás',
                    'honeydew'       => 'Mézharmat',
                ],
            ],
        ],

        [
            'layouts' => [
                'header' => [
                    'mega-search' => [
                        'title'   => 'Keresés',
        
                        'tabs' => [
                            'leads'    => 'Leads',
                            'quotes'   => 'Ajánlatok',
                            'persons'  => 'Személyek',
                            'products' => 'Termékek',
                        ],
        
                        'explore-all-products'          => 'Összes termék felfedezése',
                        'explore-all-leads'             => 'Összes lead felfedezése',
                        'explore-all-contacts'          => 'Összes kapcsolat felfedezése',
                        'explore-all-quotes'            => 'Összes ajánlat felfedezése',
                        'explore-all-matching-products' => 'Összes termék felfedezése, amely megfelel ":query" (:count)',
                        'explore-all-matching-leads'    => 'Összes lead felfedezése, amely megfelel ":query" (:count)',
                        'explore-all-matching-contacts' => 'Összes kapcsolat felfedezése, amely megfelel ":query" (:count)',
                        'explore-all-matching-quotes'   => 'Összes ajánlat felfedezése, amely megfelel ":query" (:count)',
                    ],
                ],
            ],
        
            'attributes' => [
                'lookup' => [
                    'click-to-add'    => 'Kattintson a hozzáadáshoz',
                    'search'          => 'Keresés',
                    'no-result-found' => 'Nincs találat',
                ],
            ],
        
            'lookup' => [
                'click-to-add' => 'Kattintson a hozzáadáshoz',
                'no-results'   => 'Nincs találat',
                'add-as-new'   => 'Hozzáadás újként',
                'search'       => 'Keresés...',
            ],
        
            'flash-group' => [
                'success' => 'Siker',
                'error'   => 'Hiba',
                'warning' => 'Figyelmeztetés',
                'info'    => 'Info',
            ],
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'Ajánlatok',
            'create-btn'     => 'Ajánlat létrehozása',
            'create-success' => 'Az ajánlat sikeresen létrehozva.',
            'update-success' => 'Az ajánlat sikeresen frissítve.',
            'delete-success' => 'Az ajánlat sikeresen törölve.',
            'delete-failed'  => 'Az ajánlatot nem lehet törölni.',
        
            'datagrid' => [
                'subject'        => 'Tárgy',
                'sales-person'   => 'Értékesítő',
                'expired-at'     => 'Lejárat dátuma',
                'created-at'     => 'Létrehozva',
                'expired-quotes' => 'Lejárt ajánlat',
                'person'         => 'Személy',
                'subtotal'       => 'Részösszeg',
                'discount'       => 'Kedvezmény',
                'tax'            => 'Adó',
                'adjustment'     => 'Korrigálás',
                'grand-total'    => 'Végösszeg',
                'edit'           => 'Szerkesztés',
                'delete'         => 'Törlés',
                'print'          => 'Nyomtatás',
            ],
        
            'pdf' => [
                'title'            => 'Ajánlat',
                'grand-total'      => 'Végösszeg',
                'adjustment'       => 'Korrigálás',
                'discount'         => 'Kedvezmény',
                'tax'              => 'Adó',
                'sub-total'        => 'Részösszeg',
                'amount'           => 'Összeg',
                'quantity'         => 'Mennyiség',
                'price'            => 'Ár',
                'product-name'     => 'Termék neve',
                'sku'              => 'SKU',
                'shipping-address' => 'Szállítási cím',
                'billing-address'  => 'Számlázási cím',
                'expired-at'       => 'Lejárat dátuma',
                'sales-person'     => 'Értékesítő',
                'date'             => 'Dátum',
                'quote-id'         => 'Ajánlat ID',
            ],
        ],

        'create' => [
            'create' => [
                'title'             => 'Ajánlat Létrehozása',
                'save-btn'          => 'Ajánlat Mentése',
                'quote-info'        => 'Ajánlat Információk',
                'quote-info-info'   => 'Add meg az ajánlat alapvető információit.',
                'address-info'      => 'Cím Információk',
                'address-info-info' => 'Információk az ajánlathoz kapcsolódó címről.',
                'quote-items'       => 'Ajánlat Tételek',
                'search-products'   => 'Termékek Keresése',
                'link-to-lead'      => 'Kapcsolódás a leadhez',
                'quote-item-info'   => 'Add hozzá a termékek kérését ehhez az ajánlathoz.',
                'quote-name'        => 'Ajánlat Neve',
                'quantity'          => 'Mennyiség',
                'price'             => 'Ár',
                'discount'          => 'Kedvezmény',
                'tax'               => 'Adó',
                'total'             => 'Összesen',
                'amount'            => 'Összeg',
                'add-item'          => '+ Tétel Hozzáadása',
                'sub-total'         => 'Részösszeg (:symbol)',
                'total-discount'    => 'Kedvezmény (:symbol)',
                'total-tax'         => 'Adó (:symbol)',
                'total-adjustment'  => 'Korrigálás (:symbol)',
                'grand-total'       => 'Végösszeg (:symbol)',
                'discount-amount'   => 'Kedvezmény Összeg',
                'tax-amount'        => 'Adó Összeg',
                'adjustment-amount' => 'Korrigálás Összeg',
                'product-name'      => 'Termék Neve',
                'action'            => 'Művelet',
            ],
        
            'edit' => [
                'title'             => 'Ajánlat Szerkesztése',
                'save-btn'          => 'Ajánlat Mentése',
                'quote-info'        => 'Ajánlat Információk',
                'quote-info-info'   => 'Add meg az ajánlat alapvető információit.',
                'address-info'      => 'Cím Információk',
                'address-info-info' => 'Információk az ajánlathoz kapcsolódó címről.',
                'quote-items'       => 'Ajánlat Tételek',
                'link-to-lead'      => 'Kapcsolódás a leadhez',
                'quote-item-info'   => 'Add hozzá a termékek kérését ehhez az ajánlathoz.',
                'quote-name'        => 'Ajánlat Neve',
                'quantity'          => 'Mennyiség',
                'price'             => 'Ár',
                'search-products'   => 'Termékek Keresése',
                'discount'          => 'Kedvezmény',
                'tax'               => 'Adó',
                'total'             => 'Összesen',
                'amount'            => 'Összeg',
                'add-item'          => '+ Tétel Hozzáadása',
                'sub-total'         => 'Részösszeg (:symbol)',
                'total-discount'    => 'Kedvezmény (:symbol)',
                'total-tax'         => 'Adó (:symbol)',
                'total-adjustment'  => 'Korrigálás (:symbol)',
                'grand-total'       => 'Végösszeg (:symbol)',
                'discount-amount'   => 'Kedvezmény Összeg',
                'tax-amount'        => 'Adó Összeg',
                'adjustment-amount' => 'Korrigálás Összeg',
                'product-name'      => 'Termék Neve',
                'action'            => 'Művelet',
            ],
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'Személyek',
                'create-btn'     => 'Személy Létrehozása',
                'create-success' => 'Személy sikeresen létrehozva.',
                'update-success' => 'Személy sikeresen frissítve.',
                'delete-success' => 'Személy sikeresen törölve.',
                'delete-failed'  => 'Személy nem törölhető.',
        
                'datagrid' => [
                    'contact-numbers'   => 'Kapcsolati Számok',
                    'delete'            => 'Törlés',
                    'edit'              => 'Szerkesztés',
                    'emails'            => 'E-mailek',
                    'id'                => 'ID',
                    'view'              => 'Megtekintés',
                    'name'              => 'Név',
                    'organization-name' => 'Szervezet Neve',
                ],
            ],
        
            'view' => [
                'title'        => ':name',
                'about-person' => 'A Személyről',
        
                'activities' => [
                    'index' => [
                        'all'          => 'Minden',
                        'calls'        => 'Hívások',
                        'meetings'     => 'Találkozók',
                        'lunches'      => 'Ebédelés',
                        'files'        => 'Fájlok',
                        'quotes'       => 'Ajánlatok',
                        'notes'        => 'Jegyzetek',
                        'emails'       => 'E-mailek',
                        'by-user'      => ':user által',
                        'scheduled-on' => 'Ütemezve:',
                        'location'     => 'Helyszín',
                        'participants' => 'Résztvevők',
                        'mark-as-done' => 'Késznek jelölés',
                        'delete'       => 'Törlés',
                        'edit'         => 'Szerkesztés',
                    ],
        
                    'actions' => [
                        'mail' => [
                            'btn'      => 'E-mail',
                            'title'    => 'E-mail Írása',
                            'to'       => 'Címzett',
                            'cc'       => 'CC',
                            'bcc'      => 'BCC',
                            'subject'  => 'Tárgy',
                            'send-btn' => 'Küldés',
                            'message'  => 'Üzenet',
                        ],
        
                        'file' => [
                            'btn'           => 'Fájl',
                            'title'         => 'Fájl Hozzáadása',
                            'title-control' => 'Cím',
                            'name'          => 'Fájl Neve',
                            'description'   => 'Leírás',
                            'file'          => 'Fájl',
                            'save-btn'      => 'Fájl Mentése',
                        ],
        
                        'note' => [
                            'btn'      => 'Jegyzet',
                            'title'    => 'Jegyzet Hozzáadása',
                            'comment'  => 'Megjegyzés',
                            'save-btn' => 'Jegyzet Mentése',
                        ],
        
                        'activity' => [
                            'btn'           => 'Tevékenység',
                            'title'         => 'Tevékenység Hozzáadása',
                            'title-control' => 'Cím',
                            'description'   => 'Leírás',
                            'schedule-from' => 'Ütemezés Kezdete',
                            'schedule-to'   => 'Ütemezés Vége',
                            'location'      => 'Helyszín',
                            'call'          => 'Hívás',
                            'meeting'       => 'Találkozó',
                            'lunch'         => 'Ebéd',
                            'save-btn'      => 'Tevékenység Mentése',
                        ],
                    ],
                ],
            ],
        
            'create' => [
                'title'    => 'Személy Létrehozása',
                'save-btn' => 'Személy Mentése',
            ],
        
            'edit' => [
                'title'    => 'Személy Szerkesztése',
                'save-btn' => 'Személy Mentése',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'Szervezetek',
                'create-btn'     => 'Szervezet Létrehozása',
                'create-success' => 'Szervezet sikeresen létrehozva.',
                'update-success' => 'Szervezet sikeresen frissítve.',
                'delete-success' => 'Szervezet sikeresen törölve.',
                'delete-failed'  => 'Szervezet nem törölhető.',
        
                'datagrid' => [
                    'delete'        => 'Törlés',
                    'edit'          => 'Szerkesztés',
                    'id'            => 'ID',
                    'name'          => 'Név',
                    'persons-count' => 'Személyek Száma',
                ],
            ],
        
            'create' => [
                'title'    => 'Szervezet Létrehozása',
                'save-btn' => 'Szervezet Mentése',
            ],
        
            'edit' => [
                'title'    => 'Szervezet Szerkesztése',
                'save-btn' => 'Szervezet Mentése',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'Termékek',
            'create-btn'     => 'Termék Létrehozása',
            'create-success' => 'Termék sikeresen létrehozva.',
            'update-success' => 'Termék sikeresen frissítve.',
            'delete-success' => 'Termék sikeresen törölve.',
            'delete-failed'  => 'Termék nem törölhető.',
    
            'datagrid'   => [
                'allocated' => 'Felosztott',
                'delete'    => 'Törlés',
                'edit'      => 'Szerkesztés',
                'id'        => 'ID',
                'in-stock'  => 'Készleten',
                'name'      => 'Név',
                'on-hand'   => 'Kézben',
                'price'     => 'Ár',
                'sku'       => 'SKU',
                'view'      => 'Megtekintés',
            ],
        ],
    
        'create' => [
            'save-btn'  => 'Termékek Mentése',
            'title'     => 'Termékek Létrehozása',
            'general'   => 'Általános',
            'price'     => 'Ár',
        ],
    
        'edit' => [
            'title'     => 'Termékek Szerkesztése',
            'save-btn'  => 'Termékek Mentése',
            'general'   => 'Általános',
            'price'     => 'Ár',
        ],
    
        'view' => [
            'sku'         => 'SKU',
            'all'         => 'Összes',
            'notes'       => 'Megjegyzések',
            'files'       => 'Fájlok',
            'inventories' => 'Készletek',
            'change-logs' => 'Változásnaplók',
    
            'attributes' => [
                'about-product' => 'Termékről',
            ],
    
            'inventory' => [
                'source'     => 'Forrás',
                'in-stock'   => 'Készleten',
                'allocated'  => 'Felosztott',
                'on-hand'    => 'Kézben',
                'actions'    => 'Műveletek',
                'assign'     => 'Hozzárendelés',
                'add-source' => 'Forrás hozzáadása',
                'location'   => 'Helyszín',
                'add-more'   => 'Több hozzáadása',
                'save'       => 'Mentés',
            ],
        ],
    ],

    'settings' => [
        'title' => 'Beállítások',

        [
            'groups' => [
                'index' => [
                    'create-btn'        => 'Csoport Létrehozása',
                    'title'             => 'Csoportok',
                    'create-success'    => 'Csoport sikeresen létrehozva.',
                    'update-success'    => 'Csoport sikeresen frissítve.',
                    'destroy-success'   => 'Csoport sikeresen törölve.',
                    'delete-failed'     => 'Csoport nem törölhető.',
        
                    'datagrid'   => [
                        'delete'      => 'Törlés',
                        'description' => 'Leírás',
                        'edit'        => 'Szerkesztés',
                        'id'          => 'ID',
                        'name'        => 'Név',
                    ],
        
                    'edit' => [
                        'title' => 'Csoport Szerkesztése',
                    ],
        
                    'create' => [
                        'name'        => 'Név',
                        'title'       => 'Csoport Létrehozása',
                        'description' => 'Leírás',
                        'save-btn'    => 'Csoport Mentése',
                    ],
                ],
            ],
        
            'roles' => [
                'index' => [
                    'being-used'                => 'A szerepkör nem törölhető, mert használatban van egy admin felhasználónál.',
                    'create-btn'                => 'Szerepkör Létrehozása',
                    'create-success'            => 'Szerepkör sikeresen létrehozva.',
                    'current-role-delete-error' => 'A jelenlegi felhasználóhoz rendelt szerepkört nem lehet törölni.',
                    'delete-failed'             => 'Szerepkör nem törölhető.',
                    'delete-success'            => 'Szerepkör sikeresen törölve.',
                    'last-delete-error'         => 'Legalább egy szerepkör szükséges.',
                    'settings'                  => 'Beállítások',
                    'title'                     => 'Szerepkörök',
                    'update-success'            => 'Szerepkör sikeresen frissítve.',
                    'user-define-error'         => 'Rendszerszerepkört nem lehet törölni.',
        
                    'datagrid'   => [
                        'all'             => 'Összes',
                        'custom'          => 'Egyedi',
                        'delete'          => 'Törlés',
                        'description'     => 'Leírás',
                        'edit'            => 'Szerkesztés',
                        'id'              => 'ID',
                        'name'            => 'Név',
                        'permission-type' => 'Engedély Típus',
                    ],
                ],
        
                'create' => [
                    'access-control' => 'Hozzáférés-ellenőrzés',
                    'all'            => 'Összes',
                    'back-btn'       => 'Vissza',
                    'custom'         => 'Egyedi',
                    'description'    => 'Leírás',
                    'general'        => 'Általános',
                    'name'           => 'Név',
                    'permissions'    => 'Engedélyek',
                    'save-btn'       => 'Szerepkör Mentése',
                    'title'          => 'Szerepkör Létrehozása',
                ],
        
                'edit' => [
                    'access-control' => 'Hozzáférés-ellenőrzés',
                    'all'            => 'Összes',
                    'back-btn'       => 'Vissza',
                    'custom'         => 'Egyedi',
                    'description'    => 'Leírás',
                    'general'        => 'Általános',
                    'name'           => 'Név',
                    'permissions'    => 'Engedélyek',
                    'save-btn'       => 'Szerepkör Mentése',
                    'title'          => 'Szerepkör Szerkesztése',
                ],
            ],
        ],

        [
            'types' => [
                'index' => [
                    'create-btn'     => 'Típus Létrehozása',
                    'create-success' => 'Típus sikeresen létrehozva.',
                    'delete-failed'  => 'A típus nem törölhető.',
                    'delete-success' => 'Típus sikeresen törölve.',
                    'title'          => 'Típusok',
                    'update-success' => 'Típus sikeresen frissítve.',
        
                    'datagrid' => [
                        'delete'      => 'Törlés',
                        'description' => 'Leírás',
                        'edit'        => 'Szerkesztés',
                        'id'          => 'ID',
                        'name'        => 'Név',
                    ],
        
                    'create' => [
                        'name'     => 'Név',
                        'save-btn' => 'Típus Mentése',
                        'title'    => 'Típus Létrehozása',
                    ],
        
                    'edit' => [
                        'title' => 'Típus Szerkesztése',
                    ],
                ],
            ],
        
            'sources' => [
                'index' => [
                    'create-btn'     => 'Forrás Létrehozása',
                    'create-success' => 'Forrás sikeresen létrehozva.',
                    'delete-failed'  => 'A forrás nem törölhető.',
                    'delete-success' => 'Forrás sikeresen törölve.',
                    'title'          => 'Források',
                    'update-success' => 'Forrás sikeresen frissítve.',
        
                    'datagrid' => [
                        'delete' => 'Törlés',
                        'edit'   => 'Szerkesztés',
                        'id'     => 'ID',
                        'name'   => 'Név',
                    ],
        
                    'create' => [
                        'name'     => 'Név',
                        'save-btn' => 'Forrás Mentése',
                        'title'    => 'Forrás Létrehozása',
                    ],
        
                    'edit' => [
                        'title' => 'Forrás Szerkesztése',
                    ],
                ],
            ],
        ],

        [
            'workflows' => [
                'index' => [
                    'title'          => 'Munkafolyamatok',
                    'create-btn'     => 'Munkafolyamat Létrehozása',
                    'create-success' => 'Munkafolyamat sikeresen létrehozva.',
                    'update-success' => 'Munkafolyamat sikeresen frissítve.',
                    'delete-success' => 'Munkafolyamat sikeresen törölve.',
                    'delete-failed'  => 'A munkafolyamat nem törölhető.',
                    'datagrid'       => [
                        'delete'      => 'Törlés',
                        'description' => 'Leírás',
                        'edit'        => 'Szerkesztés',
                        'id'          => 'ID',
                        'name'        => 'Név',
                    ],
                ],
        
                'helpers' => [
                    'update-related-leads'       => 'Kapcsolódó leadek frissítése',
                    'send-email-to-sales-owner'  => 'Email küldése az értékesítési tulajdonosnak',
                    'send-email-to-participants' => 'Email küldése a résztvevőknek',
                    'add-webhook'                => 'Webhook hozzáadása',
                    'update-lead'                => 'Lead frissítése',
                    'update-person'              => 'Személy frissítése',
                    'send-email-to-person'       => 'Email küldése a személynek',
                    'add-tag'                    => 'Címke hozzáadása',
                    'add-note-as-activity'       => 'Jegyzet hozzáadása aktivitásként',
                ],
        
                'create' => [
                    'title'                  => 'Munkafolyamat Létrehozása',
                    'event'                  => 'Esemény',
                    'back-btn'               => 'Vissza',
                    'save-btn'               => 'Munkafolyamat Mentése',
                    'name'                   => 'Név',
                    'basic-details'          => 'Alapvető Részletek',
                    'description'            => 'Leírás',
                    'actions'                => 'Tevékenységek',
                    'basic-details-info'     => 'Adja meg a munkafolyamat alapvető információit.',
                    'event-info'             => 'Egy esemény kiváltja, ellenőrzi a feltételeket és végrehajtja az előre definiált műveleteket.',
                    'conditions'             => 'Feltételek',
                    'conditions-info'        => 'A feltételek szabályok, amelyek ellenőrzik a forgatókönyveket, és meghatározott alkalmakor váltódnak ki.',
                    'actions-info'           => 'A tevékenység nemcsak csökkenti a munkaterhet, hanem jelentősen megkönnyíti a CRM automatizálást is.',
                    'value'                  => 'Érték',
                    'condition-type'         => 'Feltétel Típus',
                    'all-condition-are-true' => 'Minden feltétel igaz',
                    'any-condition-are-true' => 'Bármely feltétel igaz',
                    'add-condition'          => 'Feltétel Hozzáadása',
                    'add-action'             => 'Tevékenység Hozzáadása',
                    'yes'                    => 'Igen',
                    'no'                     => 'Nem',
                    'email'                  => 'Email',
                    'is-equal-to'            => 'Egyezik',
                    'is-not-equal-to'        => 'Nem egyezik',
                    'equals-or-greater-than' => 'Egyezik vagy nagyobb mint',
                    'equals-or-less-than'    => 'Egyezik vagy kisebb mint',
                    'greater-than'           => 'Nagyobb mint',
                    'less-than'              => 'Kisebb mint',
                    'type'                   => 'Típus',
                    'contain'                => 'Tartalmaz',
                    'contains'               => 'Tartalmazza',
                    'does-not-contain'       => 'Nem tartalmaz',
                ],
        
                'edit' => [
                    'title'                  => 'Munkafolyamat Szerkesztése',
                    'event'                  => 'Esemény',
                    'back-btn'               => 'Vissza',
                    'save-btn'               => 'Munkafolyamat Mentése',
                    'name'                   => 'Név',
                    'basic-details'          => 'Alapvető Részletek',
                    'description'            => 'Leírás',
                    'actions'                => 'Tevékenységek',
                    'type'                   => 'Típus',
                    'basic-details-info'     => 'Adja meg a munkafolyamat alapvető információit.',
                    'event-info'             => 'Egy esemény kiváltja, ellenőrzi a feltételeket és végrehajtja az előre definiált műveleteket.',
                    'conditions'             => 'Feltételek',
                    'conditions-info'        => 'A feltételek szabályok, amelyek ellenőrzik a forgatókönyveket, és meghatározott alkalmakor váltódnak ki.',
                    'actions-info'           => 'A tevékenység nemcsak csökkenti a munkaterhet, hanem jelentősen megkönnyíti a CRM automatizálást is.',
                    'value'                  => 'Érték',
                    'condition-type'         => 'Feltétel Típus',
                    'all-condition-are-true' => 'Minden feltétel igaz',
                    'any-condition-are-true' => 'Bármely feltétel igaz',
                    'add-condition'          => 'Feltétel Hozzáadása',
                    'add-action'             => 'Tevékenység Hozzáadása',
                    'yes'                    => 'Igen',
                    'no'                     => 'Nem',
                    'email'                  => 'Email',
                    'is-equal-to'            => 'Egyezik',
                    'is-not-equal-to'        => 'Nem egyezik',
                    'equals-or-greater-than' => 'Egyezik vagy nagyobb mint',
                    'equals-or-less-than'    => 'Egyezik vagy kisebb mint',
                    'greater-than'           => 'Nagyobb mint',
                    'less-than'              => 'Kisebb mint',
                    'contain'                => 'Tartalmaz',
                    'contains'               => 'Tartalmazza',
                    'does-not-contain'       => 'Nem tartalmaz',
                ],
            ],
        ],

        [
            'webforms' => [
                'index' => [
                    'title'          => 'Webűrlapok',
                    'create-btn'     => 'Webűrlap Létrehozása',
                    'create-success' => 'Webűrlap sikeresen létrehozva.',
                    'update-success' => 'Webűrlap sikeresen frissítve.',
                    'delete-success' => 'Webűrlap sikeresen törölve.',
                    'delete-failed'  => 'A webűrlap nem törölhető.',
                    'datagrid'       => [
                        'id'     => 'ID',
                        'title'  => 'Cím',
                        'edit'   => 'Szerkesztés',
                        'delete' => 'Törlés',
                    ],
                ],
        
                'create' => [
                    'add-attribute-btn'        => 'Attribútum Hozzáadása Gomb',
                    'attribute-label-color'    => 'Attribútum Címke Színe',
                    'attributes'               => 'Attribútumok',
                    'attributes-info'          => 'Adj hozzá egyedi attribútumokat az űrlaphoz.',
                    'background-color'         => 'Háttérszín',
                    'create-lead'              => 'Lead Létrehozása',
                    'customize-webform'        => 'Webűrlap Testreszabása',
                    'customize-webform-info'   => 'Testreszabhatja webűrlapját a választott elem színeivel.',
                    'description'              => 'Leírás',
                    'display-custom-message'   => 'Egyedi üzenet megjelenítése',
                    'form-background-color'    => 'Űrlap Háttérszíne',
                    'form-submit-btn-color'    => 'Űrlap Küldés Gomb Színe',
                    'form-submit-button-color' => 'Űrlap Küldés Gomb Színe',
                    'form-title-color'         => 'Űrlap Cím Színe',
                    'general'                  => 'Általános',
                    'leads'                    => 'Leadek',
                    'person'                   => 'Személy',
                    'save-btn'                 => 'Webűrlap Mentése',
                    'submit-button-label'      => 'Küldés Gomb Felirata',
                    'submit-success-action'    => 'Sikeres Küldés Utáni Művelet',
                    'title'                    => 'Webűrlap Létrehozása',
                ],
        
                'edit' => [
                    'add-attribute-btn'         => 'Attribútum Hozzáadása Gomb',
                    'attribute-label-color'     => 'Attribútum Címke Színe',
                    'attributes'                => 'Attribútumok',
                    'attributes-info'           => 'Adj hozzá egyedi attribútumokat az űrlaphoz.',
                    'background-color'          => 'Háttérszín',
                    'code-snippet'              => 'Kódrészlet',
                    'copied'                    => 'Másolva',
                    'copy'                      => 'Másolás',
                    'create-lead'               => 'Lead Létrehozása',
                    'customize-webform'         => 'Webűrlap Testreszabása',
                    'customize-webform-info'    => 'Testreszabhatja webűrlapját a választott elem színeivel.',
                    'description'               => 'Leírás',
                    'display-custom-message'    => 'Egyedi üzenet megjelenítése',
                    'embed'                     => 'Beágyazás',
                    'form-background-color'     => 'Űrlap Háttérszíne',
                    'form-submit-btn-color'     => 'Űrlap Küldés Gomb Színe',
                    'form-submit-button-color'  => 'Űrlap Küldés Gomb Színe',
                    'form-title-color'          => 'Űrlap Cím Színe',
                    'general'                   => 'Általános',
                    'preview'                   => 'Előnézet',
                    'person'                    => 'Személy',
                    'public-url'                => 'Nyilvános URL',
                    'redirect-to-url'           => 'Átirányítás URL-re',
                    'save-btn'                  => 'Webűrlap Mentése',
                    'submit-button-label'       => 'Küldés Gomb Felirata',
                    'submit-success-action'     => 'Sikeres Küldés Utáni Művelet',
                    'title'                     => 'Webűrlap Szerkesztése',
                ],
            ],
        ],

        [
            'email-template' => [
                'index' => [
                    'create-btn'     => 'Email Sablon Létrehozása',
                    'title'          => 'Email Sablonok',
                    'create-success' => 'Email sablon sikeresen létrehozva.',
                    'update-success' => 'Email sablon sikeresen frissítve.',
                    'delete-success' => 'Email sablon sikeresen törölve.',
                    'delete-failed'  => 'Az email sablon nem törölhető.',
        
                    'datagrid'   => [
                        'delete'       => 'Törlés',
                        'edit'         => 'Szerkesztés',
                        'id'           => 'ID',
                        'name'         => 'Név',
                        'subject'      => 'Tárgy',
                    ],
                ],
        
                'create'     => [
                    'title'                => 'Email Sablon Létrehozása',
                    'save-btn'             => 'Email Sablon Mentése',
                    'email-template'       => 'Email Sablon',
                    'subject'              => 'Tárgy',
                    'content'              => 'Tartalom',
                    'subject-placeholders' => 'Tárgy Helyőrzők',
                    'general'              => 'Általános',
                    'name'                 => 'Név',
                ],
        
                'edit' => [
                    'title'                => 'Email Sablon Szerkesztése',
                    'save-btn'             => 'Email Sablon Mentése',
                    'email-template'       => 'Email Sablon',
                    'subject'              => 'Tárgy',
                    'content'              => 'Tartalom',
                    'subject-placeholders' => 'Tárgy Helyőrzők',
                    'general'              => 'Általános',
                    'name'                 => 'Név',
                ],
            ],
        ],

        [
            'tags' => [
                'index' => [
                    'create-btn'     => 'Címke Létrehozása',
                    'title'          => 'Címkék',
                    'create-success' => 'Címke sikeresen létrehozva.',
                    'update-success' => 'Címke sikeresen frissítve.',
                    'delete-success' => 'Címke sikeresen törölve.',
                    'delete-failed'  => 'A címke nem törölhető.',
        
                    'datagrid' => [
                        'delete'      => 'Törlés',
                        'edit'        => 'Szerkesztés',
                        'id'          => 'ID',
                        'name'        => 'Név',
                        'users'       => 'Felhasználók',
                        'created-at'  => 'Létrehozva',
                    ],
        
                    'create' => [
                        'name'     => 'Név',
                        'save-btn' => 'Címke Mentése',
                        'title'    => 'Címke Létrehozása',
                        'color'    => 'Szín',
                    ],
        
                    'edit' => [
                        'title' => 'Címke Szerkesztése',
                    ],
                ],
            ],
        ],

        [
            'users' => [
                'index' => [
                    'create-btn'          => 'Felhasználó Létrehozása',
                    'create-success'      => 'Felhasználó sikeresen létrehozva.',
                    'delete-failed'       => 'A felhasználó nem törölhető.',
                    'delete-success'      => 'Felhasználó sikeresen törölve.',
                    'last-delete-error'   => 'Legalább egy felhasználóra szükség van.',
                    'mass-delete-failed'  => 'A felhasználók nem törölhetők.',
                    'mass-delete-success' => 'Felhasználók sikeresen törölve.',
                    'mass-update-failed'  => 'A felhasználók nem frissíthetők.',
                    'mass-update-success' => 'Felhasználók sikeresen frissítve.',
                    'title'               => 'Felhasználók',
                    'update-success'      => 'Felhasználó sikeresen frissítve.',
                    'user-define-error'   => 'A rendszer felhasználó nem törölhető.',
                    'active'              => 'Aktív',
                    'inactive'            => 'Inaktív',
        
                    'datagrid' => [
                        'active'        => 'Aktív',
                        'created-at'    => 'Létrehozva',
                        'delete'        => 'Törlés',
                        'edit'          => 'Szerkesztés',
                        'email'         => 'Email',
                        'id'            => 'ID',
                        'inactive'      => 'Inaktív',
                        'name'          => 'Név',
                        'status'        => 'Állapot',
                        'update-status' => 'Állapot Frissítése',
                        'users'         => 'Felhasználók',
                    ],
        
                    'create' => [
                        'confirm-password' => 'Jelszó Megerősítése',
                        'email'            => 'Email',
                        'general'          => 'Általános',
                        'global'           => 'Globális',
                        'group'            => 'Csoport',
                        'individual'       => 'Egyéni',
                        'name'             => 'Név',
                        'password'         => 'Jelszó',
                        'permission'       => 'Jogosultság',
                        'role'             => 'Szerepkör',
                        'save-btn'         => 'Felhasználó Mentése',
                        'status'           => 'Állapot',
                        'title'            => 'Felhasználó Létrehozása',
                        'view-permission'  => 'Megtekintési Jogosultság',
                    ],
        
                    'edit' => [
                        'title' => 'Felhasználó Szerkesztése',
                    ],
                ],
            ],
        ],

        [
            'pipelines' => [
                'index' => [
                    'title'                => 'Csövek',
                    'create-btn'           => 'Cső Létrehozása',
                    'create-success'       => 'Cső sikeresen létrehozva.',
                    'update-success'       => 'Cső sikeresen frissítve.',
                    'delete-success'       => 'Cső sikeresen törölve.',
                    'delete-failed'        => 'A cső nem törölhető.',
                    'default-delete-error' => 'Az alapértelmezett cső nem törölhető.',
        
                    'datagrid' => [
                        'delete'      => 'Törlés',
                        'edit'        => 'Szerkesztés',
                        'id'          => 'ID',
                        'is-default'  => 'Alapértelmezett',
                        'name'        => 'Név',
                        'no'          => 'Nem',
                        'rotten-days' => 'Rothadt Napok',
                        'yes'         => 'Igen',
                    ],
                ],
        
                'create' => [
                    'title'                => 'Cső Létrehozása',
                    'save-btn'             => 'Cső Mentése',
                    'name'                 => 'Név',
                    'rotten-days'          => 'Rothadt Napok',
                    'mark-as-default'      => 'Alapértelmezettként Jelölés',
                    'general'              => 'Általános',
                    'probability'          => 'Valószínűség (%)',
                    'new-stage'            => 'Új',
                    'won-stage'            => 'Nyert',
                    'lost-stage'           => 'Veszített',
                    'stage-btn'            => 'Szakasz Hozzáadása',
                    'stages'               => 'Szakaszok',
                    'duplicate-name'       => 'A "Név" mező nem lehet duplikált',
                    'delete-stage'         => 'Szakasz Törlése',
                    'add-new-stages'       => 'Új Szakaszok Hozzáadása',
                    'add-stage-info'       => 'Új szakasz hozzáadása a csőhöz',
                    'newly-added'          => 'Újonnan Hozzáadva',
                    'stage-delete-success' => 'Szakasz sikeresen törölve',
                ],
        
                'edit'  => [
                    'title'                => 'Cső Szerkesztése',
                    'save-btn'             => 'Cső Mentése',
                    'name'                 => 'Név',
                    'rotten-days'          => 'Rothadt Napok',
                    'mark-as-default'      => 'Alapértelmezettként Jelölés',
                    'general'              => 'Általános',
                    'probability'          => 'Valószínűség (%)',
                    'new-stage'            => 'Új',
                    'won-stage'            => 'Nyert',
                    'lost-stage'           => 'Veszített',
                    'stage-btn'            => 'Szakasz Hozzáadása',
                    'stages'               => 'Szakaszok',
                    'duplicate-name'       => 'A "Név" mező nem lehet duplikált',
                    'delete-stage'         => 'Szakasz Törlése',
                    'add-new-stages'       => 'Új Szakaszok Hozzáadása',
                    'add-stage-info'       => 'Új szakasz hozzáadása a csőhöz',
                    'stage-delete-success' => 'Szakasz sikeresen törölve',
                ],
            ],
        ],

        [
            'webhooks' => [
                'index' => [
                    'title'          => 'Webhooks',
                    'create-btn'     => 'Webhook Létrehozása',
                    'create-success' => 'Webhook sikeresen létrehozva.',
                    'update-success' => 'Webhook sikeresen frissítve.',
                    'delete-success' => 'Webhook sikeresen törölve.',
                    'delete-failed'  => 'Webhook nem törölhető.',
        
                    'datagrid' => [
                        'id'          => 'ID',
                        'delete'      => 'Törlés',
                        'edit'        => 'Szerkesztés',
                        'name'        => 'Név',
                        'entity-type' => 'Entitás Típus',
                        'end-point'   => 'Végpont',
                    ],
                ],
        
                'create' => [
                    'title'                 => 'Webhook Létrehozása',
                    'save-btn'              => 'Webhook Mentése',
                    'info'                  => 'Add meg a webhook részleteit',
                    'url-and-parameters'    => 'URL És Paraméterek',
                    'method'                => 'Módszer',
                    'post'                  => 'Post',
                    'put'                   => 'Put',
                    'url-endpoint'          => 'URL Végpont',
                    'parameters'            => 'Paraméterek',
                    'add-new-parameter'     => 'Új Paraméter Hozzáadása',
                    'url-preview'           => 'URL Előnézet:',
                    'headers'               => 'Fejlécek',
                    'add-new-header'        => 'Új Fejléc Hozzáadása',
                    'body'                  => 'Törzs',
                    'default'               => 'Alapértelmezett',
                    'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                    'raw'                   => 'Raw',
                    'general'               => 'Általános',
                    'name'                  => 'Név',
                    'entity-type'           => 'Entitás Típus',
                    'insert-placeholder'    => 'Helyőrző Beszúrása',
                    'description'           => 'Leírás',
                    'json'                  => 'Json',
                    'text'                  => 'Szöveg',
                ],
        
                'edit' => [
                    'title'                 => 'Webhook Szerkesztése',
                    'edit-btn'              => 'Webhook Mentése',
                    'save-btn'              => 'Webhook Mentése',
                    'info'                  => 'Add meg a webhook részleteit',
                    'url-and-parameters'    => 'URL És Paraméterek',
                    'method'                => 'Módszer',
                    'post'                  => 'Post',
                    'put'                   => 'Put',
                    'url-endpoint'          => 'URL Végpont',
                    'parameters'            => 'Paraméterek',
                    'add-new-parameter'     => 'Új Paraméter Hozzáadása',
                    'url-preview'           => 'URL Előnézet:',
                    'headers'               => 'Fejlécek',
                    'add-new-header'        => 'Új Fejléc Hozzáadása',
                    'body'                  => 'Törzs',
                    'default'               => 'Alapértelmezett',
                    'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                    'raw'                   => 'Raw',
                    'general'               => 'Általános',
                    'name'                  => 'Név',
                    'entity-type'           => 'Entitás Típus',
                    'insert-placeholder'    => 'Helyőrző Beszúrása',
                    'description'           => 'Leírás',
                    'json'                  => 'Json',
                    'text'                  => 'Szöveg',
                ],
            ],
        ],

        [
            'warehouses' => [
                'index' => [
                    'title'          => 'Raktárak',
                    'create-btn'     => 'Raktár Létrehozása',
                    'create-success' => 'Raktár sikeresen létrehozva.',
                    'name-exists'    => 'A raktár neve már létezik.',
                    'update-success' => 'Raktár sikeresen frissítve.',
                    'delete-success' => 'Raktár sikeresen törölve.',
                    'delete-failed'  => 'A raktár nem törölhető.',
        
                    'datagrid' => [
                        'id'              => 'ID',
                        'name'            => 'Név',
                        'contact-name'    => 'Kapcsolattartó Név',
                        'delete'          => 'Törlés',
                        'edit'            => 'Szerkesztés',
                        'view'            => 'Megtekintés',
                        'created-at'      => 'Létrehozva',
                        'products'        => 'Termékek',
                        'contact-emails'  => 'Kapcsolattartó E-mailek',
                        'contact-numbers' => 'Kapcsolattartó Telefonszámok',
                    ],
                ],
        
                'create' => [
                    'title'         => 'Raktár Létrehozása',
                    'save-btn'      => 'Raktár Mentése',
                    'contact-info'  => 'Kapcsolattartó Információk',
                ],
        
                'edit' => [
                    'title'         => 'Raktár Szerkesztése',
                    'save-btn'      => 'Raktár Mentése',
                    'contact-info'  => 'Kapcsolattartó Információk',
                ],
        
                'view' => [
                    'all'         => 'Összes',
                    'notes'       => 'Jegyzetek',
                    'files'       => 'Fájlok',
                    'location'    => 'Helyszín',
                    'change-logs' => 'Változási Naplók',
        
                    'locations' => [
                        'action'         => 'Művelet',
                        'add-location'   => 'Helyszín Hozzáadása',
                        'create-success' => 'Helyszín sikeresen létrehozva.',
                        'delete'         => 'Törlés',
                        'delete-failed'  => 'A helyszín nem törölhető.',
                        'delete-success' => 'Helyszín sikeresen törölve.',
                        'name'           => 'Név',
                        'save-btn'       => 'Mentés',
                    ],
        
                    'general-information' => [
                        'title' => 'Általános Információk',
                    ],
        
                    'contact-information' => [
                        'title' => 'Kapcsolattartó Információk',
                    ],
                ],
            ],
        ],

        [
            'attributes' => [
                'index' => [
                    'title'              => 'Attribútumok',
                    'create-btn'         => 'Attribútum Létrehozása',
                    'create-success'     => 'Attribútumok sikeresen létrehozva.',
                    'update-success'     => 'Attribútumok sikeresen frissítve.',
                    'delete-success'     => 'Attribútumok sikeresen törölve.',
                    'delete-failed'      => 'Attribútumok nem törölhetők.',
                    'user-define-error'  => 'A rendszerattribútum nem törölhető.',
                    'mass-delete-failed' => 'A rendszerattribútumok nem törölhetők.',
        
                    'datagrid' => [
                        'yes'         => 'Igen',
                        'no'          => 'Nem',
                        'id'          => 'ID',
                        'code'        => 'Kód',
                        'name'        => 'Név',
                        'entity-type' => 'Entitás Típus',
                        'type'        => 'Típus',
                        'is-default'  => 'Alapértelmezett',
                        'edit'        => 'Szerkesztés',
                        'delete'      => 'Törlés',
                    ],
                ],
        
                'create'  => [
                    'title'                 => 'Attribútum Létrehozása',
                    'save-btn'              => 'Attribútum Mentése',
                    'code'                  => 'Kód',
                    'name'                  => 'Név',
                    'entity-type'           => 'Entitás Típus',
                    'type'                  => 'Típus',
                    'validations'           => 'Érvényesítések',
                    'is-required'           => 'Kötelező',
                    'input-validation'      => 'Bemeneti Érvényesítés',
                    'is-unique'             => 'Egyedi',
                    'labels'                => 'Címkék',
                    'general'               => 'Általános',
                    'numeric'               => 'Szám',
                    'decimal'               => 'Tizedes',
                    'url'                   => 'URL',
                    'options'               => 'Opciók',
                    'option-type'           => 'Opció Típus',
                    'lookup-type'           => 'Keresési Típus',
                    'add-option'            => 'Opció Hozzáadása',
                    'save-option'           => 'Opció Mentése',
                    'option-name'           => 'Opció Neve',
                    'add-attribute-options' => 'Attribútum Opciók Hozzáadása',
                    'text'                  => 'Szöveg',
                    'textarea'              => 'Szövegdoboz',
                    'price'                 => 'Ár',
                    'boolean'               => 'Logikai',
                    'select'                => 'Kiválasztás',
                    'multiselect'           => 'Többszörös Kiválasztás',
                    'email'                 => 'E-mail',
                    'address'               => 'Cím',
                    'phone'                 => 'Telefonszám',
                    'datetime'              => 'Dátum és Idő',
                    'date'                  => 'Dátum',
                    'image'                 => 'Kép',
                    'file'                  => 'Fájl',
                    'lookup'                => 'Keresés',
                    'entity_type'           => 'Entitás típus',
                    'checkbox'              => 'Jelölőnégyzet',
                    'is_required'           => 'Kötelező',
                    'is_unique'             => 'Egyedi',
                ],
        
                'edit'  => [
                    'title'                 => 'Attribútum Szerkesztése',
                    'save-btn'              => 'Attribútum Mentése',
                    'code'                  => 'Kód',
                    'name'                  => 'Név',
                    'labels'                => 'Címkék',
                    'entity-type'           => 'Entitás Típus',
                    'type'                  => 'Típus',
                    'validations'           => 'Érvényesítések',
                    'is-required'           => 'Kötelező',
                    'input-validation'      => 'Bemeneti Érvényesítés',
                    'is-unique'             => 'Egyedi',
                    'general'               => 'Általános',
                    'numeric'               => 'Szám',
                    'decimal'               => 'Tizedes',
                    'url'                   => 'URL',
                    'options'               => 'Opciók',
                    'option-type'           => 'Opció Típus',
                    'lookup-type'           => 'Keresési Típus',
                    'add-option'            => 'Opció Hozzáadása',
                    'save-option'           => 'Opció Mentése',
                    'option-name'           => 'Opció Neve',
                    'add-attribute-options' => 'Attribútum Opciók Hozzáadása',
                    'text'                  => 'Szöveg',
                    'textarea'              => 'Szövegdoboz',
                    'price'                 => 'Ár',
                    'boolean'               => 'Logikai',
                    'select'                => 'Kiválasztás',
                    'multiselect'           => 'Többszörös Kiválasztás',
                    'email'                 => 'E-mail',
                    'address'               => 'Cím',
                    'phone'                 => 'Telefonszám',
                    'datetime'              => 'Dátum és Idő',
                    'date'                  => 'Dátum',
                    'image'                 => 'Kép',
                    'file'                  => 'Fájl',
                    'lookup'                => 'Keresés',
                    'entity_type'           => 'Entitás típus',
                    'checkbox'              => 'Jelölőnégyzet',
                    'is_required'           => 'Kötelező',
                    'is_unique'             => 'Egyedi',
                ],
            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title'      => 'Aktivitások',

            'datagrid' => [
                'comment'       => 'Megjegyzés',
                'created_at'    => 'Létrehozva',
                'created_by'    => 'Létrehozta',
                'edit'          => 'Szerkesztés',
                'id'            => 'ID',
                'done'          => 'Elvégezve',
                'not-done'      => 'Nincs elvégezve',
                'lead'          => 'Lead',
                'mass-delete'   => 'Tömeges Törlés',
                'mass-update'   => 'Tömeges Frissítés',
                'schedule-from' => 'Időponttól',
                'schedule-to'   => 'Időpontig',
                'schedule_from' => 'Időponttól',
                'schedule_to'   => 'Időpontig',
                'title'         => 'Cím',
                'is_done'       => 'Elvégezve',
                'type'          => 'Típus',
                'update'        => 'Frissítés',
                'call'          => 'Hívás',
                'meeting'       => 'Találkozó',
                'lunch'         => 'Ebéd',
            ],
        ],
    
        'edit' => [
            'title'           => 'Aktivitás Szerkesztése',
            'back-btn'        => 'Vissza',
            'save-btn'        => 'Aktivitás Mentése',
            'type'            => 'Aktivitás Típusa',
            'call'            => 'Hívás',
            'meeting'         => 'Találkozó',
            'lunch'           => 'Ebéd',
            'schedule_to'     => 'Időpontig',
            'schedule_from'   => 'Időponttól',
            'location'        => 'Helyszín',
            'comment'         => 'Megjegyzés',
            'lead'            => 'Lead',
            'participants'    => 'Résztvevők',
            'general'         => 'Általános',
            'persons'         => 'Személyek',
            'no-result-found' => 'Nincs találat.',
            'users'           => 'Felhasználók',
        ],
    
        'updated'              => ':attribute frissítve',
        'created'              => 'Létrehozva',
        'duration-overlapping' => 'A résztvevőknek másik találkozójuk van ebben az időpontban. Folytatni szeretné?',
        'create-success'       => 'Aktivitás sikeresen létrehozva.',
        'update-success'       => 'Aktivitás sikeresen frissítve.',
        'overlapping-error'    => 'A résztvevőknek másik találkozójuk van ebben az időpontban.',
        'mass-update-success'  => 'Aktivitások sikeresen frissítve.',
        'destroy-success'      => 'Aktivitás sikeresen törölve.',
        'delete-failed'        => 'Aktivitás nem törölhető.',
    ],

    'mail' => [
        'index' => [
            'compose'           => 'Új üzenet',
            'draft'             => 'Piszkozat',
            'inbox'             => 'Beérkező levelek',
            'outbox'            => 'Kimenő levelek',
            'sent'              => 'Küldött',
            'trash'             => 'Kuka',
            'compose-mail-btn'  => 'Új levél írása',
            'btn'               => 'Levelezés',
            'mail'              => [
                'title'         => 'Új levél írása',
                'to'            => 'Címzett',
                'enter-emails'  => 'Nyomja meg az Entert az e-mailek hozzáadásához',
                'cc'            => 'Másolat',
                'bcc'           => 'Titkos másolat',
                'subject'       => 'Tárgy',
                'send-btn'      => 'Küldés',
                'message'       => 'Üzenet',
                'draft'         => 'Piszkozat',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => 'Feladó',
                'to'            => 'Címzett',
                'subject'       => 'Tárgy',
                'tag-name'      => 'Címke neve',
                'created-at'    => 'Létrehozva',
                'move-to-inbox' => 'Áthelyezés a beérkező levelek közé',
                'edit'          => 'Szerkesztés',
                'view'          => 'Megtekintés',
                'delete'        => 'Törlés',
            ],
        ],

        'create-success'      => 'Az e-mail sikeresen elküldve.',
        'update-success'      => 'Az e-mail sikeresen frissítve.',
        'mass-update-success' => 'Az e-mailek sikeresen frissítve.',
        'delete-success'      => 'Az e-mail sikeresen törölve.',
        'delete-failed'       => 'Az e-mail nem törölhető.',

        'view' => [
            'title'                      => 'Levelek',
            'subject'                    => ':subject',
            'link-mail'                  => 'Levél linkelése',
            'to'                         => 'Címzett',
            'cc'                         => 'Másolat',
            'bcc'                        => 'Titkos másolat',
            'reply'                      => 'Válasz',
            'reply-all'                  => 'Mindnek válasz',
            'forward'                    => 'Továbbítás',
            'delete'                     => 'Törlés',
            'enter-mails'                => 'Email cím megadása',
            'rotten-days'                => 'A lead :days napja lejárt',
            'search-an-existing-lead'    => 'Keresés meglévő leadben',
            'search-an-existing-contact' => 'Keresés meglévő kapcsolattartóban',
            'message'                    => 'Üzenet',
            'add-attachments'            => 'Csatolmányok hozzáadása',
            'discard'                    => 'Mégse',
            'send'                       => 'Küldés',
            'no-result-found'            => 'Nincs találat',
            'add-new-contact'            => 'Új kapcsolattartó hozzáadása',
            'description'                => 'Leírás',
            'search'                     => 'Keresés...',
            'add-new-lead'               => 'Új lead hozzáadása',
            'create-new-contact'         => 'Új kapcsolattartó létrehozása',
            'save-contact'               => 'Kapcsolattartó mentése',
            'create-lead'                => 'Lead létrehozása',
            'linked-contact'             => 'Kapcsolódó kapcsolattartó',
            'link-to-contact'            => 'Kapcsolat hozzárendelése',
            'link-to-lead'               => 'Lead hozzárendelése',
            'linked-lead'                => 'Kapcsolódó lead',
            'lead-details'               => 'Lead részletei',
            'contact-person'             => 'Kapcsolattartó személy',
            'product'                    => 'Termék',

            'tags' => [
                'create-success'  => 'Címke sikeresen létrehozva.',
                'destroy-success' => 'Címke sikeresen törölve.',
            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'select-country' => 'Válassza ki az országot',
            'select-state'   => 'Válassza ki az államot',
            'state'          => 'Állam',
            'city'           => 'Város',
            'postcode'       => 'Irányítószám',
            'work'           => 'Munka',
            'home'           => 'Otthon',
            'add-more'       => 'Több hozzáadása',
            'select'         => 'Választás',
            'country'        => 'Ország',
            'address'        => 'Cím',
        ],
    ],

    'leads' => [
        'create-success'    => 'Lead sikeresen létrehozva.',
        'update-success'    => 'Lead sikeresen frissítve.',
        'destroy-success'   => 'Lead sikeresen törölve.',
        'destroy-failed'    => 'Lead nem törölhető.',

        'index' => [
            'title'      => 'Leads',
            'create-btn' => 'Lead létrehozása',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => 'Értékesítő',
                'subject'             => 'Téma',
                'source'              => 'Forrás',
                'lead-value'          => 'Lead érték',
                'lead-type'           => 'Lead típus',
                'tag-name'            => 'Címke név',
                'contact-person'      => 'Kapcsolattartó',
                'stage'               => 'Szakasz',
                'rotten-lead'         => 'Rossz Lead',
                'expected-close-date' => 'Várt lezárási dátum',
                'created-at'          => 'Létrehozva',
                'no'                  => 'Nem',
                'yes'                 => 'Igen',
                'delete'              => 'Törlés',
                'mass-delete'         => 'Tömeges törlés',
                'mass-update'         => 'Tömeges frissítés',
            ],

            'kanban' => [
                'rotten-days'            => 'Lead :days napja rossz',
                'empty-list'             => 'A Lead lista üres',
                'empty-list-description' => 'Hozzon létre egy leadet a céljai szervezéséhez.',
                'create-lead-btn'        => 'Lead létrehozása',

                'columns' => [
                    'contact-person'      => 'Kapcsolattartó',
                    'id'                  => 'ID',
                    'lead-type'           => 'Lead típus',
                    'lead-value'          => 'Lead érték',
                    'sales-person'        => 'Értékesítő',
                    'source'              => 'Forrás',
                    'title'               => 'Cím',
                    'tags'                => 'Címkék',
                    'expected-close-date' => 'Várt lezárási dátum',
                    'created-at'          => 'Létrehozva',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'Keresés',
                    ],

                    'filters' => [
                        'apply-filters' => 'Szűrők alkalmazása',
                        'clear-all'     => 'Minden törlése',
                        'filter'        => 'Szűrő',
                        'filters'       => 'Szűrők',
                        'select'        => 'Választás',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'Összes pipeline',
                'create-new-pipeline' => 'Új pipeline létrehozása',
            ],
        ],

        'create' => [
            'title'          => 'Lead létrehozása',
            'save-btn'       => 'Mentés',
            'details'        => 'Részletek',
            'details-info'   => 'Adja meg a lead alapvető információit',
            'contact-person' => 'Kapcsolattartó',
            'contact-info'   => 'Információ a kapcsolattartóról',
            'products'       => 'Termékek',
            'products-info'  => 'Információ a termékekről',
        ],

        'edit' => [
            'title'          => 'Lead szerkesztése',
            'save-btn'       => 'Mentés',
            'details'        => 'Részletek',
            'details-info'   => 'Adja meg a lead alapvető információit',
            'contact-person' => 'Kapcsolattartó',
            'contact-info'   => 'Információ a kapcsolattartóról',
            'products'       => 'Termékek',
            'products-info'  => 'Információ a termékekről',
        ],

        'common' => [
            'contact' => [
                'name'           => 'Név',
                'email'          => 'Email',
                'contact-number' => 'Kapcsolattartó szám',
                'organization'   => 'Szervezet',
            ],

            'products' => [
                'product-name' => 'Termék neve',
                'quantity'     => 'Mennyiség',
                'price'        => 'Ár',
                'amount'       => 'Összeg',
                'action'       => 'Akció',
                'add-more'     => 'Több hozzáadása',
                'total'        => 'Összesen',
            ],
        ],

        'view' => [
            'title'       => 'Lead: :title',
            'rotten-days' => ':days nap',

            'tabs'        => [
                'description' => 'Leírás',
                'products'    => 'Termékek',
                'quotes'      => 'Ajánlatok',
            ],

            'attributes' => [
                'title' => 'A leadről',
            ],

            'quotes'=> [
                'subject'         => 'Téma',
                'expired-at'      => 'Lejárt',
                'sub-total'       => 'Részösszeg',
                'discount'        => 'Kedvezmény',
                'tax'             => 'Áfa',
                'adjustment'      => 'Módosítás',
                'grand-total'     => 'Végösszeg',
                'delete'          => 'Törlés',
                'edit'            => 'Szerkesztés',
                'download'        => 'Letöltés',
                'destroy-success' => 'Ajánlat sikeresen törölve.',
                'empty-title'     => 'Nincs ajánlat',
                'empty-info'      => 'Nincs ajánlat ezen leadhez',
                'add-btn'         => 'Ajánlat hozzáadása',
            ],

            'products' => [
                'product-name' => 'Termék neve',
                'quantity'     => 'Mennyiség',
                'price'        => 'Ár',
                'amount'       => 'Összeg',
                'action'       => 'Akció',
                'add-more'     => 'Több hozzáadása',
                'total'        => 'Összesen',
                'empty-title'  => 'Nincs termék',
                'empty-info'   => 'Nincs termék ezen leadhez',
                'add-product'  => 'Termék hozzáadása',
            ],

            'persons' => [
                'title'     => 'Személyek',
                'job-title' => ':job_title a :organization-nál/nél',
            ],

            'stages' => [
                'won-lost'       => 'Nyert/Elveszett',
                'won'            => 'Nyert',
                'lost'           => 'Elveszett',
                'need-more-info' => 'Több információ szükséges',
                'closed-at'      => 'Lezárva',
                'won-value'      => 'Nyert érték',
                'lost-reason'    => 'Elveszett ok',
                'save-btn'       => 'Mentés',
            ],

            'tags' => [
                'create-success'  => 'Címke sikeresen létrehozva.',
                'destroy-success' => 'Címke sikeresen törölve.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'         => 'Vissza',
            'save-btn'     => 'Beállítások mentése',
            'save-success' => 'Beállítások sikeresen mentve.',
            'search'       => 'Keresés',
            'title'        => 'Beállítások',

            'general'  => [
                'title'   => 'Általános',
                'info'    => 'Általános beállítások',

                'general' => [
                    'title'           => 'Általános',
                    'info'            => 'Frissítse itt az általános beállításokat.',
                    'locale-settings' => [
                        'title'       => 'Helyi beállítások',
                        'title-info'  => 'Definiálja a felhasználói felületen használt nyelvet, például angol (en), francia (fr) vagy japán (ja).',
                    ],
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'Iránymutató',

            'revenue' => [
                'lost-revenue' => 'Elvesztett Bevétel',
                'won-revenue'  => 'Megnyert Bevétel',
            ],

            'over-all' => [
                'average-lead-value'    => 'Átlagos Lead Érték',
                'total-leads'           => 'Összes Lead',
                'average-leads-per-day' => 'Átlagos Lead-ek Száma Naponta',
                'total-quotations'      => 'Összes Árajánlat',
                'total-persons'         => 'Összes Személy',
                'total-organizations'   => 'Összes Szervezet',
            ],

            'total-leads' => [
                'title' => 'Leads',
                'total' => 'Összes Lead',
                'won'   => 'Megnyert Lead-ek',
                'lost'  => 'Elvesztett Lead-ek',
            ],

            'revenue-by-sources' => [
                'title'       => 'Bevétel Források Szerint',
                'empty-title' => 'Nincs Elérhető Adat',
                'empty-info'  => 'Nincs adat a kiválasztott időszakra',
            ],

            'revenue-by-types' => [
                'title'       => 'Bevétel Típusok Szerint',
                'empty-title' => 'Nincs Elérhető Adat',
                'empty-info'  => 'Nincs adat a kiválasztott időszakra',
            ],

            'top-selling-products' => [
                'title'       => 'Legjobban Értékesített Termékek',
                'empty-title' => 'Nincs Termék Található',
                'empty-info'  => 'Nincs elérhető termék a kiválasztott időszakra',
            ],

            'top-persons' => [
                'title'       => 'Legfontosabb Személyek',
                'empty-title' => 'Nincs Személy Található',
                'empty-info'  => 'Nincs elérhető személy a kiválasztott időszakra',
            ],

            'open-leads-by-states' => [
                'title'       => 'Nyitott Lead-ek Államok Szerint',
                'empty-title' => 'Nincs Elérhető Adat',
                'empty-info'  => 'Nincs adat a kiválasztott időszakra',
            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'Verzió : :version',
        'dashboard'            => 'Műszerfal',
        'leads'                => 'Lead-ek',
        'quotes'               => 'Árajánlatok',
        'quote'                => 'Árajánlat',
        'mail'                 => [
            'title'   => 'E-mail',
            'compose' => 'Új E-mail',
            'inbox'   => 'Beérkezett',
            'draft'   => 'Piszkozat',
            'outbox'  => 'Küldésre Váró',
            'sent'    => 'Küldött',
            'trash'   => 'Kuka',
            'setting' => 'Beállítás',
        ],
        'activities'           => 'Tevékenységek',
        'contacts'             => 'Kapcsolatok',
        'persons'              => 'Személyek',
        'person'               => 'Személy',
        'organizations'        => 'Szervezetek',
        'organization'         => 'Szervezet',
        'products'             => 'Termékek',
        'product'              => 'Termék',
        'settings'             => 'Beállítások',
        'user'                 => 'Felhasználó',
        'user-info'            => 'Kezelje felhasználóit és jogosultságaikat a CRM-ben, hogy mit tehetnek.',
        'groups'               => 'Csoportok',
        'groups-info'          => 'Csoportok hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'roles'                => 'Szerepek',
        'role'                 => 'Szerep',
        'roles-info'           => 'Szerepek hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'users'                => 'Felhasználók',
        'users-info'           => 'Felhasználók hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'lead'                 => 'Lead',
        'lead-info'            => 'Kezelje a lead-ekkel kapcsolatos beállításokat a CRM-ben',
        'pipelines'            => 'Pipeline-ok',
        'pipelines-info'       => 'Pipeline-ok hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'sources'              => 'Források',
        'sources-info'         => 'Források hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'types'                => 'Típusok',
        'types-info'           => 'Típusok hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'automation'           => 'Automatizálás',
        'automation-info'      => 'Kezelje az automatizálással kapcsolatos beállításokat a CRM-ben',
        'attributes'           => 'Attribútumok',
        'attribute'            => 'Attribútum',
        'attributes-info'      => 'Attribútumok hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'email-templates'      => 'E-mail Sablonok',
        'email'                => 'E-mail',
        'email-templates-info' => 'E-mail sablonok hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'workflows'            => 'Munkafolyamatok',
        'workflows-info'       => 'Munkafolyamatok hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'other-settings'       => 'Egyéb Beállítások',
        'other-settings-info'  => 'Minden egyéb beállítás kezelése a CRM-ben',
        'tags'                 => 'Címkék',
        'tags-info'            => 'Címkék hozzáadása, szerkesztése vagy törlése a CRM-ben',
        'my-account'           => 'Saját Fiók',
        'sign-out'             => 'Kijelentkezés',
        'back'                 => 'Vissza',
        'name'                 => 'Név',
        'configuration'        => 'Beállítások',
        'howdy'                => 'Helló!',
        'warehouses'           => 'Raktárak',
        'warehouse'            => 'Raktár',
        'warehouses-info'      => 'Raktárak hozzáadása, szerkesztése vagy törlése a CRM-ben',
    ],

    'user' => [
        'account' => [
            'name'                  => 'Név',
            'email'                 => 'E-mail',
            'password'              => 'Jelszó',
            'my_account'            => 'Saját Fiók',
            'update_details'        => 'Adatok Frissítése',
            'current_password'      => 'Jelenlegi Jelszó',
            'confirm_password'      => 'Jelszó Megerősítése',
            'password-match'        => 'A jelenlegi jelszó nem egyezik.',
            'account-save'          => 'A fiók módosításai sikeresen mentve.',
            'permission-denied'     => 'Hozzáférés megtagadva',
            'remove-image'          => 'Kép eltávolítása',
            'upload_image_pix'      => 'Profilkép feltöltése (100px x 100px)',
            'upload_image_format'   => 'PNG vagy JPG formátumban',
            'image_upload_message'  => 'Csak képek (.jpeg, .jpg, .png, stb.) engedélyezettek.',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'Kedves :name',
            'cheers' => 'Üdvözlettel,</br>Team :app_name',
        ],
    ],

    'errors' => [
        '401' => 'Nincs jogosultsága az oldal elérésére',
    ],
];
