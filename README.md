# DDEV WP Plugin Boilerplate

Plugin boilerplate with a DDEV WordPress local environment for plugin development! 

## Getting Started

Make the directory for your plugin project. Name is what you would like your plugin's directory to be named.
`mkdir your-plugin-name`

Then clone the boilerplate into your plugin directory.
`git clone https://github.com/broskees/ddev-wp-plugin-boilerplate.git your-plugin-name`

Finally navigate into your plugin directory and start the ddev environment.
`cd your-plugin-name && ddev start`

That's all you have to do!

The boilerplate is setup so that the `plugin` directory is the root of your plugin. Don't rename the plugin directory. That's where you'll development your plugin.

Under the hood composer will pull the latest WordPress version and install it in the `wordpress` directory. The `wordpress` directory is then set as the document root for ddev. Finally we mount the `plugin` directory to the `wp-content/plugins` directory in the WordPress installation.
