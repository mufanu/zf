<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 12.09.13
 * Time: 1:23
 * To change this template use File | Settings | File Templates.
 */
namespace Project\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\View\Helper\FlashMessenger;

class ShowMessages extends AbstractHelper
{
    public function __invoke()
    {
        $messenger = new FlashMessenger();
        $error_messages = $messenger->getErrorMessages();
        $messages = $messenger->getMessages();
        $result = '';
        if (count($error_messages)) {
            $result .= '<ul class="error">';
            foreach ($error_messages as $message) {
                $result .= '<li>' . $message . '</li>';
            }
            $result .= '</ul>';
        }

        if (count($messages)) {
            $result .= '<ul>';
            foreach ($messages as $message) {
                $result .= '<li>' . $message . '</li>';
            }
            $result .= '</ul>';
        }

        return $result;
    }
}