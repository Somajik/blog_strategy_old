<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

   public function configureActions(Actions $actions): Actions
   {
    return $actions //on enleve la parrtie creer un commentairespour la partie admin et on remplace par index//
    ->remove(Crud::PAGE_INDEX,Action::NEW);
   }
    public function configureFields(string $pageName): iterable
    {
        
            
           yield TextareaField::new('content');
           yield DateTimeField::new('created_at');
           yield AssociationField::new('user');
            
        
    }
    
}
