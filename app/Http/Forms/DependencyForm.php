<?php


namespace App\Http\Forms;
use App\Dependencies;
use Illuminate\Contracts\Support\Responsable;

class DependencyForm implements Responsable
{
    private  $view;
    private  $dependency;


    public function __construct($view, Dependencies $dependency)
    {
        $this->view = $view;
        $this->dependency = $dependency;
    }

    public function toResponse($request)
    {
        return view($this->view, [
            'dependency' => $this->dependency,

        ]);
    }
}
