<?php

$options['account_suffix'] = '';
$options['base_dn']                = 'OU=domain,DC=acopio,DC=cfg,DC=minag,DC=cu';
$options['domain_controllers']     = ['acopio.cfg.minag.cu'];
$options['admin_username']         = 'CN=Administrator,CN=Users,DC=acopio,DC=cfg,DC=minag,DC=cu';
$options['admin_password']         = 'Zaqwsx-1234';

$options['real_primarygroup'] = '';
$options['use_ssl'] = false;
$options['use_tls'] = false;
$options['recursive_groups'] = true;
$options['ad_port'] = adLDAP\adLDAP::ADLDAP_LDAP_PORT;
$options['sso'] = '';

return $options;