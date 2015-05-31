<?php

class WorkController extends \BaseController {

    public function index()
    {
        $work = Work::all();
        return View::make('work.index', compact('work'));
    }


    public function show($id)
    {
        $work = null;

        try {
            if(is_numeric($id)) {
                $work = Work::findOrFail($id);
            } else {
                $work = Work::where('slug', '=', $id)->firstOrFail();
            }

            $older = Work::where('id', '<', $work->id)->orderBy('id', 'desc')->first();
            $newer = Work::where('id', '>', $work->id)->first();

            $data = [
                'work'  => $work,
                'older' => $older,
                'newer' => $newer
            ];

            return View::make('work.show')->with($data);

        } catch(Exception $e) {
            Log::info('Page not found. See below:');
            Log::error($e);
            App::abort(404);
        }
    }

}
