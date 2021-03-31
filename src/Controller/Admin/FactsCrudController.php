<?php

namespace App\Controller\Admin;

use App\Entity\Facts;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class FactsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Facts::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('auteur'),
            DateTimeField::new('date'),
            TextField::new('fact'),
        ];
    }
    
}
