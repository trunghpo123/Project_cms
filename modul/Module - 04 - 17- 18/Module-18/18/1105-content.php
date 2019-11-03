<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <div class="type-1105">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-title-1">
                        <div class="section-title-1">
                            <h3 class="h3-section-title">
          <b></b>
          <span class="section-title-main">Frequently Asked Questions</span>
          <b></b>
          </h3>
                        </div>
                        <!-- .section-title -->
                        <div class="section-title-body">
                            <p class="lead">Please read our FAQ before sending us a message.</p>
                            <div class="accordion">
                                <div class="accordion-item">
                                    <a href="#" class="accordion-item plain">
                                        <button class="toggle">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <span>What are the delivery charges for orders from the Online Shop?</span>
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="#" class="accordion-item plain">
                                        <button class="toggle">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <span>Which payment methods are accepted in the Online Shop?</span>
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="#" class="accordion-item plain">
                                        <button class="toggle">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <span>How long will delivery take?</span>
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="#" class="accordion-item plain">
                                        <button class="toggle">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <span>How secure is shopping in the Online Shop? Is my data protected?</span>
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="#" class="accordion-item plain">
                                        <button class="toggle">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <span>What exactly happens after ordering?</span>
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="#" class="accordion-item plain">
                                        <button class="toggle">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <span>Do I receive an invoice for my order?</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-title-2">
                        <div class="section-title-2">
                            <h3 class="h3-section-title">
          <b></b>
          <span class="section-title-main">Send us an email</span>
          <b></b>
          </h3>
                        </div>
                        <form action="" class="form-section">
                            <p>
                                <label>Your Name (required)</label><br>
                                <span class="form-input your-name">
                                    <input type="text" name="your-name" value size="40" class="inputname">
                                </span>
                            </p>
                            <p>
                                <label>Your Email (required)</label><br>
                                <span class="form-input your-email">
                                    <input type="text" name="your-email" value size="40" class="inputemail">
                                </span>
                            </p>
                            <p>
                                <label>Your Message (required)</label><br>
                                <span class="form-input your-message">
                                    <input type="text" name="your-message" cols="40" rows="10" value size="40" class="inputmessage">
                                </span>
                            </p>
                            <p>
                                <button class="btn-submit" >SUBMIT</button>
                            </p>
                        </form>
                        <p class="footer">This is form is just for demo purpose. No inquiries will be answered.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>