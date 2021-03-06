<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Transport_Esmtp_Auth_XOAuth2Authenticator implements Swift_Transport_Esmtp_Authenticator
{
 public function getAuthKeyword()
 {
 return 'XOAUTH2';
 }
 public function authenticate(Swift_Transport_SmtpAgent $agent, $email, $token)
 {
 try {
 $param = $this->constructXOAuth2Params($email, $token);
 $agent->executeCommand('AUTH XOAUTH2 ' . $param . "\r\n", [235]);
 return \true;
 } catch (Swift_TransportException $e) {
 $agent->executeCommand("RSET\r\n", [250]);
 throw $e;
 }
 }
 protected function constructXOAuth2Params($email, $token)
 {
 return \base64_encode("user={$email}\x01auth=Bearer {$token}\x01\x01");
 }
}
