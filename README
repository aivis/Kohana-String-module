Kohana String module
====================

Wrapper class for common functions & Kohana helpers.
All methods are chainable.

    //$user->name - e.g. orm property
    echo String::i($user->name)->escape()->to_input('name');
    //output: <input type="text" name="name" value="Escaped user name" />

    //$title - e.g. tranlsation key
    echo String::i($title)->i18n()->ucfirst()->to_anchor('my/action');
    //output: <a href="my/action">Translated title with first letter in uppercase</a>

Use like a kohana submodule:
	git submodule add git@github.com:aivis/Kohana-String-module.git modules/string
	git submodule init
	git submodule update

