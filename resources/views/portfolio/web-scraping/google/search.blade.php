<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 11/09/2017
 * Time: 12:55
 */
?>
<div class="row justify-content-center">
    <div class="col-xs-12 form-group g-mb-20">
        <div class="input-group">
            <span class="input-group-addon g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15">https://www.google.co.uk/search?q=</span>

            <input id="scrap-google-search-value"
                   class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15"
                   type="text" placeholder="Ross Edlin"
                   value="Joe Blogs">
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-xs-12 form-group g-mb-20">
        <div class="input-group">
            <button id="scrap-google-search-button"
                    class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35"
                    role="button"
                    onclick="scrapGoogleSearch();">
                <span style="padding: 0 10px">Scrape</span>
                <span class="fa fa-spinner fa-spin" style="display: none; font-size:18px"></span>
            </button>
        </div>
    </div>
</div>


<div id="scrap-google-search-result-row" class="row justify-content-center" style="">
    <div id="scrap-google-search-result-table"></div>
</div>

<script>
    /**
     *
     */
    function scrapGoogleSearch() {

        $('#scrap-google-search-result-row').show();
        $('#scrap-google-search-result-table').html('');
        $('#scrap-google-search-button').find('.fa-spinner').show();

        $.post('<?= url('api/portfolio/web-scraping/google/search') ?>', {
            search_value: $('#scrap-google-search-value').val(),
            _token: '<?= csrf_token(); ?>'
        })
                .done(function (data, textStatus, jqXHR) {

                    $('#scrap-google-search-button').find('.fa-spinner').hide();

                    $('#scrap-google-search-result-row').show();
                    $('#scrap-google-search-result-table').html(data);

                })
                .fail(function (jqXHR, textStatus, errorThrown) {

                });
    }
</script>