<?php

namespace App\Filament\Widgets;

use App\Models\Announce;
use App\Models\Club;
use App\Models\Department;
use App\Models\Event;
use App\Models\Major;
use App\Models\Partner;
use App\Models\Professor;
use App\Models\Programme;
use App\Models\Slide;
use App\Models\Timetable;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Announces', Announce::count())->color('success')->chart([1, 2, 40, 60])
            ->description('Increasing')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'published' })",
            ]),
            Stat::make('Total Partners', Partner::count())->color('success')->chart([1, 2, 40, 19]),
            Stat::make('Total Events', Event::count())->color('success')->chart([18, 2, 4, 19]),
            Stat::make('Total Users', User::count())->color('success')->chart([18, -2, 40, 99]),
            Stat::make('Total Departments', Department::count())->color('warning')->chart([18, 2, 40, 99]),
            Stat::make('Total Professors', Professor::count())->color('success')->chart([18, 2, 40, 99]),
            Stat::make('Total Slides', Slide::count())->color('success')->chart([18, 2, 40, 99]),
            Stat::make('Total Majors', Major::count())->color('success')->chart([18, 2, 40, 99]),
            Stat::make('Total Timetables', Timetable::count())->color('success')->chart([18, 2, 40, 99]),
            Stat::make('Total Clubs', Club::count())->color('success')->chart([18, 2, 40, 99]),
            


        ];
    }
}
