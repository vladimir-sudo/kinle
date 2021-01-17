<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        CRUD::setModel(User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    public function setupListOperation()
    {
        $this->crud->setColumns([
            'name',
            'email',
            'is_admin'
        ]);
    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);

        $this->crud->addField([
            'name' => 'email',
            'type' => 'email',
            'label' => "Email"
        ]);

        $this->crud->addField([
            'name' => 'password',
            'type' => 'password',
            'label' => "Password"
        ]);

        $this->crud->addField([
            'name' => 'is_admin',
            'type' => 'checkbox',
            'label' => "Is admin"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
