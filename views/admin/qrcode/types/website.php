    <form class="form pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Website</label>
                    <input type="url" class="form-control form-control-lg url" placeholder="https://example.com" required>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $("#website .form").on("submit", function(e) {
                    e.preventDefault();
                    var url = $("#website .url").val();
                    qrcode.createQR(url);
                    enableButtons();
                });
            });
        </script>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg mt-5 generate-btn">
                <i class="fa fa-qrcode"></i> Gerar QR code
            </button>
        </div>
    </form>