<?php

namespace Modules\Media\Http\Controllers\Nucleus;

use Modules\Media\Http\Requests\UpdateMediaFolderRequest;
use Modules\Media\Http\Requests\StoreMediaFolderRequest;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;

class MediaFolderController extends Controller
{

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreMediaFolderRequest $request)
    {
        return ModelFolder::create($request->validated());
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateMediaFolderRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
