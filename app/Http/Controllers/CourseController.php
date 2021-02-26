<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    private $course;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    public function index()
    {
        return $this->course->paginate(10);
    }

    public function show($id)
    {
        return $this->course->findOrFail($id);
        // o nome da variavel ($id) tem que ser igual ao da rota (/{id})
    }

    public function store(Request $request)
    {
        $this->course->create($request->all());

        return response()->json
                            (['data' => [
                                'message' => 'Curso foi criado com sucesso!']
                            ]);
    }

    public function update($id, Request $request)
    {
        $id = $this->course->findOrFail($id);
        $id->update($request->all());

        return response()->json
                            (['data' => [
                                'message' => 'Curso foi atualizado com sucesso!']
                            ]);
    }

    public function destroy($id)
    {
       $id = $this->course->findOrFail($id);
       $id->delete();

       return response()->json
                            (['data' => [
                                'message' => 'Curso foi removido com sucesso!']
                            ]);
    }
}
