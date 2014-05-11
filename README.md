Leaven Plugin Framework
==============
*An OOP Framework for building WordPress Plugins.*

Leaven: *An element that produces an altering or transforming influence.*

##Premise
The premise is simple. Leaven provides a structure and library of
components for WordPress plugin development.

##Usage
###Structure
   | -- bootstrap.php  
   | -- LeavenPlugin.php  
   | -- Leaven  
   | -- | -- Controllers  
   | -- | -- | -- BaseController.php  
   | -- | -- Lib  
   | -- | -- | -- MetaBox  
   | -- | -- | -- Registers  
   | -- | -- Views  
   | -- | -- | -- Assets  
   | -- | -- | -- | -- MediaUploader

###Files
**bootstrap.php**  
This file contains the WordPress [plugin header][1] information and
instantiates the framework.

**LeavenPlugin.php**  
Class for controlling the activation, deactivation, and instantiation
of plugin controllers and libraries.

**Leaven/Controllers**  
Directory for your plugin controllers.  

**Leaven/Controllers/BaseController.php**  
Abstract class for providing helper functions for directing views.  


**Leaven/Lib**  
Directory for holding libraries which are available to aid in the addition
and utilization of WordPress Core components.  
*Items in this directory will eventually be available within separate
repositories and will require their own factories. This will aid in the ability
to have a more componentized structure.*

**Leaven/Lib/MetaBox**  
The MetaBox library aids in the creation of WordPress MetaBoxes. The directory
includes:
* MetaBox.php: Class for adding and saving MetaBox Data.
* MetaBoxArguments.php: Class for setting the WordPress arguments associated
with metaboxes.
* MetaBoxWp.php: Class for helping with metabox interactions.

**Leaven/Lib/Registers**  
The registers library Handles the registration of Post Types and Taxonomies.
The directory includes:
* Register.php: Interface class.
* RegisterArguments.php: Class for setting the WordPress arguments associated
with registrations.

**Leaven/Views**  
Directory for holding the view templates necessary for the plugins output.  

**Leaven/Views/Assets**  
Directory for holding css and javascript files associated with the views.

**Leaven/Views/Assets/MediaUploader**  
An asset library for controlling the WordPress Media Upload functionality
within the admin.


[1]: http://codex.wordpress.org/Writing_a_Plugin#File_Headers
