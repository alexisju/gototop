## Go to Top plugin for Shaarli

A plugin for [Shaarli](https://github.com/shaarli/shaarli) to add a "Go to top" button on the footer.

### Installation

Clone this repository inside your `/plugins/` directory, or download the archive and unpack it there.  
The directory structure should look like:

```
└── plugins
    └── gototop
        ├── README.md
        ├── gototop.php
        ├── gototop.html
        ├── gototop.css
        ├── scroll2Top.js
        └── top.php
```

### Activation

To enable the plugin, just check it on Shaarli's plugin administration page.

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

### Configuration

To change the icon or the tooltip text:

1. Open Shaarli's plugin administration page.
2. Scroll to the 'Plugin configuration' section.
3. Look for **gototop**.
4. Change values.
5. Click **Save**.
