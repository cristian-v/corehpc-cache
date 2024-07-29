<?php

namespace Corehpc\Cache\Console\Command;

use Exception;
use Magento\Framework\Console\Cli;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\ExceptionInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Power extends Command
{
    /**
     * @param string|null $name
     */
    public function __construct(
        string $name = null
    ) {
        parent::__construct($name);
    }

    /**
     * Executing the random cache command between cache:clear and cache:flush
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $commands = [
            'cache:clear',
            'cache:flush'
        ];
        $command = $commands[array_rand($commands)];
        $output->writeln("Power Command: Executing {$command}");
        $command = $this->getApplication()->find($command);
        try {
            $command->run($input, $output);
        } catch (Exception $e) {
            $output->writeln($e->getMessage());
            return Cli::RETURN_FAILURE;
        } catch (ExceptionInterface $e) {
            $output->writeln($e->getMessage());
            return Cli::RETURN_FAILURE;
        }

        return Cli::RETURN_SUCCESS;
    }

    /**
     * Configure the command options
     */
    protected function configure(): void
    {
        $this->setName('cache:power')
            ->setDescription('Random Cache Command')
            ->addOption(
                'types',
                null,
                InputOption::VALUE_OPTIONAL,
                'Comma-separated list of cache types to clear'
            )
            ->setHelp('This command allows you to run a random cache command between cache:clear and cache:flush.');
        parent::configure();
    }
}
