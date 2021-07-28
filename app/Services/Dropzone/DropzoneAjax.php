<?php


    namespace App\Services\Dropzone;


    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    class DropzoneAjax
    {
        private Request $request;

        public function __construct(Request $request)
        {
            $this->request = $request;
        }

        /**
         * @return JsonResponse
         */
        public function storeMedia(): JsonResponse
        {
            $path = storage_path('tmp/uploads');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file = $this->request->file('file');

            $name = uniqid() . '_' . trim($file->getClientOriginalName());

            $file->move($path, $name);

            return response()->json([
                'name'          => $name,
                'original_name' => $file->getClientOriginalName(),
            ]);
        }

        /**
         * @param $key
         * @return JsonResponse
         */
        public function deleteMedia($key): JsonResponse
        {
            $photo = $this->request->get($key);

            if (\Storage::disk('tmp')->exists('uploads/' .$photo)) {
                \Storage::disk('tmp')->delete('uploads/' . $photo);
            }

            return response()->json();
        }
    }
