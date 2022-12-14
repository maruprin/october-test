/*
 * This file has been compiled from: /modules/system/lang/zh-cn/client.php
 */
if (!window.oc) {
    window.oc = {};
}

if (!window.oc.langMessages) {
    window.oc.langMessages = {};
}

window.oc.langMessages['zh-cn'] = $.extend(
    window.oc.langMessages['zh-cn'] || {},
    {"markdowneditor":{"formatting":"\u683c\u5f0f\u5316","quote":"\u5f15\u7528","code":"\u4ee3\u7801","header1":"\u6807\u9898 1","header2":"\u6807\u9898 2","header3":"\u6807\u9898 3","header4":"\u6807\u9898 4","header5":"\u6807\u9898 5","header6":"\u6807\u9898 6","bold":"\u7c97\u4f53","italic":"\u659c\u4f53","unorderedlist":"\u65e0\u5e8f\u5217\u8868","orderedlist":"\u6709\u5e8f\u5217\u8868","video":"\u89c6\u9891","image":"\u56fe\u7247","link":"\u94fe\u63a5","horizontalrule":"\u63d2\u5165\u5206\u5272\u7ebf","fullscreen":"\u5168\u5c4f","preview":"\u9884\u89c8"},"mediamanager":{"insert_link":"\u63d2\u5165\u94fe\u63a5","insert_image":"\u63d2\u5165\u56fe\u7247","insert_video":"\u63d2\u5165\u89c6\u9891","insert_audio":"\u63d2\u5165\u97f3\u9891","invalid_file_empty_insert":"\u8bf7\u9009\u62e9\u8981\u63d2\u5165\u7684\u6587\u4ef6\u3002","invalid_file_single_insert":"\u8bf7\u9009\u62e9\u8981\u63d2\u5165\u7684\u6587\u4ef6\u3002","invalid_image_empty_insert":"\u8bf7\u9009\u62e9\u8981\u63d2\u5165\u7684\u56fe\u7247\u6587\u4ef6\u3002","invalid_video_empty_insert":"\u8bf7\u9009\u62e9\u8981\u63d2\u5165\u7684\u89c6\u9891\u6587\u4ef6\u3002","invalid_audio_empty_insert":"\u8bf7\u9009\u62e9\u8981\u63d2\u5165\u7684\u97f3\u9891\u6587\u4ef6\u3002"},"alert":{"error":"\u9519\u8bef","confirm":"\u786e\u8ba4","dismiss":"\u53d6\u6d88","confirm_button_text":"\u786e\u5b9a","cancel_button_text":"\u53d6\u6d88","widget_remove_confirm":"\u5220\u9664\u8fd9\u4e2a\u5c0f\u90e8\u4ef6?"},"datepicker":{"previousMonth":"\u4e0a\u4e00\u4e2a\u6708","nextMonth":"\u4e0b\u4e00\u4e2a\u6708","months":["\u4e00\u6708","\u4e8c\u6708","\u4e09\u6708","\u56db\u6708","\u4e94\u6708","\u516d\u6708","\u4e03\u6708","\u516b\u6708","\u4e5d\u6708","\u5341\u6708","\u5341\u4e00\u6708","\u5341\u4e8c\u6708"],"weekdays":["\u5468\u65e5","\u5468\u4e00","\u5468\u4e8c","\u5468\u4e09","\u5468\u56db","\u5468\u4e94","\u5468\u516d"],"weekdaysShort":["\u65e5","\u4e00","\u4e8c","\u4e09","\u56db","\u4e94","\u516d"]},"colorpicker":{"choose":"\u597d"},"filter":{"group":{"all":"\u5168\u90e8"},"scopes":{"apply_button_text":"\u5e94\u7528","clear_button_text":"\u6e05\u9664"},"dates":{"all":"\u5168\u90e8","filter_button_text":"\u7b5b\u9009","reset_button_text":"\u91cd\u7f6e","date_placeholder":"\u65e5\u671f","after_placeholder":"\u4e4b\u540e","before_placeholder":"\u4e4b\u524d"},"numbers":{"all":"\u5168\u90e8","filter_button_text":"\u8fc7\u6ee4\u5668","reset_button_text":"\u91cd\u7f6e","min_placeholder":"\u6700\u5c0f","max_placeholder":"\u6700\u5927"}},"eventlog":{"show_stacktrace":"\u663e\u793a\u5806\u6808","hide_stacktrace":"\u9690\u85cf\u5806\u6808","tabs":{"formatted":"\u683c\u5f0f\u5316","raw":"\u539f\u59cb"},"editor":{"title":"\u6e90\u4ee3\u7801\u7f16\u8f91\u5668","description":"\u60a8\u7684\u7cfb\u7edf\u5e94\u914d\u7f6e\u4e00\u4e2a\u4fa6\u542c\u8fd9\u4e9b URL \u7684\u65b9\u6848","openWith":"\u6253\u5f00\u65b9\u5f0f","remember_choice":"\u8bb0\u4f4f\u672c\u6b21\u4f1a\u8bdd\u9009\u62e9\u7684\u9009\u9879","open":"\u6253\u5f00","cancel":"\u53d6\u6d88"}},"upload":{"max_files":"\u60a8\u4e0d\u80fd\u4e0a\u4f20\u4efb\u4f55\u6587\u4ef6","invalid_file_type":"\u60a8\u4e0d\u80fd\u4e0a\u4f20\u8fd9\u79cd\u7c7b\u578b\u7684\u6587\u4ef6","file_too_big":"\u6587\u4ef6\u592a\u5927 ({{filesize}}MB)\u3002 \u6700\u5927\u6587\u4ef6\u5927\u5c0f\uff1a{{maxFilesize}}MB","response_error":"\u670d\u52a1\u5668\u54cd\u5e94 {{statusCode}} \u4ee3\u7801","remove_file":"\u5220\u9664\u6587\u4ef6"},"inspector":{"add":"Add!","remove":"Remove!","key":"Key!","value":"Value!","ok":"OK!","cancel":"Cancel!","items":"Items!"}}
);


