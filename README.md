Kohana String module
====================

Wrapper class for common functions & Kohana helpers.
All methods are chainable.

```php
    <?php
    //$user->name - e.g. orm property
    echo String::i($user->name)->escape()->to_input('name');
    //output: <input type="text" name="name" value="Escaped user name" />

    //$title - e.g. tranlsation key
    echo String::i($title)->i18n()->ucfirst()->limit(46)->to_anchor('my/action');
    //output: <a href="my/action">Translated title with first letter in upperca...</a>
```

Current methods:
----------------

* ucfirst() - Make a string first letter to uppercase
* escape()  - Escape string (XSS)
* i18n(array $values = null, $lang = 'en-us')   - Translate string with Kohana i18n class
* to_anchor($url, array $attributes = null)     - Create html a tag where title is current string
* to_input($name, $type = 'text', $attributes = array()) - Create html for input where 'value' is current string
* limit($length, $string_end = '...') - Limit string
* trim() - Strip whitespaces around string

Quick start:
------------
Add following line at bootstrap.php file in modules array "Kohana::modules(array());"
```php
'string'		=> MODPATH.'string'
```


Use like a Git submodule:
-------------------------
* git submodule add git@github.com:aivis/Kohana-String-module.git modules/string
* git submodule init
* git submodule update

