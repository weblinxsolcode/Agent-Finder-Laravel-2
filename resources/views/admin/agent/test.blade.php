<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>


<link rel="stylesheet" href="{{ asset('cropper/css/cropper.css') }}">
<script src="{{ asset('cropper/js/cropper.js') }}"></script>




<div class="col-lg-6">
    <label>Upload Profile Pictures</label>
    <input type="file" name="profile_picture" id="profilePictureInput" class="form-control" accept="image/*" multiple>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>


<div id="cropperModal1" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crop Profile Picture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="cropImage1" style="width: 100%;" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="cropImageButton1">Crop Image</button>
            </div>
        </div>
    </div>
</div>

<script>
    let cropper1;
    const imageUpload1 = document.getElementById('profilePictureInput');
    const cropImage1 = document.getElementById('cropImage1');
    const cropImageButton1 = document.getElementById('cropImageButton1');

    imageUpload1.addEventListener('change', function(event) {
        const files = event.target.files;

        if (files && files.length > 0) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = new Image();
                img.src = e.target.result;

                img.onload = function() {
                    if (img.width < 500 || img.height < 500) {
                        alert('Please upload an image with a minimum size of 500x500 pixels.');
                    } else {
                        cropImage1.src = e.target.result;
                        $('#cropperModal1').modal('show');
                    }
                };
            };

            reader.readAsDataURL(files[0]);
        }
    });

    $('#cropperModal1').on('shown.bs.modal', function() {
        cropper1 = new Cropper(cropImage1, {
            aspectRatio: 1,
            viewMode: 1,
            autoCropArea: 1
        });
    }).on('hidden.bs.modal', function() {
        cropper1.destroy();
        cropper1 = null;
    });

    cropImageButton1.addEventListener('click', function() {
        const canvas = cropper1.getCroppedCanvas({
            width: 300,
            height: 300
        });
        canvas.toBlob((blob) => {
            const formData = new FormData();
            formData.append('cropped_image', blob, 'profile_picture.png');

            // Your AJAX code here
            console.log('Cropped image ready to be uploaded', blob);

            const profilePreview = document.getElementById('profilePicturePreview');
            profilePreview.src = URL.createObjectURL(blob);
            profilePreview.style.display = 'block';
            $('#cropperModal1').modal('hide');
        }, 'image/png');
    });
</script>