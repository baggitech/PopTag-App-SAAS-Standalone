    <form class="form pt-5">
        <div class="row">
            <div class="col-md-12 mb-3">
                <label class="form-label">Choose Type</label>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="twitter-url"
                                        name="type" checked>
                                    Twitter Link
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input fsu-r"
                                     value="tweet" name="type">
                                    Tweet
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group twitter-url-box">
                    <label class="form-label">Twitter Link</label>
                    <input type="url" class="form-control form-control-lg twitter-url"  placeholder="https://twitter.com/@tag"  required>
                </div>
                <div class="form-group tweet-box" style="display:none;">
                    <label class="form-label">Post a Tweet</label>
                    <textarea rows="4" class="form-control form-control-lg tweet" disabled  placeholder="free qr code generator #qrcode"  required></textarea>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $("#twitter [name=type]").on("change", function(){
                    if(this.value == "twitter-url") {
                        $("#twitter .twitter-url-box").show();
                        $("#twitter .twitter-url-box input").prop("disabled", false)
                        $("#twitter .tweet-box").hide();
                        $("#twitter .tweet-box textarea").prop("disabled", true)
                    } else {
                        $("#twitter .twitter-url-box").hide();
                        $("#twitter .twitter-url-box input").prop("disabled", true)
                        $("#twitter .tweet-box").show();
                        $("#twitter .tweet-box textarea").prop("disabled", false)
                    }
                });
                $("#twitter .form").on("submit", function(e) {
                    e.preventDefault();
                    var url = $(this).find(".twitter-url").val();
                    var tweet = $(this).find(".tweet").val();
                    var type = $(this).find("[name=type]:checked").val();
                    if (type == "twitter-url") {
                        qrcode.createQR(url);
                    } else {
                        qrcode.createQR(`https://twitter.com/intent/tweet?text=${encodeURIComponent(tweet)}`);
                    }
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