<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class StudentsResources extends Component
{

    use WithFileUploads;


    public $category_id;
    public $level_id;


    public function render()
    {

        $categories = Category::all();
        $levels = Level::all();


        $courses = Course::where('status', 3)
        ->category($this->category_id)
        ->level($this->level_id)
        ->latest('id')
        ->paginate(8);

        return view('livewire.courses-index', compact('courses', 'categories', 'levels'));
    }



    public function resetFilters(){
        $this->reset(['category_id' , 'level_id']);
    }
}
