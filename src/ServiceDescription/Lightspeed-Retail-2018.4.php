<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

return [
    'name'        => 'LightspeedRetail',
    'description' => 'Lightspeed Retail API',
    'baseUri'     => 'https://api.lightspeedapp.com/API/',
    'operations'  => [

        /**
         * --------------------------------------------------------------------------------
         * ACCOUNT RELATED METHODS
         *
         * DOC: http://developers.lightspeedhq.com/retail/endpoints/Account/
         * --------------------------------------------------------------------------------
         */

        'GetAccount' => [
            'httpMethod'    => 'GET',
            'uri'           => 'Account.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key'      => 'Account',
            ],
        ],

        /**
         * --------------------------------------------------------------------------------
         * CUSTOMER RELATED METHODS
         *
         * DOC: http://developers.lightspeedhq.com/retail/endpoints/Customer/
         * --------------------------------------------------------------------------------
         */

        'GetCustomers' => [
            'httpMethod'    => 'GET',
            'uri'           => 'Account/{accountID}/Customer.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key'      => 'Customer',
                'is_collection' => true,
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'integer',
                ],
                'offset' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'integer',
                ],
                'archived' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'boolean',
                ],
                'timeStamp' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'string',
                ],
                'load_relations' => [
                    'location' => 'query',
                    'type'     => 'string',
                    'required' => false,
                ],
                'orderby' => [
                    'location' => 'query',
                    'type'     => 'string',
                    'required' => false,
                ],
            ],
            'additionalParameters' => [
                'location' => 'query',
            ],
        ],

        'GetCustomer' => [
            'httpMethod'    => 'GET',
            'uri'           => 'Account/{accountID}/Customer/{customerID}.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key' => 'Customer',
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'customerID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'load_relations' => [
                    'location' => 'query',
                    'type'     => 'string',
                    'required' => false,
                ],
            ],
            'additionalParameters' => [
                'location' => 'query',
            ],
        ],

        'CreateCustomer' => [
            'httpMethod'    => 'POST',
            'uri'           => 'Account/{accountID}/Customer.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key' => 'Customer',
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'firstName' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'lastName' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'dob' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'Contact' => [
                    'location' => 'json',
                    'type'     => 'object',
                    'required' => false,
                ],
                'CustomFieldValues' => [
                    'location' => 'json',
                    'type'     => 'object',
                    'required' => false,
                ],
            ],
        ],

        'UpdateCustomer' => [
            'httpMethod'    => 'PUT',
            'uri'           => 'Account/{accountID}/Customer/{customerID}.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key' => 'Customer',
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'customerID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'firstName' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'lastName' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'dob' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'Contact' => [
                    'location' => 'json',
                    'type'     => 'object',
                    'required' => false,
                ],
                'CustomFieldValues' => [
                    'location' => 'json',
                    'type'     => 'object',
                    'required' => false,
                ],
            ],
        ],

        /**
         * --------------------------------------------------------------------------------
         * ITEM RELATED METHODS
         *
         * DOC: http://developers.lightspeedhq.com/retail/endpoints/Account-Item/
         * --------------------------------------------------------------------------------
         */

        'GetItems' => [
            'httpMethod'    => 'GET',
            'uri'           => 'Account/{accountID}/Item.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key'      => 'Item',
                'is_collection' => true,
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'integer',
                ],
                'offset' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'integer',
                ],
                'archived' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'boolean',
                ],
                'timeStamp' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'string',
                ],
                'load_relations' => [
                    'location' => 'query',
                    'type'     => 'string',
                    'required' => false,
                ],
                'orderby' => [
                    'location' => 'query',
                    'type'     => 'string',
                    'required' => false,
                ],
            ],
            'additionalParameters' => [
                'location' => 'query',
            ],
        ],

        'CreateItem' => [
            'httpMethod'    => 'POST',
            'uri'           => 'Account/{accountID}/Item.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key' => 'Item',
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'description' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'ean' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'customSku' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'manufacturerSku' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'Prices' => [
                    'location' => 'json',
                    'type'     => 'object',
                    'required' => false,
                ],
                'Images' => [
                    'location' => 'json',
                    'type'     => 'object',
                    'required' => false,
                ],
            ],
        ],

        'UpdateItem' => [
            'httpMethod'    => 'PUT',
            'uri'           => 'Account/{accountID}/Item/{itemID}.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key' => 'Item',
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'itemID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'description' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'ean' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'customSku' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'manufacturerSku' => [
                    'location' => 'json',
                    'type'     => 'string',
                    'required' => false,
                ],
                'Prices' => [
                    'location' => 'json',
                    'type'     => 'object',
                    'required' => false,
                ],
                'Images' => [
                    'location' => 'json',
                    'type'     => 'object',
                    'required' => false,
                ],
            ],
        ],

        /**
         * --------------------------------------------------------------------------------
         * SALE RELATED METHODS
         *
         * DOC: http://developers.lightspeedhq.com/retail/endpoints/Account-Sale/
         * --------------------------------------------------------------------------------
         */

        'GetSales' => [
            'httpMethod'    => 'GET',
            'uri'           => 'Account/{accountID}/Sale.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key'      => 'Sale',
                'is_collection' => true,
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'integer',
                ],
                'offset' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'integer',
                ],
                'archived' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'boolean',
                ],
                'timeStamp' => [
                    'location' => 'query',
                    'required' => false,
                    'type'     => 'string',
                ],
                'load_relations' => [
                    'location' => 'query',
                    'type'     => 'string',
                    'required' => false,
                ],
                'orderby' => [
                    'location' => 'query',
                    'type'     => 'string',
                    'required' => false,
                ],
            ],
            'additionalParameters' => [
                'location' => 'query',
            ],
        ],

        'GetSale' => [
            'httpMethod'    => 'GET',
            'uri'           => 'Account/{accountID}/Sale/{saleID}.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key' => 'Sale',
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'saleID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'load_relations' => [
                    'location' => 'query',
                    'type'     => 'string',
                    'required' => false,
                ],
            ],
            'additionalParameters' => [
                'location' => 'query',
            ],
        ],

        /**
         * --------------------------------------------------------------------------------
         * SALE LINE RELATED METHODS
         *
         * DOC: http://developers.lightspeedhq.com/retail/endpoints/Account-SaleLine/
         * --------------------------------------------------------------------------------
         */

        'GetSaleLine' => [
            'httpMethod'    => 'GET',
            'uri'           => 'Account/{accountID}/SaleLine/{saleLineID}.json',
            'responseModel' => 'GenericModel',
            'data'          => [
                'root_key' => 'SaleLine',
            ],
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'saleLineID' => [
                    'location' => 'uri',
                    'type'     => 'integer',
                    'required' => false,
                ],
                'load_relations' => [
                    'location' => 'query',
                    'type'     => 'string',
                    'required' => false,
                ],
            ],
            'additionalParameters' => [
                'location' => 'query',
            ],
        ],
    ],

    'models' => [
        'GenericModel' => [
            'type'                 => 'object',
            'additionalProperties' => [
                'location' => 'json',
            ],
        ],
    ],
];
