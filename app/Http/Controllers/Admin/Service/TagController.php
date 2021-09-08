<?php

    namespace App\Http\Controllers\Admin\Service;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Admin\Service\TagRequest;
    use App\Models\Tag;
    use DB;
    use Exception;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Response;
    use Throwable;

    class TagController extends Controller
    {
        private $_className;

        public function __construct()
        {
            $this->_className = getClassName($this);
        }
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
         * Store a newly created resource in storage.
         *
         * @param TagRequest $request
         * @return RedirectResponse
         * @throws Throwable
         */
        public function store(TagRequest $request)
        {
            DB::beginTransaction();
            try {
                $tagInputs = $request->input('tags');
                $explode = json_decode($tagInputs);

                collect($explode)->each(function ($item) {
                    Tag::Create([
                        'title' => $item->value,
                    ]);
                });

                DB::commit();
                return back()->with([
                    'alert-type' => 'success_toast',
                    'message' => $this->_className . ' Updated Successfully!',
                ]);
            } catch (\Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                return back()->with([
                    'alert-type' => 'warning_toast',
                    'message' => 'Oops, Something went wrong!',
                ]);
            }
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
         * @param TagRequest $request
         * @param int $id
         * @return RedirectResponse
         * @throws Throwable
         */
        public function update(TagRequest $request, $id)
        {
            DB::beginTransaction();
            try {
                $tags = Tag::findOrFail($id);
                $input = $request->input('edit_tags');

                $tags->update([
                    'title' => $input,
                ]);
                DB::commit();
                return redirect()->route('super_admin.service.tag.index')->with([
                    'alert-type' => 'success_toast',
                    'message' => $this->_className . ' Updated Successfully!',
                ]);
            } catch (\Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                return back()->with([
                    'alert-type' => 'warning_toast',
                    'message' => 'Oops, Something went wrong!',
                ]);
            }
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
                    'message' => 'Oops, Something went wrong!',
                ]);
            }
        }
    }
