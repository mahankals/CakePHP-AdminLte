<?php
declare(strict_types=1);

namespace AdminLte\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Core\Plugin;

/**
 * Publish command.
 */
class PublishConfigCommand extends Command
{
    private const COMMAND_NAME = 'AdminLte publish_config';

    /**
     * The name of this command.
     *
     * @var string
     */
    protected string $name = self::COMMAND_NAME;

    /**
     * Get the default command name.
     *
     * @return string
     */
    public static function defaultName(): string
    {
        return self::COMMAND_NAME;
    }

    /**
     * Get the command description.
     *
     * @return string
     */
    public static function getDescription(): string
    {
        return 'Publish AdminLte config files to the app config directory.';
    }

    /**
     * Hook method for defining this command's option parser.
     *
     * @see https://book.cakephp.org/5/en/console-commands/commands.html#defining-arguments-and-options
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        return parent::buildOptionParser($parser)
            ->setDescription(static::getDescription());
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return int|null|void The exit code or null for success
     */
    public function execute(Arguments $args, ConsoleIo $io)
    {
      $source = Plugin::path('AdminLte') . 'config' . DS . 'admin-lte.php';
      $destination = CONFIG . 'admin-lte.php';

      if(file_exists($destination)){
        $overwrite = $io->askChoice("Config file already exists at '{$destination}'. Overwrite?", ['yes', 'no'], 'no');
        if ($overwrite !== 'yes') {
          $io->out('Publish cancelled.');
          return static::CODE_SUCCESS;
        }
      }

      if(!copy($source, $destination)){
        $io->err('Failed to publish config file.');
        return static::CODE_ERROR;
      }

      $io->success("Config file published to '{$destination}'");
      return static::CODE_SUCCESS;
    }
}
