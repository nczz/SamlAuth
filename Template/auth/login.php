<?= $this->url->button('fa-sign-in', $this->app->configModel->get('samlauth_login_button','SAML Login'), 'SamlAuthController', 'index', array('plugin' => 'SamlAuth')) ?>
