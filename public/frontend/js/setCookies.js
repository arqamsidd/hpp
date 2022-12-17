
// Medium types
const GOOGLE = 'google'
const BING = 'bing'
const SOCIAL = 'social'
const EMAIL = 'email_sms'
const SMS = 'email_sms'
init();

function init(){
    setCookie();
    let scriptKey = getCookie('scriptKey');
    let medium = getCookie('medium');
    let sourceName = getCookie('source_name');
    let campaign = getCookie('campaign_name');
    let campaignId = getCookie('campaign_id');
    let keywords = getCookie('campaign_keywords');
    let device = getCookie('device');
    let adgroupid = getCookie('adgroupid');
    if(medium !== null){
       setForm(medium,sourceName,campaign,campaignId,keywords,device,adgroupid,scriptKey)
     }
}


function setCookie(){
    let url = new URL(window.location.href);
    let source = url.searchParams.get('source') || url.searchParams.get('utm_source') || ''
    let medium = url.searchParams.get('medium') || url.searchParams.get('utm_medium') || ''
    let campaignId = url.searchParams.get('campaignid') || url.searchParams.get('utm_id') ||''
    let campaign= url.searchParams.get('campaign') || url.searchParams.get('utm_campaign') || ''
    let keywords = url.searchParams.get('keyword') || url.searchParams.get('utm_term') || ''
    let device = url.searchParams.get('device') || ''
    let adgroupid = url.searchParams.get('adgroupid') || ''
    let gclid = url.searchParams.get('gclid') || ''
    let scriptKey='';

    const d = new Date();
    d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    if (medium || source) {
    scriptKey = btoa("halfpricepackaging");
        if (medium.toLowerCase().includes(GOOGLE) || source.toLowerCase().includes(GOOGLE))
            medium = GOOGLE
        if (medium.toLowerCase().includes(BING) || source.toLowerCase().includes(BING))
            medium = BING
        if (medium.toLowerCase().includes(SOCIAL) || source.toLowerCase().includes(SOCIAL))
            medium = SOCIAL
        if (medium.toLowerCase().includes(EMAIL) || source.toLowerCase().includes(EMAIL))
            medium = EMAIL
        if (medium.toLowerCase().includes(SMS) || source.toLowerCase().includes(SMS))
            medium = SMS

        document.cookie = `medium=${medium};${expires}`
        document.cookie = `scriptKey=${scriptKey}`
    }
    if(source)
        document.cookie = `source_name=${source};${expires}`
    if (campaign)
        document.cookie = `campaign_name=${campaign};${expires}`
    if (campaignId){
        document.cookie = `campaign_id=${campaignId};${expires}`
    }
    if (keywords)
        document.cookie = `campaign_keywords=${keywords};${expires}`
    if (device)
        document.cookie = `device=${device}`
    if (adgroupid)
        document.cookie = `adgroupid=${adgroupid}`
    if (gclid)
        document.cookie = `medium=google;${expires}`

}


function getCookie(name) {
    // Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");

    // Loop through the array elements
    for (var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");

        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if (name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return decodeURIComponent(cookiePair[1]);
        }
    }

    // Return null if not found
    return null;
}

function setForm(medium,sourceName,campaign,campaignId,keywords,device,adgroupid,scriptKey){
    let scriKey = document.getElementsByName('lb_script_key');
    scriKey.forEach((value,key)=>{
        value.value += scriptKey;
    })
    let med = document.getElementsByName('lb_medium');
    med.forEach((value,key)=>{
        value.value += medium;
    })
    let sour = document.getElementsByName('lb_source');
    sour.forEach((value,key)=>{
        value.value += sourceName;
    })
    let camp = document.getElementsByName('lb_camp');
    camp.forEach((value,key)=>{
        value.value += campaign;
    })
    let campId = document.getElementsByName('lb_camp_id');
    campId.forEach((value,key)=>{
        value.value += campaignId;
    })
    let key = document.getElementsByName('lb_camp_keywords');
    key.forEach((value,key)=>{
        value.value += keywords;
    })
    let dev = document.getElementsByName('lb_device');
    dev.forEach((value,key)=>{
        value.value += device;
    })
    let adgro = document.getElementsByName('lb_adgroupid');
    adgro.forEach((value,key)=>{
        value.value += adgroupid;
    })
}