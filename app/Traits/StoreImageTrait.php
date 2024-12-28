<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait StoreImageTrait
{
    public function storeImage($file, string $path): ?string
    {
        if (!$file || !$file->isValid()) {
            return null;
        }
        try {
            $fullPath = $file->store($path, 'public');
            return basename($fullPath);
        } catch (\Exception $e) {
            Log::error('Error storing image: ' . $e->getMessage());
            return null;
        }
    }
}
