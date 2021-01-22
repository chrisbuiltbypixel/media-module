<?php

namespace Modules\Media\Http\Controllers\Nucleus;

use Modules\Media\Http\Requests\UpdateMediaFolderRequest;
use Modules\Media\Http\Requests\StoreMediaFolderRequest;
use Modules\Media\Entities\MediaFolder;
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
    public function store(StoreMediaFolderRequest $request, $folderId = null)
    {
        MediaFolder::create([
            'folder_id' => $folderId,
            'name' => $request->name,
        ]);

        return response()->success('Folder added');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateMediaFolderRequest $request, MediaFolder $folder)
    {
        $folder->update($request->validated());

        return response()->success('Folder updated');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request)
    {
        $ids = $request->id;
        MediaFolder::whereIn('id', $ids)->delete();

        return response()->success('Deleted folder');
    }
}
