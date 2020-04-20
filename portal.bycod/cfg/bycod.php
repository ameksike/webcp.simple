<?php
    //$config['bycod']['engine']['links']['onStart'][] = '';
    //$config['bycod']['engine']['links']['onStop'][] = '';
    //$config['bycod']['engine']['links']['onError'][] = '';
    //$config['bycod']['engine']['links']['onException'][] = '';

    $config['bycod']['engine']['links']['onConfig'][] = 'loader';
    //$config['bycod']['engine']['links']['onConfig'][] = 'rbac';
    $config['bycod']['engine']['links']['onRequest'][] = 'request';
    $config['bycod']['engine']['links']['onDispatch'][] = 'front';
    $config['bycod']['engine']['links']['onRender'][] = 'view';
    $config['bycod']['engine']['links']['onResponse'][] = 'response';

    $config['bycod']['engine']['workflow'][] = 'onStart';
    $config['bycod']['engine']['workflow'][] = 'onRequest';
    $config['bycod']['engine']['workflow'][] = 'onAccess';
    $config['bycod']['engine']['workflow'][] = 'onDispatch';
    $config['bycod']['engine']['workflow'][] = 'onRender';
    $config['bycod']['engine']['workflow'][] = 'onResponse';
    $config['bycod']['engine']['workflow'][] = 'onStop';

    $config['bycod']['view']['tpl']["html"] = "/src/client/html/";
    $config['bycod']['view']['tpl']["php"]  = "/src/server/tpl/";

    $config['bycod']['porter']['user'] = "guest";
    $config['bycod']['porter']['pass'] = "";
    $config['bycod']['porter']['role'] = "guest";
    $config['bycod']['role']['acl'] = "default";

    $config['bycod']['request']['controller'] = "main";
    $config['bycod']['request']['action'] = "index";

    $config['bycod']['loader']['Ksike'] =  __DIR__ .'/../lib/bycod/lib/';

    return $config;