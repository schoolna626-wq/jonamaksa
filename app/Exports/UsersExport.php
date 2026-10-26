<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    private Collection $users;

    public function __construct(Collection $users)
    {
        $this->users = $users;
    }

    public function collection(): Collection
    {
        return $this->users->values()->map(function (object $user, int $index): array {
            return [
                $index + 1,
                $user->username,
                $user->email,
                $user->level,
                $user->nama_kry ?? '-',
                $user->alamat_kry ?? '-',
                $user->nama_jabatan ?? '-',
                $user->nama_agama ?? '-',
            ];
        });
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Email',
            'Level',
            'Nama Karyawan',
            'Alamat',
            'Jabatan',
            'Agama',
        ];
    }
}
