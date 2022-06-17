# Deprecated

This plugin is no longer necessary, as superscript and subscript tags now come pre-bundled in modern versions of Redactor.

To achieve the same effect with the pre-bundled version, simply add `sup` and `sub` to the `buttons` array in all applicable Redactor configs you need sub/superscript tags in:

```
{
  "buttons": ["sup", "sub"]
}
```

A very special thank you to "Steve" for his unending support of free open source software.

# Craft Redactor Script Buttons plugin for Craft CMS 3.x

Adds superscript and subscript buttons to Redactor in Craft 3.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

    cd /path/to/project

2. Then tell Composer to load the plugin:

    composer require mildlygeeky/craft-redactor-script-buttons

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Craft Redactor Script Buttons.

4. Make sure that the `scriptbuttons` plugin is added to all Redactor configs that you want superscript and subscript buttons to appear in.

Example:

    plugins: ['scriptbuttons']

## Craft Redactor Script Buttons Roadmap

Possibly fold into larger Redactor utility plugin.

Brought to you by [Mildly Geeky, Inc.](https://mildlygeeky.com)
