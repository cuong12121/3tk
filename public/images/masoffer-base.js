function masOffer_getFromUrl(name, url) { // Lấy các param từ tracking link
    if (!url) url = location.href;
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(url);
    return results == null ? null : results[1];
}

function masOffer_getCookie(cname) { // Lấy nhận cookie
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return undefined;
}

function masOffer_setCookie(key, value, e) { // Ghi nhận, cài đặt thời gian lưu cookie
    var d = new Date();
    d.setTime(d.getTime() + (e * 24 * 60 * 60 * 1000));
    var ee = "expires=" + d.toUTCString();
    document.cookie = key + "=" + value + "; " + ee + "; path=/";
}

function masOffer_moTrack() { // Lấy giá trị cho cookie đến từ MasOffer

    //utm_source=masoffer&&traffic_id=masofferYKSHOe21UlpTiRGn0
    //utm_source=accesstrade&aff_sid=8Sd4SxmRm7QAqCYAsOqci0EGkkgenpdYKSHOe21UlpTiRGn0

    var refUrl = masOffer_getFromUrl("utm_source");

    //Last click
    if (refUrl == 'masoffer') {
        masOffer_setCookie("mo_network", refUrl, 30);

        var trafficIdUrl = masOffer_getFromUrl("traffic_id");
        console.log(trafficIdUrl);

        if (trafficIdUrl) {
            masOffer_setCookie("mo_traffic_id", trafficIdUrl, 30);
            return true;
        }

        //Remove accesstrade
        masOffer_setCookie("_aff_network", "", 0);
        masOffer_setCookie("_aff_sid", "", 0);
    }
    else if (refUrl == 'accesstrade') {

        //Remove masoffer
        masOffer_setCookie("mo_network", "", 0);
        masOffer_setCookie("mo_traffic_id", "", 0);

    }
    else if (refUrl !== 'masoffer' && refUrl !== 'accesstrade') {
        return false;
    }

    return false;
}

masOffer_moTrack();