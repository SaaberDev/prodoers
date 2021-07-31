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
        public function deleteMedia($key, $models, $mediaKey): JsonResponse
        {
            $photo = $this->request->get($key);
            $medias = $models->getMedia($mediaKey);
            if (\Storage::disk('tmp')->exists('uploads/' .$photo)) {
                \Storage::disk('tmp')->delete('uploads/' . $photo);
            } else {
                $medias = Media::findByUuid('445b0255-2b54-407d-8caa-055469d590b7');
                $medias->delete();
            }

            return response()->json();
        }
    }
