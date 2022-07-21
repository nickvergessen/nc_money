<?php
/**
 * Nextcloud - money
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Paul Tirk <paultirk@paultirk.com>
 * @copyright Paul Tirk 2016
 */

return [
  'resources' => [
    'money_api' => ['url' => '/api/v0.1/money']
  ],
  'routes' => [
    ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],

    ['name' => 'settings#get_config', 'url' => '/config', 'verb' => 'GET'],
    ['name' => 'settings#set_config', 'url' => '/config', 'verb' => 'POST'],

    ['name' => 'money_api#get_accounts', 'url' => '/ajax/get-accounts', 'verb' => 'GET'],
    ['name' => 'money_api#get_account', 'url' => '/ajax/get-account', 'verb' => 'GET'],
    ['name' => 'money_api#update_account', 'url' => '/ajax/update-account', 'verb' => 'PUT'],
    ['name' => 'money_api#add_account', 'url' => '/ajax/add-account', 'verb' => 'POST'],
    ['name' => 'money_api#delete_account', 'url' => '/ajax/delete-account', 'verb' => 'POST'],

    ['name' => 'money_api#get_transactions_for_account', 'url' => '/ajax/get-transactions-for-account', 'verb' => 'GET'],
    ['name' => 'money_api#get_transactions_for_account_by_date', 'url' => '/ajax/get-transactions-for-account-by-date', 'verb' => 'GET'],

    ['name' => 'money_api#get_transaction', 'url' => '/ajax/get-transaction', 'verb' => 'GET'],
    ['name' => 'money_api#update_transaction', 'url' => '/ajax/update-transaction', 'verb' => 'PUT'],
    ['name' => 'money_api#add_simple_transaction', 'url' => '/ajax/add-simple-transaction', 'verb' => 'POST'],
    ['name' => 'money_api#add_split_transaction', 'url' => '/ajax/add-split-transaction', 'verb' => 'POST'],
    ['name' => 'money_api#add_transactions', 'url' => '/ajax/add-transactions', 'verb' => 'POST'],

    ['name' => 'money_api#get_splits_for_transaction', 'url' => '/ajax/get-splits-for-transaction', 'verb' => 'GET'],
    ['name' => 'money_api#update_split', 'url' => '/ajax/update-split', 'verb' => 'PUT'],
    ['name' => 'money_api#add_split', 'url' => '/ajax/add-split', 'verb' => 'POST'],
    ['name' => 'money_api#delete_split', 'url' => '/ajax/delete-split', 'verb' => 'POST'],

    ['name' => 'money_api#get_account_balance', 'url' => '/ajax/get-account-balance', 'verb' => 'GET'],
    ['name' => 'money_api#get_unbalanced_transactions', 'url' => '/ajax/get-unbalanced-transactions', 'verb' => 'GET'],

//    ['name' => 'money_api#preflighted_cors', 'url' => '/api/v0.1/{path}', 'verb' => 'OPTIONS', 'requirements' => array('path' => '.+')],
  ]
];
