<?php
    use Intervention\Image\ImageManagerStatic;

    /**
     * Generate Image for empty field
     * @param $imageText
     * @return \Intervention\Image\Image
     */
    if (!function_exists('GenerateAlphaImage')){
        function GenerateAlphaAvatar($imageText): \Intervention\Image\Image
        {
            $img = ImageManagerStatic::canvas(200, 200, '#000');
            $img->text($imageText, 100, 60, function($font) {
                $font->file(public_path('fonts/Poppins-SemiBold.ttf'));
                $font->size(120);
                $font->color('#43C324');
                $font->align('center');
                $font->valign('top');
            });
            return $img;
        }

        /**
         * For Production
         * $font->file('fonts/Poppins-SemiBold.ttf');
         *
         * For Localhost
         * $font->file(public_path('fonts/Poppins-SemiBold.ttf'));
         * */
    }
