<?php
defined('ABSPATH') || die();
/** @var $this NextendSocialProviderAdmin */

$provider = $this->getProvider();
?>
<ol>
    <li><?php printf(__('Navigate to <b>%s</b>', 'nextend-facebook-connect'), '<a href="https://developers.facebook.com/apps/" target="_blank">https://developers.facebook.com/apps/</a>'); ?></li>
    <li><?php printf(__('Log in with your %s credentials if you are not logged in', 'nextend-facebook-connect'), 'Facebook'); ?></li>
    <li><?php printf(__('Click on the App with App ID: <b>%s</b>', 'nextend-facebook-connect'), $provider->settings->get('appid')); ?></li>
    <li><?php printf(__('Click on the %1$s tab on the left side and then click on the %2$s button that appears next to the %3$s item.', 'nextend-facebook-connect'), '"<b>Use cases</b>"', '"<b>Customize</b>"', '"<b>Authenticate and request data from users with Facebook Login</b>"'); ?></li>
    <li><?php printf(__('Press the %1$s option that you can find below the %2$s section.', 'nextend-facebook-connect'), '"<b>Settings</b>"', '"<b>Facebook Login</b>"'); ?></li>
    <li><?php
        $loginUrls = $provider->getAllRedirectUrisForAppCreation();
        printf(__('Add the following URL to the %s field:', 'nextend-facebook-connect'), '"<b>Valid OAuth redirect URIs</b>"');
        echo "<ul>";
        foreach ($loginUrls as $loginUrl) {
            echo "<li><strong>" . $loginUrl . "</strong></li>";
        }
        echo "</ul>";
        ?>
    </li>
    <li><?php printf(__('Click on the %1$s button.', 'nextend-facebook-connect'), '"<b>Save changes</b>"'); ?></li>
</ol>