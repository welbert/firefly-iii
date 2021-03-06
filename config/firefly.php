<?php
/**
 * firefly.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types = 1);

/*
 * DO NOT EDIT THIS FILE. IT IS AUTO GENERATED.
 *
 * ANY OPTIONS IN THIS FILE YOU CAN SAFELY EDIT CAN BE FOUND IN THE USER INTERFACE OF FIRFELY III.
 */

return [
    'configuration'       => [
        'single_user_mode' => true,
        'is_demo_site'     => false,
    ],
    'encryption'          => (is_null(env('USE_ENCRYPTION')) || env('USE_ENCRYPTION') === true),
    'version'             => '4.3.7',
    'maxUploadSize'       => 5242880,
    'allowedMimes'        => ['image/png', 'image/jpeg', 'application/pdf'],
    'list_length'         => 10,
    'export_formats'           => [
        'csv' => 'FireflyIII\Export\Exporter\CsvExporter',
    ],
    'import_formats'           => [
        'csv' => 'FireflyIII\Import\Importer\CsvImporter',
    ],
    'default_export_format'    => 'csv',
    'default_import_format'    => 'csv',
    'bill_periods'             => ['weekly', 'monthly', 'quarterly', 'half-year', 'yearly'],
    'accountRoles'             => ['defaultAsset', 'sharedAsset', 'savingAsset', 'ccAsset',],
    'ccTypes'                  => [
        'monthlyFull' => 'Full payment every month',
    ],
    'range_to_repeat_freq'     => [
        '1D'     => 'weekly',
        '1W'     => 'weekly',
        '1M'     => 'monthly',
        '3M'     => 'quarterly',
        '6M'     => 'half-year',
        '1Y'     => 'yearly',
        'custom' => 'custom',
    ],
    'subTitlesByIdentifier'    =>
        [
            'asset'   => 'Asset accounts',
            'expense' => 'Expense accounts',
            'revenue' => 'Revenue accounts',
            'cash'    => 'Cash accounts',
        ],
    'subIconsByIdentifier'     =>
        [
            'asset'               => 'fa-money',
            'Asset account'       => 'fa-money',
            'Default account'     => 'fa-money',
            'Cash account'        => 'fa-money',
            'expense'             => 'fa-shopping-cart',
            'Expense account'     => 'fa-shopping-cart',
            'Beneficiary account' => 'fa-shopping-cart',
            'revenue'             => 'fa-download',
            'Revenue account'     => 'fa-download',
            'import'              => 'fa-download',
            'Import account'      => 'fa-download',
        ],
    'accountTypesByIdentifier' =>
        [
            'asset'   => ['Default account', 'Asset account'],
            'expense' => ['Expense account', 'Beneficiary account'],
            'revenue' => ['Revenue account'],
            'import'  => ['Import account'],
        ],
    'accountTypeByIdentifier'  =>
        [
            'asset'   => 'Asset account',
            'expense' => 'Expense account',
            'revenue' => 'Revenue account',
            'opening' => 'Initial balance account',
            'initial' => 'Initial balance account',
            'import'  => 'Import account',
        ],
    'shortNamesByFullName'     =>
        [
            'Default account'     => 'asset',
            'Asset account'       => 'asset',
            'Import account'      => 'import',
            'Expense account'     => 'expense',
            'Beneficiary account' => 'expense',
            'Revenue account'     => 'revenue',
            'Cash account'        => 'cash',
        ],
    'languages'                => [
        'de_DE' => ['name_locale' => 'Deutsch', 'name_english' => 'German', 'complete' => true],
        'en_US' => ['name_locale' => 'English', 'name_english' => 'English', 'complete' => true],
        'es_ES' => ['name_locale' => 'Español', 'name_english' => 'Spanish', 'complete' => false],
        'fr_FR' => ['name_locale' => 'Français', 'name_english' => 'French', 'complete' => false],
        'hr_HR' => ['name_locale' => 'hrvatski', 'name_english' => 'Croatian', 'complete' => false],
        'nl_NL' => ['name_locale' => 'Nederlands', 'name_english' => 'Dutch', 'complete' => true],
        'pl_PL' => ['name_locale' => 'Polski', 'name_english' => 'Polish ', 'complete' => false],
        'pt_BR' => ['name_locale' => 'Português do Brasil', 'name_english' => 'Portuguese (Brazil)', 'complete' => true],
        'ru-RU' => ['name_locale' => 'Russian', 'name_english' => 'Russian', 'complete' => false],
        'zh-HK' => ['name_locale' => '繁體中文（香港）', 'name_english' => 'Chinese Traditional, Hong Kong', 'complete' => false],
        'zh-TW' => ['name_locale' => '正體中文', 'name_english' => 'Chinese Traditional', 'complete' => false],
    ],
    'transactionTypesByWhat'   => [
        'expenses'   => ['Withdrawal'],
        'withdrawal' => ['Withdrawal'],
        'revenue'    => ['Deposit'],
        'deposit'    => ['Deposit'],
        'transfer'   => ['Transfer'],
        'transfers'  => ['Transfer'],
    ],
    'transactionIconsByWhat'   => [
        'expenses'   => 'fa-long-arrow-left',
        'withdrawal' => 'fa-long-arrow-left',
        'revenue'    => 'fa-long-arrow-right',
        'deposit'    => 'fa-long-arrow-right',
        'transfer'   => 'fa-exchange',
        'transfers'  => 'fa-exchange',

    ],
    'bindables'                => [
        'account'           => 'FireflyIII\Models\Account',
        'attachment'        => 'FireflyIII\Models\Attachment',
        'bill'              => 'FireflyIII\Models\Bill',
        'budget'            => 'FireflyIII\Models\Budget',
        'category'          => 'FireflyIII\Models\Category',
        'transaction_type'  => 'FireflyIII\Models\TransactionType',
        'currency'          => 'FireflyIII\Models\TransactionCurrency',
        'limitrepetition'   => 'FireflyIII\Models\LimitRepetition',
        'budgetlimit'       => 'FireflyIII\Models\BudgetLimit',
        'piggyBank'         => 'FireflyIII\Models\PiggyBank',
        'tj'                => 'FireflyIII\Models\TransactionJournal',
        'unfinishedJournal' => 'FireflyIII\Support\Binder\UnfinishedJournal',
        'tag'               => 'FireflyIII\Models\Tag',
        'rule'              => 'FireflyIII\Models\Rule',
        'ruleGroup'         => 'FireflyIII\Models\RuleGroup',
        'jobKey'            => 'FireflyIII\Models\ExportJob',
        'importJob'         => 'FireflyIII\Models\ImportJob',
        'accountList'       => 'FireflyIII\Support\Binder\AccountList',
        'budgetList'        => 'FireflyIII\Support\Binder\BudgetList',
        'journalList'       => 'FireflyIII\Support\Binder\JournalList',
        'categoryList'      => 'FireflyIII\Support\Binder\CategoryList',
        'tagList'           => 'FireflyIII\Support\Binder\TagList',
        'start_date'        => 'FireflyIII\Support\Binder\Date',
        'end_date'          => 'FireflyIII\Support\Binder\Date',
    ],
    'rule-triggers'            => [
        'user_action'           => 'FireflyIII\Rules\Triggers\UserAction',
        'from_account_starts'   => 'FireflyIII\Rules\Triggers\FromAccountStarts',
        'from_account_ends'     => 'FireflyIII\Rules\Triggers\FromAccountEnds',
        'from_account_is'       => 'FireflyIII\Rules\Triggers\FromAccountIs',
        'from_account_contains' => 'FireflyIII\Rules\Triggers\FromAccountContains',
        'to_account_starts'     => 'FireflyIII\Rules\Triggers\ToAccountStarts',
        'to_account_ends'       => 'FireflyIII\Rules\Triggers\ToAccountEnds',
        'to_account_is'         => 'FireflyIII\Rules\Triggers\ToAccountIs',
        'to_account_contains'   => 'FireflyIII\Rules\Triggers\ToAccountContains',
        'amount_less'           => 'FireflyIII\Rules\Triggers\AmountLess',
        'amount_exactly'        => 'FireflyIII\Rules\Triggers\AmountExactly',
        'amount_more'           => 'FireflyIII\Rules\Triggers\AmountMore',
        'description_starts'    => 'FireflyIII\Rules\Triggers\DescriptionStarts',
        'description_ends'      => 'FireflyIII\Rules\Triggers\DescriptionEnds',
        'description_contains'  => 'FireflyIII\Rules\Triggers\DescriptionContains',
        'description_is'        => 'FireflyIII\Rules\Triggers\DescriptionIs',
        'transaction_type'      => 'FireflyIII\Rules\Triggers\TransactionType',
        'category_is'           => 'FireflyIII\Rules\Triggers\CategoryIs',
        'budget_is'             => 'FireflyIII\Rules\Triggers\BudgetIs',
        'tag_is'                => 'FireflyIII\Rules\Triggers\TagIs',
    ],
    'rule-actions'             => [
        'set_category'        => 'FireflyIII\Rules\Actions\SetCategory',
        'clear_category'      => 'FireflyIII\Rules\Actions\ClearCategory',
        'set_budget'          => 'FireflyIII\Rules\Actions\SetBudget',
        'clear_budget'        => 'FireflyIII\Rules\Actions\ClearBudget',
        'add_tag'             => 'FireflyIII\Rules\Actions\AddTag',
        'remove_tag'          => 'FireflyIII\Rules\Actions\RemoveTag',
        'remove_all_tags'     => 'FireflyIII\Rules\Actions\RemoveAllTags',
        'set_description'     => 'FireflyIII\Rules\Actions\SetDescription',
        'append_description'  => 'FireflyIII\Rules\Actions\AppendDescription',
        'prepend_description' => 'FireflyIII\Rules\Actions\PrependDescription',

        'set_source_account'      => 'FireflyIII\Rules\Actions\SetSourceAccount',
        'set_destination_account' => 'FireflyIII\Rules\Actions\SetDestinationAccount',
    ],
    'rule-actions-text'        => [
        'set_category',
        'set_budget',
        'add_tag',
        'remove_tag',
        'set_description',
        'append_description',
        'prepend_description',
    ],
    'test-triggers'            => [
        'limit' => 10,
        'range' => 200,
    ],
    'default_currency'         => 'EUR',
    'default_language'         => 'en_US',
    'search_modifiers'         => ['amount_is', 'amount', 'amount_max', 'amount_min', 'amount_less', 'amount_more', 'source', 'destination', 'category',
                                   'budget', 'bill', 'type', 'date', 'date_before', 'date_after','on','before','after'],
    // tag notes has_attachments
];
