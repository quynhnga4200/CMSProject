<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Transport_Esmtp_SmtpUtf8Handler implements Swift_Transport_EsmtpHandler
{
 public function __construct()
 {
 }
 public function getHandledKeyword()
 {
 return 'SMTPUTF8';
 }
 public function setKeywordParams(array $parameters)
 {
 }
 public function afterEhlo(Swift_Transport_SmtpAgent $agent)
 {
 }
 public function getMailParams()
 {
 return ['SMTPUTF8'];
 }
 public function getRcptParams()
 {
 return [];
 }
 public function onCommand(Swift_Transport_SmtpAgent $agent, $command, $codes = [], &$failedRecipients = null, &$stop = \false)
 {
 }
 public function getPriorityOver($esmtpKeyword)
 {
 return 0;
 }
 public function exposeMixinMethods()
 {
 return [];
 }
 public function resetState()
 {
 }
}
