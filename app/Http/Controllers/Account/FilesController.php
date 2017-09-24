<?php

namespace App\Http\Controllers\Account;

use App\File;
use App\Http\Controllers\Controller;

class FilesController extends Controller
{
    public function create(File $file)
    {
        if (! $file->exists) {
            $file = $this->createAndReturnSkeletonFile();

            return redirect()->route('account.files.create', $file);
        }

        $this->authorize('touch', $file);


        return view('account.files.create', compact('file'));
    }

    public function createAndReturnSkeletonFile()
    {
        return auth()->user()->files()->create([
          'title'          => 'Untitled',
          'overview'       => 'None',
          'overview_short' => 'None',
          'price'          => 0,
          'finished'       => false,
        ]);
    }
}
