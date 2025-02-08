# DDEV WP Plugin Boilerplate

Plugin boilerplate with a DDEV WordPress local environment for plugin development! 

## Getting Started

Clone the boilerplate into your plugin directory. Make sure you replace `your-plugin-name` with the name of what you would like your plugin's directory to be named.
`git clone https://github.com/broskees/ddev-wp-plugin-boilerplate.git your-plugin-name`

Next navigate into your plugin directory.
`cd your-plugin-name`

Before starting the ddev environment, you must set the name and description of your plugin in `plugin/composer.json`.

Start the ddev environment.
`cd your-plugin-name && ddev start`

You should now be able to access your WordPress site at `http://your-plugin-name.ddev.site`.

The boilerplate is setup so that the `plugin` directory is the root of your plugin. Don't rename this directory. That's where the development of your plugin will happen.

Under the hood composer will pull the latest WordPress version and install it in the `wordpress` directory. The `wordpress` directory is then set as the document root for ddev. Finally we mount the `plugin` directory to the `wp-content/plugins` directory in the WordPress installation.
