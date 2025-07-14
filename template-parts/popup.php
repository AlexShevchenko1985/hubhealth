<?php
use App\Helpers\Helper;

if(empty(Helper::optionPopup())){
    return;
}
?>
<div id="popup-wrapper" style="display: none;">
    <div class="popup-content">
        <span id="popup-close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1910_5287)">
                        <path d="M18.75 5.25L5.25 18.75" stroke="#3E3E3E" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.75 18.75L5.25 5.25" stroke="#3E3E3E" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1910_5287">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
        </span>
        <div class="popup-content-holder">
            <h5 id="popup-title"></h5>
            <p id="popup-text"></p>
            <div class="btn-holder">
                <a class="cta-btn" id="popup-btn-close" href="javascript:void(0)"></a>
            </div>
        </div>
    </div>
</div>
