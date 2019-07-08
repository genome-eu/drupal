SUMMARY
=====

This module is intended to provide Genome payment transactions for Drupal Commerce 7.x.
Module is redirecting customer to https://hpp-service.genome.eu/hpp where the payment is actually done.
Payment type is set via https://merchant.genome.eu account according to your needs.


REQUIREMENTS
----

xautoload module (https://www.drupal.org/project/xautoload)


INSTALLATION
----

* Install as usual, see http://drupal.org/node/1897420 for further information.


CONFIGURATION
----

After being installed this module automatically adds Genome payment method to checkout.

Use "Genome" section in Admin panel to configure the module.
This module requires "Genome public key" and "Genome secret key" which are supposed to be taken from https://merchant.genome.eu after registration.
