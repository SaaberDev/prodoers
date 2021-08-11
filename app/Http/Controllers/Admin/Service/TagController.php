<?php

    namespace App\Http\Controllers\Admin\Service;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Admin\Service\TagRequest;
    use App\Models\ServiceTag;
    use App\Models\Tag;
    use DB;
    use Exception;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Throwable;

    class TagController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Application|Factory|View|Response
         */
        public function index()
        {
            return view('admin_panel.pages.services.tag.index');
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param TagRequest $request
         * @return RedirectResponse
         * @throws Throwable
         */
        public function store(TagRequest $request)
        {
            DB::transaction(function () use ($request) {
                $tagInputs = $request->input('tags');
                $explode = explode(',', $tagInputs);

                collect($explode)->each(function ($item) {
                    Tag::Create([
                        'title' => $item,
                    ]);
                });
            });
            return redirect()->back();
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param int $id
         * @return Application|Factory|View|Response
         */
        public function edit($id)
        {
            $tags = Tag::findOrFail($id);
            return \view('admin_panel.pages.services.tag.edit', compact('tags'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param Request $request
         * @param int $id
         * @return RedirectResponse
         */
        public function update(TagRequest $request, $id)
        {
            $tags = Tag::findOrFail($id);
            $input = $request->input('edit_tags');
            DB::transaction(function () use ($request, $tags, $input) {
                $tags->update([
                    'title' => $input,
                ]);
            });
            return redirect()->route('super_admin.service.tag.index');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return \Illuminate\Http\JsonResponse
         * @throws Throwable
         */
        public function destroy($id)
        {
            DB::beginTransaction();
            try {
                $tag = Tag::findOrFail($id);
                $tag->delete();
                DB::commit();
                return \response()->json([
                    'alert_type' => 'success',
                    'message' => 'Service Deleted Successfully!',
                ]);
            } catch (Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                return \response()->json([
                    'alert_type' => 'warning',
                    'message' => 'Opps, Something went wrong!',
                ]);
            }
        }
    }
