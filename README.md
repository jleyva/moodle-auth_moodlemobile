moodle-auth_moodlemobile
========================

Authentication plugin used by the Mobile app to check:

- Web Services enabled
- Mobile Service enabled
- Site is in maintenance mode
- The user has to login in the  site using the browser (instead in the app)

Configuration
=============

Go to Site administration / Plugins / Authentication
Enable the Moodle Mobile authentication plugin
Edit the plugin settings, select:

- The user must log in using the app: This means that the user enter his credentials in the app.
- The user must log in using the browser: This means that a new browser instance will be launched, and the user has to enter his credentials in Moodle. This is intended to be used in sites with SSO plugins enabled (CAS, Shibboleth) or for sites that want to force to log in first in the site
- The user can log in using the app  but if it fails try in the browser. The user enter his credentials in the app if it fails, then the browser is opened. This is for sites using both SSO plugins and other auth methods (manual, email, etc...)