## Go to Top plugin for Shaarli

A plugin for Shaarli which add a "Go to top" button on the footer.

### Installation/configuration
Clone this repository inside your `tpl/plugins/` directory, or download the archive and unpack it there.  
The directory structure should look like:

```
└── tpl
    └── plugins
        └── gototop
            ├── README.md
            ├── gototop.php
            ├── gototop.html
            ├── gototop.css
            ├── scroll2Top.js
            └── top.php
```

To enable the plugin, just check it in the plugin administration page.

You can also add `gototop` to your list of enabled plugins in `data/config.json.php`
(`general.enabled_plugins` list).

This should look like:

```
"general": {
  "enabled_plugins": [
    "gototop",
    [...]
  ],
}
```
