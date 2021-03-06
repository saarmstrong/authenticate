<?php


/**
 * Authenticator
 *
 * @category    Erdiko
 * @package     Authenticate
 * @copyright   Copyright (c) 2016, Arroyo Labs, http://www.arroyolabs.com
 * @author      Leo Daidone, leo@arroyolabs.com
 */


namespace erdiko\authenticate;

interface BaseAuthenticator
{
  public function current_user();

  // this method will save user in cache. it should be implemented in child classes, based on config.
  public function persistUser(iErdikoUser $user);

  public function login($credentials = array(), $type="");

  public function logout();

}
