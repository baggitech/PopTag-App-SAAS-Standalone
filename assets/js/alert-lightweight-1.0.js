/*-----------------------------------------
  Alert
---------------------------------------*/
$(function() {
  $("#liveAlert").show();
  setTimeout(function() {
    $("#liveAlert").fadeOut();
  }, 10000);
});
