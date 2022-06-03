<?php

namespace App\DataTables;

use App\Models\Cobak;
use DataTables;

class CobakDataTable
{
    public function data()
    {
        $data = Cobak::latest();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start"
                                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">';
                $btn .=
                    '<a href="javascript:void(0)" id="' .
                    $row->id .
                    '" class=" dropdown-item btn btn-primary btn-sm ml-2 btn-edit">Edit</a>';
                $btn .=
                    '<a href="javascript:void(0)" id="' .
                    $row->id .
                    '" class="dropdown-item btn btn-danger btn-sm ml-2 btn-delete">Delete</a>

                                        </div>
                                    </div>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}