<?php
/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace AppBundle\Entity\User;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;

class User extends BaseUser
{

    protected $id;

  public function __construct()
  {
    parent::__construct();
    // your own logic
  }

}
