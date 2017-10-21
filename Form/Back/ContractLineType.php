<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/21
 */

namespace Narmafzam\ArchiveBundle\Form\Back;

use Symfony\Component\Form\AbstractType;

class ContractLineType extends AbstractType
{
    public function getParent()
    {
        return \Narmafzam\ArchiveBundle\Form\Common\ContractLineType::class;
    }

    public function getBlockPrefix()
    {
        return 'back_contract_line';
    }
}