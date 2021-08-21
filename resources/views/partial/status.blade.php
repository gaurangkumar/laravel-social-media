    <!-- Status modal -->
    <div class="modal status-modal fade" id="status-modal" style="">
        <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
            <div class="modal-content-full-width modal-content">
                <div class=" modal-header-full-width   modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalPreviewLabel">Material Design  Full Screen Modal</h5>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="inner-popup mx-auto">
                    <!--<span class="close custom-status-close" data-dismiss="modal"><i class="fas fa-times"></i></span>-->
                    <div id="carouselExampleIndicators" class="carousel slide slider mx-auto" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner status_slider" role="listbox">
                            <div class="carousel-item active">
                                <img src="template/assets/img/carousel.jpg" alt="">
                            </div>
                            <div id="target" class="carousel-item">
                                <img src="template/assets/img/carousel1.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="template/assets/img/carousel2.jpg" alt="">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="chat-footer border-top py-4 ypy-lg-6 ypx-lg-8">
                        <div class="container-xxl">

                            <form id="chat-id-2-form" action="route('sendchat', $sender->id)" data-emoji-form="">
                                @csrf
                                <div class="form-row align-items-center">
                                    <div class="col">
                                        <div class="input-group">

                                            <!-- Textarea -->
                                            <textarea id="chat-id-2-input" name="msg" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>

                                            <!-- Emoji button -->
                                            <div class="input-group-append">
                                                <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                                    <img src="assets/images/smile.svg" data-inject-svg="" alt="">
                                                </button>
                                            </div>

                                            <!-- Upload button -->
                                            <div class="input-group-append">
                                                <button id="chat-upload-btn-2" class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js" type="button">
                                                    <img src="assets/images/paperclip.svg" data-inject-svg="" alt="">
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- Submit button -->
                                    <div class="col-auto">
                                        <button class="btn btn-ico btn-primary rounded-circle" type="submit">
                                            <span class="fe-send"></span>
                                        </button>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Status Modal -->

    <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
        <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
            <div class="modal-content-full-width modal-content ">
                <div class=" modal-header-full-width   modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalPreviewLabel">Material Design  Full Screen Modal</h5>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-auto pb-0">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner status_slider" role="listbox">
                                <div class="carousel-item active">
                                    <img src="template/assets/img/carousel.jpg" alt="">
                                </div>
                                <div id="target" class="carousel-item">
                                    <img src="template/assets/img/carousel1.jpg" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="template/assets/img/carousel2.jpg" alt="">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="modal-footer-full-width  modal-footer py-0">
                            <div class="chat-footer border-top py-4 ypy-lg-6 ypx-lg-8">
                                <div class="container-xxl">

                                    <form id="chat-id-2-form" action="route('sendchat', $sender->id)" data-emoji-form="">
                                        @csrf
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <div class="input-group">

                                                    <!-- Textarea -->
                                                    <textarea id="chat-id-2-input" name="msg" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>

                                                    <!-- Emoji button -->
                                                    <div class="input-group-append">
                                                        <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                                            <img src="assets/images/smile.svg" data-inject-svg="" alt="">
                                                        </button>
                                                    </div>

                                                    <!-- Upload button -->
                                                    <div class="input-group-append">
                                                        <button id="chat-upload-btn-2" class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js" type="button">
                                                            <img src="assets/images/paperclip.svg" data-inject-svg="" alt="">
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- Submit button -->
                                            <div class="col-auto">
                                                <button class="btn btn-ico btn-primary rounded-circle" type="submit">
                                                    <span class="fe-send"></span>
                                                </button>
                                            </div>

                                        </div>

                                    </form>

                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
