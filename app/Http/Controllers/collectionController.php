<?php

namespace App\Http\Controllers;

use App\Search\globalsearch;
use Illuminate\Http\Request;

class collectionController extends Controller
{
    public function index()
    {
        return view('admin.search');
    }

    public function search(Request $request)
    {

        $result = globalsearch::search($request->input('query'))->get()->groupBy(function ($data) {
            return $data->getTable();
        });

        $result->map(function ($grouprecords) {
            return $grouprecords->map(function ($data) {
                $data['metadata'] = $data->scoutMetadata()['_highlightResult'];
                $data['type'] = $data->getTable();
            });
        });

        return view('admin.searchresult')->with('records', $result->toArray());
    }

}
