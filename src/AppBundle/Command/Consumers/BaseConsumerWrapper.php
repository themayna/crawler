<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/9/17
 * Time: 9:35 PM
 */

namespace AppBundle\Command\Consumers;

define('AMQP_WITHOUT_SIGNALS', true);
define('AMQP_DEBUG', false);

use OldSound\RabbitMqBundle\Command\BaseConsumerCommand;
use OldSound\RabbitMqBundle\OldSoundRabbitMqBundle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

abstract class BaseConsumerWrapper extends BaseConsumerCommand
{
    abstract protected function getConsummerCommandDescription();

    abstract protected function getConsumerName();

    abstract protected function getMessage($msg);

    protected function configure()
    {
        $this
            ->addOption('route', 'r', InputOption::VALUE_OPTIONAL, 'Routing Key', '')
            ->addOption('memory-limit', 'l', InputOption::VALUE_OPTIONAL, 'Allowed memory for this process', null)
            ->addOption('debug', 'd', InputOption::VALUE_NONE, 'Enable Debugging')
            ->addOption('without-signals', 'w', InputOption::VALUE_NONE, 'Disable catching of system signals')
            ->setName($this->getConsumerCommandName())
            ->setDescription($this->getConsummerCommandDescription());

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $consumer = $this->getContainer()->get($this->getConsumerService());
        $consumer->setCallback([$this, 'processMessageCallback']);
        $consumer->getChannel()->callbacks = [$this, 'processMessageCallback'];
        if (defined('AMQP_WITHOUT_SIGNALS') === false) {
            define('AMQP_WITHOUT_SIGNALS', $input->getOption('without-signals'));
        }

        if (!AMQP_WITHOUT_SIGNALS && extension_loaded('pcntl')) {
            if (!function_exists('pcntl_signal')) {
                throw new \BadFunctionCallException("Function 'pcntl_signal' is referenced in the php.ini 'disable_functions' and can't be called.");
            }

            pcntl_signal(SIGTERM, array(&$this, 'stopConsumer'));
            pcntl_signal(SIGINT, array(&$this, 'stopConsumer'));
            pcntl_signal(SIGHUP, array(&$this, 'restartConsumer'));
        }

        if (defined('AMQP_DEBUG') === false) {
            define('AMQP_DEBUG', (bool)$input->getOption('debug'));
        }

        $this->amount = $this->getConsumerName();

        if (0 > $this->amount) {
            throw new \InvalidArgumentException("The -m option should be null or greater than 0");
        }
        $this->initConsumer($input);

        return $consumer->consume($this->amount);
    }

    protected function initConsumer($input)
    {
        $this->consumer = $this->getContainer()
            ->get($this->getConsumerService());

        if (!is_null($input->getOption('memory-limit')) && ctype_digit((string)$input->getOption('memory-limit')) && $input->getOption('memory-limit') > 0) {
            $this->consumer->setMemoryLimit($input->getOption('memory-limit'));
        }
        $this->consumer->setRoutingKey($input->getOption('route'));
    }

    public function processMessageCallback($msg)
    {
        $this->getMessage(json_decode($msg->body));
    }

    protected function getConsumerService()
    {
        return sprintf('old_sound_rabbit_mq.%s_consumer', $this->getConsumerName());
    }

    protected function getConsumerCommandName()
    {
        return sprintf('rabbitmq:consumer:%s', $this->getConsumerName());
    }
}