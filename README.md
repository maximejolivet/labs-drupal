# labs-drupal
Labs Drupal : module and custom theme centralization

![PHP version](https://img.shields.io/badge/PHP-8.4-4E5B93)
![Drupal version](https://img.shields.io/badge/Drupal-11-blue)
![Drupal version](https://img.shields.io/badge/Drupal-10-blue)

List of modules and custom themes for Drupal 11 

- [x] drush_command

## Installation

```bash
# Install modules
drush en labs-drupal
```

## Modules

*List of modules :*

### drush_command
Create Custom Drush Commands in Drupal

*Custom Drush command*
```bash
# Install the module 'drush_command'
drush en custom_commands

# Run the command
drush custom_commands:text --uppercase 'Maxime'
drush custom_commands:text --lowercase 'Maxime'
```
