<?php

namespace Modules\Media\Http\Controllers\Nucleus;

use Modules\Media\Entities\MediaFolder;
use Modules\Media\Entities\Media;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request, $folderId = null)
    {
        $data['folders'] = MediaFolder::where('id', $folderId)->get();
        $data['media'] = Media::where('folder_id', $folderId)->get();

        return ['data' => $data];
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
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
