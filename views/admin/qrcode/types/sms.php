    <form class="form pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Phone number</label>
                    <input type="tel" class="form-control form-control-lg phone" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Messsage</label>
                    <textarea class="form-control form-control-lg message" required></textarea>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $("#sms .form").on("submit", function(e) {
                    e.preventDefault();
                    var phone = $(this).find(".phone").val();
                    var message = $(this).find(".message").val();
                    qrcode.createQR(`SMSTO:${phone}:${message}`);
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