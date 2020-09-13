<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManagementItemRequest;
use App\Models\ManagementItem;

class ItemsManagementController extends Controller
{
    /**
     * @var ManagementItem $model
     */
    protected $model;

    /**
     * @var int $possibleLimit
     */
    protected $possibleLimit = 100;

    /**
     * Magic Method __construct
     *
     * ItemsManagementController constructor.
     * @param ManagementItem $model
     */
    public function __construct(ManagementItem $model)
    {
        $this->model = $model;
    }

    /**
     * Get data
     *
     * Max limit @see $possibleLimit
     *
     * @return mixed
     */
    public function index()
    {
        return $this->model->limit($this->possibleLimit)->get();
    }

    /**
     * Create or Update Action
     *
     * @param ManagementItemRequest $request
     * @return array
     */
    public function store(ManagementItemRequest $request)
    {
        $model = $this->model->where('name', $request->name)->first() ?: $this->model;

        $success = $model->fill($request->all())->save();

        $response = ['name' => $model->name, 'success' => $success];

        return $response;
    }
}
