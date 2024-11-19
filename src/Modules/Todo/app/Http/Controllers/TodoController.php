<?php

namespace Modules\Todo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Modules\Todo\Models\Todo;
use Modules\Todo\Http\Requests\{
    TodoSearchByFilterRequest,
    CreateTodoItemRequest,
    UpdateTodoItemRequest,
};
use Modules\Todo\Dto\{
    SearchByFilterRequestDto,
    CreateItemRequestDto,
    UpdateTodoItemRequestDto,
    UpdateTodoItemDto,
    NewItemTodoDto,
};

use Modules\Todo\Actions\{
    FindTodoByFilterAction,
    CreateTodoItemAction,
    RemoveTodoItemAction,
    UpdateTodoItemAction,
};

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TodoSearchByFilterRequest $request, FindTodoByFilterAction $action): JsonResponse
    {
        $dtoFilter = SearchByFilterRequestDto::from($request->validated());

        $todoItems = $action->run($dtoFilter);

        return response()->json($todoItems);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTodoItemRequest $request, CreateTodoItemAction $action)
    {   
        $data = [
            'responsible_id' => 1,
            'creator_id' => 1,
            ...$request->validated()
        ];

        $dtoNewTodoItemRequest = CreateItemRequestDto::from($data);

        $dtoNewTodoItem = NewItemTodoDto::from(
            $action->run($dtoNewTodoItemRequest)->toArray()
        );

        return response()->json($dtoNewTodoItem);
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('todo::show');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(
            UpdateTodoItemRequest $request, 
            Todo $todo, 
            UpdateTodoItemAction $action
        )
    {   
        $dataValidated = $request->validated();
        $dtoDataUpdate =  UpdateTodoItemRequestDto::from($dataValidated);

        $todoItem = $action->run($todo, $dtoDataUpdate);

        return response()->json(UpdateTodoItemDto::from($todoItem));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo, RemoveTodoItemAction $action)
    {   
        return response()->json([
            'msg' => 'Успешно удалено',
            'state' => (new RemoveTodoItemAction())->run($todo)
        ]);
    }
}
