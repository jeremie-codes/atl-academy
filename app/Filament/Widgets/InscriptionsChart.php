<?php

namespace App\Filament\Widgets;

use App\Models\Inscription;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class InscriptionsChart extends ChartWidget
{
    protected ?string $heading = 'Évolution des inscriptions par mois';

    // 👇 prend toute la largeur
    protected int|string|array $columnSpan = 'full';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = Inscription::select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('COUNT(*) as total')
            )
            ->whereYear('created_at', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        $months = [
            'Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin',
            'Juil', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc',
        ];

        return [
            'datasets' => [
                [
                    'label' => 'Inscriptions',
                    'data' => collect(range(1, 12))->map(
                        fn ($month) => $data[$month] ?? 0
                    ),
                    'borderWidth' => 3,
                    'fill' => false,
                ],
            ],
            'labels' => $months,
        ];
    }

    protected function getType(): string
    {
        return 'line'; // line | bar | pie | doughnut
    }
}
