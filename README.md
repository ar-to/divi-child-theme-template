# divi-child-theme-template
A simple template for customizing footer, functions.php, css, etc from the Divi theme from Elegant Themes.
Currently tested for Divi 3.0.

Footer.php holds the changes to the footer that normaly has a generic build with Divi by Elegant Themes. Also note that Divi.3.0 has an option to change the footer built-into the customizer, so this file may not be needed anymore but it is still worth having a child theme for css, and functions.php changes. 

Functions.php hold code for modifying a plugin called Forced Login which makes the website accessable only by login in. The plugin author has a support forum but it took me some time to find the write code and an updated one within wordpress that will work do the following: 
  1.Change login logo, logo link, and logo tooltip when hovered.
  2.A login redirect built into the plugin but modified here.
  3.Lastly, I modified the email sender name, from-name in registration email, that are sent as part of Wordpress core. 
  
