<?php

namespace Drupal\drush_command\Commands;

use Drush\Commands\DrushCommands;

/**
 * A custom Drush command.
 */
class CustomDrushCommands extends DrushCommands {

  /**
   * Drush command that displays the given text.
   *
   * @param string $text
   *   The message to display.
   * @param array $options
   *   Command options.
   *
   * @command custom_commands:text
   * @aliases drush-text
   * @option uppercase
   *   Uppercase the message.
   * @option uppercase OR lowercase
   *   Lowercase the message.
   * @usage drush custom_commands:text "Hello world !" --uppercase
   */
  public function text(string $text = 'Hello world !', array $options = ['uppercase' => false, 'lowercase' => false]): void {
    try {
      $text = ($options['uppercase'] ?? false) ? strtoupper($text) : $text;
      $text = ($options['lowercase'] ?? false) ? strtolower($text) : $text;

      $this->output()->writeln("<info>{$text}</info>");
    }
    catch (\Throwable $e) {
      $this->output()->writeln("<error>Erreur : {$e->getMessage()}</error>");
    }
  }
}
