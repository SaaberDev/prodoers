       /*
We want to preview images, so we need to register the Image Preview plugin
*/
        FilePond.registerPlugin(
            // encodes the file as base64 data
            FilePondPluginFileEncode,
            // validates the size of the file
            FilePondPluginFileValidateSize,
            // corrects mobile image orientation
            FilePondPluginImageExifOrientation,
            // previews dropped images
            //  FilePondPluginImagePreview
        );
        // Select the file input and use create() to turn it into a pond
        FilePond.create(
            document.getElementById('filePondinput1'), {
                labelIdle: `<span class="filepond--label-action">Browse Image</span>`,
            }
        );
        // Select the file input and use create() to turn it into a pond
        FilePond.create(
            document.getElementById('filePondinput2'), {
                labelIdle: `<span class="filepond--label-action">Browse File</span>`,
            }
        );