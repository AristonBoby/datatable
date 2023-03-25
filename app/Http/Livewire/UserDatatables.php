<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Pasien;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserDatatables extends LivewireDatatable
{
    public function builder()
    {
        return Pasien::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('IrD')
                ->sortBy('id')
                ->searchable(),

            Column::name('nama')
                ->label('Name')
                ->searchable(),

            Column::name('jenkel')
                ->label('jenkel'),

            Column::name('nik')
                ->label('nik'),

            Column::name('created_at')
                ->label('Creation Date'),

            Column::callback('nama' ,function(){
                return '<a href="{{$name}}">Inactive</a>';
            }),
        ];
    }
}
