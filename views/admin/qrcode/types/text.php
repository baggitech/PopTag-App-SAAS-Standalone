    <form class="form pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Text</label>
                    <textarea class="form-control text" rows="4" required></textarea>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $("#text .form").on("submit", function(e) {
                    e.preventDefault();
                    var text = $(this).find(".text").val();
                    qrcode.createQR(text);
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