<?php

namespace LTL\Observer\Interfaces;

use LTL\Observer\Interfaces\SubjectInterface;

interface ObserverInterface
{
    public function update(SubjectInterface $subject, string $event);
}
