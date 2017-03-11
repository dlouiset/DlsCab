<?php
# @Author: David LOUISET <dlouiset>
# @Date:   2017-03-09T12:06:36+01:00
# @Last modified by:   dlouiset
# @Last modified time: 2017-03-09T17:33:00+01:00




namespace Dls\Bundle\CabUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DlsCabUserBundle extends Bundle
{
    public function getParent()
  {
    return 'FOSUserBundle';
  }
}
