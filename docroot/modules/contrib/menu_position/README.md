# MENU POSITION

## CONTENTS OF THIS FILE

 * Introduction
 * Requirements
 * Installation
 * Configuration

## INTRODUCTION

Often times site builders want certain types of content to appear in a specific
position in the navigational menu. The simplest solution, adding all of that
content individually to the menu system, has performance and usability issues.
(Imagine hundreds of menu items added to one spot in the menu.)

This module allows for the creation of rules that will dynamically add the
current page into the menu system at the requested spots.

This includes affecting:
 - The main links of the theme
 - The secondary links of the theme
 - The breadcrumb trail
 - Menu blocks provided by core's Menu module
 - Menu blocks provided by the Menu Block module

## REQUIREMENTS

This module requires no modules outside of Drupal core.

## INSTALLATION

 * Install as you would normally install a contributed Drupal module. Visit
 <https://www.drupal.org/docs/extending-drupal/installing-modules> for further
 information.

## CONFIGURATION

### RULE CHECKING

Rules can be added, modified, re-ordered, disabled and deleted from the admin
page available at: Structure > Menu position rules

When multiple rules are enabled, the rules are checked as followed:
 - Disabled rules are not evaluated.
 - Enabled rules are evaluated in the order they appear on the "Menu position
  rules" administration form.
 - The menu name used by the rule is checked to see:
   - if a menu item for the current page's path is already included in the
    specified menu, the rule is skipped.
   - if this rule's menu was used in a previously-matched rule, the rule is
    skipped.
 - For each condition in the rule, the condition is evaluated. If all of the
  conditions are determined to be TRUE, the rule is "matched".
 - If the rule contains no conditions, the rule is "matched".

Once a rule is "matched", the following things happen:
 - If the rule's chosen menu is the "Source for the Main links" (as defined by
  the Menu Settings form at Structure > Menus > Settings), the theme's main
  links will be affected by the active trail specified in the rule.
 - If the rule's chosen menu is the "Source for the Secondary links" (as defined
  by the Menu Settings form at Structure > Menus > Settings), the theme's
  secondary links will be affected by the active trail specified in the rule.
 - Any menu trees generated by blocks or page content will be affected by the
  active trail specified in the rule.
 - If this is the first matched rule and no rules were skipped because their
  menu already contained a menu item for the current page, the theme's
  breadcrumbs will be affected by the active trail specified in the rule.


### PLUG-INS

Currently, the Menu position module only provides "content type" and "pages"
plug-ins that allow conditions to be added to rules based on the type of content
being displayed or on the path of the page. However, this module also provides a
simple API for "rule conditions" plug-ins so module developers can develop their
own logic for adding dynamic menu positioning.

See the following files for more information:
- menu_position.api.php