<?php

namespace backend\controllers;

use Yii;
use backend\components\event\MailEvent;
use yii\web\Controller;

/**
 * 发送邮件
 * @see http://www.manks.top/document/yii2-event-example.html
 */
class SendMailController extends Controller
{
    const SEND_MAIL = 'send_mail';

    public function init ()
    {
        parent::init();

        // 绑定邮件类，当事件触发的时候，调用我们刚刚定义的邮件类Mail
        $this->on(self::SEND_MAIL, ['backend\components\event\MailEvent', 'sendMail']);
    }

    public function actionSend ()
    {
        // 触发邮件事件
        $event = new MailEvent;
        $event->email = '422744746@qq.com';
        $event->subject = '事件邮件测试';
        $event->content = '邮件测试内容';
        //var_dump($event);die;

        $this->trigger(self::SEND_MAIL, $event);
    }
}