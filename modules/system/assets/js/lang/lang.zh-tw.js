/*
 * This file has been compiled from: /modules/system/lang/zh-tw/client.php
 */
if (!window.oc) {
    window.oc = {};
}

if (!window.oc.langMessages) {
    window.oc.langMessages = {};
}

window.oc.langMessages['zh-tw'] = $.extend(
    window.oc.langMessages['zh-tw'] || {},
    {"markdowneditor":{"formatting":"\u683c\u5f0f","quote":"\u5f15\u7528","code":"\u7a0b\u5f0f\u78bc","header1":"\u6a19\u984c\u4e00","header2":"\u6a19\u984c\u4e8c","header3":"\u6a19\u984c\u4e09","header4":"\u6a19\u984c\u56db","header5":"\u6a19\u984c\u4e94","header6":"\u6a19\u984c\u516d","bold":"\u7c97\u9ad4","italic":"\u659c\u9ad4","unorderedlist":"\u9805\u76ee\u6e05\u55ae","orderedlist":"\u6578\u5b57\u6e05\u55ae","video":"\u5f71\u7247","image":"\u5716\u7247","link":"\u9023\u7d50","horizontalrule":"\u63d2\u5165\u6c34\u5e73\u7dda","fullscreen":"\u5168\u87a2\u5e55","preview":"\u9810\u89bd"},"mediamanager":{"insert_link":"\u63d2\u5165\u5a92\u9ad4\u6ac3\u9023\u7d50","insert_image":"\u63d2\u5165\u5a92\u9ad4\u6ac3\u5716\u7247","insert_video":"\u63d2\u5165\u5a92\u9ad4\u6ac3\u5f71\u7247","insert_audio":"\u63d2\u5165\u5a92\u9ad4\u6ac3\u97f3\u8a0a","invalid_file_empty_insert":"\u8acb\u9078\u64c7\u6a94\u6848\u4ee5\u63d2\u5165\u9023\u7d50\u3002","invalid_file_single_insert":"\u8acb\u9078\u64c7\u4e00\u500b\u6a94\u6848\u3002","invalid_image_empty_insert":"\u8acb\u9078\u64c7\u63d2\u5165\u7684\u5716\u7247\u3002","invalid_video_empty_insert":"\u8acb\u9078\u64c7\u63d2\u5165\u7684\u5f71\u7247\u3002","invalid_audio_empty_insert":"\u8acb\u9078\u64c7\u63d2\u5165\u7684\u97f3\u8a0a\u3002"},"alert":{"error":"Error","confirm":"Confirm","dismiss":"Dismiss","confirm_button_text":"\u78ba\u8a8d","cancel_button_text":"\u53d6\u6d88","widget_remove_confirm":"\u78ba\u5b9a\u79fb\u9664\u6b64\u5143\u4ef6\uff1f"},"datepicker":{"previousMonth":"\u4e0a\u500b\u6708","nextMonth":"\u4e0b\u500b\u6708","months":["\u4e00\u6708","\u4e8c\u6708","\u4e09\u6708","\u56db\u6708","\u4e94\u6708","\u516d\u6708","\u4e03\u6708","\u516b\u6708","\u4e5d\u6708","\u5341\u6708","\u5341\u4e00\u6708","\u5341\u4e8c\u6708"],"weekdays":["\u661f\u671f\u65e5","\u661f\u671f\u4e00","\u661f\u671f\u4e8c","\u661f\u671f\u4e09","\u661f\u671f\u56db","\u661f\u671f\u4e94","\u661f\u671f\u516d"],"weekdaysShort":["\u9031\u65e5","\u9031\u4e00","\u9031\u4e8c","\u9031\u4e09","\u9031\u56db","\u9031\u4e94","\u9031\u516d"]},"colorpicker":{"choose":"\u78ba\u5b9a"},"filter":{"group":{"all":"\u5168\u90e8"},"scopes":{"apply_button_text":"\u78ba\u5b9a","clear_button_text":"\u6e05\u9664"},"dates":{"all":"\u5168\u90e8","filter_button_text":"\u7be9\u9078","reset_button_text":"\u91cd\u7f6e","date_placeholder":"\u65e5\u671f","after_placeholder":"\u5728\u6b64\u4e4b\u5f8c","before_placeholder":"\u5728\u6b64\u4e4b\u524d"},"numbers":{"all":"\u5168\u90e8","filter_button_text":"\u7be9\u9078","reset_button_text":"\u91cd\u7f6e","min_placeholder":"\u6700\u5c0f\u503c","max_placeholder":"\u6700\u5927\u503c"}},"eventlog":{"show_stacktrace":"Show the stacktrace","hide_stacktrace":"Hide the stacktrace","tabs":{"formatted":"Formatted","raw":"Raw"},"editor":{"title":"Source Code Editor","description":"Your operating system should be configured to listen to one of these URL schemes.","openWith":"Open with","remember_choice":"Remember selected option for this session","open":"Open","cancel":"Cancel"}},"upload":{"max_files":"You can not upload any more files.","invalid_file_type":"You can't upload files of this type.","file_too_big":"File is too big ({{filesize}}MB). Max filesize: {{maxFilesize}}MB.","response_error":"Server responded with {{statusCode}} code.","remove_file":"Remove file"},"inspector":{"add":"Add!","remove":"Remove!","key":"Key!","value":"Value!","ok":"OK!","cancel":"Cancel!","items":"Items!"}}
);


