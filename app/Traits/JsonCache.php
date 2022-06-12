<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;

trait JsonCache {

    public function getJsonDecodedList(string $filePath): Collection {
        if(Cache::has($filePath)) {
            return Cache::get($filePath);
        } else {
            $list = json_decode(file_get_contents($filePath));
            $collection = collect($list);
            Cache::forever($filePath, $collection);
            return $collection;
        }
    }

}
