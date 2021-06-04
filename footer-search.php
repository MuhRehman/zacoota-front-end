
<!-- Scripts
================================================== -->


<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>

<script type="text/javascript" src="./theme/scripts/jquery-migrate-3.1.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="./theme/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="./theme/scripts/chosen.min.js"></script>
<script type="text/javascript" src="./theme/scripts/slick.min.js"></script>
<script type="text/javascript" src="./theme/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="./theme/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="./theme/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="./theme/scripts/counterup.min.js"></script>
<script type="text/javascript" src="./theme/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="./theme/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="./theme/scripts/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!--fileinput plugin-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/piexif.min.js"
        type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
    This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/sortable.min.js"
        type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for
    HTML files. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/purify.min.js"
        type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x (for popover and tooltips). You can also use the bootstrap js
   3.3.x versions without popper.min.js. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>

<!--<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>-->


<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>

<!--add this plugin-->
<script type="text/javascript"
        src="https://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4fc5035049aea956"></script>
<script type="text/javascript" src="assets/js/lightslider.js"></script>
<script type="text/javascript" src="assets/scripts/range-custom-script.js"></script>
<!--light box -->
<script type="text/javascript" src="assets/js/simpleLightbox.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js'></script>

<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }
        });

        if ($('.main-search-input-item')[0]) {
            setTimeout(function(){
                $(".pac-container").prependTo("#autocomplete-container");
            }, 300);
        }
    }
</script>
<script type="text/javascript">
    $(window).load(function () {
        $("#wrapper").removeClass("hideAll");
    });
</script>


<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script>
<script type="text/javascript" src="./theme/scripts/infobox.min.js"></script>
<script type="text/javascript" src="./theme/scripts/markerclusterer.js"></script>
<script type="text/javascript" src="./theme/scripts/maps.js"></script>