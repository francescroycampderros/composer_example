


Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

Composer is not a package manager in the same sense as Yum or Apt are. Yes, it deals with "packages" or libraries, but it manages them on a per-project basis, installing them in a directory (e.g. vendor) inside your project. 

Suppose:

    You have a project that depends on a number of libraries.
    Some of those libraries depend on other libraries.

Composer:

    Enables you to declare the libraries you depend on.
    Finds out which versions of which packages can and need to be installed, and installs them (meaning it downloads them into your project).
    You can update all your dependencies in one command.




COMPOSER.PHAR:

This file is the Composer binary. It is a PHAR (PHP archive), which is an archive format for PHP which can be run on the command line, amongst other things.

Now run "php composer.phar [COMMAND]" in order to run Composer.









To start using Composer in your project, all you need is a composer.json file. This file describes the dependencies of your project and may contain other metadata as well. It typically should go in the top-most directory of your project/VCS repository. You can technically run Composer anywhere but if you want to publish a package to Packagist.org, it will have to be able to find the file at the top of your VCS repository.

Crea el teu composer.json manualment i posa les dependencies que necessites










I llavors "php composer.phar update"

This will make Composer do two things:

    It resolves all dependencies listed in your composer.json file and writes all of the packages and their exact versions to the composer.lock file, locking the project to those specific versions. You should commit the composer.lock file to your project repo so that all people working on the project are locked to the same versions of dependencies (more below). This is the main role of the update command.
    It then implicitly runs the install command. This will download the dependencies' files into the vendor directory in your project. (The vendor directory is the conventional location for all third-party code in a project). In our example from above, you would end up with the Monolog source files in vendor/monolog/monolog/. As Monolog has a dependency on psr/log, that package's files can also be found inside vendor/.

    Tip: If you are using git for your project, you probably want to add vendor in your .gitignore. You really don't want to add all of that third-party code to your versioned repository.


Next: Commit your composer.lock file to version control












Installing from composer.lock#

If there is already a composer.lock file in the project folder, it means either you ran the update command before, or someone else on the project ran the update command and committed the composer.lock file to the project (which is good).


So after fetching new changes from your VCS repository it is recommended to run a Composer install to make sure the vendor directory is up in sync with your composer.lock file.

"php composer.phar install"
