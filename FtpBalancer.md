# Purpose #

Provide an FTP proxy that provides a means to design an ftp infrastructure that can scale out.

## Features ##

  * Proxy FTP traffic to server pools based on...
    * Hostname
    * source ip, target ip, netmask, etc
    * Username
  * Provide authentication service
  * Integrate with other authentication services: LDAP, Active Directory, etc.