//! moment.js locale configuration v2.22.2

;(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined'
       && typeof require === 'function' ? factory(require('../moment')) :
   typeof define === 'function' && define.amd ? define(['../moment'], factory) :
   factory(global.moment)
}(this, (function (moment) { 'use strict';


    var zhTw = moment.defineLocale('zh-tw', {
        months : '??????_??????_??????_??????_??????_??????_??????_??????_??????_??????_?????????_?????????'.split('_'),
        monthsShort : '1???_2???_3???_4???_5???_6???_7???_8???_9???_10???_11???_12???'.split('_'),
        weekdays : '?????????_?????????_?????????_?????????_?????????_?????????_?????????'.split('_'),
        weekdaysShort : '??????_??????_??????_??????_??????_??????_??????'.split('_'),
        weekdaysMin : '???_???_???_???_???_???_???'.split('_'),
        longDateFormat : {
            LT : 'HH:mm',
            LTS : 'HH:mm:ss',
            L : 'YYYY/MM/DD',
            LL : 'YYYY???M???D???',
            LLL : 'YYYY???M???D??? HH:mm',
            LLLL : 'YYYY???M???D???dddd HH:mm',
            l : 'YYYY/M/D',
            ll : 'YYYY???M???D???',
            lll : 'YYYY???M???D??? HH:mm',
            llll : 'YYYY???M???D???dddd HH:mm'
        },
        meridiemParse: /??????|??????|??????|??????|??????|??????/,
        meridiemHour : function (hour, meridiem) {
            if (hour === 12) {
                hour = 0;
            }
            if (meridiem === '??????' || meridiem === '??????' || meridiem === '??????') {
                return hour;
            } else if (meridiem === '??????') {
                return hour >= 11 ? hour : hour + 12;
            } else if (meridiem === '??????' || meridiem === '??????') {
                return hour + 12;
            }
        },
        meridiem : function (hour, minute, isLower) {
            var hm = hour * 100 + minute;
            if (hm < 600) {
                return '??????';
            } else if (hm < 900) {
                return '??????';
            } else if (hm < 1130) {
                return '??????';
            } else if (hm < 1230) {
                return '??????';
            } else if (hm < 1800) {
                return '??????';
            } else {
                return '??????';
            }
        },
        calendar : {
            sameDay : '[??????] LT',
            nextDay : '[??????] LT',
            nextWeek : '[???]dddd LT',
            lastDay : '[??????] LT',
            lastWeek : '[???]dddd LT',
            sameElse : 'L'
        },
        dayOfMonthOrdinalParse: /\d{1,2}(???|???|???)/,
        ordinal : function (number, period) {
            switch (period) {
                case 'd' :
                case 'D' :
                case 'DDD' :
                    return number + '???';
                case 'M' :
                    return number + '???';
                case 'w' :
                case 'W' :
                    return number + '???';
                default :
                    return number;
            }
        },
        relativeTime : {
            future : '%s???',
            past : '%s???',
            s : '??????',
            ss : '%d ???',
            m : '1 ??????',
            mm : '%d ??????',
            h : '1 ??????',
            hh : '%d ??????',
            d : '1 ???',
            dd : '%d ???',
            M : '1 ??????',
            MM : '%d ??????',
            y : '1 ???',
            yy : '%d ???'
        }
    });

    return zhTw;

})));


/*! Select2 4.1.0-rc.0 | https://github.com/select2/select2/blob/master/LICENSE.md */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/zh-tw",[],function(){return{inputTooLong:function(n){return"?????????"+(n.input.length-n.maximum)+"?????????"},inputTooShort:function(n){return"????????????"+(n.minimum-n.input.length)+"?????????"},loadingMore:function(){return"????????????"},maximumSelected:function(n){return"?????????????????????"+n.maximum+"???"},noResults:function(){return"???????????????????????????"},searching:function(){return"????????????"},removeAllItems:function(){return"??????????????????"}}}),n.define,n.require}();
