<?php

namespace App\Filament\Resources\Exams\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ExamInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title')
                    ->label('Jenis Ujian'),
                TextEntry::make('duration')
                    ->label('Durasi Ujian')
                    ->numeric(),
                TextEntry::make('threshold')
                    ->label('Batas Nilai')
                    ->numeric(),
                IconEntry::make('exact_time')
                    ->label('Waktu Ujian')
                    ->boolean(),
                TextEntry::make('started_at')
                    ->label('Waktu Mulai')
                    ->dateTime(),
                TextEntry::make('expired_at')
                    ->label('Waktu Berakhir')
                    ->dateTime()
                    ->placeholder('-'),
                IconEntry::make('is_available')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}