<?php


namespace App\Http\ViewComponents;
use App\Dependencies;
use Illuminate\Contracts\Support\Htmlable;


class DependenciesFields implements Htmlable
{
    private $dependency;

    public function __construct(Dependencies $dependency)
    {
        $this->dependency = $dependency;
    }

    public function toHtml()
    {
        return view('web.dependencies._fields', [

            'dependency' => $this->dependency,
        ]);
    }
  /*public function __toString()
  {
      return view('web.dependencies._fields')->with( 'dependency',$this->dependency)->render();
  }*/
}
