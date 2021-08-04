<?php

    namespace App\Services\MediaLibrary;

    use Exception;
    use Illuminate\Http\Request;
    use Str;
    use Throwable;

    class MediaHandler
    {
        private Request $request;

        public function __construct(Request $request)
        {
            $this->request = $request;
        }

        /**
         * @param $model
         * @param $mediaCollection
         * @param $inputKey
         * @param string $disk
         * @throws Throwable
         */
        public function updateMultipleMedia($model, $mediaCollection, $inputKey, string $disk = 'public')
        {
            try {
                $medias = $model->getMedia($mediaCollection);
                if (count($medias) > 0) {
                    foreach ($medias as $media) {
                        if (!in_array($media->file_name, $this->request->input($inputKey, []))) {
                            $media->delete();
                        }
                    }
                }

                $stored_files = $medias->pluck('file_name')->toArray();
                foreach ($this->request->input($inputKey, []) as $local_file) {
                    if (count($stored_files) === 0 || !in_array($local_file, $stored_files)) {
                        $model->addMedia(storage_path('tmp/uploads/' . $local_file))
                            ->sanitizingFileName(function ($fileName) {
                                $replace_duplicates = preg_replace("/(.)\\1+/", "$1", $fileName);
                                return Str::lower(Str::replace(['#', '/', '_', '\\', ' '], '-', $replace_duplicates));
                            })
                            ->toMediaCollection($mediaCollection, $disk);
                    }
                }
            } catch (Exception $exception) {
                report($exception->getMessage());
            }
        }

        /**
         * @param $model
         * @param $mediaCollection
         * @param $inputKey
         * @param string $disk
         * @throws Throwable
         */
        public function updateSingleMedia($model, $mediaCollection, $inputKey, string $disk = 'public')
        {
            try {
                $media = $model->getFirstMedia($mediaCollection);
                // If not empty and if file name matches delete existing file
                if (!empty($media)) {
                    if ($media->file_name === $this->request->input($inputKey, '')) {
                        $media->addMediaFromRequest($inputKey)
                            ->sanitizingFileName(function ($fileName) {
                                $replace_duplicates = preg_replace("/(.)\\1+/", "$1", $fileName);
                                return Str::lower(Str::replace(['#', '/', '_', '\\', ' '], '-', $replace_duplicates));
                            })
                            ->toMediaCollection($mediaCollection)
                        ;
                    }
                }

                // If media is empty or input request is not equals to stored file name
                if (empty($media) || $this->request->input($inputKey, '') !== $media->file_name) {
                    $model->addMedia(storage_path('tmp/uploads/' . $this->request->input($inputKey, '')))
                        ->sanitizingFileName(function ($fileName) {
                            $replace_duplicates = preg_replace("/(.)\\1+/", "$1", $fileName);
                            return Str::lower(Str::replace(['#', '/', '_', '\\', ' '], '-', $replace_duplicates));
                        })
                        ->toMediaCollection($mediaCollection, $disk);
                }
            } catch (Exception $exception) {
                report($exception->getMessage());
            }
        }

        // TODO -- Do not upload if file name and size matches

    }
