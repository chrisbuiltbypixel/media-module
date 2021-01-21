<?php

namespace Modules\Media\Http\Controllers\Nucleus;

use Modules\Media\Entities\MediaFolder;
use Modules\Media\Entities\Media;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    public function index(Request $request, $folderId = null)
    {
        $data['current_folder'] = MediaFolder::where('id', $folderId)->first();
        $data['child_folders'] = MediaFolder::where('parent_folder_id', $folderId)->get();
        $data['media'] = Media::where('folder_id', $folderId)->get()->map(function ($media) {
            return [
                'id' => $media->id,
                'name' => $media->name,
                'url' => $media->url,
                'mime_type' => $media->mime_type,
            ];
        });

        return ['data' => $data];
    }

    public function store(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
