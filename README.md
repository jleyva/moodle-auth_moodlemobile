moodle-auth_moodlemobile
========================

Authentication plugin used by the Mobile app to check:

- Web Services enabled
- Mobile Service enabled
- Site is in maintenance mode
- The user has to login in the  site using the browser (instead in the app)

The app doesn't need this plugin installed in the Moodle site in order to work. But if your site uses SSO auth plugins like CAS or Shibboleth is mandatory to install this plugin.


Configuration
=============

Go to Site administration / Plugins / Authentication

Enable the Moodle Mobile authentication plugin

Edit the plugin settings, select:

- The user must log in using the app: This means that the user enter his credentials in the app.
- The user must log in using the browser: This means that a new browser instance will be launched, and the user has to enter his credentials in Moodle. This is intended to be used in sites with SSO plugins enabled (CAS, Shibboleth) or for sites that want to force to log in first in the site
- The user can log in using the app  but if it fails try in the browser. The user enter his credentials in the app if it fails, then the browser is opened. This is for sites using both SSO plugins and other auth methods (manual, email, etc...)

How it works
============

- When a user open the app (first time) a URL pointing to a Moodle site is required
- The user enters the URL and click "Check"
- The URL is checked. At this time, the auth/moodlemobile/check.php script is called: If the plugin is installed in the Moodle site, the app retrieve the type of login that should be performed
- If the type of log in is "using the app", just under the URL fields two new fields (username and password) are displayed
- If the type of log in is "using the browser", a message indicating that the user must enter his credentials at the Moodle site in the browser is displayed. The message is closed and the browser is open, the user enter his credentials in the Moodle site and once logged the app is launched again with the user authenticated.

If the plugin is not installed in the site, the type of login choosen is allways "log in using the app"