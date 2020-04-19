<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'base_route', '_controller' => 'App\\Controller\\BaseController::base'], null, null, null, false, false, null]],
        '/wizard/xhr/check-requirements' => [[['_route' => 'uvdesk_community_installation_wizard_check_requirements', '_controller' => 'App\\Controller\\ConfigureHelpdesk::evaluateSystemRequirements'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/verify-database-credentials' => [[['_route' => 'uvdesk_community_installation_wizard_verify_database_credentials', '_controller' => 'App\\Controller\\ConfigureHelpdesk::verifyDatabaseCredentials'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/intermediary/super-user' => [[['_route' => 'uvdesk_community_installation_wizard_store_super_user_credentials', '_controller' => 'App\\Controller\\ConfigureHelpdesk::prepareSuperUserDetailsXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/website-configure' => [[['_route' => 'uvdesk_community_installation_wizard_store_website_configuration', '_controller' => 'App\\Controller\\ConfigureHelpdesk::websiteConfigurationXHR'], null, null, null, false, false, null]],
        '/wizard/xhr/load/configurations' => [[['_route' => 'uvdesk_community_installation_wizard_update_configurations_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::updateConfigurationsXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/migrations' => [[['_route' => 'uvdesk_community_installation_wizard_migrate_database_schema_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::migrateDatabaseSchemaXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/entities' => [[['_route' => 'uvdesk_community_installation_wizard_populate_database_entities_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::populateDatabaseEntitiesXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/super-user' => [[['_route' => 'uvdesk_community_installation_wizard_create_default_super_user_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::createDefaultSuperUserXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/website-configure' => [[['_route' => 'uvdesk_community_installation_wizard_update_website_configuration', '_controller' => 'App\\Controller\\ConfigureHelpdesk::updateWebsiteConfigurationXHR'], null, ['POST' => 0], null, false, false, null]],
        '/mailbox/listener' => [[['_route' => 'helpdesk_member_mailbox_notification', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processMailXHR', '_locale' => 'en'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/(en|fr|it)(?'
                    .'|/(?'
                        .'|member/(?'
                            .'|log(?'
                                .'|in(*:205)'
                                .'|out(*:216)'
                            .')'
                            .'|dashboard(*:234)'
                            .'|pr(?'
                                .'|ofile(?'
                                    .'|(*:255)'
                                .')'
                                .'|ivilege(?'
                                    .'|s(?'
                                        .'|(*:278)'
                                        .'|/xhr(*:290)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/]++)(*:311)'
                                        .'|delete/xhr(?:/([^/]++))?(*:343)'
                                    .')'
                                .')'
                                .'|epared\\-responses(?'
                                    .'|(*:373)'
                                    .'|/(?'
                                        .'|delete(?:/([^/]++))?(*:405)'
                                        .'|a(?'
                                            .'|jax(*:420)'
                                            .'|dd(*:430)'
                                        .')'
                                        .'|edit(?:/([^/]++))?(*:457)'
                                        .'|xhr/action/options(?:/([^/]++)(?:/([^/]++))?)?(*:511)'
                                    .')'
                                .')'
                            .')'
                            .'|a(?'
                                .'|gent(?'
                                    .'|/xhr(?:/([^/]++))?(*:551)'
                                    .'|(?:/([^/]++))?(*:573)'
                                    .'|s(?'
                                        .'|(*:585)'
                                        .'|/xhr(*:597)'
                                    .')'
                                .')'
                                .'|pps(?'
                                    .'|(*:613)'
                                    .'|/(?'
                                        .'|collection(*:635)'
                                        .'|([^/]++)/([^/]++)/([^/]++)(?'
                                            .'|(*:672)'
                                            .'|/(?'
                                                .'|api(*:687)'
                                                .'|callback(*:703)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|c(?'
                                .'|reate/(?'
                                    .'|agent(*:734)'
                                    .'|group(*:747)'
                                    .'|team(*:759)'
                                    .'|privilege(*:776)'
                                    .'|customer(*:792)'
                                .')'
                                .'|ustomer(?'
                                    .'|s(?'
                                        .'|(*:815)'
                                        .'|/xhr(*:827)'
                                    .')'
                                    .'|/update\\-star(*:849)'
                                    .'|(?:/([^/]++))?(*:871)'
                                    .'|/xhr(?:/([^/]++))?(*:897)'
                                .')'
                                .'|ategories(*:915)'
                            .')'
                            .'|group(?'
                                .'|s(?'
                                    .'|(*:936)'
                                    .'|/xhr(*:948)'
                                .')'
                                .'|/(?'
                                    .'|([^/]++)(*:969)'
                                    .'|delete/xhr(?:/([^/]++))?(*:1001)'
                                .')'
                            .')'
                            .'|t(?'
                                .'|e(?'
                                    .'|am(?'
                                        .'|s(?'
                                            .'|(*:1029)'
                                            .'|/xhr(*:1042)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/]++)(*:1064)'
                                            .'|delete/xhr(?:/([^/]++))?(*:1097)'
                                        .')'
                                    .')'
                                    .'|mplate(?'
                                        .'|s(*:1118)'
                                        .'|\\-ajax(?:/([^/]++))?(*:1147)'
                                        .'|/(?'
                                            .'|add(*:1163)'
                                            .'|edit(?:/([^/]++))?(*:1190)'
                                        .')'
                                    .')'
                                .')'
                                .'|h(?'
                                    .'|eme/helpdesk(*:1218)'
                                    .'|read(?'
                                        .'|s/(?'
                                            .'|ajax(?'
                                                .'|(?:/([^/]++))?(*:1260)'
                                                .'|/action(?:/([^/]++))?(*:1290)'
                                            .')'
                                            .'|update(?:/([^/]++))?(*:1320)'
                                        .')'
                                        .'|/(?'
                                            .'|encoded\\-images/save/([^/]++)(*:1363)'
                                            .'|add(?:/([^/]++))?(*:1389)'
                                        .')'
                                    .')'
                                .')'
                                .'|icket(?'
                                    .'|s(?'
                                        .'|(*:1413)'
                                        .'|/(?'
                                            .'|xhr(*:1429)'
                                            .'|mass\\-xhr(*:1447)'
                                            .'|filter\\-options(*:1471)'
                                            .'|search\\-filter\\-options(*:1503)'
                                        .')'
                                    .')'
                                    .'|/(?'
                                        .'|view(?:/([^/]++))?(*:1536)'
                                        .'|xhr(?:/([^/]++))?(*:1562)'
                                        .'|s(?'
                                            .'|ave(?'
                                                .'|(*:1581)'
                                                .'|d\\-reply\\-apply(?:/([^/]++))?(*:1619)'
                                            .')'
                                            .'|earch\\-filter\\-options(?'
                                                .'|(*:1654)'
                                            .')'
                                        .')'
                                        .'|trash/([^/]++)(*:1679)'
                                        .'|d(?'
                                            .'|elete/([^/]++)(*:1706)'
                                            .'|ownload(?'
                                                .'|(?:/([^/]++))?(*:1739)'
                                                .'|\\-zip(?:/([^/]++))?(*:1767)'
                                            .')'
                                        .')'
                                        .'|labels/(?'
                                            .'|save(*:1792)'
                                            .'|update(?:/([^/]++))?(*:1821)'
                                        .')'
                                        .'|bookmark/xhr(*:1843)'
                                        .'|update/(?'
                                            .'|details/([^/]++)(*:1878)'
                                            .'|attributes(?:/([^/]++))?(*:1911)'
                                        .')'
                                        .'|collaborator(?:/([^/]++))?(*:1947)'
                                        .'|quick\\-view(?:/([^/]++))?(*:1981)'
                                        .'|prepared\\-response/xhr(?:/([^/]++)(?:/([^/]++))?)?(*:2040)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(*:2060)'
                                        .'|/(?'
                                            .'|xhr(*:2076)'
                                            .'|create(*:2091)'
                                            .'|remove(?:/([^/]++))?(*:2120)'
                                            .'|update/([^/]++)(*:2144)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|member/access\\-token(*:2177)'
                            .'|s(?'
                                .'|aved\\-(?'
                                    .'|filter\\-xhr(?:/([^/]++))?(*:2224)'
                                    .'|repl(?'
                                        .'|ies(?'
                                            .'|(*:2246)'
                                            .'|/xhr(?:/([^/]++))?(*:2273)'
                                        .')'
                                        .'|y/(?'
                                            .'|edit(?:/([^/]++))?(*:2306)'
                                            .'|add(?:/([^/]++))?(*:2332)'
                                        .')'
                                    .')'
                                .')'
                                .'|e(?'
                                    .'|ttings/(?'
                                        .'|swiftmailer(?'
                                            .'|(*:2372)'
                                            .'|/(?'
                                                .'|xhr(?'
                                                    .'|(*:2391)'
                                                    .'|/remove\\-configurations(*:2423)'
                                                .')'
                                                .'|create(*:2439)'
                                                .'|update/([^/]++)(*:2463)'
                                            .')'
                                        .')'
                                        .'|email/settings(*:2488)'
                                        .'|mailbox(?'
                                            .'|(*:2507)'
                                            .'|/(?'
                                                .'|xhr(*:2523)'
                                                .'|create(*:2538)'
                                                .'|update(?:/([^/]++))?(*:2567)'
                                                .'|remove(?:/([^/]++))?(*:2596)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rvice\\-call(*:2619)'
                                .')'
                                .'|upport\\-tags(?'
                                    .'|(*:2644)'
                                    .'|/(?'
                                        .'|xhr(*:2660)'
                                        .'|create(?:/([^/]++))?(*:2689)'
                                        .'|update(?:/([^/]++))?(*:2718)'
                                        .'|remove(?:/([^/]++))?(*:2747)'
                                    .')'
                                .')'
                            .')'
                            .'|email/xhr/settings_update(*:2784)'
                            .'|workflow(?'
                                .'|s(?'
                                    .'|(*:2808)'
                                    .'|/xhr(*:2821)'
                                .')'
                                .'|/(?'
                                    .'|add(*:2838)'
                                    .'|edit/([^/]++)(*:2860)'
                                    .'|xhr/(?'
                                        .'|condition/options(?:/([^/]++))?(*:2907)'
                                        .'|action/options(?:/([^/]++)(?:/([^/]++))?)?(*:2958)'
                                    .')'
                                .')'
                                .'|\\-ajax(?:/([^/]++))?(*:2989)'
                            .')'
                            .'|file\\-(?'
                                .'|upload(*:3014)'
                                .'|remove(*:3029)'
                            .')'
                            .'|url\\-upload(*:3050)'
                            .'|knowledgebase/folders(?'
                                .'|(*:3083)'
                                .'|/(?'
                                    .'|xhr(*:3099)'
                                    .'|new(*:3111)'
                                    .'|update(?'
                                        .'|(?:/([^/]++))?(*:3143)'
                                        .'|/xhr(?:/([^/]++))?(*:3170)'
                                    .')'
                                .')'
                            .')'
                            .'|([^/]++)/categories(*:3201)'
                            .'|categories/ajax(*:3225)'
                            .'|([^/]++)/categories/ajax(*:3258)'
                            .'|category/(?'
                                .'|a(?'
                                    .'|dd(*:3285)'
                                    .'|jax(?:/([^/]++))?(*:3311)'
                                .')'
                                .'|edit(?:/([^/]++))?(*:3339)'
                            .')'
                            .'|articles(*:3357)'
                            .'|([^/]++)/articles(*:3383)'
                            .'|solution/([^/]++)/articles(?'
                                .'|(*:3421)'
                                .'|/ajax(*:3435)'
                            .')'
                            .'|article(?'
                                .'|s/ajax(*:3461)'
                                .'|/(?'
                                    .'|a(?'
                                        .'|dd(*:3480)'
                                        .'|jax(?:/([^/]++))?(*:3506)'
                                    .')'
                                    .'|edit(?:/([^/]++))?(*:3534)'
                                .')'
                                .'|History(?:/([^/]++))?(*:3565)'
                                .'|Related(?:/([^/]++))?(*:3595)'
                            .')'
                            .'|b(?'
                                .'|randing/(?'
                                    .'|theme(?:/([^/]++))?(*:3639)'
                                    .'|ajax(*:3652)'
                                .')'
                                .'|lock/spam(*:3671)'
                            .')'
                        .')'
                        .'|fo(?'
                            .'|rgot\\-password(*:3701)'
                            .'|lder(?'
                                .'|(?:/([^/]++))?(*:3731)'
                                .'|/([^/]++)/articles(*:3758)'
                            .')'
                        .')'
                        .'|update\\-credentials(?:/([^/]++)(?:/([^/]++))?)?(*:3816)'
                        .'|c(?'
                            .'|ustomer/(?'
                                .'|log(?'
                                    .'|in(*:3848)'
                                    .'|out(*:3860)'
                                .')'
                                .'|a(?'
                                    .'|ccount(*:3880)'
                                    .'|ttachment/([^/]++)/view(*:3912)'
                                .')'
                                .'|t(?'
                                    .'|icket(?'
                                        .'|s(?'
                                            .'|(*:3938)'
                                            .'|/xhr(*:3951)'
                                        .')'
                                        .'|/(?'
                                            .'|view(?:/([^/]++))?(*:3983)'
                                            .'|rate(?:/([^/]++))?(*:4010)'
                                            .'|d(?'
                                                .'|raft\\-save(?:/([^/]++))?(*:4047)'
                                                .'|ownload(?'
                                                    .'|(?:/([^/]++))?(*:4080)'
                                                    .'|\\-ticket\\-zip(?:/([^/]++))?(*:4116)'
                                                .')'
                                            .')'
                                            .'|collaborator(?:/([^/]++))?(*:4153)'
                                            .'|success(?:/([^/]++)(?:/([^/]++))?)?(*:4197)'
                                        .')'
                                    .')'
                                    .'|hread(?'
                                        .'|s/ajax(?:/([^/]++))?(*:4236)'
                                        .'|/(?'
                                            .'|save(?:/([^/]++))?(*:4267)'
                                            .'|encoded\\-images/save/([^/]++)(*:4305)'
                                        .')'
                                    .')'
                                .')'
                                .'|create\\-ticket(*:4331)'
                                .'|search/article(?:/([^/]++))?(*:4368)'
                            .')'
                            .'|ategor(?'
                                .'|ies(*:4390)'
                                .'|y(?:/([^/]++))?(*:4414)'
                            .')'
                        .')'
                        .'|exception(*:4434)'
                        .'|article(?:/([^/]++))?(*:4464)'
                        .'|blog(?:/([^/]++))?(*:4491)'
                        .'|rating/([^/]++)(*:4515)'
                        .'|search(?:/([^/]++))?(*:4544)'
                        .'|tag(?:/([^/]++)(?:/([^/]++))?)?(*:4584)'
                    .')'
                    .'|(*:4594)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        205 => [[['_route' => 'helpdesk_member_handle_login', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        216 => [[['_route' => 'helpdesk_member_handle_logout', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        234 => [[['_route' => 'helpdesk_member_dashboard', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadDashboard', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        255 => [
            [['_route' => 'helpdesk_member_profile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
            [['_route' => 'edit_profile', 'panelId' => 'usersprofile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\UserActivityController::editProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
        ],
        278 => [[['_route' => 'helpdesk_member_privilege_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::listPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        290 => [[['_route' => 'helpdesk_member_privilege_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::listPrivilegeXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        311 => [[['_route' => 'helpdesk_member_update_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::editPrivilege', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        343 => [[['_route' => 'helpdesk_member_remove_privilege_xhr', 'supportPrivilegeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::deletePrivilegeXHR', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        373 => [[['_route' => 'prepare_response_action', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::prepareResponseList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        405 => [[['_route' => 'prepare_response_delete', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseDeleteXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        420 => [[['_route' => 'prepare_response_list_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        430 => [[['_route' => 'prepare_response_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::createPrepareResponse', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        457 => [[['_route' => 'prepare_response_editaction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::editPrepareResponse', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        511 => [[['_route' => 'helpdesk_member_prepared_response_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::getPreparedResponseActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        551 => [[['_route' => 'helpdesk_member_account_xhr', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::deleteAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        573 => [[['_route' => 'helpdesk_member_account', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::editAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        585 => [[['_route' => 'helpdesk_member_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::listAgents', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        597 => [[['_route' => 'helpdesk_member_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::listAgentsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        613 => [[['_route' => 'uvdesk_extensions_applications_dashboard', 'panelId' => 'apps', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applications', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        635 => [[['_route' => 'uvdesk_extensions_applications_dashboard_xhr', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applicationsXHR', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        672 => [[['_route' => 'uvdesk_extensions_standalone_application_dashboard', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::dashboard', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], null, null, false, true, null]],
        687 => [[['_route' => 'uvdesk_extensions_standalone_application_api_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::apiEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1, 'PUT' => 2, 'DELETE' => 3], null, false, false, null]],
        703 => [[['_route' => 'uvdesk_extensions_standalone_application_callback_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::callbackEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        734 => [[['_route' => 'helpdesk_member_create_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::createAgent', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        747 => [[['_route' => 'helpdesk_member_create_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::createGroup', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        759 => [[['_route' => 'helpdesk_member_create_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::createTeam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        776 => [[['_route' => 'helpdesk_member_create_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::createPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        792 => [[['_route' => 'helpdesk_member_create_customer_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::createCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        815 => [[['_route' => 'helpdesk_member_manage_customer_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::listCustomers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        827 => [[['_route' => 'helpdesk_member_manage_customer_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::listCustomersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        849 => [[['_route' => 'helpdesk_member_bookmark_customer_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::bookmarkCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        871 => [[['_route' => 'helpdesk_member_manage_customer_account', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::editCustomer', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        897 => [[['_route' => 'helpdesk_member_remove_customer_account_xhr', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::removeCustomerXHR', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        915 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        936 => [[['_route' => 'helpdesk_member_support_group_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::listGroups', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        948 => [[['_route' => 'helpdesk_member_support_group_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::listGroupsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        969 => [[['_route' => 'helpdesk_member_update_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::editGroup', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        1001 => [[['_route' => 'helpdesk_member_remove_support_group_xhr', 'supportGroupId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::deleteGroupXHR', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        1029 => [[['_route' => 'helpdesk_member_support_team_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::listTeams', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1042 => [[['_route' => 'helpdesk_member_support_team_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::listTeamsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1064 => [[['_route' => 'helpdesk_member_update_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::editTeam', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1097 => [[['_route' => 'helpdesk_member_remove_support_team_xhr', 'supportTeamId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::deleteTeamXHR', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1118 => [[['_route' => 'email_templates_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templates', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1147 => [[['_route' => 'email_templates_xhraction', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templatesxhr', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        1163 => [[['_route' => 'email_templates_addaction', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1190 => [[['_route' => 'email_templates_editaction', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        1218 => [[['_route' => 'helpdesk_member_helpdesk_theme', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Theme::updateHelpdeskTheme', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1260 => [[['_route' => 'helpdesk_member_thread_collection_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\ThreadXHR::listTicketThreadCollectionXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1290 => [[['_route' => 'helpdesk_member_thread_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::threadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1320 => [[['_route' => 'helpdesk_member_thread_update_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::updateThreadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1363 => [[['_route' => 'helpdesk_member_thread_encoded_image_uploader', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1389 => [[['_route' => 'helpdesk_member_add_ticket_thread', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::saveThread', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1413 => [[['_route' => 'helpdesk_member_ticket_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1429 => [[['_route' => 'helpdesk_member_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1447 => [[['_route' => 'helpdesk_member_ticket_collection_mass_action_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1471 => [[['_route' => 'helpdesk_member_ticket_collection_load_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1503 => [[['_route' => 'helpdesk_member_ticket_collection_search_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketCollectionSearchFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1536 => [[['_route' => 'helpdesk_member_ticket', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::loadTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1562 => [[['_route' => 'helpdesk_member_ticket_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1581 => [[['_route' => 'helpdesk_member_create_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::saveTicket', '_locale' => 'en'], ['_locale'], ['POST' => 0, 'PUT' => 1], null, false, false, null]],
        1619 => [[['_route' => 'helpdesk_member_ticket_saved_reply_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSavedReplies', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1654 => [
            [['_route' => 'search_ticket_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getSearchFilterOptionsXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
            [['_route' => 'helpdesk_member_ticket_search_filter_options', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSearchFilterOptions', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
        ],
        1679 => [[['_route' => 'helpdesk_member_trash_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::trashTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1706 => [[['_route' => 'helpdesk_member_delete_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::deleteTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1739 => [[['_route' => 'helpdesk_member_ticket_download_attachment', 'attachmendId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmendId'], null, null, false, true, null]],
        1767 => [[['_route' => 'helpdesk_member_ticket_download_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadZipAttachment', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1792 => [[['_route' => 'helpdesk_member_ticket_add_label_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::saveTicketLabel', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1821 => [[['_route' => 'helpdesk_member_ticket_label_xhr', 'ticketLabelId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::ticketLabelXHR', '_locale' => 'en'], ['_locale', 'ticketLabelId'], null, null, false, true, null]],
        1843 => [[['_route' => 'helpdesk_member_bookmark_ticket_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::bookmarkTicketXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1878 => [[['_route' => 'helpdesk_member_update_ticket_details_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketDetails', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1911 => [[['_route' => 'helpdesk_member_update_ticket_attributes_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketAttributes', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1947 => [[['_route' => 'helpdesk_member_ticket_manage_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateCollaboratorXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1981 => [[['_route' => 'helpdesk_member_ticket_quick_view_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getTicketQuickViewDetailsXhr', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        2040 => [[['_route' => 'helpdesk_member_ticket_prepared_response_xhr', 'ticketId' => 0, 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::applyTicketPreparedResponseXHR', '_locale' => 'en'], ['_locale', 'ticketId', 'id'], null, null, false, true, null]],
        2060 => [[['_route' => 'helpdesk_member_ticket_type_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketTypeCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2076 => [[['_route' => 'helpdesk_member_ticket_type_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketTypeCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2091 => [[['_route' => 'helpdesk_member_create_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2120 => [[['_route' => 'helpdesk_member_remove_ticket_type', 'typeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTypeXHR', '_locale' => 'en'], ['_locale', 'typeId'], null, null, false, true, null]],
        2144 => [[['_route' => 'helpdesk_member_update_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale', 'ticketTypeId'], null, null, false, true, null]],
        2177 => [[['_route' => 'access_token_xhr', '_controller' => 'CoreFrameworkBundle:Api:accessTokenXhr', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2224 => [[['_route' => 'helpdesk_member_saved_filters_xhr', 'filterId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::savedFiltersXHR', '_locale' => 'en'], ['_locale', 'filterId'], null, null, false, true, null]],
        2246 => [[['_route' => 'helpdesk_member_saved_replies', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::loadSavedReplies', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2273 => [[['_route' => 'helpdesk_member_saved_replies_xhr', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::savedRepliesXHR', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2306 => [[['_route' => 'helpdesk_member_update_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2332 => [[['_route' => 'helpdesk_member_create_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2372 => [[['_route' => 'helpdesk_member_swiftmailer_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::loadMailers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2391 => [[['_route' => 'helpdesk_member_swiftmailer_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::loadMailersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2423 => [[['_route' => 'helpdesk_member_swiftmailer_remove_mailer_configuration_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::removeMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2439 => [[['_route' => 'helpdesk_member_swiftmailer_create_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::createMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2463 => [[['_route' => 'helpdesk_member_swiftmailer_update_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::updateMailerConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2488 => [[['_route' => 'helpdesk_member_emails_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettings::loadSettings', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2507 => [[['_route' => 'helpdesk_member_mailbox_settings', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::loadMailboxes', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2523 => [[['_route' => 'helpdesk_member_mailbox_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::loadMailboxesXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2538 => [[['_route' => 'helpdesk_member_mailbox_create_configuration', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::createMailboxConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2567 => [[['_route' => 'helpdesk_member_mailbox_update_configuration', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::updateMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2596 => [[['_route' => 'helpdesk_member_mailbox_remove_configuration_xhr', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::removeMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2619 => [[['_route' => 'ajax_service_call', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxServiceCall', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2644 => [[['_route' => 'helpdesk_member_ticket_tag_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTagCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2660 => [[['_route' => 'helpdesk_member_ticket_tag_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTagCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2689 => [[['_route' => 'helpdesk_member_ticket_create_tag_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::createTicketTagXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2718 => [[['_route' => 'helpdesk_member_update_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        2747 => [[['_route' => 'helpdesk_member_remove_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        2784 => [[['_route' => 'helpdesk_member_update_emails_settings_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettingsXHR::updateSettingsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2808 => [[['_route' => 'helpdesk_member_workflow_collection', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::listWorkflowCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2821 => [[['_route' => 'workflowslist_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::workflowsListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2838 => [[['_route' => 'workflows_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::createWorkflow', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2860 => [[['_route' => 'workflows_editaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::editWorkflow', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2907 => [[['_route' => 'helpdesk_member_workflow_condition_options_xhr', 'entity' => 'default', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowConditionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity'], null, null, false, true, null]],
        2958 => [[['_route' => 'helpdesk_member_workflow_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        2989 => [[['_route' => 'workflows_xhraction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::WorkflowsxhrAction', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3014 => [[['_route' => 'ajax_file_upload', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3029 => [[['_route' => 'ajax_file_remove', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileRemove', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3050 => [[['_route' => 'ajax_url_file', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxUrlFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3083 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::listFolders', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3099 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::listFoldersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3111 => [[['_route' => 'helpdesk_member_knowledgebase_create_folder', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::createFolder', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3143 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::updateFolder', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        3170 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder_xhr', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::updateFolderXHR', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        3201 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3225 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3258 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3285 => [[['_route' => 'helpdesk_member_knowledgebase_create_category', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3311 => [[['_route' => 'helpdesk_member_knowledgebase_update_category_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3339 => [[['_route' => 'helpdesk_member_knowledgebase_update_category', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3357 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3383 => [[['_route' => 'helpdesk_member_knowledgebase_category_articles_collection', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListByCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, false, null]],
        3421 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3435 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3461 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3480 => [[['_route' => 'helpdesk_member_knowledgebase_create_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3506 => [[['_route' => 'helpdesk_member_knowledgebase_update_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3534 => [[['_route' => 'helpdesk_member_knowledgebase_update_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3565 => [[['_route' => 'helpdesk_member_knowledgebase_revision_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleHistoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3595 => [[['_route' => 'helpdesk_member_knowledgebase_related_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleRelatedXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3639 => [[['_route' => 'helpdesk_member_knowledgebase_theme', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::theme', '_locale' => 'en'], ['_locale', 'type'], null, null, false, true, null]],
        3652 => [[['_route' => 'helpdesk_member_knowledgebase_update_theme_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::BrandingXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3671 => [[['_route' => 'helpdesk_member_knowledgebase_spam', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::spam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3701 => [[['_route' => 'helpdesk_forgot_account_password', '_locale' => 'en', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::forgotPassword'], ['_locale'], null, null, false, false, null]],
        3731 => [[['_route' => 'helpdesk_knowledgebase_folder', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolder', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, true, null]],
        3758 => [[['_route' => 'helpdesk_knowledgebase_folder_article_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolderArticle', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3816 => [[['_route' => 'helpdesk_update_account_credentials', '_locale' => 'en', 'email' => '', 'verificationCode' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::updateCredentials'], ['_locale', 'email', 'verificationCode'], null, null, false, true, null]],
        3848 => [[['_route' => 'helpdesk_customer_login', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3860 => [[['_route' => 'helpdesk_customer_logout', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3880 => [[['_route' => 'helpdesk_customer_account', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::Account', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3912 => [[['_route' => 'helpdesk_customer_view_ticket_attachment', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AttachmentViewer::attachmentView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        3938 => [[['_route' => 'helpdesk_customer_ticket_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::Tickets', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3951 => [[['_route' => 'helpdesk_customer_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3983 => [[['_route' => 'helpdesk_customer_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4010 => [[['_route' => 'helpdesk_customer_rate_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::rateTicket', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4047 => [[['_route' => 'helpdesk_customer_save_ticket_draft', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveDraft', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4080 => [[['_route' => 'helpdesk_customer_download_ticket_attachment', 'attachmendId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmendId'], null, null, false, true, null]],
        4116 => [[['_route' => 'helpdesk_customer_download_ticket_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachmentZip', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        4153 => [[['_route' => 'helpdesk_customer_update_ticket_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketCollaboratorXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4197 => [[['_route' => 'helpdesk_customer_create_ticket_success', 'email' => '', 'flag' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketSuccess', '_locale' => 'en'], ['_locale', 'email', 'flag'], null, null, false, true, null]],
        4236 => [[['_route' => 'helpdesk_customer_thread_collection_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::threadListXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4267 => [[['_route' => 'helpdesk_customer_add_ticket_thread', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveReply', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4305 => [[['_route' => 'helpdesk_customer_upload_thread_encoded_image', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        4331 => [[['_route' => 'helpdesk_customer_create_ticket', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketAdd', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        4368 => [[['_route' => 'helpdesk_customer_front_article_search', 's' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::searchArticle', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        4390 => [[['_route' => 'helpdesk_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::listCategories', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4414 => [[['_route' => 'helpdesk_knowledgebase_category', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, true, null]],
        4434 => [[['_route' => 'helpdesk_knowledgebase_exception', '_controller' => 'WebkulDefaultBundle:Default:exceptionDefault', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4464 => [[['_route' => 'helpdesk_knowledgebase_read_article', 'article' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'article'], null, null, false, true, null]],
        4491 => [[['_route' => 'helpdesk_knowledgebase_read_slug_article', 'slug' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'slug'], null, null, false, true, null]],
        4515 => [[['_route' => 'helpdesk_knowledgebase_rate_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::rateArticle', '_locale' => 'en'], ['_locale', 'articleId'], null, null, false, true, null]],
        4544 => [[['_route' => 'helpdesk_knowledgebase_search', 's' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::searchKnowledgebase', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        4584 => [[['_route' => 'helpdesk_knowledgebase_tag', 'tag' => '', 'name' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewTaggedResources', '_locale' => 'en'], ['_locale', 'tag', 'name'], null, null, false, true, null]],
        4594 => [
            [['_route' => 'helpdesk_knowledgebase', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::home', '_locale' => 'en'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
