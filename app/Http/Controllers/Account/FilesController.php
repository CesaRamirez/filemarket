<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\File;

class FilesController extends Controller
{
    public function create(File $file)
    {
        if (! $file->exists) {
            $file = $this->createAndReturnSkeletonFile();

            return redirect()->route('account.files.create', $file);
        }

        return 'render form';
    }

    public function createAndReturnSkeletonFile()
    {
        return auth()->user()->files()->create([
          'title' => 'Untitled',
          'overview' => 'None',
          'overview_short' => 'None',
          'price' => 0,
          'finished' => false
        ]);
    }
}
