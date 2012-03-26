Kohana String module
====================

Wrapper class for common functions & Kohana helpers.
All methods are chainable.

    //$user->name - e.g. orm property
    echo String::i($user->name)->escape()->to_input('name');
    //output: <input type="text" name="name" value="Escaped user name" />

    //$title - e.g. tranlsation key
    echo String::i($title)->i18n()->ucfirst()->limit(46)->to_anchor('my/action');
    //output: <a href="my/action">Translated title with first letter in upperca...</a>


