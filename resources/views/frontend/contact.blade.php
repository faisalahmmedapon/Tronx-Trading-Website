@extends('frontend.app')


@section('meta_title', 'Conatct')
@section('meta_keywords', '')
@section('meta_description', '')

@section('content')


    <div class="about_us__help-page">
        <div dir="auto">
            <div class="about_us__help-title">Feedback</div>
            <div class="about_us__help-container">
                <div class="about_us__help-subtitle">
                    If you're an existing customer and have an active
                    account on the platform, please contact support in the "Support" section
                    of your profile. <br><br>
                    If you have difficulty logging in or recovering
                    access to your account, please use the form below. </div>
                <div class="about_us__help-address">
                    <div class="about_us__help-address__header">
                        <div>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.00009 7.37001C4.04035 15.832 11.3792 22 11.3792 22C11.3792 22 18.056 15.8946 17.9996 7.37001C17.9433 -1.1546 3.95983 -1.09202 4.00009 7.37001Z"
                                    fill="#8F042A"></path>
                                <path
                                    d="M4.00009 7.37001C4.04035 15.832 11.3792 22 11.3792 22C11.3792 22 10.7021 14.1172 11.3792 9.7209C12.0563 5.32462 15.3191 2.24407 15.3191 2.24407C11.2463 -0.469241 3.97103 1.26293 4.00009 7.37001Z"
                                    fill="#8F042A"></path>
                                <path
                                    d="M4.00009 7.37001C4.04035 15.832 11.3792 22 11.3792 22C11.3792 22 10.7021 14.1172 11.3792 9.7209C12.0563 5.32462 15.3191 2.24407 15.3191 2.24407C11.2463 -0.469241 3.97103 1.26293 4.00009 7.37001Z"
                                    fill="url(#paint0_linear_6380_68074)"></path>
                                <ellipse cx="10.9981" cy="9" rx="2.94737" ry="3" fill="white"></ellipse>
                                <defs>
                                    <linearGradient id="paint0_linear_6380_68074" x1="193.844" y1="1.59165"
                                                    x2="1.91135" y2="75.8352" gradientUnits="userSpaceOnUse">
                                        <stop></stop>
                                        <stop offset="1" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div>
                            <b>Maxbit LLC</b><br>
                            #10 Manoel Street<br>
                            Castries, Saint Lucia </div>
                    </div>

                    <div class="about_us__help-address__social">
                        <a href="" target="_blank"><i class="icon icon__tg-blue"></i></a>
                        <a href="https://twitter.com/quotex_platform" target="_blank"><i
                                class="icon icon__tw-blue"></i></a>
                        <a href="https://www.instagram.com/quotex_io/" target="_blank"><i
                                class="icon icon__inst-blue"></i></a>
                        <a href="https://www.facebook.com/quotexio/" target="_blank"><i
                                class="icon icon__fb-blue"></i></a>
                    </div>

                    <div class="about_us__help-address__bg"></div>
                </div>
            </div>
        </div>

        <div class="js-support-form">
            <div class="about_us__help_subtitle" dir="auto">Choose a topic</div>
            <div class="about_us__help-buttons " dir="auto">
                <div class="about_us__help-button js-support-script-block-switch"
                     data-target-block="root/recovery" data-switch-active="0">Account
                    recovery</div>
                <div class="about_us__help-button js-support-script-block-switch" data-target-block="root/other"
                     data-switch-active="0">Other problem</div>
            </div>
        </div>

        <div name="form"></div>

        <div class="about_us__help-block " id="js-support-container" dir="auto">
            <form method="post" enctype="multipart/form-data" action="https://qxbroker.com/en/contacts/"
                  data-init-path="" class="js-support-script-form" style="width: 100%; ">
                <input type="hidden" name="_token" value="7Yp3t4aABtyev3HBCNBhk5pRI9KomGIhILFYln8w">
                <div class="js-support-script-block hidden" data-block-path="root" data-block-active="0"
                    >
                    <div class="js-support-script-block hidden" data-block-path="root/recovery"
                         data-block-active="0"> <input type="hidden" name="path"
                                                                            value="root/recovery">
                        <div dir="auto">
                            <div class="about_us__help-block__warning">
                                <div class="about_us__help-block__title ">
                                    <div>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="#FF8A00"></circle>
                                            <path
                                                d="M10 15.8327C9.31092 15.8327 8.75 15.3092 8.75 14.666C8.75 14.0229 9.31092 13.4993 10 13.4993C10.6891 13.4993 11.25 14.0229 11.25 14.666C11.25 15.3092 10.6891 15.8327 10 15.8327ZM11.25 11.166C11.25 11.8092 10.6891 12.3327 10 12.3327C9.31092 12.3327 8.75 11.8092 8.75 11.166V5.33268C8.75 4.68954 9.31092 4.16602 10 4.16602C10.6891 4.16602 11.25 4.68954 11.25 5.33268V11.166Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                    <div>We do not restore closed accounts!</div>
                                </div>
                                <div class="about_us__help-block__text">
                                    This is a measure to prevent fraudulent activity aimed at
                                    accessing user accounts, and obtaining personal information of other
                                    traders.
                                    <br><br><em>*You may register a new one using a different email
                                        address.</em>
                                </div>
                            </div>
                            <div class="about_us__help-block__info">
                                <div class="about_us__help-block__title ">
                                    <div>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="#026FD3"></circle>
                                            <path
                                                d="M10 15.8327C9.31092 15.8327 8.75 15.3092 8.75 14.666C8.75 14.0229 9.31092 13.4993 10 13.4993C10.6891 13.4993 11.25 14.0229 11.25 14.666C11.25 15.3092 10.6891 15.8327 10 15.8327ZM11.25 11.166C11.25 11.8092 10.6891 12.3327 10 12.3327C9.31092 12.3327 8.75 11.8092 8.75 11.166V5.33268C8.75 4.68954 9.31092 4.16602 10 4.16602C10.6891 4.16602 11.25 4.68954 11.25 5.33268V11.166Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                    <div>If the account was closed by mistake:</div>
                                </div>
                                <div class="about_us__help-block__text">
                                    In case you are sure, that the account has been deleted by
                                    mistake, there are funds on the balance, and there are no other accounts
                                    registered by you on the Platform, to restore the account you would
                                    need to use the contact form below and provide the following
                                    information:
                                    <ol>
                                        <li><span>The exact email address, the account had been registered to,
                                                        or its ID.</span></li>
                                        <li><span>A high-resolution photo of yourself (“Selfie”) on
                                                        which:</span>
                                            <ul>
                                                <li><span>You are holding your document for personality
                                                                identification</span></li>
                                                <li><span>Along with a sheet of paper with the name “QUOTEX”
                                                                written on it by hand, current date and your
                                                                signature</span></li>
                                                <em>*Your face, body and both arms must be visible. The details
                                                    of the document should be clear and readable.</em>
                                            </ul>
                                        </li>
                                        <li><span>A screenshot to confirm your deposit in this account (bank
                                                        statement, or payment system receipt will do).</span></li>
                                    </ol>
                                </div>
                                <span class="about_us__help-block__button js-support-script-block-switch"
                                      data-target-block="root/recovery/form" data-switch-active="0">Open contact
                                            form</span>
                            </div>
                        </div>
                    </div>
                    <div class="about_us__help-block__form js-support-script-block hidden"
                         data-block-path="root/recovery/form" data-block-active="0"> <input
                            type="hidden" name="path" value="root/recovery/form">
                        <div class="about_us__help-block__title ">Fill out the support form
                            for help</div>
                        <div dir="auto">
                            <div class="modal-sign__input">
                                <label class="modal-sign__input-label about_us__help-block__form-label
                        ">
                                    Account Email </label>
                                <input type="text" name="email" class="modal-sign__input-value"
                                       placeholder="Enter email"> </div>
                            <div data-role="email-misspell-hint-email" class="misspell-hint hide hint -danger"
                                >
                                Did you mean: <span data-role="email-misspell-suggestion"
                                                    class="misspell-hint-suggestion"></span>
                            </div>

                            <div class="modal-sign__input">
                                <label class="modal-sign__input-label about_us__help-block__form-label
                        ">
                                    Email to contact you </label>
                                <input type="text" name="name" class="modal-sign__input-value"
                                       placeholder="Enter email"> </div>
                            <div data-role="email-misspell-hint-name" class="misspell-hint hide hint -danger"
                                >
                                Did you mean: <span data-role="email-misspell-suggestion"
                                                    class="misspell-hint-suggestion"></span>
                            </div>

                            <div class="contacts__textarea">
                                <label class="contacts__textarea-label about_us__help-block__form-label
                        ">
                                    Message </label>
                                <textarea name="message" cols="40" rows="3" class="modal-sign__input-value"
                                          placeholder="Your message..."></textarea> </div>
                            <div class="upload-control-form">
                                <label class="upload-control support-form__upload  js-file-input">
                                    <div class="upload-control__label about_us__help-block__form-drop-label"
                                        >Attachments <span class="upload-control__count"
                                                                                hidden=""></span>
                                    </div>
                                    <input class="upload-control__input" type="file" name="files[]"
                                           data-action="https://qxbroker.com/en/support/files/" multiple=""
                                           accept=".jpg, .jpeg, .png, .pdf">
                                    <input class="upload-control-id" value="[]" type="hidden" name="file-id">
                                    <p class="upload-control__help about_us__help-block__form-drop-help">
                                        Click or Drop files here<br>
                                        Formats: jpg, jpeg, png, pdf <span class="text-muted">•</span>
                                        Max: 2Mb, 10 files </p>

                                    <div class="upload-control__dragdrop">
                                        <svg class="icon-paperclip">
                                            <use
                                                xlink:href="https://qxbroker.com/profile/images/spritemap.svg#icon-paperclip">
                                            </use>
                                        </svg>
                                        <small class="text-primary">
                                            <b>Attachments:</b>
                                            Drop files here </small>
                                    </div>
                                </label>
                                <ol class="upload-control-files" hidden=""></ol>
                                <div class="input-control-cabinet__hint"></div>
                                <ol class="upload-control-files">
                                </ol>
                            </div>
                            <button type="submit" class="about_us__help-block__form-button"
                                    id="btn-form-contacts">
                                Send request</button>
                        </div>
                    </div>
                    <div class="about_us__help-block__form js-support-script-block hidden"
                         data-block-path="root/other" data-block-active="0"><input
                            type="hidden" name="category" value="other"> <input type="hidden" name="path"
                                                                                value="root/other">
                        <div class="about_us__help-block__title ">Fill out the support form
                            for help</div>
                        <div dir="auto">
                            <div class="modal-sign__input">
                                <label class="modal-sign__input-label about_us__help-block__form-label
                        ">
                                    Account Email </label>
                                <input type="text" name="email" class="modal-sign__input-value"
                                       placeholder="Enter email"> </div>
                            <div data-role="email-misspell-hint-email" class="misspell-hint hide hint -danger"
                                >
                                Did you mean: <span data-role="email-misspell-suggestion"
                                                    class="misspell-hint-suggestion"></span>
                            </div>

                            <div class="modal-sign__input">
                                <label class="modal-sign__input-label about_us__help-block__form-label
                        ">
                                    Email to contact you </label>
                                <input type="text" name="name" class="modal-sign__input-value"
                                       placeholder="Enter email"> </div>
                            <div data-role="email-misspell-hint-name" class="misspell-hint hide hint -danger"
                                >
                                Did you mean: <span data-role="email-misspell-suggestion"
                                                    class="misspell-hint-suggestion"></span>
                            </div>

                            <div class="contacts__textarea">
                                <label class="contacts__textarea-label about_us__help-block__form-label
                        ">
                                    Message </label>
                                <textarea name="message" cols="40" rows="3" class="modal-sign__input-value"
                                          placeholder="Your message..."></textarea> </div>
                            <div class="upload-control-form">
                                <label class="upload-control support-form__upload  js-file-input">
                                    <div class="upload-control__label about_us__help-block__form-drop-label"
                                        >Attachments <span class="upload-control__count"
                                                                                hidden=""></span>
                                    </div>
                                    <input class="upload-control__input" type="file" name="files[]"
                                           data-action="https://qxbroker.com/en/support/files/" multiple=""
                                           accept=".jpg, .jpeg, .png, .pdf">
                                    <input class="upload-control-id" value="[]" type="hidden" name="file-id">
                                    <p class="upload-control__help about_us__help-block__form-drop-help">
                                        Click or Drop files here<br>
                                        Formats: jpg, jpeg, png, pdf <span class="text-muted">•</span>
                                        Max: 2Mb, 10 files </p>

                                    <div class="upload-control__dragdrop">
                                        <svg class="icon-paperclip">
                                            <use
                                                xlink:href="https://qxbroker.com/profile/images/spritemap.svg#icon-paperclip">
                                            </use>
                                        </svg>
                                        <small class="text-primary">
                                            <b>Attachments:</b>
                                            Drop files here </small>
                                    </div>
                                </label>
                                <ol class="upload-control-files" hidden=""></ol>
                                <div class="input-control-cabinet__hint"></div>
                                <ol class="upload-control-files">
                                </ol>
                            </div>
                            <button type="submit" class="about_us__help-block__form-button"
                                    id="btn-form-contacts">
                                Send request</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="js-support-script-stack hidden"></div>
        <div class="about_us__help-address-mobile">
            <div class="about_us__help-address__header">
                <div>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.00009 7.37001C4.04035 15.832 11.3792 22 11.3792 22C11.3792 22 18.056 15.8946 17.9996 7.37001C17.9433 -1.1546 3.95983 -1.09202 4.00009 7.37001Z"
                            fill="#8F042A"></path>
                        <path
                            d="M4.00009 7.37001C4.04035 15.832 11.3792 22 11.3792 22C11.3792 22 10.7021 14.1172 11.3792 9.7209C12.0563 5.32462 15.3191 2.24407 15.3191 2.24407C11.2463 -0.469241 3.97103 1.26293 4.00009 7.37001Z"
                            fill="#8F042A"></path>
                        <path
                            d="M4.00009 7.37001C4.04035 15.832 11.3792 22 11.3792 22C11.3792 22 10.7021 14.1172 11.3792 9.7209C12.0563 5.32462 15.3191 2.24407 15.3191 2.24407C11.2463 -0.469241 3.97103 1.26293 4.00009 7.37001Z"
                            fill="url(#paint0_linear_6380_68074)"></path>
                        <ellipse cx="10.9981" cy="9" rx="2.94737" ry="3" fill="white"></ellipse>
                        <defs>
                            <linearGradient id="paint0_linear_6380_68074" x1="193.844" y1="1.59165" x2="1.91135"
                                            y2="75.8352" gradientUnits="userSpaceOnUse">
                                <stop></stop>
                                <stop offset="1" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div>
                    <b>Maxbit LLC</b><br>
                    First Floor, First St Vincent Bank LTD Building, James Street, Kingstown<br>
                    St. Vincent and Grenadines
                </div>
            </div>

            <div class="about_us__help-address__social">
                <a href="" target="_blank"><i class="icon icon__tg-blue"></i></a>
                <a href="https://twitter.com/quotex_platform" target="_blank"><i
                        class="icon icon__tw-blue"></i></a>
                <a href="https://www.instagram.com/quotex_io/" target="_blank"><i
                        class="icon icon__inst-blue"></i></a>
                <a href="https://www.facebook.com/quotexio/" target="_blank"><i
                        class="icon icon__fb-blue"></i></a>
            </div>

            <div class="about_us__help-address__bg"></div>
        </div>
    </div>
@endsection
