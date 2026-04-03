<?php

return [
    /*
    |--------------------------------------------------------------------------
    | FBR Digital Invoicing API Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration for FBR Digital Invoicing API
    | for both sandbox and production environments.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | API Endpoints
    |--------------------------------------------------------------------------
    |
    | These are the specific endpoints for different FBR API operations.
    | The service will automatically select sandbox or production based on
    | the user's use_sandbox preference.
    |
    */

    'endpoints' => [
        'production' => [
            'post_invoice' => 'https://gw.fbr.gov.pk/di_data/v1/di/postinvoicedata',
            'validate_invoice' => 'https://gw.fbr.gov.pk/pdi/v1/di/validateinvoicedata',
            'provinces' => 'https://gw.fbr.gov.pk/pdi/v1/provinces',
            'document_types' => 'https://gw.fbr.gov.pk/pdi/v1/doctypecode',
            'item_codes' => 'https://gw.fbr.gov.pk/pdi/v1/itemdesccode',
            'transaction_types' => 'https://gw.fbr.gov.pk/pdi/v1/transtypecode',
            'units_of_measurement' => 'https://gw.fbr.gov.pk/pdi/v1/uom',
            'sro_schedules' => 'https://gw.fbr.gov.pk/pdi/v1/SroSchedule',
            'tax_rates' => 'https://gw.fbr.gov.pk/pdi/v1/taxrateid',
            'hs_codes_with_uom' => 'https://gw.fbr.gov.pk/pdi/v2/HS_UOM',
            'sro_item_ids' => 'https://gw.fbr.gov.pk/pdi/v2/SROItem',
            'registration_type' => 'https://gw.fbr.gov.pk/dist/v1/Get_Reg_Type',
            'sale_type_to_rate' => 'https://gw.fbr.gov.pk/pdi/v2/SaleTypeToRate',
        ],
        'sandbox' => [
            'post_invoice' => 'https://gw.fbr.gov.pk/di_data/v1/di/postinvoicedata_sb',
            'validate_invoice' => 'https://gw.fbr.gov.pk/pdi/v1/di/validateinvoicedata_sb',
            'provinces' => 'https://gw.fbr.gov.pk/pdi/v1/provinces',
            'document_types' => 'https://gw.fbr.gov.pk/pdi/v1/doctypecode',
            'item_codes' => 'https://gw.fbr.gov.pk/pdi/v1/itemdesccode',
            'transaction_types' => 'https://gw.fbr.gov.pk/pdi/v1/transtypecode',
            'units_of_measurement' => 'https://gw.fbr.gov.pk/pdi/v1/uom',
            'sro_schedules' => 'https://gw.fbr.gov.pk/pdi/v1/SroSchedule',
            'tax_rates' => 'https://gw.fbr.gov.pk/pdi/v1/taxrateid',
            'hs_codes_with_uom' => 'https://gw.fbr.gov.pk/pdi/v2/HS_UOM',
            'sro_item_ids' => 'https://gw.fbr.gov.pk/pdi/v2/SROItem',
            'registration_type' => 'https://gw.fbr.gov.pk/dist/v1/Get_Reg_Type',
            'sale_type_to_rate' => 'https://gw.fbr.gov.pk/pdi/v2/SaleTypeToRate',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | API Timeout Settings
    |--------------------------------------------------------------------------
    |
    | Configure timeout settings for FBR API calls.
    |
    */

    'timeout' => env('FBR_API_TIMEOUT', 30),
    'connect_timeout' => env('FBR_API_CONNECT_TIMEOUT', 10),
];
