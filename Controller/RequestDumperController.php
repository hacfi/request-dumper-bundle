<?php

/*
 * (c) Philipp Wahala <philipp.wahala@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace hacfi\RequestDumperBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class RequestDumperController
{
    protected $path;
    protected $filePrefix;
    protected $dateFormat;
    protected $fileExtension;

    /**
     * Constructor.
     *
     * @param string $path
     * @param string $filePrefix
     * @param string|bool $dateFormat
     * @param string $fileExtension
     */
    public function __construct($path, $filePrefix, $dateFormat, $fileExtension)
    {
        $this->path = $path;
        $this->filePrefix = $filePrefix;
        $this->dateFormat = $dateFormat;
        $this->fileExtension = $fileExtension;
    }

    /**
     * {@inheritdoc}
     */
    public function indexAction(Request $request)
    {
        $logContent = (string) $request;

        $logFile = rtrim(
            sprintf(
                '%s/%s%s.%s',
                rtrim($this->path, '/'),
                $this->filePrefix,
                $this->dateFormat ? date($this->dateFormat) : '',
                $this->fileExtension
            ),
            ' .'
        );

        if (!is_dir($dir = dirname($logFile))) {
            mkdir($dir, 0755, true);
        }

        file_put_contents(
            $logFile,
            $logContent
        );

        return new Response($logContent);
    }
}
