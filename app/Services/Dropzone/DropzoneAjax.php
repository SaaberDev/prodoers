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
        public function deleteMedia($key, $mediaUuid = null): JsonResponse
        {
            $photo = $this->request->get($key);
            $media = Media::findByUuid($this->request->get('uuid'));

            if (\Storage::disk('tmp')->exists('uploads/' .$photo)) {
                \Storage::disk('tmp')->delete('uploads/' . $photo);
            } /*else {
                $media->delete();
            }*/

            return response()->json($media);
        }
    }
