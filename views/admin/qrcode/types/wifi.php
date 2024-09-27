    <form class="form pt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Network name</label>
                    <input type="text" class="form-control network-name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check" style="margin-top: 31px;">
                        <input class="form-check-input hidden-network" type="checkbox">
                        <label class="form-check-label" for="hiddenNetwork">
                            Hidden Network
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control password">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Encyption</label>
                    <select class="form-select encryption">
                        <option value="nopass">None</option>
                        <option value="WPA" selected>WPA/WPA2</option>
                        <option value="WPE">WPE</option>
                    </select>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $("#wifi .form").on("submit", function(e) {
                    e.preventDefault();
                    var name = $(this).find(".network-name").val();
                    var hidden = $(this).find(".hidden-network")[0].checked;
                    var password = $(this).find(".password").val();
                    var encryption = $(this).find(".encyption").val();
                    qrcode.createQR(`WIFI:S:${name};T:${encryption};P:${password};H:${hidden};`);
                    enableButtons();
                });
            });
        </script>                            
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg mt-5 generate-btn">
                <i class="fa fa-qrcode"></i> Gerar QR code</button>
        </div>
    </form>