//! moment.js locale configuration v2.22.2

;(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined'
       && typeof require === 'function' ? factory(require('../moment')) :
   typeof define === 'function' && define.amd ? define(['../moment'], factory) :
   factory(global.moment)
}(this, (function (moment) { 'use strict';


    var zhCn = moment.defineLocale('zh-cn', {
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
            LLL : 'YYYY???M???D???Ah???mm???',
            LLLL : 'YYYY???M???D???ddddAh???mm???',
            l : 'YYYY/M/D',
            ll : 'YYYY???M???D???',
            lll : 'YYYY???M???D??? HH:mm',
            llll : 'YYYY???M???D???dddd HH:mm'
        },
        meridiemParse: /??????|??????|??????|??????|??????|??????/,
        meridiemHour: function (hour, meridiem) {
            if (hour === 12) {
                hour = 0;
            }
            if (meridiem === '??????' || meridiem === '??????' ||
                    meridiem === '??????') {
                return hour;
            } else if (meridiem === '??????' || meridiem === '??????') {
                return hour + 12;
            } else {
                // '??????'
                return hour >= 11 ? hour : hour + 12;
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
            sameDay : '[??????]LT',
            nextDay : '[??????]LT',
            nextWeek : '[???]ddddLT',
            lastDay : '[??????]LT',
            lastWeek : '[???]ddddLT',
            sameElse : 'L'
        },
        dayOfMonthOrdinalParse: /\d{1,2}(???|???|???)/,
        ordinal : function (number, period) {
            switch (period) {
                case 'd':
                case 'D':
                case 'DDD':
                    return number + '???';
                case 'M':
                    return number + '???';
                case 'w':
                case 'W':
                    return number + '???';
                default:
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
        },
        week : {
            // GB/T 7408-1994?????????????????????????????????????????????????????????????????????????ISO 8601:1988??????
            dow : 1, // Monday is the first day of the week.
            doy : 4  // The week that contains Jan 4th is the first week of the year.
        }
    });

    return zhCn;

})));


/*! Select2 4.1.0-rc.0 | https://github.com/select2/select2/blob/master/LICENSE.md */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/zh-cn",[],function(){return{errorLoading:function(){return"?????????????????????"},inputTooLong:function(n){return"?????????"+(n.input.length-n.maximum)+"?????????"},inputTooShort:function(n){return"??????????????????"+(n.minimum-n.input.length)+"?????????"},loadingMore:function(){return"?????????????????????"},maximumSelected:function(n){return"??????????????????"+n.maximum+"?????????"},noResults:function(){return"???????????????"},searching:function(){return"????????????"},removeAllItems:function(){return"??????????????????"}}}),n.define,n.require}();
