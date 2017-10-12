<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 13/09/2017
 * Time: 16:52
 */
?>
@extends('unify-consulting.layout')

@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.9.640/compatibility.js"></script>

    <script>
        // If absolute URL from the remote server is provided, configure the CORS
        // header on that server.
        var url = '/files/cv.pdf';

        // Disable workers to avoid yet another cross-origin issue (workers need
        // the URL of the script to be loaded, and dynamically loading a cross-origin
        // script does not work).
        // PDFJS.disableWorker = true;

        // The workerSrc property shall be specified.
//        PDFJS.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';
        PDFJS.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.9.640/compatibility.js';

        // Asynchronous download of PDF
        var loadingTask = PDFJS.getDocument(url);
        loadingTask.promise.then(function (pdf) {
            console.log('PDF loaded');

            // Fetch the first page
            var pageNumber = 1;
            pdf.getPage(pageNumber).then(function (page) {
                console.log('Page loaded');

                var scale = 1.5;
                var viewport = page.getViewport(scale);

                // Prepare canvas using PDF page dimensions
                var canvas = document.getElementById('the-canvas');
                var context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                var renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                var renderTask = page.render(renderContext);
                renderTask.then(function () {
                    console.log('Page rendered');
                });
            });
        }, function (reason) {
            // PDF loading error
            console.error(reason);
        });
    </script>

    <div id="cv">
        <div class="container g-pt-100">

            <h1>PDF.js 'Hello, world!' example</h1>

            <canvas id="the-canvas"></canvas>

            <!-- C.V. -->
            <div class="col-sm-12 col-md-9">
                {{--<iframe class="col-sm-12" height="800" src="/files/cv.pdf" frameborder="0" allowfullscreen></iframe>--}}
            </div>
            <!-- End C.V. -->

            <!-- Sidebar -->
            <div class="col-sm-0 col-md-3">
                {{--@include('snippets.blog.sidebar')--}}
            </div>
            <!-- End Sidebar -->

        </div>
    </div>
@stop

@section('body.post')
    @include('index.snippets.body-post')
@stop