Symfony Twelve-Factor Edition
=================================
[ ![Codeship Status for pierregoudjo/symfony-twelve-factor-edition](https://codeship.com/projects/4b200ab0-6156-0133-62e1-066368b87f16/status?branch=master)](https://codeship.com/projects/112472)
[![Codacy Badge](https://api.codacy.com/project/badge/grade/c891a63d764b4fc1a474c5776d04e39f)](https://www.codacy.com/app/pierre-goudjo/symfony-twelve-factor-edition)

Welcome to the Symfony Twelve-Factor Edition - a fully-functional Symfony2
application that you can use as the skeleton for your new applications.
It is ispired by the [Twelve-Factor Manifesto][1] by Heroku and Benjamin Eberlei
article on configuring a [minimal Symfony distribution][2].

What's inside?
--------------

The Symfony Twelve-Factor Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Doctrine ORM/DBAL;

  * Annotations enabled for everything.

  * Logs sent to STDOUT

  * A .env.example file that contains an example of configuration variables. (You can rename it as .env if
    you want to load the environment from a file)

  * A simple Vagrantfile with some shell provisioning to install PHP/NGINX and the default config to make symfony works like a breeze

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

How to set it up
----------------
Launch the app, you must: 

  * Set the configuration variables of your app (via a .env file or for example SetEnv in Apache)


Enjoy!

[1]:  http://12factor.net
[2]:  http://www.whitewashing.de/2014/10/26/symfony_all_the_things_web.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.0/book/doctrine.html
[8]:  https://symfony.com/doc/3.0/book/templating.html
[9]:  https://symfony.com/doc/3.0/book/security.html
[10]: https://symfony.com/doc/3.0/cookbook/email.html
[11]: https://symfony.com/doc/3.0/cookbook/logging/monolog.html
