/*
 * This file has been compiled from: /modules/system/lang/lv/client.php
 */
if (!window.oc) {
    window.oc = {};
}

if (!window.oc.langMessages) {
    window.oc.langMessages = {};
}

window.oc.langMessages['lv'] = $.extend(
    window.oc.langMessages['lv'] || {},
    {"markdowneditor":{"formatting":"Formatting","quote":"Quote","code":"Code","header1":"Header 1","header2":"Header 2","header3":"Header 3","header4":"Header 4","header5":"Header 5","header6":"Header 6","bold":"Bold","italic":"Italic","unorderedlist":"Unordered List","orderedlist":"Ordered List","video":"Video","image":"Image","link":"Link","horizontalrule":"Insert Horizontal Rule","fullscreen":"Full screen","preview":"Preview"},"mediamanager":{"insert_link":"Insert Media Link","insert_image":"Insert Media Image","insert_video":"Insert Media Video","insert_audio":"Insert Media Audio","invalid_file_empty_insert":"Please select file to insert a links to.","invalid_file_single_insert":"Please select a single file.","invalid_image_empty_insert":"Please select image(s) to insert.","invalid_video_empty_insert":"Please select a video file to insert.","invalid_audio_empty_insert":"Please select an audio file to insert."},"alert":{"error":"Error","confirm":"Confirm","dismiss":"Dismiss","confirm_button_text":"OK","cancel_button_text":"Cancel","widget_remove_confirm":"Remove this widget?"},"datepicker":{"previousMonth":"Previous Month","nextMonth":"Next Month","months":["January","February","March","April","May","June","July","August","September","October","November","December"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},"colorpicker":{"choose":"Ok"},"filter":{"group":{"all":"all"},"scopes":{"apply_button_text":"Apply","clear_button_text":"Clear"},"dates":{"all":"all","filter_button_text":"Filter","reset_button_text":"Reset","date_placeholder":"Date","after_placeholder":"After","before_placeholder":"Before"},"numbers":{"all":"all","filter_button_text":"Filter","reset_button_text":"Reset","min_placeholder":"Min","max_placeholder":"Max"}},"eventlog":{"show_stacktrace":"Show the stacktrace","hide_stacktrace":"Hide the stacktrace","tabs":{"formatted":"Formatted","raw":"Raw"},"editor":{"title":"Source Code Editor","description":"Your operating system should be configured to listen to one of these URL schemes.","openWith":"Open with","remember_choice":"Remember selected option for this session","open":"Open","cancel":"Cancel"}},"upload":{"max_files":"You can not upload any more files.","invalid_file_type":"You can't upload files of this type.","file_too_big":"File is too big ({{filesize}}MB). Max filesize: {{maxFilesize}}MB.","response_error":"Server responded with {{statusCode}} code.","remove_file":"Remove file"},"inspector":{"add":"Add!","remove":"Remove!","key":"Key!","value":"Value!","ok":"OK!","cancel":"Cancel!","items":"Items!"}}
);


//! moment.js locale configuration v2.22.2

;(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined'
       && typeof require === 'function' ? factory(require('../moment')) :
   typeof define === 'function' && define.amd ? define(['../moment'], factory) :
   factory(global.moment)
}(this, (function (moment) { 'use strict';


    var units = {
        'ss': 'sekundes_sekund??m_sekunde_sekundes'.split('_'),
        'm': 'min??tes_min??t??m_min??te_min??tes'.split('_'),
        'mm': 'min??tes_min??t??m_min??te_min??tes'.split('_'),
        'h': 'stundas_stund??m_stunda_stundas'.split('_'),
        'hh': 'stundas_stund??m_stunda_stundas'.split('_'),
        'd': 'dienas_dien??m_diena_dienas'.split('_'),
        'dd': 'dienas_dien??m_diena_dienas'.split('_'),
        'M': 'm??ne??a_m??ne??iem_m??nesis_m??ne??i'.split('_'),
        'MM': 'm??ne??a_m??ne??iem_m??nesis_m??ne??i'.split('_'),
        'y': 'gada_gadiem_gads_gadi'.split('_'),
        'yy': 'gada_gadiem_gads_gadi'.split('_')
    };
    /**
     * @param withoutSuffix boolean true = a length of time; false = before/after a period of time.
     */
    function format(forms, number, withoutSuffix) {
        if (withoutSuffix) {
            // E.g. "21 min??te", "3 min??tes".
            return number % 10 === 1 && number % 100 !== 11 ? forms[2] : forms[3];
        } else {
            // E.g. "21 min??tes" as in "p??c 21 min??tes".
            // E.g. "3 min??t??m" as in "p??c 3 min??t??m".
            return number % 10 === 1 && number % 100 !== 11 ? forms[0] : forms[1];
        }
    }
    function relativeTimeWithPlural(number, withoutSuffix, key) {
        return number + ' ' + format(units[key], number, withoutSuffix);
    }
    function relativeTimeWithSingular(number, withoutSuffix, key) {
        return format(units[key], number, withoutSuffix);
    }
    function relativeSeconds(number, withoutSuffix) {
        return withoutSuffix ? 'da??as sekundes' : 'da????m sekund??m';
    }

    var lv = moment.defineLocale('lv', {
        months : 'janv??ris_febru??ris_marts_apr??lis_maijs_j??nijs_j??lijs_augusts_septembris_oktobris_novembris_decembris'.split('_'),
        monthsShort : 'jan_feb_mar_apr_mai_j??n_j??l_aug_sep_okt_nov_dec'.split('_'),
        weekdays : 'sv??tdiena_pirmdiena_otrdiena_tre??diena_ceturtdiena_piektdiena_sestdiena'.split('_'),
        weekdaysShort : 'Sv_P_O_T_C_Pk_S'.split('_'),
        weekdaysMin : 'Sv_P_O_T_C_Pk_S'.split('_'),
        weekdaysParseExact : true,
        longDateFormat : {
            LT : 'HH:mm',
            LTS : 'HH:mm:ss',
            L : 'DD.MM.YYYY.',
            LL : 'YYYY. [gada] D. MMMM',
            LLL : 'YYYY. [gada] D. MMMM, HH:mm',
            LLLL : 'YYYY. [gada] D. MMMM, dddd, HH:mm'
        },
        calendar : {
            sameDay : '[??odien pulksten] LT',
            nextDay : '[R??t pulksten] LT',
            nextWeek : 'dddd [pulksten] LT',
            lastDay : '[Vakar pulksten] LT',
            lastWeek : '[Pag??ju????] dddd [pulksten] LT',
            sameElse : 'L'
        },
        relativeTime : {
            future : 'p??c %s',
            past : 'pirms %s',
            s : relativeSeconds,
            ss : relativeTimeWithPlural,
            m : relativeTimeWithSingular,
            mm : relativeTimeWithPlural,
            h : relativeTimeWithSingular,
            hh : relativeTimeWithPlural,
            d : relativeTimeWithSingular,
            dd : relativeTimeWithPlural,
            M : relativeTimeWithSingular,
            MM : relativeTimeWithPlural,
            y : relativeTimeWithSingular,
            yy : relativeTimeWithPlural
        },
        dayOfMonthOrdinalParse: /\d{1,2}\./,
        ordinal : '%d.',
        week : {
            dow : 1, // Monday is the first day of the week.
            doy : 4  // The week that contains Jan 4th is the first week of the year.
        }
    });

    return lv;

})));


/*! Select2 4.1.0-rc.0 | https://github.com/select2/select2/blob/master/LICENSE.md */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var e=jQuery.fn.select2.amd;e.define("select2/i18n/lv",[],function(){function e(e,n,u,i){return 11===e?n:e%10==1?u:i}return{inputTooLong:function(n){var u=n.input.length-n.maximum,i="L??dzu ievadiet par  "+u;return(i+=" simbol"+e(u,"iem","u","iem"))+" maz??k"},inputTooShort:function(n){var u=n.minimum-n.input.length,i="L??dzu ievadiet v??l "+u;return i+=" simbol"+e(u,"us","u","us")},loadingMore:function(){return"Datu iel??de???"},maximumSelected:function(n){var u="J??s varat izv??l??ties ne vair??k k?? "+n.maximum;return u+=" element"+e(n.maximum,"us","u","us")},noResults:function(){return"Sakrit??bu nav"},searching:function(){return"Mekl????ana???"},removeAllItems:function(){return"No??emt visus vienumus"}}}),e.define,e.require}();
