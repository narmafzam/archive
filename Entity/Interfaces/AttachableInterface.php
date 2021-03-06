<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/14
 */

namespace Narmafzam\ArchiveBundle\Entity\Interfaces;

use Doctrine\Common\Collections\Collection;

/**
 * Interface AttachableInterface
 * @package Narmafzam\ArchiveBundle\Entity\Interfaces
 */
interface AttachableInterface
{
    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttachments() : Collection;
}