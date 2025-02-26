<?php

declare(strict_types=1);

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\File;

final class VersionService
{
    private const string VERSION_FILE = 'VERSION';

    /**
     * Get the current application version
     */
    public function getCurrentVersion(): string
    {
        if (! File::exists(base_path(self::VERSION_FILE))) {
            return 'unknown';
        }

        $version = File::get(base_path(self::VERSION_FILE));

        return trim($version);
    }

    /**
     * Check if version file exists
     */
    public function hasVersionFile(): bool
    {
        return File::exists(base_path(self::VERSION_FILE));
    }

    /**
     * Update the version number
     */
    public function updateVersion(string $version): bool
    {
        try {
            File::put(base_path(self::VERSION_FILE), $version);

            return true;
        } catch (Exception) {
            return false;
        }
    }
}
