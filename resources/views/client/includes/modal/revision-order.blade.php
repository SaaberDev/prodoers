

<div class="modal fade" id="declineModal" tabindex="-1" aria-labelledby="declineModalLabel" aria-hidden="true">
    <div class="modal-dialog decline-modal modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="decline-order">
            <p>Thanks for asking for a revision. Please provide as much information as possible for the revision. 
            Designwala will work on it and make sure you get what you need.</p>
            <h6>Revision Requirement</h6>
            <form action="#">
                <textarea placeholder="write your message here."></textarea>
                <div class="revision-requirement-files">
                    <div id="fileList"></div>
                </div>
                <div class="upload-submit">
                <div>
                    <label for="revision-file"><img src="./images/upload-file-icon.svg" alt="dashboard"></label>
                    <input type="file" onchange="javascript:updateList()" id="revision-file" name="revision-file" multiple>
                </div>
                <button type="submit"> Submit </button>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>