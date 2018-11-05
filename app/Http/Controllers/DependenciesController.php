<?php

namespace App\Http\Controllers;

use App\Dependencies;
use App\Http\Forms\DependencyForm;
use App\Http\Requests\CreateDependenciesRequest;
use Illuminate\Http\Request;

class DependenciesController extends Controller
{
    public function index()
    {
        $dependencies = Dependencies::all();

        $title = 'Listado de dependencias';

        return view('web.dependencies.index', compact('title','dependencies'));
    }
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        //  $user = new Dependencies;

        return new DependencyForm('web.dependencies.create', new Dependencies);

    }

    public function store(CreateDependenciesRequest $request)
    {
        $request->createDependency();

        return redirect()->route('dependencies.index');
    }

    public function edit(Dependencies $dependency)
    {
        return new DependencyForm('web.dependencies.edit', $dependency);
        // return view('users.edit', compact('user'))->with($this->formsData());
    }


    public function update(UpdateUserRequest $request, User $user)
    {

        $request->updateUser($user);


        return redirect()->route('users.show', ['user' => $user]);
    }

    function destroy(Dependencies $dependency)
    {
        $dependency->delete();

        return redirect()->route('users.index');
    }

}
