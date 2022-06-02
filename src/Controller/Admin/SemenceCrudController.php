<?php

namespace App\Controller\Admin;

use App\Entity\Semence;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SemenceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Semence::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
