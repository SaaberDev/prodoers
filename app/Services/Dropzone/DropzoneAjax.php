<?php


    namespace App\Services\Dropzone;


    use App\Models\Service;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    class DropzoneAjax
    {
        private Request $request;

        public function __construct(Request $request)
        {
            $this->request = $request;
        }

        /**
         * @param $mediaKey
         * @param $param
         * @return JsonResponse
         */
        public function getMedia($model, $mediaKey, $param)
        {
            $models = $model::findOrFail($this->request->get($param));
            $medias = $models->getMedia($mediaKey);

            return \response()->json($medias);
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
         * @param $mediaKey
         * @param $mediaUuid
         * @return JsonResponse
         */
        public function deleteMedia($mediaKey, $mediaUuid): JsonResponse
        {
            $photo = $this->request->get($mediaKey);
            $uuid = $this->request->get($mediaUuid);

            if (!$uuid) {
                if (\Storage::disk('tmp')->exists('uploads/' .$photo)) {
                    \Storage::disk('tmp')->delete('uploads/' . $photo);
                }
            } else {
                Media::findByUuid($uuid)->delete();
            }

            return response()->json();
        }
    }
