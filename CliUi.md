﻿#summary Fast and easy to use command line based ui for configuring the balancer.

# PUROPSE #

The CliUi will be used to configure every part of the load balancer.  It should be fast and easy to use.

## Access ##

  * Access:  SSH over configurable port

## Design ##

  * Simple and fast interface
  * Support for language translations
  * Allow execution of command scripts

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