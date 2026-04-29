<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Widgets\WelcomeWidget;

final class Dashboard extends Page
{
    protected array $widgets = [
        WelcomeWidget::class,
    ];

    public function getHeading(): string
    {
        return 'Dashboard';
    }

    public function getSubHeading(): ?string
    {
        return 'Welcome to your admin panel';
    }
}
