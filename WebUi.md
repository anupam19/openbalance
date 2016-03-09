#summary Fast and easy to use web based ui for configuring the balancer.

# PUROPSE #

The WebUi will be used to configure every part of the load balancer.  It should be fast and easy to use.

## Access ##

  * Access:  Https over a configurable port
  * Authentication:
    * Local users
    * Remote options
      * LDAP auth
      * Radius auth

## Design ##

  * Simple and fast interface
  * Support for language translations
  * "Web 2.0"
    * DOJO ftw
  * Develop for Firefox

## UI Sections ##

#### System ####

  * User admin
    * Add, edit, delete, enable/disable users
    * Privilege levels
      * Admin rights
      * Read only rights
      * Reports viewing
  * Network admin
    * Configure interfaces
    * Add, edit, delete custom routes
    * DNS Settings
  * Server monitoring options
    * BB
    * Nagios

#### Rules ####

  * Not sure...  some general area to set up different kinds of rules for content switching, acl's, etc...

#### SSL ####

  * Wizard for creating reqs, self sign, links, etc.
  * Upload/download

#### Load Balancing ####

  * Servers
  * Services
  * Virutal Servers