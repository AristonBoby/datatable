<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserDatatables extends LivewireDatatable
{
    public function builder()
    {
        return User::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('IrD')
                ->sortBy('id'),
            Column::checkbox('name'),

            Column::name('name')
                ->label('Name'),

            Column::name('email')
                ->label('email'),

            Column::name('created_at')
                ->label('Creation Date'),

            Column::callback('name' ,function(){
                return '<a href="{{$name}}">Inactive</a>';
            }),
        ];
    }
}
